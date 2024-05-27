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
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(frontend-assets/img/banner/24.jpg);">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 col-md-12">
                  <h1>Blog Standard</h1>
                  <ul class="breadcrumb">
                      <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                      <li><a href="#">Blog</a></li>
                      <li class="active">Standard</li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
  <!-- End Breadcrumb -->

  <!-- Start Blog
  ============================================= -->
  <div class="blog-area full-blog blog-standard full-blog default-padding">
      <div class="container">
          <div class="row">
              <div class="blog-items">
                  <div class="blog-content col-md-10 col-md-offset-1">
                      <!-- Single Item -->
                      <div class="single-item">
                          <div class="thumb">
                              <a href="#">
                                  <img src="frontend-assets/img/blog/11.jpg" alt="Thumb">
                              </a>
                              <div class="author">
                                  <div class="thumb">
                                      <img src="frontend-assets/img/team/7.jpg" alt="Author">
                                  </div>
                                  <div class="meta">
                                      <h5>Admin</h5>
                                      <span>25 Mar, 2019</span>
                                  </div>
                              </div>
                          </div>
                          <div class="info">
                              <h3>
                                  <a href="#">Longer mrs sudden talent become</a>
                              </h3>
                              <p>
                                  On assistance he cultivated considered frequently. Person how having tended direct own day man. Saw sufficient indulgence one own you inquietude sympathize. 
                              </p>
                              <a href="#">Read More <i class="fas fa-arrow-right"></i></a>
                          </div>
                      </div>
                      <!-- End Single Item -->
                      <!-- Single Item -->
                      <div class="single-item">
                          <div class="thumb">
                              <a href="#">
                                  <img src="frontend-assets/img/blog/22.jpg" alt="Thumb">
                              </a>
                              <div class="author">
                                  <div class="thumb">
                                      <img src="frontend-assets/img/team/8.jpg" alt="Author">
                                  </div>
                                  <div class="meta">
                                      <h5>Admin</h5>
                                      <span>12 Apr, 2019</span>
                                  </div>
                              </div>
                          </div>
                          <div class="info">
                              <h3>
                                  <a href="#">Conduct esteems cottage pasture we winding</a>
                              </h3>
                              <p>
                                  On assistance he cultivated considered frequently. Person how having tended direct own day man. Saw sufficient indulgence one own you inquietude sympathize. 
                              </p>
                              <a href="#">Read More <i class="fas fa-arrow-right"></i></a>
                          </div>
                      </div>
                      <!-- End Single Item -->
                      <!-- Single Item -->
                      <div class="single-item">
                          <div class="thumb">
                              <a href="#">
                                  <img src="frontend-assets/img/blog/33.jpg" alt="Thumb">
                              </a>
                              <div class="author">
                                  <div class="thumb">
                                      <img src="frontend-assets/img/team/9.jpg" alt="Author">
                                  </div>
                                  <div class="meta">
                                      <h5>Admin</h5>
                                      <span>19 Nov, 2019</span>
                                  </div>
                              </div>
                          </div>
                          <div class="info">
                              <h3>
                                  <a href="#">Considered discovered projecting</a>
                              </h3>
                              <p>
                                  On assistance he cultivated considered frequently. Person how having tended direct own day man. Saw sufficient indulgence one own you inquietude sympathize. 
                              </p>
                              <a href="#">Read More <i class="fas fa-arrow-right"></i></a>
                          </div>
                      </div>
                      <!-- End Single Item -->
                      
                      <!-- Pagination -->
                      <div class="row">
                          <div class="col-md-12 pagi-area">
                              <nav aria-label="navigation">
                                  <ul class="pagination">
                                      <li><a href="#"><i class="fas fa-arrow-left"></i></a></li>
                                      <li class="active"><a href="#">1</a></li>
                                      <li><a href="#">2</a></li>
                                      <li><a href="#">3</a></li>
                                      <li><a href="#"><i class="fas fa-arrow-right"></i></a></li>
                                  </ul>
                              </nav>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- End Blog -->
@endsection