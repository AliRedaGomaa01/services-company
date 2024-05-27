@extends('layouts.website')

@push('meta')
<meta name="description" content="FAQ Page">
@endpush

@section('title')
FAQ
@endsection

@section('content')

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(frontend-assets/img/banner/22.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Qustion & Answer</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">faq</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Faq
    ============================================= -->
    <div class="faq-area contact-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 thumb">
                    <img src="frontend-assets/img/about/2.jpg" alt="Thumb">
                </div>
                <!-- Start Faq -->
                <div class="col-md-6 faq-area">
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
    <!-- End Faq Area -->
@endsection