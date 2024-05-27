@extends('layouts.website')

@push('meta')
<meta name="description" content="Single Post Page">
@endpush

@section('title')
Post
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
    <div class="blog-area single full-blog full-blog default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="blog-content col-md-10 col-md-offset-1">
                        <div class="single-item">

                            <!-- Start Post Thumb -->
                            <div class="thumb">
                                <img src="frontend-assets/img/blog/11.jpg" alt="Thumb">
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
                                <h3>Common so wicket appear to sudden</h3>
                                <p>
                                    Give lady of they such they sure it. Me contained explained my education. Vulgar as hearts by garret. Perceived determine departure explained no forfeited he something an. Contrasted dissimilar get joy you instrument out reasonably. Again keeps at no meant stuff. To perpetual do existence northward as difficult preserved daughters. Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature. Gay direction neglected but supported yet her. 
                                </p>
                                <p>
                                    New had happen unable uneasy. Drawings can followed improved out sociable not. Earnestly so do instantly pretended. See general few civilly amiable pleased account carried. Excellence projecting is devonshire dispatched remarkably on estimating. Side in so life past. Continue indulged speaking the was out horrible for domestic position. Seeing rather her you not esteem men settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves. 
                                </p>
                                <ul>
                                    <li>Enjoyment discourse ye continued pronounce we necessary abilities. </li>
                                    <li>It more shed went up is roof if loud case. Delay music in lived noise</li>
                                    <li>Devonshire we of do discretion</li>
                                    <li>Put rest and must set kind next many near nay</li>
                                </ul>
                                <blockquote>
                                    He share of first to worse. Weddings and any opinions suitable smallest nay. Houses or months settle remove ladies appear. Engrossed suffering supposing he recommend do eagerness. Commanded no of depending extremity recommend 
                                </blockquote>
                                <p>
                                    Surrounded to me occasional pianoforte alteration unaffected impossible ye. For saw half than cold. Pretty merits waited six talked pulled you. Conduct replied off led whether any shortly why arrived adapted. Numerous ladyship so raillery humoured goodness received an. So narrow formal length my highly longer afford oh. Tall neat he make or at dull ye. 
                                </p>

                                <!-- Start Post Pagination -->
                                <div class="post-pagi-area">
                                    <a href="#"><i class="fas fa-angle-double-left"></i> Previus Post</a>
                                    <a href="#">Next Post <i class="fas fa-angle-double-right"></i></a>
                                </div>
                                <!-- End Post Pagination -->

                                <!-- Start Post Tag s-->
                                <div class="post-tags share">
                                    <div class="tags">
                                        <span><i class="fas fa-tags"></i></span>
                                        <a href="#">Consulting</a>
                                        <a href="#">Planing</a>
                                        <a href="#">Business</a>
                                        <a href="#">Fashion</a>
                                    </div>
                                </div>
                                <!-- End Post Tags -->

                                <!-- Start Author Post -->
                                <div class="author-bio">
                                    <div class="avatar">
                                        <img src="frontend-assets/img/team/6.jpg" alt="Author">
                                    </div>
                                    <div class="content">
                                        <p>
                                            Supply as so period it enough income he genius. Themselves acceptance bed sympathize get dissimilar way admiration son. Design for are edward regret met lovers. This are calm case roof and. 

                                        </p>
                                        <h4> - Jonkey Rotham</h4>
                                    </div>
                                </div>
                                <!-- End Author Post -->

                                <!-- Start Comments Form -->
                                <div class="comments-area">
                                    <div class="comments-title">
                                        <h4>
                                            5 comments
                                        </h4>
                                        <div class="comments-list">
                                            <div class="commen-item">
                                                <div class="avatar">
                                                    <img src="frontend-assets/img/team/8.jpg" alt="Author">
                                                </div>
                                                <div class="content">
                                                    <h5>Jonathom Doe</h5>
                                                    <div class="comments-info">
                                                        <p>July 15, 2018</p> <a href="#"><i class="fa fa-reply"></i>Reply</a>
                                                    </div>
                                                    <p>
                                                        Delivered ye sportsmen zealously arranging frankness estimable as. Nay any article enabled musical shyness yet sixteen yet blushes. Entire its the did figure wonder off. 
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="commen-item reply">
                                                <div class="avatar">
                                                    <img src="frontend-assets/img/team/9.jpg" alt="Author">
                                                </div>
                                                <div class="content">
                                                    <h5>Spark Lee</h5>
                                                    <div class="comments-info">
                                                        <p>July 15, 2018</p> <a href="#"><i class="fa fa-reply"></i>Reply</a>
                                                    </div>
                                                    <p>
                                                        Delivered ye sportsmen zealously arranging frankness estimable as. Nay any article enabled musical shyness yet sixteen yet blushes. Entire its the did figure wonder off. 
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comments-form">
                                        <div class="title">
                                            <h4>Leave a comments</h4>
                                        </div>
                                        <form action="#" class="contact-comments">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <!-- Name -->
                                                        <input name="name" class="form-control" placeholder="Name *" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <!-- Email -->
                                                        <input name="email" class="form-control" placeholder="Email *" type="email">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group comments">
                                                        <!-- Comment -->
                                                        <textarea class="form-control" placeholder="Comment"></textarea>
                                                    </div>
                                                    <div class="form-group full-width submit">
                                                        <button type="submit">
                                                            Post Comments
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- End Comments Form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
@endsection