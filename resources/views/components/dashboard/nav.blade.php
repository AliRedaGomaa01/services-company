<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top navbar-semi-dark">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-lg-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                        href="#"><i class="feather icon-menu font-large-1"></i></a></li>
                <li class="nav-item mr-auto"><a class="navbar-brand"
                        href="{{ route('dashboard.index') }}"><img class="brand-logo"
                            alt="stack admin logo" src="/app-assets/images/logo/stack-logo-light.png">
                        <h2 class="brand-text">Dashboard</h2>
                    </a></li>
                <li class="nav-item d-none d-lg-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0"
                        data-toggle="collapse"><i class="toggle-icon feather icon-toggle-right font-medium-3 white"
                            data-ticon="feather.icon-toggle-right"></i></a></li>
                <li class="nav-item d-lg-none"><a class="nav-link open-navbar-container" data-toggle="collapse"
                        data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i
                                class="ficon feather icon-maximize"></i></a></li>
                    {{-- <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i
                                class="ficon feather icon-search"></i></a> --}}
                        {{-- <div class="search-input">
                            <input class="input" type="text" placeholder="Explore Stack...">
                            <div class="search-input-close"><i class="feather icon-x"></i></div>
                            <ul class="search-list"></ul>
                        </div> --}}
                    </li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link"
                            id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="flag-icon flag-icon-{{ app()->currentLocale() == 'ar' ? 'sa' : 'us'}}"></i>
                            <span
                                class="selected-language"></span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                            <a class="dropdown-item" href="#" data-language="en"><i
                                    class="flag-icon flag-icon-us"></i>
                                        English</a>
                            <a class="dropdown-item" href="#" data-language="ar"><i
                                    class="flag-icon flag-icon-sa"></i>
                                        العربية</a>
                        </div>
                    </li>
                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link"
                            href="#" data-toggle="dropdown">
                            <div class="avatar avatar-online"><img
                                    src="/app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i>
                            </div><span class="user-name">Admin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            {{-- <a class="dropdown-item"
                                href="user-profile.html"><i class="feather icon-user"></i> Edit Profile</a> --}}
                            <a class="dropdown-item"
                                href="login-with-bg-image.html"><i class="feather icon-power"></i> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
