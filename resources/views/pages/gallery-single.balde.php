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
                    <h1>Gallery Single</h1>
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

    <!-- Start Gallery Single 
    ============================================= -->
    <div class="gallery-single default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-8 thumb">
                            <div class="gallery gallery-carousel owl-carousel owl-theme">
                                <img src="frontend-assets/img/portfolio/v1.jpg" alt="Thumb">
                                <img src="frontend-assets/img/portfolio/v2.jpg" alt="Thumb">
                                <img src="frontend-assets/img/portfolio/v3.jpg" alt="Thumb">
                            </div>
                        </div>
                        <div class="col-md-4 info">
                            <div class="info-box">
                                <ul>
                                    <li>Client:  <span><a href="#">validthemes</a></span></li>
                                    <li>Created by:  <span>Jessica Jones</span></li>
                                    <li>Completed on:  <span>1st June 2019</span></li>
                                    <li>Skills:  <span>Thread / Grinding</span></li>
                                </ul>
                                <div class="share">
                                    <h4>Share:</h4>
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-dribbble"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="gallery-details">
                        <h2>Oil and Gass Energy</h2>
                        <h4>Ongoin Project</h4>
                        <p>
                            Supported neglected met she therefore unwilling discovery remainder. Way sentiments two indulgence uncommonly own. Diminution to frequently sentiments he connection continuing indulgence. An my exquisite conveying up defective. Shameless see the tolerably how continued. She enable men twenty elinor points appear. Whose merry ten yet was men seven ought balls. 
                        </p>
                        <p>
                            Is post each that just leaf no. He connection interested so we an sympathize advantages. To said is it shed want do. Occasional middletons everything so to. Have spot part for his quit may. Enable it is square my an regard. Often merit stuff first oh up hills as he. Servants contempt as although addition dashwood is procured. Interest in yourself an do of numerous feelings cheerful confined. 
                        </p>
                        <a href="#" class="btn btn-dark border btn-md" data-animation="animated slideInUp">Visit Website</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery Single -->
@endsection