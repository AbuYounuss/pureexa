@extends('layouts.app')

@section('title', 'Blog Page')

@section('content')
    <!-- CONTENT START -->
    <div class="page-content">

        <!-- INNER PAGE BANNER -->
        <div class="wt-bnr-inr overlay-wraper" style="background-image:url('{{ asset('assets/images/banner/blog-banner.jpg') }}');">
            <div class="overlay-main bg-black opacity-07"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <h2 class="text-white text-center">Blog</h2>
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->

        <!-- BREADCRUMB ROW -->
        <div class="bg-gray-light p-tb20">
            <div class="container">
                <ul class="wt-breadcrumb breadcrumb-style-2">
                    <li><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                    <li>Blog</li>
                </ul>
            </div>
        </div>
        <!-- BREADCRUMB  ROW END -->

        <!-- BLOG SECTION START -->
        <div class="section-full p-t80 p-b50">
            <div class="container">
                <!-- BLOG GRID START -->
                <div class="portfolio-wrap wt-blog-grid-2 row">

                    <!-- COLUMNS 1 -->
                    <div class="post masonry-item col-lg-6 col-md-6 col-sm-6 col-xs-12 m-b30">
                        <div class="blog-post blog-grid date-style-1">
                            <div class="wt-post-media wt-img-effect zoom-slow">
                                <a href="{{ route('blog-details') }}"><img src="{{ asset('assets/images/blog/grid/pic1.jpg') }}" alt=""></a>
                            </div>
                            <div class="wt-post-info p-t30">
                                <div class="wt-post-title ">
                                    <h3 class="post-title"><a href="{{ route('blog-details') }}">The secret to flawless skin</a></h3>
                                </div>
                                <div class="wt-post-meta ">
                                    <ul>
                                        <li class="post-date"> <i class="fa fa-calendar"></i><strong>20 May</strong> <span> 2026</span> </li>
                                        <li class="post-author"><i class="fa fa-user"></i><a href="{{ route('blog-details') }}">By <span>Admin</span></a> </li>
                                        <li class="post-comment"><i class="fa fa-comments"></i> <a href="{{ route('blog-details') }}">5 Comments</a> </li>
                                    </ul>
                                </div>
                                <div class="wt-post-text">
                                    <p>Discover the ultimate guide to achieving glowing and healthy skin with our expert tips and recommended products.</p>
                                </div>
                                <div class="clearfix">
                                    <div class="wt-post-readmore pull-left">
                                        <a href="{{ route('blog-details') }}" title="READ MORE" rel="bookmark" class="site-button-link">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- COLUMNS 2 -->
                    <div class="post masonry-item col-lg-6 col-md-6 col-sm-6 col-xs-12 m-b30">
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
                                        <li class="post-date"> <i class="fa fa-calendar"></i><strong>15 May</strong> <span> 2026</span> </li>
                                        <li class="post-author"><i class="fa fa-user"></i><a href="{{ route('blog-details') }}">By <span>Admin</span></a> </li>
                                        <li class="post-comment"><i class="fa fa-comments"></i> <a href="{{ route('blog-details') }}">3 Comments</a> </li>
                                    </ul>
                                </div>
                                <div class="wt-post-text">
                                    <p>Keep your hair hydrated and protected from the sun this summer with these essential hair care routines.</p>
                                </div>
                                <div class="clearfix">
                                    <div class="wt-post-readmore pull-left">
                                        <a href="{{ route('blog-details') }}" title="READ MORE" rel="bookmark" class="site-button-link">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- COLUMNS 3 -->
                    <div class="post masonry-item col-lg-6 col-md-6 col-sm-6 col-xs-12 m-b30">
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
                                        <li class="post-date"> <i class="fa fa-calendar"></i><strong>10 May</strong> <span> 2026</span> </li>
                                        <li class="post-author"><i class="fa fa-user"></i><a href="{{ route('blog-details') }}">By <span>Admin</span></a> </li>
                                        <li class="post-comment"><i class="fa fa-comments"></i> <a href="{{ route('blog-details') }}">8 Comments</a> </li>
                                    </ul>
                                </div>
                                <div class="wt-post-text">
                                    <p>Learn why natural and organic ingredients are becoming a staple in modern beauty and wellness routines.</p>
                                </div>
                                <div class="clearfix">
                                    <div class="wt-post-readmore pull-left">
                                        <a href="{{ route('blog-details') }}" title="READ MORE" rel="bookmark" class="site-button-link">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- COLUMNS 4 -->
                    <div class="post masonry-item col-lg-6 col-md-6 col-sm-6 col-xs-12 m-b30">
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
                                        <li class="post-date"> <i class="fa fa-calendar"></i><strong>05 May</strong> <span> 2026</span> </li>
                                        <li class="post-author"><i class="fa fa-user"></i><a href="{{ route('blog-details') }}">By <span>Admin</span></a> </li>
                                        <li class="post-comment"><i class="fa fa-comments"></i> <a href="{{ route('blog-details') }}">2 Comments</a> </li>
                                    </ul>
                                </div>
                                <div class="wt-post-text">
                                    <p>A comprehensive look at the must-have supplements to support your health and beauty from the inside out.</p>
                                </div>
                                <div class="clearfix">
                                    <div class="wt-post-readmore pull-left">
                                        <a href="{{ route('blog-details') }}" title="READ MORE" rel="bookmark" class="site-button-link">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- BLOG GRID END -->

                <!-- PAGINATION START -->
                <div class="pagination-bx clearfix ">
                    <ul class="custom-pagination pagination">
                        <li><a href="{{ route('blog-details') }}">&laquo;</a></li>
                        <li class="active"><a href="{{ route('blog-details') }}">1</a></li>
                        <li><a href="{{ route('blog-details') }}">2</a></li>
                        <li><a href="{{ route('blog-details') }}">3</a></li>
                        <li><a href="{{ route('blog-details') }}">&raquo;</a></li>
                    </ul>
                </div>
                <!-- PAGINATION END -->
            </div>
        </div>
        <!-- BLOG SECTION END -->

    </div>
    <!-- CONTENT END -->
@endsection
