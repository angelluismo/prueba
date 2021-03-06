<!DOCTYPE html>
<html lang="en-US" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <title>{{ config('app.name', 'Covid-19') }}</title>    
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="theme-color" content="#ffffff">
        <!--  
        Stylesheets
        =============================================
        -->
        <link href="lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">     
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <link href="lib/animate.css/animate.css" rel="stylesheet">
        <link href="lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="lib/et-line-font/et-line-font.css" rel="stylesheet">
        <link href="lib/flexslider/flexslider.css" rel="stylesheet">
        <link href="lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
        <link href="lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
        <link href="lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">       
        <link href="css/style.css" rel="stylesheet">
        <link id="color-scheme" href="css/colors/default.css" rel="stylesheet">
    </head>
    <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
        <main>
            <div class="page-loader">
                <div class="loader">Loading...</div>
            </div>
            @include('layouts/partials/header')
            @yield('slider') 
            <div class="main">     
                @yield('content')  
                @include('layouts/partials/footer')
            </div>
            <div class="scroll-up">
                <a href="#totop"><i class="fa fa-angle-double-up"></i></a>
            </div>
        </main>
        <!--  
        JavaScripts
        =============================================
        -->
        <script src="lib/jquery/dist/jquery.js"></script>
        <script src="lib/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="lib/wow/dist/wow.js"></script>
        <script src="lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
        <script src="lib/isotope/dist/isotope.pkgd.js"></script>
        <script src="lib/imagesloaded/imagesloaded.pkgd.js"></script>
        <script src="lib/flexslider/jquery.flexslider.js"></script>
        <script src="lib/owl.carousel/dist/owl.carousel.min.js"></script>
        <script src="lib/smoothscroll.js"></script>
        <script src="lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
        <script src="lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>