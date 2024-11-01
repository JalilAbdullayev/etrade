<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="@yield('description', $settings->description)"/>
    <meta name="keywords" content="@yield('keywords', $settings->keywords)"/>
    <meta name="author" content="@yield('author', $settings->author)"/>
    {{-- Facebook --}}
    <meta property="og:url" content="{{ url()->current() }}"/>
    <meta property="og:type" content="@yield('type', 'website')"/>
    <meta property="og:title" content="@yield('title', $settings->title)"/>
    <meta property="og:description" content="@yield('description', $settings->description)"/>
    <meta property="og:image" content="@yield('image', asset('storage/' . $settings->logo))"/>
    {{-- X (Twitter) --}}
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="{{ url()->current() }}"/>
    <meta name="twitter:title" content="@yield('title', $settings->title)"/>
    <meta name="twitter:description" content="@yield('description', $settings->description)"/>
    <meta name="twitter:image" content="@yield('image', asset('storage/' . $settings->logo))"/>
    <title>
        {{ $title ?? $settings->title }}
    </title>
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
    {{ $slot }}
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
