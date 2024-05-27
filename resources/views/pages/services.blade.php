@extends('layouts.website')

@push('meta')
<meta name="description" content="Services Page">
@endpush

@section('title')
Services
@endsection

@section('content')

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(frontend-assets/img/banner/3.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Our Services</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Services
    ============================================= -->
    <div class="services-area inc-thumb bg-gray default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="services-items">
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="thumb">
                                <img src="frontend-assets/img/services/1.jpg" alt="Thumb">
                                <div class="overlay">
                                    <a href="#">
                                        <i class="flaticon-valve"></i>
                                        <h4>Oil and Gass Energy</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <div class="content">
                                    <p>
                                        Guest tiled he quick by so these trees am. It announcing alteration at surrounded  
                                    </p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="thumb">
                                <img src="frontend-assets/img/services/2.jpg" alt="Thumb">
                                <div class="overlay">
                                    <a href="#">
                                        <i class="flaticon-tractor-1"></i>
                                        <h4>Agriculture Automation</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <div class="content">
                                    <p>
                                        Guest tiled he quick by so these trees am. It announcing alteration at surrounded  
                                    </p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="thumb">
                                <img src="frontend-assets/img/services/3.jpg" alt="Thumb">
                                <div class="overlay">
                                    <a href="#">
                                        <i class="flaticon-mayan-pyramid"></i>
                                        <h4>Civil Engineering</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <div class="content">
                                    <p>
                                        Guest tiled he quick by so these trees am. It announcing alteration at surrounded  
                                    </p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="thumb">
                                <img src="frontend-assets/img/services/4.jpg" alt="Thumb">
                                <div class="overlay">
                                    <a href="#">
                                        <i class="flaticon-bridge-2"></i>
                                        <h4>Bridge Construction</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <div class="content">
                                    <p>
                                        Guest tiled he quick by so these trees am. It announcing alteration at surrounded  
                                    </p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="thumb">
                                <img src="frontend-assets/img/services/5.jpg" alt="Thumb">
                                <div class="overlay">
                                    <a href="#">
                                        <i class="flaticon-work-time"></i>
                                        <h4>Mechanical Engineering</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <div class="content">
                                    <p>
                                        Guest tiled he quick by so these trees am. It announcing alteration at surrounded  
                                    </p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="thumb">
                                <img src="frontend-assets/img/services/6.jpg" alt="Thumb">
                                <div class="overlay">
                                    <a href="#">
                                        <i class="flaticon-solar-panel"></i>
                                        <h4>Power & Energy</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <div class="content">
                                    <p>
                                        Guest tiled he quick by so these trees am. It announcing alteration at surrounded  
                                    </p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Services Area -->
@endsection