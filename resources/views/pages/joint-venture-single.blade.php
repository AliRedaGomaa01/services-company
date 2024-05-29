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

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
@endsection