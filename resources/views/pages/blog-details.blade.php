@extends('layouts.app')

@section('title', 'Blog Details')

@section('content')
    <!-- CONTENT START -->
    <div class="page-content">

        <!-- INNER PAGE BANNER -->
        <div class="wt-bnr-inr overlay-wraper" style="background-image:url('{{ asset('assets/images/banner/blog-banner.jpg') }}');">
            <div class="overlay-main bg-black opacity-07"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <h2 class="text-white text-center">Blog Details</h2>
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->

        <!-- BREADCRUMB ROW -->
        <div class="bg-gray-light p-tb20">
            <div class="container">
                <ul class="wt-breadcrumb breadcrumb-style-2">
                    <li><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="{{ route('blog') }}">Blog</a></li>
                    <li>Blog Details</li>
                </ul>
            </div>
        </div>
        <!-- BREADCRUMB ROW END -->

        <!-- SECTION CONTENT START -->
        <div class="section-full p-t80 p-b50">
            <div class="container">
                <div class="wt-mid-page">

                    <!-- BLOG START -->
                    <div class="blog-post date-style-1 blog-post-single">
                        <div class="wt-post-media wt-img-effect">
                            <img src="{{ asset('assets/images/blog/default/thum1.jpg') }}" alt="">
                        </div>
                        <div class="post-description-area p-t30">
                            <div class="wt-post-title ">
                                <h3 class="post-title">The secret to flawless skin: A comprehensive guide to glowing health</h3>
                            </div>
                            <div class="wt-post-meta ">
                                <ul>
                                    <li class="post-date"> <i class="fa fa-calendar"></i><strong>20 May</strong> <span> 2026</span> </li>
                                    <li class="post-author"><i class="fa fa-user"></i>By <span>Admin</span></li>
                                    <li class="post-comment"><i class="fa fa-comments"></i> 5</li>
                                </ul>
                            </div>
                            <div class="wt-post-text">
                                <p>Achieving flawless skin is a journey that involves understanding your skin type, choosing the right products, and maintaining a consistent routine. In this comprehensive guide, we'll delve into the secrets of glowing, healthy skin and how you can transform your skincare regimen.</p>

                                <h3>1. Understanding Your Skin Type</h3>
                                <p>The first step to any successful skincare routine is identifying whether you have oily, dry, combination, or sensitive skin. Using products not suited for your skin type can lead to irritation or breakouts. For instance, those with oily skin should look for non-comedogenic formulas, while dry skin types benefit from rich, hydrating creams.</p>

                                <h3>2. The Power of Hydration</h3>
                                <p>Hydration is the cornerstone of healthy skin. Drinking plenty of water helps flush out toxins and keeps your skin looking plump and youthful. Additionally, using hydrating serums containing Hyaluronic Acid can lock in moisture, giving you that coveted "glass skin" look.</p>

                                <h3>3. Choosing the Right Products</h3>
                                <p>Quality matters when it comes to skincare. Brands like <strong>The Ordinary</strong> and <strong>CeraVe</strong> (available in our store) offer scientifically-backed ingredients that deliver real results. CeraVe's cleansers and moisturizers are excellent for maintaining the skin's natural barrier, while The Ordinary provides targeted treatments like Niacinamide and Retinol.</p>

                                <blockquote>
                                    "Beautiful skin requires commitment, not a miracle." 
                                    <div class="p-t15"><p> – Erno Laszlo</p></div>
                                </blockquote>

                                <h3>4. Consistency is Key</h3>
                                <p>You won't see results overnight. A consistent morning and evening routine is essential. Ensure you cleanse, treat, and moisturize every day. And never forget your SPF! Sun damage is one of the leading causes of premature aging and skin issues.</p>

                                <h3>5. Conclusion</h3>
                                <p>Flawless skin is within reach if you stay informed and disciplined. By prioritizing hydration, using quality products, and listening to your skin's needs, you can achieve a radiant complexion that glows from within. Stay tuned for more tips and product recommendations from Pureexa!</p>

                            </div>

                            <div class="wt-divider bg-gray-dark"><i class="icon-dot c-square"></i></div>
                            <div class="wt-box">

                                <div class="b-detail-social d-flex justify-content-between">
                                    <h4 class="tagcloud pull-left m-t5 m-b10">Share this Post:</h4>
                                    <div class="widget_social_inks">
                                        <ul class="social-icons social-md social-square social-dark m-b0">
                                            <li><a href="https://www.facebook.com/" class="fa-brands fa-facebook-f"></a></li>
                                            <li><a href="https://x.com/" class="fa-brands fa-x-twitter"></a></li>
                                            <li><a href="https://www.linkedin.com/" class="fa-brands fa-linkedin-in"></a></li>
                                            <li><a href="https://www.pinterest.com/" class="fa-brands fa-pinterest-p"></a></li>
                                            <li><a href="https://www.behance.net/" class="fa-brands fa-behance"></a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="wt-divider bg-gray-dark"><i class="icon-dot c-square"></i></div>
                        </div>
                    </div>

                    <div class="section-content p-t50">
                        <!-- TITLE START -->
                        <div class="section-head">
                            <h2 class="text-uppercase">Related Blog Post</h2>
                            <div class="wt-separator-outer">
                                <div class="wt-separator style-icon">
                                    <i class="fa fa-leaf text-black"></i>
                                    <span class="separator-left site-bg-primary"></span>
                                    <span class="separator-right site-bg-primary"></span>
                                </div>
                            </div>
                        </div>
                        <!-- TITLE END -->

                        <div class="row">
                            <!-- COLUMNS 1 -->
                            <div class="col-md-4 col-sm-6 m-b30">
                                <div class="blog-post blog-grid date-style-1">
                                    <div class="wt-post-media wt-img-effect zoom-slow">
                                        <a href="{{ route('blog-details') }}"><img src="{{ asset('assets/images/blog/grid/pic2.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="wt-post-info p-t30">
                                        <div class="wt-post-title ">
                                            <h3 class="post-title"><a href="{{ route('blog-details') }}">Top 5 Summer Hair Care Tips</a></h3>
                                        </div>
                                        <div class="wt-post-meta ">
                                            <ul>
                                                <li class="post-date"> <i class="fa fa-calendar"></i><strong>15 May</strong> </li>
                                                <li class="post-author"><i class="fa fa-user"></i>By Admin</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- COLUMNS 2 -->
                            <div class="col-md-4 col-sm-6 m-b30">
                                <div class="blog-post blog-grid date-style-1">
                                    <div class="wt-post-media wt-img-effect zoom-slow">
                                        <a href="{{ route('blog-details') }}"><img src="{{ asset('assets/images/blog/grid/pic3.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="wt-post-info p-t30">
                                        <div class="wt-post-title ">
                                            <h3 class="post-title"><a href="{{ route('blog-details') }}">Benefits of Natural Ingredients</a></h3>
                                        </div>
                                        <div class="wt-post-meta ">
                                            <ul>
                                                <li class="post-date"> <i class="fa fa-calendar"></i><strong>10 May</strong> </li>
                                                <li class="post-author"><i class="fa fa-user"></i>By Admin</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- COLUMNS 3 -->
                            <div class="col-md-4 col-sm-6 m-b30">
                                <div class="blog-post blog-grid date-style-1">
                                    <div class="wt-post-media wt-img-effect zoom-slow">
                                        <a href="{{ route('blog-details') }}"><img src="{{ asset('assets/images/blog/grid/pic4.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="wt-post-info p-t30">
                                        <div class="wt-post-title ">
                                            <h3 class="post-title"><a href="{{ route('blog-details') }}">Essential Daily Supplements</a></h3>
                                        </div>
                                        <div class="wt-post-meta ">
                                            <ul>
                                                <li class="post-date"> <i class="fa fa-calendar"></i><strong>05 May</strong> </li>
                                                <li class="post-author"><i class="fa fa-user"></i>By Admin</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- BLOG END -->

                </div>
            </div>
        </div>
        <!-- SECTION CONTENT END -->

    </div>
    <!-- CONTENT END -->
@endsection
