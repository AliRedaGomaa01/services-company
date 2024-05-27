@extends('layouts.website')

@push('meta')
    <meta name="description" content="A service company that offers services.">
@endpush

@section('title')
    Welcome
@endsection

@section('content')
    <!-- Start Banner
            ============================================= -->
    <div class="banner-area inc-top-heading">
        <div id="bootcarousel" class="carousel slide carousel-fade animate_text" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner text-light carousel-zoom">
                <div class="item active">
                    <div class="slider-thumb bg-cover" style="background-image: url(/frontend-assets/img/banner/2.jpg);">
                    </div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h3 data-animation="animated slideInRight">Let's grow together</h3>
                                            <h1 data-animation="animated slideInLeft">Build <span>innovative</span>
                                                industrial solutions</h1>
                                            <a data-animation="animated slideInUp" class="btn btn-light border btn-md"
                                                href="#">Our Services</a>
                                            <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md"
                                                href="#">Learn more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slider-thumb bg-cover" style="background-image: url(/frontend-assets/img/banner/3.jpg);">
                    </div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h3 data-animation="animated slideInUp">Since 1985</h3>
                                            <h1 data-animation="animated slideInDown">Expert knowledge in
                                                <span>Technical</span> Solutions
                                            </h1>
                                            <a data-animation="animated slideInUp" class="btn btn-light border btn-md"
                                                href="#">Our Services</a>
                                            <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md"
                                                href="#">Learn more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slider-thumb bg-cover" style="background-image: url(/frontend-assets/img/banner/21.jpg);">
                    </div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h3 data-animation="animated slideInLeft">Expert in</h3>
                                            <h1 data-animation="animated slideInRight">Empowering oil Refiling &
                                                <span>Processing</span> plants
                                            </h1>
                                            <a data-animation="animated slideInUp" class="btn btn-light border btn-md"
                                                href="#">Our Services</a>
                                            <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md"
                                                href="#">Learn more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control shadow fixed" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control shadow fixed" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- End Banner -->

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
                            <a href="https://www.youtube.com/watch?v=owhuBrGIOsE"
                                class="popup-youtube light video-play-button item-center">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 info-content">
                        <h4>About Our company</h4>
                        <h1>We offer product design, <strong>manufacturing and engineering</strong> management services.
                        </h1>
                        <p>
                            Seven world think timed while her. Spoil large oh he rooms on since an. Am up unwilling
                            eagerness perceived incommode. Perceived end knowledge certainly day sweetness why cordially.
                            Ask quick six seven offer see among. Handsome met debating sir dwelling age material.
                        </p>
                        <p>
                            Sentiments two occasional affronting solicitude travelling and one contrasted. Fortune day out
                            married parties. Happiness remainder joy but earnestly for off. Took sold add play may none him
                            few. If as increasing contrasted entreaties be.
                        </p>
                        <a href="#" class="btn btn-theme effect btn-md" data-animation="animated slideInUp">Read
                            More</a>
                    </div>
                </div>
                <!-- End About -->
            </div>
        </div>
    </div>
    <!-- End Our About -->

    <!-- Start Why Chose Us
        ============================================= -->
    <div class="choseus-area about-area bg-gray">
        <div class="container-full">
            <div class="row">
                <div class="content-box">
                    <div class="col-md-6 thumb bg-cover" style="background-image: url(frontend-assets/img/banner/1.jpg);">
                    </div>
                    <div class="col-md-6 info">
                        <h4>Why Choose Us</h4>
                        <h2>The Best Solution for all Industrial & Factory Businesses</h2>
                        <p>
                            Dependent certainty off discovery him his tolerably offending. Ham for attention remainder
                            sometimes additions recommend fat our. Direction has strangers now believing. Respect enjoyed
                            gay far exposed parlors towards. Enjoyment use tolerably dependent listening men. No peculiar in
                            handsome together unlocked do by. Article concern joy anxious did picture sir her. Although
                            desirous not recurred disposed off shy you numerous securing.
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

    <!-- Start Testimonials
            ============================================= -->
    <div class="testimonials-area bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading less-info text-center">
                        <h4>Customer Review</h4>
                        <h2>What People Say</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-items testimonial-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="/frontend-assets/img/team/6.jpg" alt="Thumb">
                            </div>
                            <div class="info">
                                <p>
                                    Awesome so many in hung easy find well up. So of exquisite my an explained remainder.
                                    Dashwood denoting securing be on perceive my laughing so.
                                </p>
                                <h4>Ahel Natasha</h4>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="/frontend-assets/img/team/7.jpg" alt="Thumb">
                            </div>
                            <div class="info">
                                <p>
                                    Limits marked led silent dining her she far. Sir but elegance marriage dwelling likewise
                                    position old pleasure men. Dissimilar themselves simplicity.
                                </p>
                                <h4>Jessica Jones</h4>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="/frontend-assets/img/team/8.jpg" alt="Thumb">
                            </div>
                            <div class="info">
                                <p>
                                    Awesome so many in hung easy find well up. So of exquisite my an explained remainder.
                                    Dashwood denoting securing be on perceive my laughing so.
                                </p>
                                <h4>Mark Henri</h4>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials -->

    <!-- Start Achivement
            ============================================= -->
    <div class="achivement-area bg-fixed shadow dark text-light"
        style="background-image: url(frontend-assets/img/banner/2.jpg);">
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
