# Gamsahabnida! Online Merch Store

[![Python](https://img.shields.io/badge/Python-3.10%2B-blue)](https://python.org)
[![Flask](https://img.shields.io/badge/Flask-3.1-blue)](https://flask.palletsprojects.com)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-purple)](https://getbootstrap.com)

**Gamsahabnida! Online Merch Store** is a trading company that focuses on selling merchandise from creative industry enthusiasts from various countries. Here, you can purchase merchandise such as music albums and other items such as, for example, the latest album from Blackpink, NIKI, and the anime Blu-ray Attack on Titan, all in one place!

## Tech Stack

| Layer | Technology |
|---|---|
| **Backend** | Python Flask + SQLAlchemy + Flask-Login + WTForms |
| **Frontend** | Bootstrap 5.3, FontAwesome 6, Vanilla JavaScript |
| **Database** | SQLite (development) |
| **Template** | Jinja2 with partials/components |

## Features

- **User Authentication** — Register, login, logout with password hashing
- **Product Catalog** — Categories by country (Korea, Japan, Indonesia, USA), product filtering & search
- **Shopping Cart** — Add/update/remove items via AJAX, live total calculation
- **Checkout Flow** — Shipping form → payment confirmation → order tracking
- **Notifications** — Real-time notification system for orders
- **Live Search** — Debounced AJAX search with dropdown results
- **Responsive Design** — Mobile-first with Bootstrap 5.3

## Pages

| Route | Page |
|---|---|
| `/` | Landing page with categories & featured products |
| `/products` | Full product catalog with filters |
| `/product/<slug>` | Product detail |
| `/cart` | Shopping cart |
| `/checkout/shipping` | Shipping information form |
| `/checkout/payment` | Payment confirmation |
| `/order/<id>/waiting` | Order status tracking |
| `/notification` | User notifications |
| `/contact` | Contact form |
| `/login` | User login |
| `/register` | User registration |

## Quick Start

```bash
# 1. Clone & enter
git clone https://github.com/FMATheNomad/gamsahabnida-oks-project.git
cd gamsahabnida-oks-project

# 2. Setup virtual environment
python3 -m venv venv
source venv/bin/activate  # Linux/Mac
# venv\Scripts\activate   # Windows

# 3. Install dependencies
pip install -r requirements.txt

# 4. Seed database (first time only)
python seed.py

# 5. Run the app
python app.py
```

Open **http://127.0.0.1:5000** in your browser.

> **Note:** Set `PORT` environment variable to change port (default: 5000).  
> Set `FLASK_DEBUG=0` to disable debug mode.

## Project Structure

```
.
├── app.py              # Flask application & routes
├── config.py           # Configuration
├── models.py           # SQLAlchemy models
├── forms.py            # WTForms definitions
├── seed.py             # Database seeder
├── requirements.txt    # Python dependencies
├── static/
│   ├── assets/         # Images, icons, logos
│   ├── css/style.css   # Custom styles
│   └── js/main.js      # Interactive JavaScript
└── templates/
    ├── base.html       # Base layout (navbar, footer)
    ├── partials/       # Reusable components
    ├── auth/           # Login & register
    └── ...             # Page templates
```

## License

© 2022-2026 Gamsahabnida! Online Merch Store. All rights reserved.
