<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    @include('components.website.head')

</head>
<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->
    
    @include('components.website.header')
    
    @include('components.website.footer')
    
    @include('components.website.scripts')

</body>
</html>
