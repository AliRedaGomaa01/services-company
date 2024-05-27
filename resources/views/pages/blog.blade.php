@extends('layouts.website')

@push('meta')
<meta name="description" content="Blog Page">
@endpush

@section('title')
Blog
@endsection

@section('content')
    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(frontend-assets/img/banner/24.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Blog Left Sidebar</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Blog</a></li>
                        <li class="active">Left Sidebar</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area full-blog left-sidebar full-blog default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="blog-content col-md-8">
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
                                        <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- Start Sidebar -->
                    <div class="sidebar col-md-4">
                        <aside>
                            <div class="sidebar-item search">
                                <div class="title">
                                    <h4>Search</h4>
                                </div>
                                <div class="sidebar-info">
                                    <form>
                                        <input type="text" class="form-control">
                                        <input type="submit" value="search">
                                    </form>
                                </div>
                            </div>
                            
                            <div class="sidebar-item tags">
                                <div class="title">
                                    <h4>tags</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        <li><a href="#">Fashion</a>
                                        </li>
                                        <li><a href="#">Education</a>
                                        </li>
                                        <li><a href="#">nation</a>
                                        </li>
                                        <li><a href="#">study</a>
                                        </li>
                                        <li><a href="#">health</a>
                                        </li>
                                        <li><a href="#">food</a>
                                        </li>
                                        <li><a href="#">travel</a>
                                        </li>
                                        <li><a href="#">science</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <!-- End Start Sidebar -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
@endsection