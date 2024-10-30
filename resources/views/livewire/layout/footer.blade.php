<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

    <!-- Start Footer Area  -->
<footer class="axil-footer-area footer-style-2">
    <!-- Start Footer Top Area  -->
    <div class="footer-top separator-top">
        <div class="container">
            <div class="row">
                <!-- Start Single Widget  -->
                <div class="col-lg-4 col-sm-6">
                    <div class="axil-footer-widget">
                        <h5 class="widget-title">
                            Support
                        </h5>
                        <div class="logo mb--30">
                            <a href="{{ route('home') }}" wire:navigate>
                                <img class="light-logo" src="{{ asset('front/images/logo/logo.png')}}"
                                     alt="Logo Images"/>
                            </a>
                        </div>
                        <div class="inner">
                            <ul class="support-list-item">
                                <li>
                                    <a href="mailto:example@domain.com">
                                        <i class="fal fa-envelope-open"></i>
                                        example@domain.com
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:(+01)850-315-5862">
                                        <i class="fal fa-phone-alt"></i> (+01) 850-315-5862
                                    </a>
                                </li>
                                <li>
                                    <i class="fal fa-map-marker-alt"></i> 685 Market Street, <br/> Las Vegas, LA 95820,
                                    <br/> United States.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget  -->
                <!-- Start Single Widget  -->
                <div class="col-lg-4 col-sm-6">
                    <div class="axil-footer-widget">
                        <h5 class="widget-title">
                            Account
                        </h5>
                        <div class="inner">
                            <ul>
                                <li><a href="my-account.html">My Account</a></li>
                                <li><a href="sign-up.html">Login / Register</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="shop.html">Shop</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget  -->
                <!-- Start Single Widget  -->
                <div class="col-lg-4 col-sm-6">
                    <div class="axil-footer-widget">
                        <h5 class="widget-title">
                            Quick Link
                        </h5>
                        <div class="inner">
                            <ul>
                                <li>
                                    <a href="privacy-policy.html">
                                        Privacy Policy
                                    </a>
                                </li>
                                <li>
                                    <a href="terms-of-service.html">
                                        Terms Of Use
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        FAQ
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html">
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget  -->
            </div>
        </div>
    </div>
    <!-- End Footer Top Area  -->
    <!-- Start Copyright Area  -->
    <div class="copyright-area copyright-default separator-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4">
                    <div class="social-share">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12">
                    <div class="copyright-left d-flex flex-wrap justify-content-center">
                        <ul class="quick-link">
                            <li>© 2024 @if(date('Y') > 2024)
                                    - {{ date('Y') }}
                                @endif All rights reserved by <a href="{{ route('home') }}" wire:navigate>
                                    eTrade
                                </a>.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copyright Area  -->
</footer>
<!-- End Footer Area  -->
