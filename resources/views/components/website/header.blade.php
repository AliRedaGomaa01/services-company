<!-- Start Header Top
============================================= -->
<div class="top-bar-area inc-border bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-9 address-info text-left">
                <div class="info box">
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="info">
                                <span>Address</span> California, TX 70240
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fas fa-envelope-open"></i>
                            </div>
                            <div class="info">
                                <span>Email</span> Info@gmail.com
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="info">
                                <span>Phone</span> +123 456 7890
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 social text-right">
                <ul>
                    <li>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Header Top -->

<!-- Header
============================================= -->
<header id="home">

    <!-- Start Navigation -->
    <nav class="navbar navbar-default active-border attr-border navbar-sticky bootsnav">

        <div class="container">

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/">
                    <img src="/frontend-assets/img/logo.png" class="logo" alt="Logo">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">

                    @foreach (__('website.navItems') as $routeName => $title)
                        @if ($title != 'Services')
                            <li class="dropdown text-center">
                                <a href="{{ route($routeName) }}"
                                    class="{{ request()->routeIs($routeName) ? 'active' : '' }}"
                                    style="font-size: 1.7rem"> {{ $title }} </a>
                            </li>
                        @else
                            <li class="dropdown text-center">
                                <a href="#"
                                    class="dropdown-toggle {{ request()->routeIs($routeName) ? 'active' : '' }}"
                                    data-toggle="dropdown" style="font-size: 1.7rem">{{ $title }}</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">All Services</a></li>
                                    <li><a href="#">Service One</a></li>
                                    <li><a href="#">Service Two</a></li>
                                    <li><a href="#">Service Three</a></li>
                                    <li><a href="#">Service Four</a></li>
                                </ul>
                            </li>
                        @endif
                    @endforeach

                    <li class="dropdown text-center">
                        <a href="{{ url()->current() . '?lang=' . (app()->currentLocale() == 'en' ? 'ar' : 'en') }}"
                            style="font-size: 1.7rem"> {{ app()->currentLocale() == 'en' ? 'العربية' : "English" }} </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
    <!-- End Navigation -->

</header>
<!-- End Header -->
