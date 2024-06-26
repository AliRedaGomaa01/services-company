<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @stack('meta')

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- ========== Page Title ========== -->
    <title>{{ config('app.name', 'Laravel') }} - @yield('title') </title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    
    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    
    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="/frontend-assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="/frontend-assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/frontend-assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/frontend-assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="/frontend-assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="/frontend-assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="/frontend-assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="/frontend-assets/css/animate.css" rel="stylesheet" />
    <link href="/frontend-assets/css/bootsnav.css" rel="stylesheet" />
    <link href="/frontend-assets/css/style.css" rel="stylesheet">
    <link href="/frontend-assets/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <style>
        /* Hide scrollbar for Chrome, Safari and Opera */
        *::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        * {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }

        .active {
            font-weight: 900;
            opacity : 0.755 !important;
            text-decoration: underline;
        }
    </style>

    @stack('styles')

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    @include('components.website.header')

    @yield('content')

    @include('components.website.footer')

    @include('components.website.scripts')

    @stack('scripts')

</body>

</html>
