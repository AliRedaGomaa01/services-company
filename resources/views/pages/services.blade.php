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
  <div class="services-area left-info flex-less inc-thumb inc-border carousel-shadow default-padding">
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

  <!-- Start Achivement
  ============================================= -->
  <div class="achivement-area bg-fixed shadow dark text-light" style="background-image: url(frontend-assets/img/banner/2.jpg);">
      <div class="container">
          <div class="row">
              <div class="achivement-items text-center">
                  <div class="col-md-3 col-sm-6 item">
                      <div class="fun-fact">
                          <div class="timer" data-to="230" data-speed="5000"></div>
                          <span class="medium">Satisfied customers</span>
                      </div>
                  </div>
                  <div class="col-md-3 col-sm-6 item">
                      <div class="fun-fact">
                          <div class="timer" data-to="89" data-speed="5000"></div>
                          <span class="medium">Professional agents</span>
                      </div>
                  </div>
                  <div class="col-md-3 col-sm-6 item">
                      <div class="fun-fact">
                          <div class="timer" data-to="50" data-speed="5000"></div>
                          <span class="medium">Hours support</span>
                      </div>
                  </div>
                  <div class="col-md-3 col-sm-6 item">
                      <div class="fun-fact">
                          <div class="timer" data-to="2348" data-speed="5000"></div>
                          <span class="medium">Project Finished</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- End Achivement Area -->

  <!-- Start Contact
  ============================================= -->
  <div class="contact-area default-padding">
      <div class="container">
          <div class="row">
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
                  <ul>
                      <li>
                          <div class="icon">
                              <i class="fas fa-phone"></i>
                          </div>
                          <div class="info">
                              <span>Hotline</span> +99-34-8878-9989
                          </div>
                      </li>
                      <li>
                          <div class="icon">
                              <i class="fas fa-envelope-open"></i>
                          </div>
                          <div class="info">
                              <span>Emergency Email</span> info@yourdomain.com
                          </div>
                      </li>
                  </ul>
              </div>
              <!-- Start Faq -->
              <div class="col-md-6 faq-area">
                  <div class="heading">
                      <h2>Answer & Questions</h2>
                  </div>
                  <div class="acd-items acd-arrow">
                      <div class="panel-group symb" id="accordion">

                          <!-- Single Item -->
                          <div class="panel panel-default">
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                      <a data-toggle="collapse" data-parent="#accordion" href="#ac1">
                                          Do I need a business plan?
                                      </a>
                                  </h4>
                              </div>
                              <div id="ac1" class="panel-collapse collapse in">
                                  <div class="panel-body">
                                      <p>
                                          Removing welcomed civility or hastened is. Justice elderly but perhaps expense six her are another passage. Full her ten open fond walk not down.For request general express unknown are.
                                      </p>
                                      <p>
                                           He in just mr door body held john down he. So journey greatly or garrets. Draw door kept do so come on open mean. Estimating stimulated how reasonably precaution diminution she simplicity sir but.
                                      </p>
                                  </div>
                              </div>
                          </div>
                          <!-- End Single Item -->

                          <!-- Single Item -->
                          <div class="panel panel-default">
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                      <a data-toggle="collapse" data-parent="#accordion" href="#ac2">
                                          How long should a business plan be? 
                                      </a>
                                  </h4>
                              </div>
                              <div id="ac2" class="panel-collapse collapse">
                                  <div class="panel-body">
                                      <p>
                                          Removing welcomed civility or hastened is. Justice elderly but perhaps expense six her are another passage. Full her ten open fond walk not down.For request general express unknown are.
                                      </p>
                                      <p>
                                           He in just mr door body held john down he. So journey greatly or garrets. Draw door kept do so come on open mean. Estimating stimulated how reasonably precaution diminution she simplicity sir but.
                                      </p>
                                  </div>
                              </div>
                          </div>
                          <!-- End Single Item -->

                          <!-- Single Item -->
                          <div class="panel panel-default">
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                      <a data-toggle="collapse" data-parent="#accordion" href="#ac3">
                                          What goes into a business plan?
                                      </a>
                                  </h4>
                              </div>
                              <div id="ac3" class="panel-collapse collapse">
                                  <div class="panel-body">
                                      <p>
                                          Removing welcomed civility or hastened is. Justice elderly but perhaps expense six her are another passage. Full her ten open fond walk not down.For request general express unknown are.
                                      </p>
                                      <p>
                                           He in just mr door body held john down he. So journey greatly or garrets. Draw door kept do so come on open mean. Estimating stimulated how reasonably precaution diminution she simplicity sir but.
                                      </p>
                                  </div>
                              </div>
                          </div>
                          <!-- End Single Item -->

                          <!-- Single Item -->
                          <div class="panel panel-default">
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                      <a data-toggle="collapse" data-parent="#accordion" href="#ac4">
                                          Where do I start? 
                                      </a>
                                  </h4>
                              </div>
                              <div id="ac4" class="panel-collapse collapse">
                                  <div class="panel-body">
                                      <p>
                                          Removing welcomed civility or hastened is. Justice elderly but perhaps expense six her are another passage. Full her ten open fond walk not down.For request general express unknown are.
                                      </p>
                                      <p>
                                           He in just mr door body held john down he. So journey greatly or garrets. Draw door kept do so come on open mean. Estimating stimulated how reasonably precaution diminution she simplicity sir but.
                                      </p>
                                  </div>
                              </div>
                          </div>
                          <!-- Single Item -->
                      </div>
                  </div>
              </div>
              <!-- End Faq -->
          </div>
      </div>
  </div>
  <!-- End Contact Area -->

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
                              <img src="frontend-assets/img/team/6.jpg" alt="Thumb">
                          </div>
                          <div class="info">
                              <p>
                                  Awesome so many in hung easy find well up. So of exquisite my an explained remainder. Dashwood denoting securing be on perceive my laughing so.
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
                              <img src="frontend-assets/img/team/7.jpg" alt="Thumb">
                          </div>
                          <div class="info">
                              <p>
                                  Limits marked led silent dining her she far. Sir but elegance marriage dwelling likewise position old pleasure men. Dissimilar themselves simplicity. 
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
                              <img src="frontend-assets/img/team/8.jpg" alt="Thumb">
                          </div>
                          <div class="info">
                              <p>
                                  Awesome so many in hung easy find well up. So of exquisite my an explained remainder. Dashwood denoting securing be on perceive my laughing so.
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
@endsection