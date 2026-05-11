<!-- HEADER START -->
        <header class="site-header header-style-1  mobile-sider-drawer-menu">

            <div class="top-bar">
                <div class="container">
                    <div class="wt-topbar-right">
                        <ul class="list-unstyled e-p-bx">
                            <li><i class="fa fa-envelope"></i>mail@thewebmax.com</li>
                            <li><i class="fa fa-phone"></i>(654) 321-7654</li>
                        </ul>
                        <ul class="social-bx list-inline">
                            <li><a href="https://www.facebook.com/" class="fa-brands fa-facebook-f"></a></li>
                            <li><a href="https://x.com/" class="fa-brands fa-x-twitter"></a></li>
                            <li><a href="https://www.linkedin.com/" class="fa-brands fa-linkedin-in"></a></li>
                            <li><a href="https://www.pinterest.com/" class="fa-brands fa-pinterest-p"></a></li>
                            <li><a href="https://www.behance.net/" class="fa-brands fa-behance"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Search Link -->

            <!-- Search Form -->

            <div class="sticky-header main-bar-wraper">
                <div class="main-bar bg-white">
                    <div class="container">
                        <div class="logo-header">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('assets/images/logo.png') }}" width="216" height="37" alt="" >
                            </a>
                        </div>

                        <!-- MAIN Vav -->
                        <div class="header-nav navbar-collapse collapse">
                            <ul class="nav navbar-nav">

                                <!-- Home -->
                                <li class="active">
                                    <a href="{{ url('/') }}">Home</a>
                                </li>

                                <!-- About -->
                                <li>
                                    <a href="{{ url('/about') }}">About</a>
                                </li>

                                <!-- services -->
                                <li>
                                    <a href="{{ url('/services') }}">Services</a>
                                </li>

                                <!-- Products -->
                                <li>
                                    <a href="{{ url('/products') }}">Products <i class="fa fa-chevron-down"></i></a>

                                    <ul class="sub-menu">
                                        <li><a href="{{ url('/category/skincare') }}">Skincare</a></li>
                                        <li><a href="{{ url('/category/makeup') }}">Makeup</a></li>
                                        <li><a href="{{ url('/category/haircare') }}">Hair Care</a></li>
                                        <li><a href="{{ url('/category/bodycare') }}">Body Care</a></li>
                                        <li><a href="{{ url('/category/perfume') }}">Perfume</a></li>
                                        <li><a href="{{ url('/category/supplements') }}">Supplements</a></li>
                                    </ul>
                                </li>

                                <!-- Projects -->
                                <li class="has-mega-menu">
                                    <a href="javascript:;">Projects <i class="fa fa-chevron-down"></i></a>
                                    <ul class="mega-menu">
                                        <li style="width: 20%;">
                                            <div class="wt-box p-a10 text-center">
                                                <div class="wt-media">
                                                    <a href="{{ url('/projects/hopeexa') }}">
                                                        <img src="{{ asset('assets/images/company/hopeexa.png') }}" alt="Hopeexa" style="max-height: 40px; object-fit: contain;">
                                                    </a>
                                                </div>
                                                <div class="wt-info p-t10">
                                                    <h6 class="wt-title m-b0"><a href="{{ url('/projects/hopeexa') }}">Hopeexa.com</a></h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li style="width: 20%;">
                                            <div class="wt-box p-a10 text-center">
                                                <div class="wt-media">
                                                    <a href="{{ url('/projects/sitvly') }}">
                                                        <img src="{{ asset('assets/images/company/sitvly.png') }}" alt="Sitvly" style="max-height: 40px; object-fit: contain;">
                                                    </a>
                                                </div>
                                                <div class="wt-info p-t10">
                                                    <h6 class="wt-title m-b0"><a href="{{ url('/projects/sitvly') }}">Sitvly.com</a></h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li style="width: 20%;">
                                            <div class="wt-box p-a10 text-center">
                                                <div class="wt-media">
                                                    <a href="{{ url('/projects/bookopa') }}">
                                                        <img src="{{ asset('assets/images/company/bookopa.png') }}" alt="Bookopa" style="max-height: 40px; object-fit: contain;">
                                                    </a>
                                                </div>
                                                <div class="wt-info p-t10">
                                                    <h6 class="wt-title m-b0"><a href="{{ url('/projects/bookopa') }}">Bookopa.com</a></h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li style="width: 20%;">
                                            <div class="wt-box p-a10 text-center">
                                                <div class="wt-media">
                                                    <a href="{{ url('/projects/martopa') }}">
                                                        <img src="{{ asset('assets/images/company/martopa.png') }}" alt="Martopa" style="max-height: 40px; object-fit: contain;">
                                                    </a>
                                                </div>
                                                <div class="wt-info p-t10">
                                                    <h6 class="wt-title m-b0"><a href="{{ url('/projects/martopa') }}">Martopa.com</a></h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li style="width: 20%;">
                                            <div class="wt-box p-a10 text-center">
                                                <div class="wt-media">
                                                    <a href="{{ url('/projects/viewvvly') }}">
                                                        <img src="{{ asset('assets/images/company/vievvly.png') }}" alt="Viewvly" style="max-height: 40px; object-fit: contain;">
                                                    </a>
                                                </div>
                                                <div class="wt-info p-t10">
                                                    <h6 class="wt-title m-b0"><a href="{{ url('/projects/viewvvly') }}">Viewvly.com</a></h6>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                <!-- Pricing -->
                                <li>
                                    <a href="{{ url('/Pricing') }}">Pricing</a>
                                </li>

                                <!-- Blog -->
                                <li>
                                    <a href="{{ url('/blog') }}">Blog</a>
                                </li>



                                <!-- Contact -->
                                <li>
                                    <a href="{{ url('/contact') }}">Contact</a>
                                </li>

                            </ul>
                        </div>

                        <div class="extra-nav">
                            <div class="extra-cell">
                                <a href="#search" class="site-search-btn"><i class="fa fa-search"></i></a>
                            </div>
                        </div>

                        <!-- NAV Toggle Button -->
                        <button id="mobile-side-drawer" data-target=".navbar-collapse" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar icon-bar-first"></span>
                            <span class="icon-bar icon-bar-two"></span>
                            <span class="icon-bar icon-bar-three"></span>
                        </button>
                        <!-- SITE Search -->
                        <div id="search">
                            <span class="close"></span>
                            <form role="search" id="searchform" action="https://pureexa.com/shop" method="get" class="radius-xl">
                                <div class="input-group">
                                    <input value="" name="q" type="search" placeholder="Type to search">
                                    <span class="input-group-btn"><button type="button" class="search-btn"><i class="fa fa-search"></i></button></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </header>
        <!-- HEADER END -->
