<?php

use Illuminate\Support\Facades\Route;

// Web Routes
Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('gallery');

Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

Route::get('/blog-details', function () {
    return view('pages.blog-details');
})->name('blog-details');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/Pricing', function () {
    return view('pages.pricing');
})->name('pricing');

Route::get('/privacy-policy', function () {
    return view('pages.privacy-policy');
})->name('privacy-policy');

Route::get('/terms-and-conditions', function () {
    return view('pages.terms-conditions');
})->name('terms-conditions');

Route::get('/products', function () {
    return view('pages.products');
})->name('products');

Route::get('/category/{slug}', function ($slug) {
    return view('pages.products', ['category' => $slug]);
})->name('category');

// privacy policy route
Route::get('/privacy-policy', function () {
    return view('pages.privacy-policy');
})->name('privacy-policy');

// terms and conditions route
Route::get('/terms-and-conditions', function () {
    return view('pages.terms-conditions');
})->name('terms-conditions');

Route::get('/projects/{slug}', function ($slug) {
    $projects = [
        'bookopa' => [
            'title' => 'Booking & Reservation Services',
            'name' => 'Bookopa',
            'image' => 'bookopa.png',
            'category' => 'Booking Services',
            'description' => 'Bookopa is a comprehensive booking and reservation platform designed to streamline appointments and service scheduling. It offers a seamless user experience for both service providers and customers, ensuring efficient management of time and resources.'
        ],
        'hopeexa' => [
            'title' => 'Charity Foundations',
            'name' => 'Hopeexa',
            'image' => 'hopeexa.png',
            'category' => 'Charity',
            'description' => 'Hopeexa is a dedicated platform for charity foundations, facilitating transparent donations and community engagement. It empowers organizations to reach more supporters and manage their impact effectively.'
        ],
        'martopa' => [
            'title' => 'E-Commerce',
            'name' => 'Martopa',
            'image' => 'martopa.png',
            'category' => 'E-Commerce',
            'description' => 'Martopa is a robust e-commerce solution providing a wide range of products with a focus on ease of use and secure transactions. It helps businesses scale their online presence and reach a global audience.'
        ],
        'sitvly' => [
            'title' => 'Real Estate Platforms',
            'name' => 'Sitvly',
            'image' => 'sitvly.png',
            'category' => 'Real Estate',
            'description' => 'Sitvly is a modern real estate platform that connects buyers, sellers, and agents. It features advanced search tools and high-quality listings to make the property search process simple and efficient.'
        ],
        'viewvvly' => [
            'title' => 'OTT (Over-The-Top) Platforms',
            'name' => 'Viewvly',
            'image' => 'vievvly.png',
            'category' => 'OTT Platform',
            'description' => 'Viewvly is a cutting-edge OTT platform delivering high-quality streaming content. It supports various media formats and provides a personalized viewing experience for users worldwide.'
        ],
    ];

    if (!array_key_exists($slug, $projects)) {
        abort(404);
    }

    return view('pages.project-details', ['project' => $projects[$slug]]);
})->name('project.details');


