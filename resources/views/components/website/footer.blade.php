<!-- Start Footer 
============================================= -->
<footer class="bg-dark text-light border-right">
    <div class="container">
        <div class="row ">
            <div class="f-items ">
                <!-- Single Item -->
                <div class="col-md-3 col-sm-6 equal-height item">
                    <div class="f-item about">
                        <h4>About</h4>
                        <ul>
                            <li>
                                <i class="fas fa-envelope"></i> 
                                <p>Email <span><a href="mailto:support@validtheme.com">support@validtheme.com</a></span></p>
                            </li>
                            <li>
                                <i class="fas fa-map"></i> 
                                <p>Office <span>123 6th St. Melbourne, FL 32904</span></p>
                            </li>
                        </ul>
                        <div class="bottom">
                            <h4>Call Us Today</h4>
                            <span>+123 456 7890 </span>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-3 col-sm-6 equal-height item">
                    <div class="f-item link">
                        <h4>Follow Us</h4>
                        <ul>
                            <li>
                                <a href="#"> Twitter</a>
                            </li>
                            <li>
                                <a href="#">facebook</a>
                            </li>
                            <li>
                                <a href="#">Instagram</a>
                            </li>
                            <li>
                                <a href="#">Linkedin</a>
                            </li>
                        </ul>
                    <div class="bottom" style="margin-top: 2rem ">
                        <h4>Send A Message</h4>
                        <ul>
                            <li>
                                <a href="#" style="border:0px">Whatsapp</a>
                            </li>
                            <li>
                                <a href="#" style="border:0px">Email</a>
                            </li>
                        </ul>
                    </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-3 col-sm-6 equal-height item">
                    <div class="f-item link">
                        <h4>Navigation Links</h4>
                        <ul>
                            @foreach ( __('website.navItems') as $routeName => $title)
                                <li class="">
                                    <a href="{{ route($routeName) }}" class="{{ request()->routeIs($routeName) ? 'active' : '' }}"> {{ $title }} </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-3 col-sm-6 equal-height item">
                    <div class="f-item address">
                        <h4>Opening Hours</h4>
                        <ul>
                            <li> <span> Mon - Tues :  </span>
                            <div class="pull-right"> 6.00 am - 10.00 pm </div>
                            </li>
                            <li> <span> Wednes - Thurs :</span>
                            <div class="pull-right"> 8.00 am - 6.00 pm </div>
                            </li>
                            <li> <span> Sun : </span>
                            <div class="pull-right closed"> Closed </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
    <!-- Start Footer Bottom -->
    <div class="footer-bottom bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; Copyright 2019. All Rights Reserved by <a href="https://attractionme.net">ATTRACTIONME</a></p>
                </div>
                <div class="col-md-6 text-right link">
                    <ul>
                        <li>
                            <a href="#">Terms of user</a>
                        </li>
                        <li>
                            <a href="#">Support</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Bottom -->
</footer>
<!-- End Footer -->