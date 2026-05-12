 <!-- FOOTER START -->
        <footer class="site-footer footer-light">
            <!-- COLL-TO ACTION START -->
            <div class="section-full overlay-wraper site-bg-primary" style="background-image:url({{ asset('images/background/bg-7.png') }});">

            <div class="section-content ">
                <!-- COLL-TO ACTION START -->
                	{{-- <div class="wt-subscribe-box">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-sm-8">
                                    <div class="call-to-action-left p-tb20 p-r50">
                                        <h3 class="text-uppercase m-b10">We are ready to build your dream tell us more about your project</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor.</p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="call-to-action-right p-tb30">
                                        <a href="contact-1.html" class="site-button-secondry text-uppercase radius-sm font-weight-600">
                                            Contact us
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>


            <!-- FOOTER BLOCKES START -->
            <div class="footer-top overlay-wraper">
                <div class="overlay-main"></div>
                <div class="container">
                    <div class="row">
                        <!-- ABOUT COMPANY -->
                        <div class="col-lg-3 col-md-6">
                            <div class="widget widget_about">
                                <h4 class="widget-title">About Company</h4>
                                <div class="logo-footer clearfix p-b15">
                                    <a href="{{ url('/') }}"><img src="{{ asset('assets/images/logo.png') }}" width="230" height="67" alt=""></a>
                                </div>
                                <p>Pureexa is your ultimate sanctuary for wellness and beauty. We integrate traditional rituals with modern aesthetic science to rejuvenate your body, mind, and soul. Experience a world of tranquility and radiant health with us.
                                </p>                            </div>
                        </div>
                        <!-- RECENT POSTS -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="widget recent-posts-entry-date">
                                <h4 class="widget-title">Recent Posts</h4>
                                <div class="widget-post-bx">
                                    <div class="bdr-light-blue widget-post clearfix  bdr-b-1 m-b10 p-b10">
                                        <div class="wt-post-date text-center text-uppercase text-white">
                                            <strong>15</strong>
                                            <span>May</span>
                                        </div>
                                        <div class="wt-post-info">
                                            <div class="wt-post-header">
                                                <h3 class="post-title"><a href="{{ route('blog-details') }}">The Benefits of Regular Massage</a></h3>
                                            </div>
                                            <div class="wt-post-meta">
                                                <ul>
                                                    <li class="post-author"><i class="fa fa-user"></i>By Admin</li>
                                                    <li class="post-comment"><i class="fa fa-comments"></i> 12</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bdr-light-blue widget-post clearfix  bdr-b-1 m-b10 p-b10">
                                        <div class="wt-post-date text-center text-uppercase text-white">
                                            <strong>12</strong>
                                            <span>May</span>
                                        </div>
                                        <div class="wt-post-info">
                                            <div class="wt-post-header">
                                                <h3 class="post-title"><a href="{{ route('blog-details') }}">Top 5 Skin Care Tips for Summer</a></h3>
                                            </div>
                                            <div class="wt-post-meta">
                                                <ul>
                                                    <li class="post-author"><i class="fa fa-user"></i>By Admin</li>
                                                    <li class="post-comment"><i class="fa fa-comments"></i> 08</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bdr-light-blue widget-post clearfix  bdr-b-1 m-b10 p-b10">
                                        <div class="wt-post-date text-center text-uppercase text-white">
                                            <strong>10</strong>
                                            <span>May</span>
                                        </div>
                                        <div class="wt-post-info">
                                            <div class="wt-post-header">
                                                <h3 class="post-title"><a href="{{ route('blog-details') }}">Discover the Power of Aromatherapy</a></h3>
                                            </div>
                                            <div class="wt-post-meta">
                                                <ul>
                                                    <li class="post-author"><i class="fa fa-user"></i>By Admin</li>
                                                    <li class="post-comment"><i class="fa fa-comments"></i> 15</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- USEFUL LINKS -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="widget widget_services">
                                <h4 class="widget-title">Useful links</h4>
                                <ul>
                                    <li><a href="{{ route('about') }}">About</a></li>
                                    <li><a href="{{ route('pricing') }}">Pricing</a></li>
                                    <li><a href="{{ route('services') }}">Services</a></li>
                                    <li><a href="{{ route('products') }}">Products</a></li>
                                    <li><a href="{{ route('project') }}">Projects</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- NEWSLETTER -->
                        <div class="col-lg-3 col-md-6">
                            <div class="widget widget_newsletter">
                                <h4 class="widget-title">Newsletter</h4>
                                <div class="newsletter-bx">
                                    <form role="search" method="post">
                                        <div class="input-group">
                                        <input name="news-letter" class="form-control" placeholder="ENTER YOUR EMAIL" type="text">
                                        <span class="input-group-btn">
                                            <button type="submit" class="site-button"><i class="fa-regular fa-paper-plane"></i></button>
                                        </span>
                                    </div>
                                     </form>
                                </div>
                            </div>
                            <!-- SOCIAL LINKS -->
                            <div class="widget widget_social_inks">
                                <h4 class="widget-title">Social Links</h4>
                                <ul class="social-icons social-square social-darkest">
                                    <li><a href="https://www.facebook.com/" class="fa-brands fa-facebook-f"></a></li>
                                    <li><a href="https://x.com/" class="fa-brands fa-x-twitter"></a></li>
                                    <li><a href="https://www.linkedin.com/" class="fa-brands fa-linkedin-in"></a></li>
                                    <li><a href="https://www.pinterest.com/" class="fa-brands fa-pinterest-p"></a></li>
                                    <li><a href="https://www.behance.net/" class="fa-brands fa-behance"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FOOTER COPYRIGHT -->
            <div class="footer-bottom overlay-wraper">
                <div class="overlay-main"></div>
                <div class="constrot-strip"></div>
                <div class="container p-t30">
                    <div class="row ftr-btm">
                        <div class="wt-footer-bot-left">
                            <span class="copyrights-text">© 2026 Pureexa. All Rights Reserved.</span>
                        </div>
                        <div class="wt-footer-bot-right">
                            <ul class="copyrights-nav pull-right">
                                <li><a href="{{ route('terms-conditions') }}">Terms & Condition</a></li>
                                <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->
