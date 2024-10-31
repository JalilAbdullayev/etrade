<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Volt::route('/', 'index')->name('home');
Volt::route('about', 'about')->name('about');
Volt::route('contact', 'contact')->name('contact');
Volt::route('cart', 'cart')->name('cart');
Volt::route('wishlist', 'wishlist')->name('wishlist');
Volt::route('checkout', 'checkout')->name('checkout');
Volt::route('privacy-policy', 'privacy')->name('privacy');
Volt::route('shop', 'shop')->name('shop');
Volt::route('product', 'product')->name('product');
Volt::route('blog', 'blog')->name('blog');
Volt::route('article', 'article')->name('article');
Volt::route('terms-of-use', 'terms')->name('terms');

Route::middleware(['auth', 'verified'])->group(function() {
    Volt::route('account', 'account')->name('account');
});

require __DIR__ . '/auth.php';
