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

Route::get('/services-details', function () {
    return view('pages.services-details');
})->name('services-details');

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
    $products = [
        // Skincare
        ['name' => 'Herbal Massage Soap', 'price' => '$24.99', 'img' => 'products/pic-8.jpg', 'category' => 'skincare'],
        ['name' => 'Aromatherapy Massage Oil', 'price' => '$39.99', 'img' => 'products/pic-9.jpg', 'category' => 'skincare'],
        ['name' => 'Ordinary 1', 'price' => '$15.99', 'img' => 'brandProduct/ordinary/ordinary1.png', 'category' => 'skincare'],
        ['name' => 'CeraVe Hydrating Serum', 'price' => '$25.99', 'img' => 'brandProduct/cerave/ceraveHydratingAcideSerum.png', 'category' => 'skincare'],
        ['name' => 'Cetaphil Baby Oil', 'price' => '$14.99', 'img' => 'brandProduct/cetaphil/cataphilBabyOil.png', 'category' => 'skincare'],
        ['name' => 'Advanced Skincare Serum', 'price' => '$29.99', 'img' => 'product/skincareSerum/one.jpg', 'category' => 'skincare'],
        ['name' => 'Hyaluronic Acid Serum', 'price' => '$27.50', 'img' => 'product/skincareSerum/two.png', 'category' => 'skincare'],
        ['name' => 'Vitamin C Glow Serum', 'price' => '$32.00', 'img' => 'product/skincareSerum/three.png', 'category' => 'skincare'],
        ['name' => 'Retinol Night Treatment', 'price' => '$35.99', 'img' => 'product/skincareSerum/four.png', 'category' => 'skincare'],
        ['name' => 'Pore Refining Toner', 'price' => '$22.00', 'img' => 'product/skincareSerum/five.png', 'category' => 'skincare'],
        ['name' => 'Deep Hydration Cream', 'price' => '$38.50', 'img' => 'product/skincareSerum/six.png', 'category' => 'skincare'],
        
        // Makeup
        ['name' => 'Flawless Glow Foundation', 'price' => '$49.99', 'img' => 'product/mackupProduct/1.png', 'category' => 'makeup'],
        ['name' => 'Velvet Matte Lipstick', 'price' => '$24.50', 'img' => 'product/mackupProduct/2.png', 'category' => 'makeup'],
        ['name' => 'Longwear Eyeliner', 'price' => '$18.99', 'img' => 'product/mackupProduct/3.png', 'category' => 'makeup'],
        ['name' => 'Professional Brush Set', 'price' => '$34.99', 'img' => 'product/mackupProduct/4.png', 'category' => 'makeup'],
        ['name' => 'Radiant Finishing Powder', 'price' => '$29.99', 'img' => 'product/mackupProduct/5.png', 'category' => 'makeup'],
        ['name' => 'Shimmer Eyeshadow Palette', 'price' => '$42.00', 'img' => 'product/mackupProduct/6.png', 'category' => 'makeup'],

        // Supplements
        ['name' => 'Vitamin C Booster', 'price' => '$19.99', 'img' => 'product/supplementProduct/1.png', 'category' => 'supplements'],
        ['name' => 'Daily Multivitamin', 'price' => '$22.50', 'img' => 'product/supplementProduct/2.png', 'category' => 'supplements'],
        ['name' => 'Omega-3 Fish Oil', 'price' => '$25.99', 'img' => 'product/supplementProduct/3.png', 'category' => 'supplements'],
        ['name' => 'Herbal Energy Boost', 'price' => '$28.00', 'img' => 'product/supplementProduct/4.png', 'category' => 'supplements'],
        ['name' => 'Collagen Peptides', 'price' => '$32.99', 'img' => 'product/supplementProduct/5.png', 'category' => 'supplements'],
        ['name' => 'Magnesium Relaxation', 'price' => '$21.50', 'img' => 'product/supplementProduct/6.png', 'category' => 'supplements'],

        // Bodycare
        ['name' => 'Hydrating Body Lotion', 'price' => '$22.99', 'img' => 'product/bodycare/1.png', 'category' => 'bodycare'],
        ['name' => 'Gentle Body Wash', 'price' => '$16.50', 'img' => 'product/bodycare/2.png', 'category' => 'bodycare'],
        ['name' => 'Nourishing Body Oil', 'price' => '$28.99', 'img' => 'product/bodycare/3.png', 'category' => 'bodycare'],
        ['name' => 'Exfoliating Sugar Scrub', 'price' => '$24.00', 'img' => 'product/bodycare/4.png', 'category' => 'bodycare'],
        ['name' => 'Shea Butter Foot Cream', 'price' => '$19.50', 'img' => 'product/bodycare/5.png', 'category' => 'bodycare'],
        ['name' => 'Smoothing Hand Cream', 'price' => '$14.99', 'img' => 'product/bodycare/6.png', 'category' => 'bodycare'],

        // Haircare
        ['name' => 'Hair Repair Mask', 'price' => '$26.99', 'img' => 'product/haircareProduct/1.png', 'category' => 'haircare'],
        ['name' => 'Revitalizing Shampoo', 'price' => '$20.50', 'img' => 'product/haircareProduct/2.png', 'category' => 'haircare'],
        ['name' => 'Silky Smooth Conditioner', 'price' => '$20.50', 'img' => 'product/haircareProduct/3.png', 'category' => 'haircare'],
        ['name' => 'Anti-Frizz Serum', 'price' => '$24.00', 'img' => 'product/haircareProduct/4.png', 'category' => 'haircare'],
        ['name' => 'Volumizing Mousse', 'price' => '$18.99', 'img' => 'product/haircareProduct/5.png', 'category' => 'haircare'],
        ['name' => 'Scalp Treatment Oil', 'price' => '$29.50', 'img' => 'product/haircareProduct/6.png', 'category' => 'haircare'],

        // Perfume
        ['name' => 'Midnight Rose Perfume', 'price' => '$59.99', 'img' => 'products/pic-5.jpg', 'category' => 'perfume'],
        ['name' => 'Ocean Breeze Scent', 'price' => '$54.50', 'img' => 'products/pic-6.jpg', 'category' => 'perfume'],
    ];

    return view('pages.products', [
        'title' => 'All Products',
        'breadcrumb' => 'All Products',
        'products' => $products
    ]);
})->name('products');

Route::get('/category/{slug}', function ($slug) {
    $allProducts = [
        // Skincare
        ['name' => 'Herbal Massage Soap', 'price' => '$24.99', 'img' => 'products/pic-8.jpg', 'category' => 'skincare'],
        ['name' => 'Aromatherapy Massage Oil', 'price' => '$39.99', 'img' => 'products/pic-9.jpg', 'category' => 'skincare'],
        ['name' => 'Ordinary 1', 'price' => '$15.99', 'img' => 'brandProduct/ordinary/ordinary1.png', 'category' => 'skincare'],
        ['name' => 'CeraVe Hydrating Serum', 'price' => '$25.99', 'img' => 'brandProduct/cerave/ceraveHydratingAcideSerum.png', 'category' => 'skincare'],
        ['name' => 'Cetaphil Baby Oil', 'price' => '$14.99', 'img' => 'brandProduct/cetaphil/cataphilBabyOil.png', 'category' => 'skincare'],
        ['name' => 'Advanced Skincare Serum', 'price' => '$29.99', 'img' => 'product/skincareSerum/one.jpg', 'category' => 'skincare'],
        ['name' => 'Hyaluronic Acid Serum', 'price' => '$27.50', 'img' => 'product/skincareSerum/two.png', 'category' => 'skincare'],
        ['name' => 'Vitamin C Glow Serum', 'price' => '$32.00', 'img' => 'product/skincareSerum/three.png', 'category' => 'skincare'],
        ['name' => 'Retinol Night Treatment', 'price' => '$35.99', 'img' => 'product/skincareSerum/four.png', 'category' => 'skincare'],
        ['name' => 'Pore Refining Toner', 'price' => '$22.00', 'img' => 'product/skincareSerum/five.png', 'category' => 'skincare'],
        ['name' => 'Deep Hydration Cream', 'price' => '$38.50', 'img' => 'product/skincareSerum/six.png', 'category' => 'skincare'],
        
        // Makeup
        ['name' => 'Flawless Glow Foundation', 'price' => '$49.99', 'img' => 'product/mackupProduct/1.png', 'category' => 'makeup'],
        ['name' => 'Velvet Matte Lipstick', 'price' => '$24.50', 'img' => 'product/mackupProduct/2.png', 'category' => 'makeup'],
        ['name' => 'Longwear Eyeliner', 'price' => '$18.99', 'img' => 'product/mackupProduct/3.png', 'category' => 'makeup'],
        ['name' => 'Professional Brush Set', 'price' => '$34.99', 'img' => 'product/mackupProduct/4.png', 'category' => 'makeup'],
        ['name' => 'Radiant Finishing Powder', 'price' => '$29.99', 'img' => 'product/mackupProduct/5.png', 'category' => 'makeup'],
        ['name' => 'Shimmer Eyeshadow Palette', 'price' => '$42.00', 'img' => 'product/mackupProduct/6.png', 'category' => 'makeup'],

        // Supplements
        ['name' => 'Vitamin C Booster', 'price' => '$19.99', 'img' => 'product/supplementProduct/1.png', 'category' => 'supplements'],
        ['name' => 'Daily Multivitamin', 'price' => '$22.50', 'img' => 'product/supplementProduct/2.png', 'category' => 'supplements'],
        ['name' => 'Omega-3 Fish Oil', 'price' => '$25.99', 'img' => 'product/supplementProduct/3.png', 'category' => 'supplements'],
        ['name' => 'Herbal Energy Boost', 'price' => '$28.00', 'img' => 'product/supplementProduct/4.png', 'category' => 'supplements'],
        ['name' => 'Collagen Peptides', 'price' => '$32.99', 'img' => 'product/supplementProduct/5.png', 'category' => 'supplements'],
        ['name' => 'Magnesium Relaxation', 'price' => '$21.50', 'img' => 'product/supplementProduct/6.png', 'category' => 'supplements'],

        // Bodycare
        ['name' => 'Hydrating Body Lotion', 'price' => '$22.99', 'img' => 'product/bodycare/1.png', 'category' => 'bodycare'],
        ['name' => 'Gentle Body Wash', 'price' => '$16.50', 'img' => 'product/bodycare/2.png', 'category' => 'bodycare'],
        ['name' => 'Nourishing Body Oil', 'price' => '$28.99', 'img' => 'product/bodycare/3.png', 'category' => 'bodycare'],
        ['name' => 'Exfoliating Sugar Scrub', 'price' => '$24.00', 'img' => 'product/bodycare/4.png', 'category' => 'bodycare'],
        ['name' => 'Shea Butter Foot Cream', 'price' => '$19.50', 'img' => 'product/bodycare/5.png', 'category' => 'bodycare'],
        ['name' => 'Smoothing Hand Cream', 'price' => '$14.99', 'img' => 'product/bodycare/6.png', 'category' => 'bodycare'],

        // Haircare
        ['name' => 'Hair Repair Mask', 'price' => '$26.99', 'img' => 'product/haircareProduct/1.png', 'category' => 'haircare'],
        ['name' => 'Revitalizing Shampoo', 'price' => '$20.50', 'img' => 'product/haircareProduct/2.png', 'category' => 'haircare'],
        ['name' => 'Silky Smooth Conditioner', 'price' => '$20.50', 'img' => 'product/haircareProduct/3.png', 'category' => 'haircare'],
        ['name' => 'Anti-Frizz Serum', 'price' => '$24.00', 'img' => 'product/haircareProduct/4.png', 'category' => 'haircare'],
        ['name' => 'Volumizing Mousse', 'price' => '$18.99', 'img' => 'product/haircareProduct/5.png', 'category' => 'haircare'],
        ['name' => 'Scalp Treatment Oil', 'price' => '$29.50', 'img' => 'product/haircareProduct/6.png', 'category' => 'haircare'],

        // Perfume
        ['name' => 'Midnight Rose Perfume', 'price' => '$59.99', 'img' => 'products/pic-5.jpg', 'category' => 'perfume'],
        ['name' => 'Ocean Breeze Scent', 'price' => '$54.50', 'img' => 'products/pic-6.jpg', 'category' => 'perfume'],
    ];

    $products = array_filter($allProducts, function($product) use ($slug) {
        return $product['category'] === $slug;
    });

    $title = ucfirst($slug) . ' Products';

    return view('pages.products', [
        'category' => $slug,
        'title' => $title,
        'breadcrumb' => ucfirst($slug),
        'products' => $products
    ]);
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


