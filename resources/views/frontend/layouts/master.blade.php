<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="bracket-web">
    <meta name="description" content="Solinom — Luxury Hotel Template is perfect if you like a clean, modern and creative template. It’s not WordPress theme. This template is ideal for hotel, hostel, resort, beach, boutique, campground, countryside, mountain, summer resort, apartments, restaurant, pub, spa wellness, wedding center, hotel B&B, vacation room/apartment rental etc, and those who need an easy, attractive and effective way to share their work with clients. If you would like to create a page that has a strong first impression and intrigues everyone, Solinom template is the tool you need. Let it impress you with the live preview page. It’s super easy to customize so it’ll suit your needs.">
    <title>Home</title>

    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/assets/images/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/assets/images/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/assets/images/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('frontend/assets/images/favicons/site.webmanifest') }}">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&amp;family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/bootstrap-select/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/jquery-ui/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/jarallax/jarallax.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/nouislider/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/nouislider/nouislider.pips.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/tiny-slider/tiny-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/solinom-icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/owl-carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/owl-carousel/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/slick-carousel/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/flipster/flipster.css') }}">

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/solinom.css') }}">
</head>

<body class="custom-cursor">
<!-- 
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>
 -->

    <!-- /.preloader -->
    <div class="preloader">
        <div class="preloader__image" style="background-image: url({{ asset('frontend/assets/images/loader.png') }});"></div>
    </div>
    <!-- /.preloader -->


    <div class="page-wrapper">
        <!-- header section Start -->
        @include('frontend.layouts.homenav')  
        <!-- header section End -->

        @yield('content')

        <!-- footer section Start -->
        @include('frontend.layouts.homefooter')
        <!-- footer section End -->
    </div>


    <!-- /.mobile -->
    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
        <div class="logo-box">
        <a href="index.html" aria-label="logo image"><img src="{{ asset('frontend/assets/images/logo-light.png') }}" width="130" alt=" solinom logo"></a>
        </div>
        <div class="mobile-nav__container"></div>
        <ul class="mobile-nav__contact list-unstyled">
        <li>
            <i class="fa fa-envelope"></i>
            <a href="mailto:needhelp@solinom.com">needhelp@solinom.com</a>
        </li>
        <li>
            <i class="fa fa-phone-alt"></i>
            <a href="tel:666-888-0000">666 888 0000</a>
        </li>
        </ul>
        <div class="mobile-nav__social">
        <a href="https://facebook.com/"> <i class="icon-facebook-f" aria-hidden="true"></i> <span class="sr-only">Facebook</span></a>
        <a href="https://twitter.com/"> <i class="icon-x-twitter" aria-hidden="true"></i> <span class="sr-only">Twitter</span></a>
        <a href="https://pinterest.com/"> <i class="icon-pinterest-p" aria-hidden="true"></i> <span class="sr-only">Pinterest</span></a>
        <a href="https://youtube.com/"> <i class="icon-youtube" aria-hidden="true"></i> <span class="sr-only">youtube</span></a>
        </div>
        </div>
    </div>

    <!-- /.search-popup -->
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <div class="search-popup__content">
        <form role="search" method="get" class="search-popup__form" action="#">
        <input type="text" id="search" placeholder="Search Here...">
        <button type="submit" aria-label="search submit" class="solinom-btn solinom-btn--base">
            <span><i class="icon-search"></i></span>
        </button>
        </form>
        </div>
    </div>
    <!-- /.search-popup -->


        <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
        <span class="scroll-to-top__text">back top</span>
        <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
        </a>


        <script src="{{ asset('frontend/assets/vendors/jquery/jquery-3.7.0.min.js') }}"></script>
        <!-- <script src="frontend/assets/vendors/jquery/jquery-migrate.min.js"></script> -->
        <script src="{{ asset('frontend/assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/jarallax/jarallax.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/jquery-ui/jquery-ui.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/nouislider/nouislider.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/tiny-slider/tiny-slider.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/wnumb/wNumb.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/owl-carousel/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/slick-carousel/slick.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/flipster/flipster.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/wow/wow.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/imagesloaded/imagesloaded.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/isotope/isotope.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/countdown/countdown.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/jquery-circleType/jquery.circleType.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/jquery-lettering/jquery.lettering.min.js') }}"></script>

        <!-- GSAP Animation -->
        <script src="{{ asset('frontend/assets/vendors/gsap/gsap.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/gsap/ScrollTrigger.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/gsap/splittext.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/solinom-gsap.js') }}"></script>

        <!-- template js -->
        <script src="{{ asset('frontend/assets/js/solinom.js') }}"></script>
</body>

</html>