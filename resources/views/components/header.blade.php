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

                                <!-- Services -->
                                <li>
                                    <a href="javascript:;">Products <i class="fa fa-chevron-down"></i></a>

                                    <ul class="sub-menu">
                                        <li><a href="{{ url('/category/skincare') }}">Skincare</a></li>
                                        <li><a href="{{ url('/category/makeup') }}">Makeup</a></li>
                                        <li><a href="{{ url('/category/haircare') }}">Hair Care</a></li>
                                        <li><a href="{{ url('/category/bodycare') }}">Body Care</a></li>
                                        <li><a href="{{ url('/category/perfume') }}">Perfume</a></li>
                                        <li><a href="{{ url('/category/supplements') }}">Supplements</a></li>
                                    </ul>
                                </li>

                                <!-- Brands -->
                                <li>
                                    <a href="javascript:;">Brands <i class="fa fa-chevron-down"></i></a>

                                    <ul class="sub-menu">
                                        <li><a href="{{ url('/brand/ordinary') }}">The Ordinary</a></li>
                                        <li><a href="{{ url('/brand/cerave') }}">CeraVe</a></li>
                                        <li><a href="{{ url('/brand/cetaphil') }}">Cetaphil</a></li>
                                        <li><a href="{{ url('/brand/beauty-of-joseon') }}">Beauty Of Joseon</a></li>
                                    </ul>
                                </li>

                                <!-- Blog -->
                                <li>
                                    <a href="{{ url('/blog') }}">Blog</a>
                                </li>

                                <!-- Offers -->
                                <li>
                                    <a href="{{ url('/offers') }}">Offers</a>
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
                            <div class="extra-cell">
                                <a href="javascript:;" class="wt-cart cart-btn dropdown-toggle" title="Your Cart" id="ID-MSG_dropdown" data-bs-toggle="dropdown">
                                    <span class="link-inner">
                                        <span class="woo-cart-total"> </span>
                                        <span class="woo-cart-count">
                                            <span class="shopping-bag wcmenucart-count ">4</span>
                                        </span>
                                    </span>
                                </a>

                                <div class="dropdown-menu cart-dropdown-item-wraper">
                                    <div class="nav-cart-content">

                                        <div class="nav-cart-items p-a15">
                                            <div class="nav-cart-item clearfix">
                                                <div class="nav-cart-item-image">
                                                    <a href="#"><img src="{{ asset('assets/images/cart/pic-1.jpg') }}" alt="p-1"></a>
                                                </div>
                                                <div class="nav-cart-item-desc">
                                                    <a href="#">Safety helmet</a>
                                                    <span class="nav-cart-item-price"><strong>2</strong> x $19.99</span>
                                                    <a href="#" class="nav-cart-item-quantity">x</a>
                                                </div>
                                            </div>
                                            <div class="nav-cart-item clearfix">
                                                <div class="nav-cart-item-image">
                                                    <a href="#"><img src="{{ asset('assets/images/cart/pic-2.jpg') }}" alt="p-2"></a>
                                                </div>
                                                <div class="nav-cart-item-desc">
                                                    <a href="#">Hammer drill machine</a>
                                                    <span class="nav-cart-item-price"><strong>1</strong> x $24.99</span>
                                                    <a href="#" class="nav-cart-item-quantity">x</a>
                                                </div>
                                            </div>
                                            <div class="nav-cart-item clearfix">
                                                <div class="nav-cart-item-image">
                                                    <a href="#"><img src="{{ asset('assets/images/cart/pic-3.jpg') }}" alt="p-1"></a>
                                                </div>
                                                <div class="nav-cart-item-desc">
                                                    <a href="#">Safety helmet</a>
                                                    <span class="nav-cart-item-price"><strong>2</strong> x $19.99</span>
                                                    <a href="#" class="nav-cart-item-quantity">x</a>
                                                </div>
                                            </div>
                                            <div class="nav-cart-item clearfix">
                                                <div class="nav-cart-item-image">
                                                    <a href="#"><img src="{{ asset('assets/images/cart/pic-4.jpg') }}" alt="p-2"></a>
                                                </div>
                                                <div class="nav-cart-item-desc">
                                                    <a href="#">Hammer drill machine</a>
                                                    <span class="nav-cart-item-price"><strong>1</strong> x $24.99</span>
                                                    <a href="#" class="nav-cart-item-quantity">x</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nav-cart-title p-tb10 p-lr15 clearfix">
                                            <h4  class="pull-left m-a0">Subtotal:</h4>
                                            <h5 class="pull-right m-a0">$114.95</h5>
                                        </div>
                                        <div class="nav-cart-action p-a15 clearfix">
                                            <button class="site-button  btn-block m-b15 " type="button">View Cart</button>
                                            <button class="site-button  btn-block" type="button">Checkout </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         </div>
                         <!-- NAV Toggle Button -->
                        <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
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
