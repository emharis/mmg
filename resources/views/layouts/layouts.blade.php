
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <base href="{{ URL::to('/') }}/" />
        <title>Merak Muda Gas</title>

        <!-- Responsive Meta Tag -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!--Favicon-->
        <link href='img/favicon.ico' rel='icon' type='image/x-icon'/>

        <!-- main stylesheet -->
        <link rel="stylesheet" href="css/style.css">
        <!-- responsive stylesheet -->
        <link rel="stylesheet" href="css/responsive.css">
        
        @yield('styles')


        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!--[if lt IE 9]>
                <script src="js/respond.js"></script>
        <![endif]-->


    </head>
    <body>

        <!-- preloader -->
        <div class="preloader"></div>

        @include('layouts.header')

        @yield('content')

        @include('layouts.footer')

        <script src="js/jquery.min.js"></script> <!-- jQuery JS -->
        <script src="js/bootstrap.min.js"></script> <!-- BootStrap JS -->
        <script src="http://maps.google.com/maps/api/js"></script> <!-- Gmap Helper -->
        <script src="js/gmap.js"></script> <!-- gmap JS -->
        <script src="js/wow.js"></script> <!-- WOW JS -->
        <script src="js/isotope.pkgd.min.js"></script> <!-- iSotope JS -->
        <script src="js/owl.carousel.min.js"></script> <!-- OWL Carousle JS -->
        <script src="js/jquery.themepunch.tools.min.js"></script> <!-- Revolution Slider Tools -->
        <script src="js/jquery.themepunch.revolution.min.js"></script> <!-- Revolution Slider -->
        <script src="js/jquery.mixitup.min.js"></script> <!-- MixIt UP JS -->
        <script src="js/jquery.fancybox.pack.js"></script> <!-- FancyBox -->
        <script src="js/validate.js"></script> <!-- Form Validator JS -->
        <script src="js/jquery.easing.min.js"></script> <!-- jquery easing JS -->        
        @yield('scripts')        
        <script src="js/custom.js"></script> <!-- Custom JS -->
        

    </body>
</html>