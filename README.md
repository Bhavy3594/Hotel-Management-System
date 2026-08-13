# 🏨 Hotel Management System Portal

A full-stack web application developed with **PHP**, **Laravel Framework**, and **Blade Templating** for streamlining hotel room reservations, guest check-in/check-out processes, and billing administration.

## ✨ Core Functionalities
- 🛏️ **Room Allocation & Inventory:** Track room availability, suites, and pricing tiers in real-time.
- 📅 **Reservation Engine:** Seamless booking workflow for customers and front-desk receptionists.
- 🧾 **Billing & Invoicing:** Automated calculation of stay durations, service charges, and receipts.
- 🛡️ **Admin Control Panel:** Dashboard for revenue metrics, guest records, and staff schedules.

## 🛠️ Tech Stack
- **Framework:** Laravel (PHP)
- **Frontend:** Blade Templates, HTML5, CSS3, JavaScript
- **Database:** MySQL

## 🚀 Setup Instructions

1. Clone the repository:
   ```bash
   git clone https://github.com/Bhavy3594/Hotel-Management-System.git
   ```
2. Install PHP dependencies:
   ```bash
   composer install
   ```
3. Configure environment file:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. Run database migrations:
   ```bash
   php artisan migrate --seed
   ```
5. Launch development server:
   ```bash
   php artisan serve
   ```

---
<sub>Maintained by [Bhavy3594](https://github.com/Bhavy3594)</sub>
