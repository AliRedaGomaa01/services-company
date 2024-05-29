@extends('layouts.website')

@push('meta')
<meta name="description" content="Contact Us Page">
@endpush

@section('title')
Contact Us
@endsection

@section('content')

{{-- contact us page  --}}

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(frontend-assets/img/banner/18.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Contact Us</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact
    ============================================= -->
    <div class="contact-area item-flex default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 thumb bg-cover" style="background-image: url(frontend-assets/img/about/1.jpg);"></div>
                <!-- Start Contact Form -->
                <div class="col-md-6 contact-items">
                    <div class="heading">
                        <h2>Get Free Consultation</h2>
                        <p>
                            Get a free consultation from our experts, Our customer support team help you 24/7, Don’t hesitate.
                        </p>
                    </div>
                    <form action="https://validthemes.net/site-template/buildco/frontend-assets/mail/contact.php" method="POST" class="contact-form">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group comments">
                                    <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <button type="submit" name="submit" id="submit">
                                    Send Message <i class="fa fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Alert Message -->
                        <div class="col-md-12 alert-notification">
                            <div id="message" class="alert-msg"></div>
                        </div>
                    </form>
                </div>
                <!-- End Start Contact Form -->
            </div>
        </div>
    </div>
    <!-- End Contact Area -->
    
@endsection