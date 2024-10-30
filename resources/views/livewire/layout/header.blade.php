<?php

use Livewire\Volt\Component;

new class extends Component {
    public function logout() {
        Auth::guard('web')->logout();
        Auth::logout();
        Session::invalidate();
        Session::regenerateToken();
        return $this->redirect(route('home'), navigate: true);
    }
}; ?>

<header @class(["header axil-header",'header-style-1' => Route::is('home'), 'header-style-5' => !Route::is('home')])>
    <div class="axil-header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="header-top-link">
                        <ul class="quick-link">
                            @guest
                                <li>
                                    <a href="{{ route('register') }}">
                                        Join Us
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('login') }}">
                                        Sign In
                                    </a>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Mainmenu Area  -->
    <div id="axil-sticky-placeholder"></div>
    <div class="axil-mainmenu">
        <div class="container">
            <div class="header-navbar">
                <div class="header-brand">
                    <a href="{{ route('home') }}" wire:navigate class="logo logo-dark">
                        <img src="{{ asset('front/images/logo/logo.png')}}" alt="Site Logo">
                    </a>
                </div>
                <!-- Start Mainmanu Nav -->
                <div class="header-main-nav">
                    <nav class="mainmenu-nav">
                        <button class="mobile-close-btn mobile-nav-toggler"><i class="fas fa-times"></i></button>
                        <div class="mobile-nav-brand">
                            <a href="{{ route('home') }}" wire:navigate class="logo">
                                <img src="{{ asset('front/images/logo/logo.png')}}" alt="Site Logo">
                            </a>
                        </div>
                        <ul class="mainmenu">
                            <li>
                                <a href="{{ route('home') }}" wire:navigate @class(['active' => Route::is('home')])>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}" wire:navigate @class(['active' => Route::is('about')])>
                                    About
                                </a>
                            </li>
                            <li>
                                <a href="contact.html">
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- End Mainmanu Nav -->
                <div class="header-action">
                    <ul class="action-list">
                        <li class="axil-search">
                            <a href="javascript:void(0)" class="header-search-icon" title="Search">
                                <i class="flaticon-magnifying-glass"></i>
                            </a>
                        </li>
                        <li class="wishlist">
                            <a href="wishlist.html">
                                <i class="flaticon-heart"></i>
                            </a>
                        </li>
                        <li class="shopping-cart">
                            <a href="#" class="cart-dropdown-btn">
                                <span class="cart-count">3</span>
                                <i class="flaticon-shopping-cart"></i>
                            </a>
                        </li>
                        @auth
                            <li class="my-account">
                                <a href="javascript:void(0)">
                                    <i class="flaticon-person"></i>
                                </a>
                                <div class="my-account-dropdown">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                My Account
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Support
                                            </a>
                                        </li>
                                        <li>
                                            <a wire:click="logout" style="cursor: pointer">
                                                Logout
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        @endauth
                        <li class="axil-mobile-toggle">
                            <button class="menu-btn mobile-nav-toggler">
                                <i class="flaticon-menu-2"></i>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Mainmenu Area -->
</header>
