<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>Unify - Responsive Website Template</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/bootstrap.min.css')}}">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{asset('vendor/icon-hs/style.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/icon-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/hamburgers/hamburgers.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/hs-megamenu/src/hs.megamenu.css')}}">
    @yield('stylesheet')
    <!-- CSS Unify -->
    <link rel="stylesheet" href="{{asset('css/unify.css')}}">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

</head>

<body>
<main>
    <!-- Header -->
    @include('layouts.header')
    <!-- End Header -->

    <!-- Content -->
    <section class="g-py-50">
        <div class="container">
            @yield('content')

          </div>
    </section>
    <!-- End Content -->

    <!-- Footer -->
    @include('layouts.footer')


    <!-- End Footer -->

    <!-- Copyright Footer -->
    @include('layouts.footer_copyright')

    <!-- End Copyright Footer -->

    <!-- Go To Top -->
    <a class="js-go-to u-go-to-v1" href="#!"
       data-type="fixed"
       data-position='{
           "bottom": 15,
           "right": 15
         }'
       data-offset-top="300"
       data-compensation="#js-header"
       data-show-effect="zoomIn">
        <i class="hs-icon hs-icon-arrow-top"></i>
    </a>
    <!-- End Go To Top -->
</main>

<!-- JS Global Compulsory -->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/jquery-migrate/jquery-migrate.min.js')}}"></script>
<script src="{{asset('vendor/popper.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/bootstrap.min.js')}}"></script>

<!-- JS Implementing Plugins -->
<script src="{{asset('vendor/hs-megamenu/src/hs.megamenu.js')}}"></script>

<!-- JS Unify -->
<script src="{{asset('js/hs.core.js')}}"></script>
<script src="{{asset('js/components/hs.header.js')}}"></script>
<script src="{{asset('js/helpers/hs.hamburgers.js')}}"></script>
<script src="{{asset('js/components/hs.go-to.js')}}"></script>

<!-- JS Custom -->
<script src="{{asset('js/custom.js')}}"></script>

<!-- JS Plugins Init. -->
<script>
    $(document).on('ready', function () {
        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');
    });

    $(window).on('load', function () {
        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of HSMegaMenu component
        $('.js-mega-menu').HSMegaMenu({
            event: 'hover',
            pageContainer: $('.container'),
            breakpoint: 991
        });
    });
</script>
</body>
</html>