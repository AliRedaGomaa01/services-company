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
<div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(frontend-assets/img/banner/15.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1>About Us</h1>
                <ul class="breadcrumb">
                    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">About</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Our About
    ============================================= -->
<div class="about-area inc-video default-padding">
    <div class="container">
        <div class="row">
            <!-- Start About -->
            <div class="about-content">
                <div class="col-md-6 video-info">
                    <div class="thumb">
                        <img src="frontend-assets/img/about/2.jpg" alt="Thumb">
                        <a href="https://www.youtube.com/watch?v=owhuBrGIOsE" class="popup-youtube light video-play-button item-center">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 info-content">
                    <h4>About Our company</h4>
                    <h1>We offer product design, <strong>manufacturing and engineering</strong> management services.</h1>
                    <p>
                        Seven world think timed while her. Spoil large oh he rooms on since an. Am up unwilling eagerness perceived incommode. Perceived end knowledge certainly day sweetness why cordially. Ask quick six seven offer see among. Handsome met debating sir dwelling age material.
                    </p>
                    <p>
                        Sentiments two occasional affronting solicitude travelling and one contrasted. Fortune day out married parties. Happiness remainder joy but earnestly for off. Took sold add play may none him few. If as increasing contrasted entreaties be.
                    </p>
                    <a href="#" class="btn btn-theme effect btn-md" data-animation="animated slideInUp">Read More</a>
                </div>
            </div>
            <!-- End About -->
        </div>
    </div>
</div>
<!-- End Our About -->

<!-- Start Why Chose Us
    ============================================= -->
<div class="choseus-area about-area bg-dark text-light">
    <div class="container-full">
        <div class="row">
            <div class="content-box">
                <div class="col-md-6 thumb bg-cover" style="background-image: url(frontend-assets/img/about/1.jpg);"></div>
                <div class="col-md-6 info">
                    <h4>Why Choose Us</h4>
                    <h2>The Best Solution for all Industrial & Factory Businesses</h2>
                    <p>
                        Dependent certainty off discovery him his tolerably offending. Ham for attention remainder sometimes additions recommend fat our. Direction has strangers now believing. Respect enjoyed gay far exposed parlors towards. Enjoyment use tolerably dependent listening men. No peculiar in handsome together unlocked do by. Article concern joy anxious did picture sir her. Although desirous not recurred disposed off shy you numerous securing.
                    </p>
                    <ul>
                        <li>Compatitive Price</li>
                        <li>Quality Product</li>
                        <li>Quick Delivery</li>
                        <li>High-Tech Manufacturers</li>
                    </ul>
                    <div class="achivement-items">
                        <div class="item">
                            <div class="fun-fact">
                                <div data-speed="3000" data-to="14" class="timer">14</div>
                                <span class="medium">Years of Experiance</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="fun-fact">
                                <div data-speed="3000" data-to="89" class="timer">89</div>
                                <span class="medium">Professional agents</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Why Chose Us -->

<!-- Start Team
    ============================================= -->
<div class="team-area default-padding bottom-less">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="site-heading text-center">
                    <h4>Our Team</h4>
                    <h2>Meet our experts</h2>
                    <p>
                        While mirth large of on front. Ye he greater related adapted proceed entered an. Through it examine express promise no. Past add size game cold girl off how old
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="team-items text-center">
                <!-- Single Item -->
                <div class="col-md-4 single-item">
                    <div class="item">
                        <div class="thumb">
                            <img src="frontend-assets/img/worker/1.jpg" alt="Thumb">
                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="info">
                            <div class="content">
                                <h4>Jessica Jones</h4>
                                <span>Engineering Officer</span>
                                <p>
                                    Through it examine express promise no. Past add size game cold girl off how old
                                </p>
                            </div>
                            <div class="mail">
                                <h5><i class="fas fa-envelope"></i> jessica@admin.com</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-4 single-item">
                    <div class="item">
                        <div class="thumb">
                            <img src="frontend-assets/img/worker/2.jpg" alt="Thumb">
                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="info">
                            <div class="content">
                                <h4>Mark Henri</h4>
                                <span>Electrical Engineering</span>
                                <p>
                                    Through it examine express promise no. Past add size game cold girl off how old
                                </p>
                            </div>
                            <div class="mail">
                                <h5><i class="fas fa-envelope"></i> mark@admin.com</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-4 single-item">
                    <div class="item">
                        <div class="thumb">
                            <img src="frontend-assets/img/worker/3.jpg" alt="Thumb">
                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="info">
                            <div class="content">
                                <h4>Ahel Natasha</h4>
                                <span>Interior Designer</span>
                                <p>
                                    Through it examine express promise no. Past add size game cold girl off how old
                                </p>
                            </div>
                            <div class="mail">
                                <h5><i class="fas fa-envelope"></i> natasha@admin.com</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
</div>
<!-- End Team -->

<!-- Start Achivement
    ============================================= -->
<div class="achivement-area bg-fixed shadow dark text-light" style="background-image: url(frontend-assets/img/banner/2.jpg);">
    <div class="container">
        <div class="row">
            <div class="achivement-items text-center">
                <div class="col-md-3 col-sm-6 item">
                    <div class="fun-fact">
                        <i class="flaticon-support"></i>
                        <div class="timer" data-to="230" data-speed="5000"></div>
                        <span class="medium">Satisfied customers</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 item">
                    <div class="fun-fact">
                        <i class="flaticon-agent"></i>
                        <div class="timer" data-to="89" data-speed="5000"></div>
                        <span class="medium">Professional agents</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 item">
                    <div class="fun-fact">
                        <i class="flaticon-customer-service"></i>
                        <div class="timer" data-to="50" data-speed="5000"></div>
                        <span class="medium">Hours support</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 item">
                    <div class="fun-fact">
                        <i class="flaticon-briefing"></i>
                        <div class="timer" data-to="2348" data-speed="5000"></div>
                        <span class="medium">Project Finished</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Achivement Area -->

<!-- Start Services
    ============================================= -->
<div class="services-area left-info flex-less inc-thumb carousel-shadow default-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4 info">
                <h2>We offer product design, <strong>manufacturing and engineering</strong> management services.</h2>
                <p>
                    While mirth large of on front. Ye he greater related adapted proceed entered an. Through it examine express promise no. Past add size game cold girl.
                </p>
                <p>
                    Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour explained law remainder.
                </p>
                <a href="#" class="btn btn-dark border btn-md" data-animation="animated slideInUp">View All Services</a>
            </div>
            <div class="col-md-8 carousel">
                <div class="services-items services-carousel owl-carousel owl-theme">
                    <!-- Single Item -->
                    <div class="item">
                        <div class="thumb">
                            <img src="frontend-assets/img/services/1.jpg" alt="Thumb">
                        </div>
                        <div class="info">
                            <div class="content">
                                <div class="top-info">
                                    <h4><a href="#">Oil and Gass Energy</a></h4>
                                    <p>
                                        Guest tiled he quick by so these trees am. It announcing alteration at surrounded
                                    </p>
                                </div>
                                <div class="bottom">
                                    <i class="flaticon-valve"></i>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="item">
                        <div class="thumb">
                            <img src="frontend-assets/img/services/2.jpg" alt="Thumb">
                        </div>
                        <div class="info">
                            <div class="content">
                                <div class="top-info">
                                    <h4><a href="#">Agriculture Automation</a></h4>
                                    <p>
                                        Guest tiled he quick by so these trees am. It announcing alteration at surrounded
                                    </p>
                                </div>
                                <div class="bottom">
                                    <i class="flaticon-tractor-1"></i>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="item">
                        <div class="thumb">
                            <img src="frontend-assets/img/services/3.jpg" alt="Thumb">
                        </div>
                        <div class="info">
                            <div class="content">
                                <div class="top-info">
                                    <h4><a href="#">Civil Engineering</a></h4>
                                    <p>
                                        Guest tiled he quick by so these trees am. It announcing alteration at surrounded
                                    </p>
                                </div>
                                <div class="bottom">
                                    <i class="flaticon-mayan-pyramid"></i>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="item">
                        <div class="thumb">
                            <img src="frontend-assets/img/services/4.jpg" alt="Thumb">
                        </div>
                        <div class="info">
                            <div class="content">
                                <div class="top-info">
                                    <h4><a href="#">Bridge Construction</a></h4>
                                    <p>
                                        Guest tiled he quick by so these trees am. It announcing alteration at surrounded
                                    </p>
                                </div>
                                <div class="bottom">
                                    <i class="flaticon-bridge-2"></i>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="item">
                        <div class="thumb">
                            <img src="frontend-assets/img/services/5.jpg" alt="Thumb">
                        </div>
                        <div class="info">
                            <div class="content">
                                <div class="top-info">
                                    <h4><a href="#">Mechanical Engineering</a></h4>
                                    <p>
                                        Guest tiled he quick by so these trees am. It announcing alteration at surrounded
                                    </p>
                                </div>
                                <div class="bottom">
                                    <i class="flaticon-work-time"></i>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="item">
                        <div class="thumb">
                            <img src="frontend-assets/img/services/6.jpg" alt="Thumb">
                        </div>
                        <div class="info">
                            <div class="content">
                                <div class="top-info">
                                    <h4><a href="#">Power & Energy</a></h4>
                                    <p>
                                        Guest tiled he quick by so these trees am. It announcing alteration at surrounded
                                    </p>
                                </div>
                                <div class="bottom">
                                    <i class="flaticon-solar-panel"></i>
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
</div>
<!-- End Services Area -->

<!-- Start Clients Area
    ============================================= -->
<div class="clients-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 clients-box">
                <div class="clients-items owl-carousel owl-theme text-center">
                    <div class="single-item">
                        <a href="#"><img src="frontend-assets/img/clients/1.png" alt="Clients"></a>
                    </div>
                    <div class="single-item">
                        <a href="#"><img src="frontend-assets/img/clients/2.png" alt="Clients"></a>
                    </div>
                    <div class="single-item">
                        <a href="#"><img src="frontend-assets/img/clients/3.png" alt="Clients"></a>
                    </div>
                    <div class="single-item">
                        <a href="#"><img src="frontend-assets/img/clients/4.png" alt="Clients"></a>
                    </div>
                    <div class="single-item">
                        <a href="#"><img src="frontend-assets/img/clients/5.png" alt="Clients"></a>
                    </div>
                    <div class="single-item">
                        <a href="#"><img src="frontend-assets/img/clients/6.png" alt="Clients"></a>
                    </div>
                    <div class="single-item">
                        <a href="#"><img src="frontend-assets/img/clients/7.png" alt="Clients"></a>
                    </div>
                    <div class="single-item">
                        <a href="#"><img src="frontend-assets/img/clients/8.png" alt="Clients"></a>
                    </div>
                    <div class="single-item">
                        <a href="#"><img src="frontend-assets/img/clients/9.png" alt="Clients"></a>
                    </div>
                    <div class="single-item">
                        <a href="#"><img src="frontend-assets/img/clients/3.png" alt="Clients"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Clients Area -->
@endsection