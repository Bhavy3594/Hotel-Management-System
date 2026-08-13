# 🏨 Enterprise Hotel Management System

> **Full-Stack Web Portal for Hotel Room Reservation, Guest Check-In & Billing Operations**

A comprehensive web-based hotel management portal built with **Laravel**, **PHP**, and **Blade** templates. Designed to automate room bookings, manage customer check-ins/check-outs, handle room inventories, and streamline hotel administrative workflows.

---

## 📌 Overview

**Hotel Management System** provides hospitality businesses with a centralized digital portal to replace inefficient manual register entries. Built using the MVC paradigm in Laravel, the system serves both hotel guests and administration:
- **Guest Portal:** Browse room types, check real-time room availability, view amenities, submit online booking inquiries, and read hotel news/announcements.
- **Admin Dashboard:** Manage room inventory, track reservation schedules, review customer contact inquiries, process newsletter subscriptions, and oversee billing logs.

---

## ✨ Key Features

- 🛋️ **Room Catalog & Property Listings:** Dynamic room filtering by price, bed capacity, amenities, and image gallery showcase.
- 📅 **Reservation & Inquiry Engine:** Guest booking request interface (`BookingInquiryController.php`) with automated form validation.
- 👥 **Customer & Guest Management:** Centralized guest record repository for tracking contact details and stay histories.
- 📰 **Blog & Announcement Portal:** Content management for promotional offers, events, and local tourism guides.
- 📧 **Newsletter & Contact Workflow:** Integrated contact form processing and automated subscription management.
- 🔒 **Role-Based Authentication:** Secure middleware-driven route protection (`Authenticate.php`, `RedirectIfAuthenticated.php`).

---

## 🛠️ Tech Stack & Architecture

### **Technology Stack**
- **Backend Framework:** Laravel (PHP 8.x)
- **Frontend / Templating:** Laravel Blade, Custom CSS (`custom-luxury.css`), JavaScript
- **Database:** MySQL relational database (Eloquent ORM)
- **Authentication:** Laravel Built-in Session & Token Authentication (`Sanctum`)
- **Testing:** PHPUnit

### **Software Architecture**
The application implements standard **Model-View-Controller (MVC)** patterns:
```
[ Blade Views / HTML5 ]  <--->  [ Laravel HTTP Controllers ]  <--->  [ Eloquent Models / MySQL DB ]
```

---

## 📂 Project Structure

```
Hotel-Management-System/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── frontend/         # HomeController, PropertiesController, BookingInquiryController
│   │   │   └── Controller.php
│   │   └── Middleware/           # Authenticate, TrimStrings, TrustProxies
│   └── Models/                   # BookingInquiry, Comment, Contact, Newsletter, User
├── config/                       # Application, Database, Mail, and Session configs
├── database/
│   ├── migrations/               # Database tables for contacts, newsletters, inquiries
│   └── seeders/                  # Database data seeders
├── public/                       # Assets (CSS, JS, Luxury Image Gallery)
├── resources/
│   └── views/                    # Blade template layouts
├── routes/                       # Web & API route definitions
├── storage/                      # System logs and file uploads
├── .env.example
├── composer.json
└── README.md
```

---

## 🚀 Installation & Local Development

### Prerequisites
- PHP >= 8.1
- Composer
- MySQL Server
- Node.js & NPM (optional, for asset bundling)

### Setup Steps
1. **Clone the repository:**
   ```bash
   git clone https://github.com/Bhavy3594/Hotel-Management-System.git
   cd Hotel-Management-System
   ```
2. **Install PHP Dependencies:**
   ```bash
   composer install
   ```
3. **Configure Environment Variables:**
   ```bash
   cp .env.example .env
   ```
   *Edit `.env` and set your local MySQL credentials:*
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=hotel_management
   DB_USERNAME=root
   DB_PASSWORD=your_mysql_password
   ```
4. **Generate Application Key:**
   ```bash
   php artisan key:generate
   ```
5. **Run Database Migrations & Seeders:**
   ```bash
   php artisan migrate --seed
   ```
6. **Launch Development Server:**
   ```bash
   php artisan serve
   ```
   Access the web app at `http://127.0.0.1:8000`.

---

## 📄 License

This project is open-source software licensed under the **MIT License** — see the [LICENSE](LICENSE) file.
