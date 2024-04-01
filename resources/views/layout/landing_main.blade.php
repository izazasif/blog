<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from layerdrops.com/linoorhtml/index-main.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Jul 2021 05:09:55 GMT -->
<head>
    <meta charset="utf-8">
    <title>{{ !isset($title) ? 'MyBDApps' : $title }}</title>
    <!-- Stylesheets -->
    <link rel="preconnect" href="fonts.gstatic.com/index.html">
    <link href="{{ url('/') }}/web/fonts.googleapis.com/css2bd58.css?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;family=Teko:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <link href="{{ url('/') }}/web/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/web/css/fontawesome-all.css" rel="stylesheet">
    <link href="{{ url('/') }}/web/css/owl.css" rel="stylesheet">
    <link href="{{ url('/') }}/web/css/flaticon.css" rel="stylesheet">
    <link href="{{ url('/') }}/web/css/animate.css" rel="stylesheet">
    <link href="{{ url('/') }}/web/css/jquery-ui.css" rel="stylesheet">
    <link href="{{ url('/') }}/web/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/web/css/hover.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/') }}/web/css/jarallax.css">
    <link href="{{ url('/') }}/web/css/custom-animate.css" rel="stylesheet">
    <link href="{{ url('/') }}/web/css/style.css?v=2.2" rel="stylesheet">

    <link href="{{ url('/') }}/web/css/gallery.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <!-- rtl css
    
    <link href="{{ url('/') }}/web/css/rtl.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <!-- Responsive File -->
    <link href="{{ url('/') }}/web/css/responsive.css?v=2.3" rel="stylesheet">

    <!-- Color css -->
    <!-- <link rel="stylesheet" id="jssDefault" href="{{ url('/') }}/web/css/colors/color-default.css"> -->

    <link rel="shortcut icon" href="{{ url('/') }}/web/images/mlogo/mlogo1.png" id="fav-shortcut" type="image/x-icon">
    <!-- <link rel="icon" href="{{ url('/') }}/web//images/favicon.png" id="fav-icon" type="image/x-icon"> -->
     

    <!-- Responsive Settings -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta property="og:image" content="{{ !isset($image) ? url('/').'/website/share/default.jpg' : $image }}">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

    <div class="page-wrapper">

        
        <!-- Preloader -->
        <!-- <div class="preloader">
            <div class="icon"></div>
        </div> -->
        @include('layout.landing_header')

        @yield('content_web')   
 
        @include('layout.landing_footer')
    </div>
    <!--End pagewrapper-->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>



    <script src="{{ url('/') }}/web/js/jquery.js"></script>
    <script src="{{ url('/') }}/web/js/popper.min.js"></script>
    <script src="{{ url('/') }}/web/js/bootstrap.min.js"></script>
    <script src="{{ url('/') }}/web/js/TweenMax.js"></script>
    <script src="{{ url('/') }}/web/js/jquery-ui.js"></script>
    <script src="{{ url('/') }}/web/js/jquery.fancybox.js"></script>
    <script src="{{ url('/') }}/web/js/owl.js"></script>
    <script src="{{ url('/') }}/web/js/mixitup.js"></script>
    <script src="{{ url('/') }}/web/js/appear.js"></script>
    <script src="{{ url('/') }}/web/js/wow.js"></script>
    <script src="{{ url('/') }}/web/js/jQuery.style.switcher.min.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/web/cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.2/js.cookie.min.js">
    </script>
    <script src="{{ url('/') }}/web/js/jquery.easing.min.js"></script>
    <script src="{{ url('/') }}/web/js/jarallax.min.js"></script>
    <script src="{{ url('/') }}/web/js/custom-script.js"></script>

    <script src="{{ url('/') }}/web/js/lang.js"></script>
    <script src="{{ url('/') }}/web/translate.google.com/translate_a/elementa0d8.html?cb=googleTranslateElementInit"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

</body>


</html>