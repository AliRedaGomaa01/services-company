@extends('layouts.website')

@push('meta')
<meta name="description" content="About Us Page">
@endpush

@section('title')
About Us
@endsection

@section('content')
    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(frontend-assets/img/banner/16.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Gallery Slider</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Portfolio 
    ============================================= -->
    <div class="portfolio-area carousel-shadow default-padding bg-gray heading-less">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="portfolio-items magnific-mix-gallery masonary portfolio-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="effect-up">
                                <img src="frontend-assets/img/portfolio/1.jpg" alt="Thumb">
                                <div class="overlay">
                                    <h4>Thread Grinding</h4>
                                    <div class="link">
                                        <a href="frontend-assets/img/portfolio/1.jpg" class="item popup-link"><i class="fa fa-search"></i></a>
                                        <a href="#"><i class="fas fa-link"></i></a>
                                    </div>
                                </div>           
                            </div>
                            <div class="info">
                                <ul>
                                    <li>Power</li>
                                    <li>Industry</li>
                                </ul>
                                <p>
                                    Attempt joy excited ten carried manners talking how. Suspicion neglected he resolving agreement perceived at an. 
                                </p>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="effect-up">
                                <img src="frontend-assets/img/portfolio/2.jpg" alt="Thumb">
                                <div class="overlay">
                                    <h4>Spring Renovation</h4>
                                    <div class="link">
                                        <a href="frontend-assets/img/portfolio/2.jpg" class="item popup-link"><i class="fa fa-search"></i></a>
                                        <a href="#"><i class="fas fa-link"></i></a>
                                    </div>
                                </div>           
                            </div>
                            <div class="info">
                                <ul>
                                    <li>Petroleum</li>
                                    <li>Gas</li>
                                </ul>
                                <p>
                                    Attempt joy excited ten carried manners talking how. Suspicion neglected he resolving agreement perceived at an. 
                                </p>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="effect-up">
                                <img src="frontend-assets/img/portfolio/3.jpg" alt="Thumb">
                                <div class="overlay">
                                    <h4>Wind Energy Plant</h4>
                                    <div class="link">
                                        <a href="frontend-assets/img/portfolio/3.jpg" class="item popup-link"><i class="fa fa-search"></i></a>
                                        <a href="#"><i class="fas fa-link"></i></a>
                                    </div>
                                </div>           
                            </div>
                            <div class="info">
                                <ul>
                                    <li>Manufacturing</li>
                                    <li>Energy</li>
                                </ul>
                                <p>
                                    Attempt joy excited ten carried manners talking how. Suspicion neglected he resolving agreement perceived at an. 
                                </p>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="effect-up">
                                <img src="frontend-assets/img/portfolio/4.jpg" alt="Thumb">
                                <div class="overlay">
                                    <h4>Petroleum Tank</h4>
                                    <div class="link">
                                        <a href="frontend-assets/img/portfolio/4.jpg" class="item popup-link"><i class="fa fa-search"></i></a>
                                        <a href="#"><i class="fas fa-link"></i></a>
                                    </div>
                                </div>           
                            </div>
                            <div class="info">
                                <ul>
                                    <li>Metarials</li>
                                    <li>Petrol</li>
                                </ul>
                                <p>
                                    Attempt joy excited ten carried manners talking how. Suspicion neglected he resolving agreement perceived at an. 
                                </p>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="effect-up">
                                <img src="frontend-assets/img/portfolio/5.jpg" alt="Thumb">
                                <div class="overlay">
                                    <h4>Construction Work</h4>
                                    <div class="link">
                                        <a href="frontend-assets/img/portfolio/5.jpg" class="item popup-link"><i class="fa fa-search"></i></a>
                                        <a href="#"><i class="fas fa-link"></i></a>
                                    </div>
                                </div>           
                            </div>
                            <div class="info">
                                <ul>
                                    <li>Construction</li>
                                    <li>Building</li>
                                </ul>
                                <p>
                                    Attempt joy excited ten carried manners talking how. Suspicion neglected he resolving agreement perceived at an. 
                                </p>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Portfolio -->
@endsection