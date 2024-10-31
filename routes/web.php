<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Volt::route('/', 'index')->name('home');
Volt::route('about', 'about')->name('about');
Volt::route('contact', 'contact')->name('contact');

Route::middleware(['auth', 'verified'])->group(function() {
    Volt::route('account', 'account')->name('account');
});

require __DIR__ . '/auth.php';
