<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\GalleryController;
use App\Http\Controllers\frontend\PropertiesController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\BlogSingleController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\NewsletterController;
use App\Http\Controllers\frontend\CommentController;
use App\Http\Controllers\BookingInquiryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Pages
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/properties', [PropertiesController::class, 'index'])->name('properties');
Route::get('/property-single', [PropertiesController::class, 'show'])->name('properties.single');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog-single', [BlogSingleController::class, 'index'])->name('blog.single');

// Contact page
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// 🔴 MOST IMPORTANT: Contact form submit
Route::post('/contact-submit', [ContactController::class, 'store'])
    ->name('contact.submit');

// Newsletter subscription
Route::post('/newsletter-submit', [NewsletterController::class, 'store'])
    ->name('newsletter.submit');

// Blog comment submit
Route::post('/comment-submit', [CommentController::class, 'store'])
    ->name('comment.submit');

// Booking Inquiry submit
Route::post('/check-availability', [BookingInquiryController::class, 'store'])
    ->name('booking.submit');
