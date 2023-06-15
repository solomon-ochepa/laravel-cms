<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Marck+Script"
        rel="stylesheet">

    <!-- Bootstrap -->
    <link href="{{ asset('guest') }}/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font-Awesome -->
    <link href="{{ asset('guest') }}/assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Flat icon -->
    <link href="{{ asset('guest') }}/assets/flaticon/flaticon.css" rel="stylesheet">

    <!-- Swiper -->
    <link href="{{ asset('guest') }}/assets/css/swiper.min.css" rel="stylesheet">

    <!-- Lightcase -->
    <link href="{{ asset('guest') }}/assets/css/lightcase.css" rel="stylesheet">

    <!-- quick-view -->
    <link href="{{ asset('guest') }}/assets/css/quick-view.css" rel="stylesheet">

    <!-- nstSlider -->
    <link href="{{ asset('guest') }}/assets/css/jquery.nstSlider.css" rel="stylesheet">

    <!-- flexslider -->
    <link href="{{ asset('guest') }}/assets/css/flexslider.css" rel="stylesheet">

    <!-- banner-bg -->
    <link href="{{ asset('guest') }}/assets/css/banner-bg.css" rel="stylesheet">

    <!-- Style -->
    <link href="{{ asset('guest') }}/assets/css/style.css" rel="stylesheet">
    <link href="{{ asset('guest') }}/assets/css/header.css" rel="stylesheet">

    <!-- Responsive -->
    <link href="{{ asset('guest') }}/assets/css/responsive.css" rel="stylesheet">
    <style>
      body {
        font-family: 'Marck+Script', serif;
        font-size: 15px;
      }
    </style>

    <!-- Scripts -->
    @vite('resources/js/app.js')
</head>

<body>
    <div class="box-layout">
        {{ $slot }}
    </div>

    {{-- Scripts --}}

    <!-- jQuery -->
    <script src="{{ asset('guest') }}/assets/js/jquery-3.1.1.min.js"></script>
    <script src="{{ asset('guest') }}/assets/js/jquery-migrate-1.4.1.min.js"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('guest') }}/assets/js/bootstrap.min.js"></script>

    <!-- Coundown -->
    <script src="{{ asset('guest') }}/assets/js/jquery.countdown.min.js"></script>

    <!--Swiper-->
    <script src="{{ asset('guest') }}/assets/js/swiper.jquery.min.js"></script>

    <!--Masonry-->
    <script src="{{ asset('guest') }}/assets/js/masonry.pkgd.min.js"></script>

    <!--Lightcase-->
    <script src="{{ asset('guest') }}/assets/js/lightcase.js"></script>

    <!--modernizr-->
    <script src="{{ asset('guest') }}/assets/js/modernizr.js"></script>

    <!--velocity-->
    <script src="{{ asset('guest') }}/assets/js/velocity.min.js"></script>

    <!--quick-view-->
    <script src="{{ asset('guest') }}/assets/js/quick-view.js"></script>

    <!--nstSlider-->
    <script src="{{ asset('guest') }}/assets/js/jquery.nstSlider.js"></script>
    <script src="{{ asset('guest') }}/assets/js/nstfunctions.js"></script>

    <!--flexslider-->
    <script src="{{ asset('guest') }}/assets/js/flexslider-min.js"></script>
    <script src="{{ asset('guest') }}/assets/js/flexfunctions.js"></script>

    <!--directional-->
    <script src="{{ asset('guest') }}/assets/js/directional-hover.js"></script>

    <!--easing-->
    <script src="{{ asset('guest') }}/assets/js/jquery.easing.min.js"></script>
    <!-- parallax.js -->
    <script src="{{ asset('guest') }}/assets/js/parallax.js"></script>
    <script src="{{ asset('guest') }}/assets/js/theia-sticky-sidebar.js"></script>

    <!-- Google Map -->
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAQlXnmyNPAeN3c3HNyWoUMqDk6bDF31Cg">
    </script>

    <!-- Custom -->
    <script src="{{ asset('guest') }}/assets/js/custom.js"></script>

    <script type="text/javascript">
        //Home Page map
        var styleArray = [{
            "featureType": "water",
            "elementType": "geometry.fill",
            "stylers": [{
                "color": "#65ac4c"
            }]
        }];

        var mapOptions = {
            center: new google.maps.LatLng(55.864237, -4.251806),
            zoom: 09,
            styles: styleArray,
            scrollwheel: false,
            backgroundColor: 'transparent',
            mapTypeControl: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("home-map"),
            mapOptions);
        var myLatlng = new google.maps.LatLng(55.864237, -4.251806);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            icon: 'images/map-icon.png'
        });
    </script>
</body>

</html>
