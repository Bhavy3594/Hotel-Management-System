# 🗺️ Codebase Architecture & Scratch Map

## 🏗️ System Architecture Overview
The **Hotel Management System** is a Laravel 10 MVC application structured around a public frontend interface, form submission endpoints (Contact, Newsletter, Comments, Booking Inquiries), and Eloquent database models.

---

## 📂 File & Directory Mapping

### 🌐 Frontend Controllers (`app/Http/Controllers/frontend/`)
| Controller | Basename Link | Primary Responsibilities |
|------------|---------------|--------------------------|
| `HomeController` | [HomeController.php](file:///c:/laragon/www/hotel/hotel/app/Http/Controllers/frontend/HomeController.php) | Renders home landing page |
| `AboutController` | [AboutController.php](file:///c:/laragon/www/hotel/hotel/app/Http/Controllers/frontend/AboutController.php) | Renders about us page |
| `PropertiesController` | [PropertiesController.php](file:///c:/laragon/www/hotel/hotel/app/Http/Controllers/frontend/PropertiesController.php) | Renders rooms and properties catalog |
| `GalleryController` | [GalleryController.php](file:///c:/laragon/www/hotel/hotel/app/Http/Controllers/frontend/GalleryController.php) | Renders image/video gallery |
| `BlogController` | [BlogController.php](file:///c:/laragon/www/hotel/hotel/app/Http/Controllers/frontend/BlogController.php) | Renders blog post list |
| `BlogSingleController` | [BlogSingleController.php](file:///c:/laragon/www/hotel/hotel/app/Http/Controllers/frontend/BlogSingleController.php) | Renders individual blog post details |
| `ContactController` | [ContactController.php](file:///c:/laragon/www/hotel/hotel/app/Http/Controllers/frontend/ContactController.php) | Displays contact page & processes submissions |
| `NewsletterController`| [NewsletterController.php](file:///c:/laragon/www/hotel/hotel/app/Http/Controllers/frontend/NewsletterController.php) | Handles email newsletter subscriptions |
| `CommentController` | [CommentController.php](file:///c:/laragon/www/hotel/hotel/app/Http/Controllers/frontend/CommentController.php) | Processes blog post comments |

### 🛠️ Core Controllers (`app/Http/Controllers/`)
| Controller | Basename Link | Primary Responsibilities |
|------------|---------------|--------------------------|
| `BookingInquiryController` | [BookingInquiryController.php](file:///c:/laragon/www/hotel/hotel/app/Http/Controllers/BookingInquiryController.php) | Handles room availability inquiry submissions |

---

## 🗄️ Database Models & Migrations (`app/Models/` & `database/migrations/`)

| Model | Model File | Table Name | Migration File | Attributes / Fields |
|-------|------------|------------|----------------|---------------------|
| `User` | [User.php](file:///c:/laragon/www/hotel/hotel/app/Models/User.php) | `users` | `2014_10_12_000000_create_users_table.php` | name, email, password, email_verified_at |
| `Contact` | [Contact.php](file:///c:/laragon/www/hotel/hotel/app/Models/Contact.php) | `contacts` | `2026_01_25_041016_create_contacts_table.php` | name, email, subject, message |
| `Newsletter` | [Newsletter.php](file:///c:/laragon/www/hotel/hotel/app/Models/Newsletter.php) | `newsletters` | `2026_03_23_052431_create_newsletters_table.php` | email |
| `Comment` | [Comment.php](file:///c:/laragon/www/hotel/hotel/app/Models/Comment.php) | `comments` | `2026_03_23_055445_create_comments_table.php` | blog_id, name, email, message |
| `BookingInquiry` | [BookingInquiry.php](file:///c:/laragon/www/hotel/hotel/app/Models/BookingInquiry.php) | `booking_inquiries` | `2026_03_23_061634_create_booking_inquiries_table.php` | check_in, check_out, room_type, guests, name, email, phone, message |

---

## 🛣️ Route Architecture (`routes/web.php`)
- **GET** `/` -> `HomeController@index` (`home`)
- **GET** `/about` -> `AboutController@index` (`about`)
- **GET** `/properties` -> `PropertiesController@index` (`properties`)
- **GET** `/gallery` -> `GalleryController@index` (`gallery`)
- **GET** `/blog` -> `BlogController@index` (`blog`)
- **GET** `/blog-single` -> `BlogSingleController@index` (`blog.single`)
- **GET** `/contact` -> `ContactController@index` (`contact`)
- **POST** `/contact-submit` -> `ContactController@store` (`contact.submit`)
- **POST** `/newsletter-submit` -> `NewsletterController@store` (`newsletter.submit`)
- **POST** `/comment-submit` -> `CommentController@store` (`comment.submit`)
- **POST** `/check-availability` -> `BookingInquiryController@store` (`booking.submit`)

---

## 🎨 Views Structure (`resources/views/frontend/`)
- Header Layout: [header.blade.php](file:///c:/laragon/www/hotel/hotel/resources/views/frontend/layouts/header.blade.php)
- Footer Layout: [footer.blade.php](file:///c:/laragon/www/hotel/hotel/resources/views/frontend/layouts/footer.blade.php)
- Master Layout: [main.blade.php](file:///c:/laragon/www/hotel/hotel/resources/views/frontend/layouts/main.blade.php)
- Pages: `index.blade.php`, `about.blade.php`, `properties.blade.php`, `gallery.blade.php`, `blog.blade.php`, `blog-single.blade.php`, `contact.blade.php`.

---

## ⚡ Integration & Verification Command Map
- **Run Tests**: `php artisan test`
- **Run Migration Check**: `php artisan migrate:status`
- **Route List Check**: `php artisan route:list`
- **Ralph Loop Engine Hook**: Inspect `.gsd/STATE.md` -> Execute task -> Run `php artisan test` -> Update `.gsd/STATE.md`.
- **CodeRabbit AI Engine Hook**: Scan files using rules in `.coderabbit.yaml`.
