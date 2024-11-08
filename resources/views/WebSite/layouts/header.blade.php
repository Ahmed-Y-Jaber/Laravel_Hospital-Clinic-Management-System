<header class="main-header header-style-three">

    <!-- Header Upper -->
    <div class="header-upper">
        <div class="inner-container clearfix">

            <!--Info-->
            <div class="logo-outer">
                <div class="logo"><a href="index.html"><img src="images/logo-3.png" alt="" title=""></a></div>
            </div>

            <!--Nav Box-->
            <div class="nav-outer clearfix">
                <!--Mobile Navigation Toggler For Mobile--><div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                <nav class="main-menu navbar-expand-md navbar-light">
                    <div class="navbar-header">
                        <!-- Togg le Button -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon flaticon-menu"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">
                            <li class="current dropdown"><a href="#">الرئيسية</a>
                                <ul>
                                    <li><a href="index.html">Home page 01</a></li>
                                    <li><a href="index-2.html">Home page 02</a></li>
                                    <li><a href="index-3.html">Home page 03</a></li>
                                    <li><a href="index-4.html">Home page 04</a></li>
                                    <li class="dropdown"><a href="#">Header Styles</a>
                                        <ul>
                                            <li><a href="index.html">Header Style One</a></li>
                                            <li><a href="index-2.html">Header Style Two</a></li>
                                            <li><a href="index-3.html">Header Style Three</a></li>
                                            <li><a href="index-4.html">Header Style Four</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">من نحن</a>
                                <ul>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="team.html">Our Team</a></li>
                                    <li><a href="faq.html">Faq</a></li>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="comming-soon.html">Comming Soon</a></li>
                                </ul>
                            </li>
                            <li class="dropdown has-mega-menu"><a href="#">الصفحات</a>
                                <div class="mega-menu">
                                    <div class="mega-menu-bar row clearfix">
                                        <div class="column col-md-3 col-xs-12">
                                            <h3>About Us</h3>
                                            <ul>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="team.html">Our Team</a></li>
                                                <li><a href="faq.html">Faq</a></li>
                                                <li><a href="services.html">Services</a></li>
                                            </ul>
                                        </div>
                                        <div class="column col-md-3 col-xs-12">
                                            <h3>Doctors</h3>
                                            <ul>
                                                <li><a href="doctors.html">Doctors</a></li>
                                                <li><a href="doctors-detail.html">Doctors Detail</a></li>
                                            </ul>
                                        </div>
                                        <div class="column col-md-3 col-xs-12">
                                            <h3>Blog</h3>
                                            <ul>
                                                <li><a href="blog.html">Our Blog</a></li>
                                                <li><a href="blog-classic.html">Blog Classic</a></li>
                                                <li><a href="blog-detail.html">Blog Detail</a></li>
                                            </ul>
                                        </div>
                                        <div class="column col-md-3 col-xs-12">
                                            <h3>Shops</h3>
                                            <ul>
                                                <li><a href="shop.html">Shop</a></li>
                                                <li><a href="shop-single.html">Shop Details</a></li>
                                                <li><a href="shoping-cart.html">Cart Page</a></li>
                                                <li><a href="checkout.html">Checkout Page</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown"><a href="#">الاطباء</a>
                                <ul>
                                    <li><a href="doctors.html">Doctors</a></li>
                                    <li><a href="doctors-detail.html">Doctors Detail</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">الاقسام</a>
                                <ul>
                                    <li><a href="department.html">Department</a></li>
                                    <li><a href="department-detail.html">Department Detail</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">المقالات</a>
                                <ul>
                                    <li><a href="blog.html">Our Blog</a></li>
                                    <li><a href="blog-classic.html">Blog Classic</a></li>
                                    <li><a href="blog-detail.html">Blog Detail</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">المتجر</a>
                                <ul>
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="shop-single.html">Shop Details</a></li>
                                    <li><a href="shoping-cart.html">Cart Page</a></li>
                                    <li><a href="checkout.html">Checkout Page</a></li>
                                </ul>
                            </li>

                            <li><a href="contact.html">تواصل معنا</a></li>

{{--                             language mcamara on google--}}

                            <li class="dropdown"><a href="#">{{ LaravelLocalization::getCurrentLocaleNative() }}</a>
                                <ul>
                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        <li>
                                            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                {{ $properties['native'] }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </div>

                </nav>
                <!-- Main Menu End-->

                <!-- Main Menu End-->
                <div class="outer-box clearfix">
                    <!-- Main Menu End-->
                    <div class="nav-box">
                        <div class="nav-btn nav-toggler navSidebar-button"><span class="icon flaticon-menu-1"></span></div>
                    </div>

                    <!-- Social Box -->
                    <ul class="social-box clearfix">
                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                        <li><a href="#"><span class="fab fa-google"></span></a></li>
                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fab fa-skype"></span></a></li>
                        <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                        <li><a title="تسجيل دخول" href="{{route('dashboard.user')}}"><span class="fas fa-user"></span></a>
                    </ul>

                    <!-- Search Btn -->
                    <div class="search-box-btn"><span class="icon flaticon-search"></span></div>

                </div>
            </div>

        </div>
    </div>
    <!--End Header Upper-->

    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="index.html" class="img-responsive"><img src="images/logo-small.png" alt="" title=""></a>
            </div>

            <!--Right Col-->
            <div class="right-col pull-right">
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md">
                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                        <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
                    </div>
                </nav><!-- Main Menu End-->
            </div>

        </div>
    </div>
    <!--End Sticky Header-->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon far fa-window-close"></span></div>

        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="images/nav-logo.png" alt="" title=""></a></div>

            <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
        </nav>
    </div><!-- End Mobile Menu -->

</header>
<!-- End Main Header -->
