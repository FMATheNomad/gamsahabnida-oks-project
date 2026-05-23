import os
import uuid
from datetime import datetime

from flask import (
    Flask, render_template, redirect, url_for, request,
    flash, jsonify, abort, session
)
from flask_login import (
    LoginManager, login_user, logout_user, login_required, current_user
)
from werkzeug.utils import secure_filename

from config import Config
from models import db, User, Category, Product, Cart, CartItem, Order, OrderItem, Notification
from forms import (
    LoginForm, RegisterForm, ShippingForm, PaymentConfirmationForm, ContactForm
)

app = Flask(__name__)
app.config.from_object(Config)

db.init_app(app)

login_manager = LoginManager()
login_manager.init_app(app)
login_manager.login_view = 'login'
login_manager.login_message = 'Silakan login terlebih dahulu.'
login_manager.login_message_category = 'warning'


@login_manager.user_loader
def load_user(user_id):
    return db.session.get(User, int(user_id))


def get_or_create_cart():
    if current_user.is_authenticated:
        cart = Cart.query.filter_by(user_id=current_user.id).first()
        if not cart:
            cart = Cart(user_id=current_user.id)
            db.session.add(cart)
            db.session.commit()
        return cart
    session_id = session.get('session_id')
    if not session_id:
        session_id = str(uuid.uuid4())
        session['session_id'] = session_id
    cart = Cart.query.filter_by(session_id=session_id).first()
    if not cart:
        cart = Cart(session_id=session_id)
        db.session.add(cart)
        db.session.commit()
    return cart


def get_country_icon(country):
    icons = {
        'korea': 'assets/icon/south-korea.png',
        'japan': 'assets/icon/japan.png',
        'indonesia': 'assets/icon/indonesia.png',
        'usa': 'assets/icon/united-states-of-america.png',
    }
    return icons.get(country, '')


@app.context_processor
def inject_globals():
    cart = get_or_create_cart()
    unread_notifications = 0
    if current_user.is_authenticated:
        unread_notifications = Notification.query.filter_by(
            user_id=current_user.id, is_read=False
        ).count()
    return {
        'cart_count': cart.total_items,
        'unread_notifications': unread_notifications,
        'now': datetime.now(),
    }


@app.route('/')
def index():
    categories = Category.query.order_by(Category.sort_order).all()
    featured_products = Product.query.filter_by(is_featured=True, is_active=True).limit(12).all()
    new_products = Product.query.filter_by(is_new=True, is_active=True).limit(6).all()
    return render_template(
        'index.html',
        categories=categories,
        featured_products=featured_products,
        new_products=new_products,
        get_country_icon=get_country_icon,
    )


@app.route('/products')
def products():
    category_slug = request.args.get('category')
    country = request.args.get('country')
    search = request.args.get('q')

    query = Product.query.filter_by(is_active=True)

    if category_slug:
        category = Category.query.filter_by(slug=category_slug).first()
        if category:
            query = query.filter_by(category_id=category.id)

    if country:
        cat_ids = [c.id for c in Category.query.filter_by(country=country).all()]
        if cat_ids:
            query = query.filter(Product.category_id.in_(cat_ids))

    if search:
        query = query.filter(Product.name.ilike(f'%{search}%'))

    products = query.order_by(Product.created_at.desc()).all()
    categories = Category.query.order_by(Category.sort_order).all()

    return render_template(
        'products.html',
        products=products,
        categories=categories,
        active_category=category_slug,
        active_country=country,
        search_query=search,
        get_country_icon=get_country_icon,
    )


@app.route('/product/<slug>')
def product_detail(slug):
    product = Product.query.filter_by(slug=slug, is_active=True).first_or_404()
    related = Product.query.filter(
        Product.category_id == product.category_id,
        Product.id != product.id,
        Product.is_active == True
    ).limit(4).all()
    return render_template('product_detail.html', product=product, related=related)


@app.route('/cart')
def cart():
    cart = get_or_create_cart()
    return render_template('cart.html', cart=cart)


@app.route('/cart/add', methods=['POST'])
def cart_add():
    product_id = request.form.get('product_id', type=int)
    quantity = request.form.get('quantity', 1, type=int)

    product = db.session.get(Product, product_id)
    if not product or not product.is_active:
        flash('Produk tidak ditemukan.', 'danger')
        return redirect(url_for('products'))

    if quantity < 1:
        quantity = 1

    cart = get_or_create_cart()
    existing = CartItem.query.filter_by(cart_id=cart.id, product_id=product_id).first()

    if existing:
        existing.quantity += quantity
    else:
        item = CartItem(cart_id=cart.id, product_id=product_id, quantity=quantity)
        db.session.add(item)

    db.session.commit()

    if request.headers.get('X-Requested-With') == 'XMLHttpRequest':
        return jsonify({
            'success': True,
            'cart_count': cart.total_items,
            'message': f'{product.name} ditambahkan ke keranjang.',
        })

    flash(f'{product.name} ditambahkan ke keranjang.', 'success')
    return redirect(url_for('cart'))


@app.route('/cart/update', methods=['POST'])
def cart_update():
    item_id = request.form.get('item_id', type=int)
    quantity = request.form.get('quantity', 1, type=int)

    item = db.session.get(CartItem, item_id)
    if not item:
        return jsonify({'success': False, 'message': 'Item tidak ditemukan.'}), 404

    if quantity < 1:
        db.session.delete(item)
    else:
        item.quantity = quantity

    db.session.commit()

    cart = get_or_create_cart()
    return jsonify({
        'success': True,
        'cart_count': cart.total_items,
        'total_price': cart.total_price,
    })


@app.route('/cart/remove/<int:item_id>', methods=['POST'])
def cart_remove(item_id):
    item = db.session.get(CartItem, item_id)
    if item:
        db.session.delete(item)
        db.session.commit()

    cart = get_or_create_cart()
    if request.headers.get('X-Requested-With') == 'XMLHttpRequest':
        return jsonify({
            'success': True,
            'cart_count': cart.total_items,
            'total_price': cart.total_price,
        })

    flash('Item dihapus dari keranjang.', 'success')
    return redirect(url_for('cart'))


@app.route('/checkout/shipping', methods=['GET', 'POST'])
def shipping():
    cart = get_or_create_cart()
    if cart.total_items == 0:
        flash('Keranjang belanja Anda kosong.', 'warning')
        return redirect(url_for('cart'))

    form = ShippingForm()
    if current_user.is_authenticated:
        form.name.data = current_user.name
        form.phone.data = current_user.phone
        form.address.data = current_user.address

    if form.validate_on_submit():
        session['shipping'] = {
            'name': form.name.data,
            'phone': form.phone.data,
            'address': form.address.data,
            'city': form.city.data,
            'courier': form.courier.data,
            'note': form.note.data,
        }
        return redirect(url_for('payment_confirmation'))

    return render_template('shipping.html', form=form, cart=cart)


@app.route('/checkout/payment', methods=['GET', 'POST'])
def payment_confirmation():
    cart = get_or_create_cart()
    if cart.total_items == 0:
        flash('Keranjang belanja Anda kosong.', 'warning')
        return redirect(url_for('cart'))

    shipping_data = session.get('shipping')
    if not shipping_data:
        flash('Silakan isi data pengiriman terlebih dahulu.', 'warning')
        return redirect(url_for('shipping'))

    form = PaymentConfirmationForm()

    if form.validate_on_submit():
        if not current_user.is_authenticated:
            flash('Silakan login untuk melanjutkan pembayaran.', 'warning')
            return redirect(url_for('login'))

        shipping_cost = 15000 if cart.total_price < 500000 else 0
        service_fee = 5000
        subtotal = cart.total_price
        total = subtotal + shipping_cost + service_fee

        order_number = f'ORD-{datetime.now().strftime("%Y%m%d%H%M%S")}-{current_user.id}'
        order = Order(
            order_number=order_number,
            user_id=current_user.id,
            status='pending',
            total_price=total,
            shipping_cost=shipping_cost,
            service_fee=service_fee,
            subtotal=subtotal,
            shipping_name=shipping_data['name'],
            shipping_phone=shipping_data['phone'],
            shipping_address=shipping_data['address'],
            shipping_city=shipping_data['city'],
            shipping_courier=shipping_data['courier'],
            shipping_note=shipping_data.get('note', ''),
            payment_method=form.payment_method.data,
        )
        db.session.add(order)

        for item in cart.items:
            order_item = OrderItem(
                order_id=order.id,
                product_id=item.product_id,
                product_name=item.product.name,
                price=item.product.price,
                quantity=item.quantity,
            )
            db.session.add(order_item)

        notification = Notification(
            user_id=current_user.id,
            title='Pesanan Dibuat',
            message=f'Pesanan #{order_number} berhasil dibuat. Silakan lakukan pembayaran.',
        )
        db.session.add(notification)

        for item in list(cart.items):
            db.session.delete(item)
        db.session.commit()

        session.pop('shipping', None)
        flash('Pesanan berhasil dibuat! Silakan lakukan pembayaran.', 'success')
        return redirect(url_for('waiting_payment', order_id=order.id))

    shipping_cost = 15000 if cart.total_price < 500000 else 0
    service_fee = 5000

    return render_template(
        'payment_confirmation.html',
        form=form,
        cart=cart,
        shipping=shipping_data,
        shipping_cost=shipping_cost,
        service_fee=service_fee,
        subtotal=cart.total_price,
        total=cart.total_price + shipping_cost + service_fee,
    )


@app.route('/order/<int:order_id>/waiting')
def waiting_payment(order_id):
    if not current_user.is_authenticated:
        return redirect(url_for('login'))
    order = Order.query.filter_by(id=order_id, user_id=current_user.id).first_or_404()
    return render_template('waiting_payment.html', order=order)


@app.route('/notification')
def notification():
    if not current_user.is_authenticated:
        flash('Silakan login untuk melihat notifikasi.', 'warning')
        return redirect(url_for('login'))

    notifs = Notification.query.filter_by(user_id=current_user.id)\
        .order_by(Notification.created_at.desc()).all()
    return render_template('notification.html', notifications=notifs)


@app.route('/notification/read/<int:id>')
def notification_read(id):
    notif = db.session.get(Notification, id)
    if notif and current_user.is_authenticated and notif.user_id == current_user.id:
        notif.is_read = True
        db.session.commit()
    return redirect(url_for('notification'))


@app.route('/contact', methods=['GET', 'POST'])
def contact():
    form = ContactForm()
    if form.validate_on_submit():
        flash('Pesan Anda telah kami terima. Kami akan menghubungi Anda segera.', 'success')
        return redirect(url_for('contact'))
    return render_template('contact.html', form=form)


@app.route('/login', methods=['GET', 'POST'])
def login():
    if current_user.is_authenticated:
        return redirect(url_for('index'))

    form = LoginForm()
    if form.validate_on_submit():
        user = User.query.filter_by(email=form.email.data).first()
        if user and user.check_password(form.password.data):
            login_user(user, remember=form.remember.data)
            next_page = request.args.get('next')
            flash('Login berhasil! Selamat datang kembali.', 'success')
            return redirect(next_page or url_for('index'))
        flash('Email atau password salah.', 'danger')

    return render_template('auth/login.html', form=form)


@app.route('/register', methods=['GET', 'POST'])
def register():
    if current_user.is_authenticated:
        return redirect(url_for('index'))

    form = RegisterForm()
    if form.validate_on_submit():
        if User.query.filter_by(email=form.email.data).first():
            flash('Email sudah terdaftar.', 'danger')
            return render_template('auth/register.html', form=form)

        user = User(
            name=form.name.data,
            email=form.email.data,
            phone=form.phone.data,
            address=form.address.data,
        )
        user.set_password(form.password.data)
        db.session.add(user)

        notification = Notification(
            user_id=user.id,
            title='Selamat Datang!',
            message=f'Selamat bergabung di Gamsahabnida! Nikmati pengalaman berbelanja merchandise K-Pop terbaik.',
        )
        db.session.add(notification)
        db.session.commit()

        login_user(user)
        flash('Registrasi berhasil! Selamat bergabung.', 'success')
        return redirect(url_for('index'))

    return render_template('auth/register.html', form=form)


@app.route('/logout')
@login_required
def logout():
    logout_user()
    flash('Anda telah logout.', 'info')
    return redirect(url_for('index'))


@app.route('/api/products/search')
def api_products_search():
    q = request.args.get('q', '')
    if not q or len(q) < 2:
        return jsonify([])
    products = Product.query.filter(
        Product.name.ilike(f'%{q}%'),
        Product.is_active == True
    ).limit(10).all()
    return jsonify([{
        'id': p.id,
        'name': p.name,
        'price': p.price_formatted(),
        'image': url_for('static', filename=p.image) if p.image else '',
        'url': url_for('product_detail', slug=p.slug),
    } for p in products])


if __name__ == '__main__':
    port = int(os.environ.get('PORT', 5000))
    debug = os.environ.get('FLASK_DEBUG', '1') == '1'
    app.run(debug=debug, port=port)
