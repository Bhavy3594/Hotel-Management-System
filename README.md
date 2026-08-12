<p align="center">
  <h1 align="center">🏨 Hotel Management System (Hotel ABC)</h1>
  <p align="center">
    <strong>A Luxury Hotel Booking, Property Showcase & Inquiry Management System</strong>
  </p>
  <p align="center">
    Built with Laravel 10 • HTML5 & CSS3 • Custom Luxury UI Engine
  </p>
</p>

---

## 📌 Table of Contents

- [Overview](#-overview)
- [Key Features](#-key-features)
- [Project Architecture & Structure](#-project-architecture--structure)
- [Tech Stack](#-tech-stack)
- [Installation & Setup Guide](#-installation--setup-guide)
- [Automated Testing](#-automated-testing)
- [Documentation & Assets](#-documentation--assets)
- [License & Author](#-license--author)

---

## 🌟 Overview

**Hotel Management System (Hotel ABC)** is a full-featured, elegant web platform designed for luxury hotels, resorts, and hospitality providers. It delivers a high-performance guest experience for exploring room offerings, submitting booking inquiries, reading hotel blogs, and contacting support seamlessly.

---

## ✨ Key Features

- 🛋️ **Luxury Room & Property Showcase**: Interactive catalog featuring room types, pricing, capacity details, and amenities.
- 📅 **Real-Time Booking Inquiries**: Instant availability inquiry form (`/check-availability`) saving booking requests to the database.
- 📬 **Interactive Contact Form**: Direct guest inquiries (`/contact-submit`) with server-side validation and database persistence.
- 📰 **Blog & Community Insights**: Article showcase with reader comment functionality (`/comment-submit`).
- 📧 **Newsletter Subscription**: One-click newsletter signup (`/newsletter-submit`) for staying updated with hotel offers.
- 💎 **5-Star Luxury UI/UX Engine**: Clean typography with Google Fonts (*Playfair Display* & *Plus Jakarta Sans*), glassmorphism design elements, smooth hover states, and complete mobile responsiveness.
- ⚡ **Master Layout Architecture**: Refactored modular Blade views (`main.blade.php`, `header.blade.php`, `footer.blade.php`) eliminating duplicate header/footer markup.

---

## 📂 Project Architecture & Structure

```text
hotel/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── BookingInquiryController.php
│   │       ├── Controller.php
│   │       └── frontend/
│   │           ├── AboutController.php
│   │           ├── BlogController.php
│   │           ├── BlogSingleController.php
│   │           ├── CommentController.php
│   │           ├── ContactController.php
│   │           ├── GalleryController.php
│   │           ├── HomeController.php
│   │           ├── NewsletterController.php
│   │           └── PropertiesController.php
│   └── Models/
│       ├── BookingInquiry.php
│       ├── Comment.php
│       ├── Contact.php
│       ├── Newsletter.php
│       └── User.php
├── config/                  # Framework configurations
├── database/                # Database migrations, factories & seeders
│   └── migrations/
├── docs/                    # Project documentation & presentation assets
│   ├── Hotel ABC – Hotel Management System Using Laravel.pptx
│   ├── Hotel-ABC-Documentation.doc
│   └── images/
│       └── preview.png
├── public/                  # Assets, JS libraries, and uploaded images
│   └── css/
│       └── custom-luxury.css # Primary luxury design system stylesheet
├── resources/
│   └── views/
│       ├── components/
│       ├── frontend/        # Page views (home, about, rooms, blog, contact)
│       └── layouts/         # Master layouts (main, header, footer)
├── routes/
│   └── web.php              # Application web routes & POST endpoints
├── tests/
│   └── Feature/
│       └── HotelFormSubmissionsTest.php # Comprehensive endpoint feature tests
├── .coderabbit.yaml         # AI Code Review configuration
├── .editorconfig
├── .env.example
├── .gitignore
├── composer.json            # PHP dependencies & Laravel framework specifications
├── package.json             # Frontend packages & Vite builder configuration
├── phpunit.xml              # Test runner configuration (SQLite in-memory)
└── README.md                # Project documentation
```

---

## 🛠️ Tech Stack

- **Backend Framework**: Laravel `^10.50` (PHP `^8.1`)
- **Frontend Template Engine**: Laravel Blade
- **Styling**: Vanilla CSS3 Custom Variables, Bootstrap 5, Custom Luxury CSS Engine
- **Database**: MySQL / SQLite
- **Testing Framework**: PHPUnit `^10.1`

---

## 🚀 Installation & Setup Guide

### Prerequisites
- PHP `>= 8.1`
- Composer `>= 2.0`
- Node.js `>= 18.0` & npm
- MySQL / SQLite Database Server

### Step-by-Step Installation

1. **Clone the Repository**
   ```bash
   git clone https://github.com/Bhavy3594/Hotel-Management-System.git
   cd Hotel-Management-System
   ```

2. **Install PHP Dependencies**
   ```bash
   composer install
   ```

3. **Configure Environment File**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Set Up Database**
   Configure your database credentials in the `.env` file:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=hotel_db
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. **Run Migrations**
   ```bash
   php artisan migrate
   ```

6. **Start the Development Server**
   ```bash
   php artisan serve
   ```
   Visit `http://127.0.0.1:8000` in your web browser.

---

## 🧪 Automated Testing

The project includes unit and feature test coverage for all primary user interaction endpoints (`/contact-submit`, `/check-availability`, `/newsletter-submit`, `/comment-submit`).

To execute the test suite:

```bash
php artisan test
```

**Test Results:**
```text
  PASS  Tests\Unit\ExampleTest
  ✓ that true is true

  PASS  Tests\Feature\ExampleTest
  ✓ the application returns a successful response

  PASS  Tests\Feature\HotelFormSubmissionsTest
  ✓ homepage and all pages load successfully
  ✓ contact page loads and accepts submission
  ✓ newsletter subscription works
  ✓ booking inquiry submission works
  ✓ blog comment submission works

  Tests: 7 passed (23 assertions)
```

---

## 📄 Documentation & Assets

Comprehensive project documentation and presentation files are organized in the [`docs/`](file:///c:/laragon/www/hotel/hotel/docs) directory:
- **Presentation Deck**: `docs/Hotel ABC – Hotel Management System Using Laravel.pptx`
- **System Documentation**: `docs/Hotel-ABC-Documentation.doc`
- **System Screenshots**: `docs/images/preview.png`

---

## 👤 Author & License

- **Author**: [Bhavya](https://github.com/Bhavy3594)
- **GitHub**: [@Bhavy3594](https://github.com/Bhavy3594)
- **License**: Open-sourced software under the [MIT License](LICENSE).
