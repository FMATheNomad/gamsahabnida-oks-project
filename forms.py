from flask_wtf import FlaskForm
from wtforms import StringField, PasswordField, TextAreaField, IntegerField, SelectField, FileField, BooleanField
from wtforms.validators import DataRequired, Email, Length, EqualTo, Optional, NumberRange


class LoginForm(FlaskForm):
    email = StringField('Email', validators=[DataRequired(), Email()])
    password = PasswordField('Password', validators=[DataRequired()])
    remember = BooleanField('Ingat saya')


class RegisterForm(FlaskForm):
    name = StringField('Nama lengkap', validators=[DataRequired(), Length(min=3, max=100)])
    email = StringField('Email', validators=[DataRequired(), Email()])
    password = PasswordField('Password', validators=[DataRequired(), Length(min=6)])
    password_confirm = PasswordField('Ulangi password', validators=[DataRequired(), EqualTo('password')])
    phone = StringField('No. HP', validators=[DataRequired()])
    address = TextAreaField('Alamat lengkap', validators=[DataRequired()])


class ShippingForm(FlaskForm):
    name = StringField('Nama penerima', validators=[DataRequired()])
    phone = StringField('No. HP', validators=[DataRequired()])
    address = TextAreaField('Alamat lengkap', validators=[DataRequired()])
    city = StringField('Kota', validators=[DataRequired()])
    courier = SelectField('Kurir', choices=[
        ('jne', 'JNE'),
        ('tiki', 'TIKI'),
        ('sicepat', 'SiCepat'),
        ('jnt', 'J&T'),
    ], validators=[DataRequired()])
    note = TextAreaField('Catatan', validators=[Optional()])


class PaymentConfirmationForm(FlaskForm):
    payment_proof = FileField('Upload bukti pembayaran')
    payment_method = SelectField('Metode pembayaran', choices=[
        ('bri', 'BRI'),
        ('jago', 'Jago'),
        ('aladin', 'Aladin'),
        ('blu', 'Blu'),
    ], validators=[DataRequired()])


class ContactForm(FlaskForm):
    name = StringField('Nama', validators=[DataRequired()])
    email = StringField('Email', validators=[DataRequired(), Email()])
    message = TextAreaField('Pesan', validators=[DataRequired(), Length(min=10)])
