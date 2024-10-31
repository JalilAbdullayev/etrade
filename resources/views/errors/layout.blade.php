<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title>
        @yield('title', 'Error')
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('front/images/favicon.png')}}"/>
    <!-- CSS ============================================ -->
    <!-- Bootstrap CSS -->
    @vite(['public/front/css/vendor/bootstrap.min.css', 'public/front/css/vendor/font-awesome.css',
            'public/front/css/vendor/flaticon/flaticon.css', 'public/front/css/vendor/slick.css',
            'public/front/css/vendor/slick-theme.css', 'public/front/css/vendor/jquery-ui.min.css',
            'public/front/css/vendor/sal.css', 'public/front/css/vendor/magnific-popup.css',
            'public/front/css/vendor/base.css', 'public/front/css/style.min.css'])
</head>
<body class="sticky-header">
<a href="#top" class="back-to-top" id="backto-top">
    <i class="fal fa-arrow-up"></i>
</a>
<livewire:layout.header/>
<main class="main-wrapper">
    <section class="error-page onepage-screen-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="content" data-sal="slide-up" data-sal-duration="800" data-sal-delay="400">
                        <span class="title-highlighter highlighter-secondary">
                            <i class="fal fa-exclamation-circle"></i> @yield('subtitle')
                        </span>
                        <h1 class="title">
                            @yield('title')
                        </h1>
                        <p>
                            @yield('message')
                        </p>
                        <a href="{{ route('home') }}" class="axil-btn btn-bg-secondary right-icon">
                            Back To Home <i class="fal fa-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="thumbnail" data-sal="zoom-in" data-sal-duration="800" data-sal-delay="400">
                        <h1 class="text-center text-danger font-monospace" style="font-size: 10rem">
                            @yield('code', 404)
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @unless(Route::is('contact'))
        <livewire:layout.newsletter/>
    @endunless
</main>
<livewire:layout.services/>
<livewire:layout.footer/>
<livewire:modals.product-view/>
<livewire:modals.search/>
<livewire:modals.cart/>
<div class="closeMask"></div>
<!-- JS
============================================ -->
<!-- Modernizer JS -->
<script src="{{ asset('front/js/vendor/modernizr.min.js')}}"></script>
<!-- jQuery JS -->
<script src="{{ asset('front/js/vendor/jquery.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('front/js/vendor/popper.min.js')}}"></script>
<script src="{{ asset('front/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{ asset('front/js/vendor/slick.min.js')}}"></script>
<script src="{{ asset('front/js/vendor/js.cookie.js')}}"></script>
<script src="{{ asset('front/js/vendor/jquery-ui.min.js')}}"></script>
<script src="{{ asset('front/js/vendor/jquery.ui.touch-punch.min.js')}}"></script>
<script src="{{ asset('front/js/vendor/jquery.countdown.min.js')}}"></script>
<script src="{{ asset('front/js/vendor/sal.js')}}"></script>
<script src="{{ asset('front/js/vendor/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('front/js/vendor/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{ asset('front/js/vendor/isotope.pkgd.min.js')}}"></script>
<script src="{{ asset('front/js/vendor/counterup.js')}}"></script>
<script src="{{ asset('front/js/vendor/waypoints.min.js')}}"></script>
<!-- Main JS -->
<script src="{{ asset('front/js/main.js')}}"></script>
@yield('js')
</body>
</html>
