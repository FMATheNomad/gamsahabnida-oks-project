from app import app
from models import db, Category, Product
from werkzeug.security import generate_password_hash


def seed():
    with app.app_context():
        db.drop_all()
        db.create_all()

        categories_data = [
            {'name': 'CD', 'slug': 'cd', 'icon': 'assets/kategori/CD.png', 'country': 'korea', 'country_icon': 'assets/icon/south-korea.png', 'sort_order': 1},
            {'name': 'DVD', 'slug': 'dvd', 'icon': 'assets/kategori/DVD.png', 'country': 'korea', 'country_icon': 'assets/icon/south-korea.png', 'sort_order': 2},
            {'name': 'KDrama', 'slug': 'kdrama', 'icon': 'assets/kategori/KDrama.png', 'country': 'korea', 'country_icon': 'assets/icon/south-korea.png', 'sort_order': 3},
            {'name': 'KIT Video', 'slug': 'kit-video', 'icon': 'assets/kategori/KIT Video.png', 'country': 'korea', 'country_icon': 'assets/icon/south-korea.png', 'sort_order': 4},
            {'name': 'Korean Beauty', 'slug': 'korean-beauty', 'icon': 'assets/kategori/Korean Beauty.png', 'country': 'korea', 'country_icon': 'assets/icon/south-korea.png', 'sort_order': 5},
            {'name': 'Korean Food', 'slug': 'korean-food', 'icon': 'assets/kategori/Korean Food.png', 'country': 'korea', 'country_icon': 'assets/icon/south-korea.png', 'sort_order': 6},
            {'name': 'Kpop Fashion', 'slug': 'kpop-fashion', 'icon': 'assets/kategori/Kpop Fashion.png', 'country': 'korea', 'country_icon': 'assets/icon/south-korea.png', 'sort_order': 7},
            {'name': 'Kpop Stuff', 'slug': 'kpop-stuff', 'icon': 'assets/kategori/Kpop Stuff.png', 'country': 'korea', 'country_icon': 'assets/icon/south-korea.png', 'sort_order': 8},
            {'name': 'LightStick', 'slug': 'lightstick', 'icon': 'assets/kategori/LightStick.png', 'country': 'korea', 'country_icon': 'assets/icon/south-korea.png', 'sort_order': 9},
            {'name': 'Official Merchandise', 'slug': 'official-merchandise', 'icon': 'assets/kategori/Official Merchandise.png', 'country': 'korea', 'country_icon': 'assets/icon/south-korea.png', 'sort_order': 10},
            {'name': 'Photobook & Magazine', 'slug': 'photobook-magazine', 'icon': 'assets/kategori/Photobook & Magazine.png', 'country': 'korea', 'country_icon': 'assets/icon/south-korea.png', 'sort_order': 11},
            {'name': 'Season Greetings', 'slug': 'season-greetings', 'icon': 'assets/kategori/Season Greetings.png', 'country': 'korea', 'country_icon': 'assets/icon/south-korea.png', 'sort_order': 12},
        ]

        for cat_data in categories_data:
            cat = Category(**cat_data)
            db.session.add(cat)

        db.session.commit()

        cd_category = Category.query.filter_by(slug='cd').first()
        dvd_category = Category.query.filter_by(slug='dvd').first()

        products_data = [
            {
                'name': 'MOON BIN & SAN HA (ASTRO) - 3RD MINI ALBUM [INCENSE] [PO]',
                'slug': 'moon-bin-san-ha-astro-3rd-mini-album-incense-po',
                'description': 'MOON BIN & SAN HA (ASTRO) - 3RD MINI ALBUM [INCENSE] Pre-Order. Includes CD, photobook, photocard, poster, and more.',
                'price': 220000,
                'image': 'assets/produk/produk1.jpeg',
                'category_id': cd_category.id,
                'is_new': True,
                'is_featured': True,
            },
            {
                'name': 'ATEEZ - 1ST SINGLE ALBUM [SPIN OFF : FROM THE WITNESS] (POCA ALBUM) [PO]',
                'slug': 'ateez-1st-single-album-spin-off-from-the-witness-poca-album-po',
                'description': 'ATEEZ - 1ST SINGLE ALBUM [SPIN OFF : FROM THE WITNESS] POCA ALBUM version. Pre-Order.',
                'price': 230000,
                'image': 'assets/produk/produk2.jpeg',
                'category_id': cd_category.id,
                'is_new': True,
                'is_featured': True,
            },
            {
                'name': 'ATEEZ - 1ST SINGLE ALBUM [SPIN OFF : FROM THE WITNESS] (WITNESS VER.) (LIMITED EDITION) [PO]',
                'slug': 'ateez-1st-single-album-spin-off-from-the-witness-witness-ver-limited-edition-po',
                'description': 'ATEEZ - 1ST SINGLE ALBUM [SPIN OFF : FROM THE WITNESS] WITNESS VERSION Limited Edition. Pre-Order.',
                'price': 320000,
                'image': 'assets/produk/produk3.jpeg',
                'category_id': cd_category.id,
                'is_new': True,
                'is_featured': True,
            },
            {
                'name': 'LOONA - THE ORIGIN ALBUM [0] [PO]',
                'slug': 'loona-the-origin-album-0-po',
                'description': 'LOONA - THE ORIGIN ALBUM [0] Pre-Order. Includes photobook, CD, poster, and random photocard.',
                'price': 355000,
                'image': 'assets/produk/produk4.jpeg',
                'category_id': cd_category.id,
                'is_new': True,
                'is_featured': True,
            },
            {
                'name': 'TOMORROW X TOGETHER (TXT) - ALBUM [CHAPTER OF THE NAME : TEMPTATION] [PO]',
                'slug': 'txt-album-chapter-of-the-name-temptation-po',
                'description': 'TOMORROW X TOGETHER (TXT) - THE NAME CHAPTER: TEMPTATION. Pre-Order.',
                'price': 315000,
                'image': 'assets/produk/produk5.jpeg',
                'category_id': cd_category.id,
                'is_new': True,
                'is_featured': True,
            },
            {
                'name': 'MONSTA X - 12TH MINI ALBUM [REASON] [PO]',
                'slug': 'monsta-x-12th-mini-album-reason-po',
                'description': 'MONSTA X - 12TH MINI ALBUM [REASON] Pre-Order. Comes with photobook, CD, photocard, sticker, and poster.',
                'price': 320000,
                'image': 'assets/produk/produk6.jpeg',
                'category_id': cd_category.id,
                'is_new': True,
                'is_featured': True,
            },
        ]

        for prod_data in products_data:
            product = Product(**prod_data)
            db.session.add(product)

        db.session.commit()

        print('Database seeded successfully!')
        print(f'  - {Category.query.count()} categories')
        print(f'  - {Product.query.count()} products')


if __name__ == '__main__':
    seed()
