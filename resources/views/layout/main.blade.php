
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @yield('meta-content')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->
    <!-- CSS here -->
    @include('layout.styles')
</head>
<body>
<!--Preloader-->
<div id="preloader">
    <div id="loader" class="loader">
        <div class="loader-container">
            <div class="loader-icon"><img src="/assets/img/logo/preloader.png" alt="Preloader"></div>
        </div>
    </div>
</div>
<!--Preloader-end -->
<!-- Scroll-top -->
<button class="scroll__top scroll-to-target" data-target="html">
    <i class="fas fa-angle-up"></i>
</button>
<!-- Scroll-top-end-->
@include('layout.header')
<!-- header-area -->
<!-- header-area-end -->

<!-- main-area -->
@yield('main-content')
<!-- main-area-end -->

<!-- footer-area -->
@include('layout.footer')
<!-- footer-area-end -->
<!-- JS here -->
@include('layout.scripts')
</body>
</html>
