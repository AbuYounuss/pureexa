@extends('layouts.app')

@section('title', 'about Page')

@section('content')
    <!-- CONTENT START -->
        <div class="page-content">

            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper" style="background-image:url('{{ asset('assets/images/banner/about-banner.png') }}');">
                <div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <h2 class="text-white text-center">About</h2>
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->

            <!-- BREADCRUMB ROW -->
            <div class="bg-gray-light p-tb20">
                <div class="container">
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                        <li>About</li>
                    </ul>
                </div>
            </div>
            <!-- BREADCRUMB  ROW END -->

                <!-- ABOUT COMPANY SECTION START -->
                <div class="section-full p-t80 p-b50">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-8 m-b30">
                                <div class="about-com-pic">
                                    <img src="{{ asset('assets/images/about-pic.png') }}" alt="" class="img-responsive">
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-12 m-b30">
                                <div class="section-head text-left">
                                    <h3 class="text-uppercase">About Company </h3>
                                    <div class="wt-separator-outer">
                                        <div class="wt-separator style-icon">
                                            <i class="fa fa-leaf text-black"></i>
                                            <span class="separator-left site-bg-primary"></span>
                                            <span class="separator-right site-bg-primary"></span>
                                        </div>
                                    </div>
                                    <p>Pureexa Health Spa & Beauty is your ultimate sanctuary for relaxation and rejuvenation. We offer a holistic approach to wellness, combining traditional techniques with modern aesthetics to help you look and feel your best. Our mission is to provide an unparalleled spa experience that heals the mind, body, and soul.
                                    </p>
                                    <p>
                                    At Pureexa, we believe that true beauty comes from within. Our team of dedicated professionals is committed to providing personalized care in a tranquil environment, ensuring that every visit leaves you feeling refreshed, renewed, and completely pampered.
                                    </p>
                                </div>
                                <div class="about-types row">
                                    <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc m-b30">
                                        <div class="wt-icon-box-wraper left">
                                            <div class="icon-md site-text-primary">
                                                <a href="#" class="icon-cell p-t5 center-block"><i class="flaticon-female-hairs"></i></a>
                                            </div>
                                            <div class="icon-content">
                                                <h3 class="wt-tilte text-uppercase m-b0">Waxing</h3>
                                                <p>Professional and gentle waxing services for smooth, radiant skin.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc m-b30 ">
                                        <div class="wt-icon-box-wraper left">
                                            <div class="icon-md site-text-primary">
                                                <a href="#" class="icon-cell p-t5 center-block"><i class="flaticon-eye"></i></a>
                                            </div>
                                            <div class="icon-content">
                                                <h3 class="wt-tilte text-uppercase m-b0">Hair Makeup</h3>
                                                <p>Expert styling and makeup services tailored to your unique beauty.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc m-b30 ">
                                        <div class="wt-icon-box-wraper left">
                                            <div class="icon-md site-text-primary">
                                                <a href="#" class="icon-cell p-t5 center-block"><i class="flaticon-mirror"></i></a>
                                            </div>
                                            <div class="icon-content">
                                                <h3 class="wt-tilte text-uppercase m-b0 ">Facial</h3>
                                                <p>Revitalizing facial treatments using premium natural ingredients.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc m-b30 ">
                                        <div class="wt-icon-box-wraper left">
                                            <div class="icon-md site-text-primary">
                                                <a href="#" class="icon-cell p-t5 center-block"><i class="flaticon-spray-bottle" aria-hidden="true"></i></a>
                                            </div>
                                            <div class="icon-content">
                                                <h3 class="wt-tilte text-uppercase m-b0">Massage</h3>
                                                <p>Therapeutic massages designed to melt away stress and tension.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ABOUT COMPANY SECTION END -->

                <!--COUNTER SECTION START -->
                <x-counter-section />
                <!-- COUNTER SECTION END -->

                <!-- OUR BEST SERVICES SECTION  START-->
                <div class="section-full text-center p-t80 p-b50 bg-gray">
                    <div class="container">

                    	<!-- TITLE START -->
                        <div class="section-head">
                            <h3 class="text-uppercase">Our best services</h3>
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>
                        <!-- TITLE END -->

                        <!-- OUR BEST SERVICES BLOCKS START -->
                        <div class="section-content">
                            <div class="row">

                            <!-- COLUMNS 1 -->
                            <div class="col-lg-4 col-md-6 col-sm-6 m-b30 animate_line">
                                <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                                    <div class="icon-md site-text-primary m-b20">
                                        <a href="#" class="icon-cell"><i class="flaticon-spray-bottle" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="wt-tilte text-uppercase">Back Massage</h3>
                                        <p>Relieve muscle tension and improve circulation with our specialized back massage techniques.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 2 -->
                            <div class="col-lg-4 col-md-6 col-sm-6 m-b30 animate_line">
                                <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                                    <div class="icon-md site-text-primary m-b20">
                                        <a href="#" class="icon-cell"><i class="flaticon-combs"></i></a>
                                    </div>
                                    <div class="icon-content ">
                                        <h3 class="wt-tilte text-uppercase">Head Massage</h3>
                                        <p>A soothing head massage to reduce stress, alleviate headaches, and promote deep relaxation.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 3 -->
                            <div class="col-lg-4 col-md-6 col-sm-6 m-b30 animate_line">
                                <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                                    <div class="icon-md site-text-primary m-b20">
                                        <a href="#" class="icon-cell"><i class="flaticon-cosmetics"></i></a>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="wt-tilte text-uppercase">Beauty Spa</h3>
                                        <p>Comprehensive beauty treatments that enhance your natural charm and leave you glowing.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 4 -->
                            <div class="col-lg-4 col-md-6 col-sm-6 m-b30 animate_line">
                                <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                                    <div class="icon-md site-text-primary m-b20">
                                        <a href="#" class="icon-cell"><i class="flaticon-mirror"></i></a>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="wt-tilte text-uppercase">Facial Spa</h3>
                                        <p>Targeted facial therapies designed to rejuvenate your skin and provide a youthful radiance.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 5 -->
                            <div class="col-lg-4 col-md-6 col-sm-6 m-b30 animate_line">
                                <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                                    <div class="icon-md site-text-primary m-b20">
                                        <a href="#" class="icon-cell"><i class="flaticon-blush"></i></a>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="wt-tilte text-uppercase">Skin Care</h3>
                                        <p>Expert skin care solutions using organic products to nourish, protect, and revitalize your complexion.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 6 -->
                            <div class="col-lg-4 col-md-6 col-sm-6 m-b30 animate_line">
                                <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                                    <div class="icon-md site-text-primary m-b20">
                                        <a href="#" class="icon-cell"><i class="flaticon-spa"></i></a>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="wt-tilte text-uppercase">Steam Bath</h3>
                                        <p>Experience deep detoxification and total relaxation in our state-of-the-art steam facilities.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        </div>
                        <!-- OUR BEST SERVICES BLOCKS END -->

                    </div>
                </div>
                <!-- OUR BEST SERVICES SECTION END -->

                <!-- TEAM STYLE FOUR START -->
                <div class="section-full p-t80 p-b50 ">
                    <div class="container">

                        <div class=" m-b70">
                            <!-- TITLE START -->
                            <div class="section-head text-center">
                                <h3 class="text-uppercase">Our Team</h3>
                                <div class="wt-separator-outer ">
                                    <div class="wt-separator style-icon">
                                        <i class="fa fa-leaf text-black"></i>
                                        <span class="separator-left site-bg-primary"></span>
                                        <span class="separator-right site-bg-primary"></span>
                                    </div>
                                </div>
                                <p>Meet our team of highly skilled therapists and stylists, each passionate about delivering exceptional beauty and wellness experiences tailored to your needs.</p>
                            </div>
                            <!-- TITLE END -->
                        </div>
                        <div class="section-content">
                            <div class="row">

                                <!-- COLUMNS 1 -->
                                <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                                    <div class="wt-team-four">
                                        <div class="wt-team-media">
                                            <a href="our-team-detail.html"><img src="{{ asset('assets/images/our-team/team1.png') }}" alt="" ></a>
                                        </div>
                                        <div class="wt-team-info">
                                            <div class="wt-team-skew-block">

                                             </div>
                                             <div class="p-a20">
                                                <h4 class="wt-team-title text-uppercase"><a href="#">Elena Rodriguez</a></h4>
                                                <p>Senior Esthetician</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 2 -->
                                <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                                    <div class="wt-team-four">
                                        <div class="wt-team-media">
                                            <a href="#"><img src="{{ asset('assets/images/our-team/team2.png') }}" alt="" ></a>
                                        </div>
                                        <div class="wt-team-info">
                                            <div class="wt-team-skew-block">

                                             </div>
                                             <div class="p-a20">
                                                <h4 class="wt-team-title text-uppercase"><a href="#">Sarah Jenkins</a></h4>
                                                <p>Lead Massage Specialist</p>
                                            </div>
                                      </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 3 -->
                                <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                                    <div class="wt-team-four">
                                        <div class="wt-team-media">
                                            <a href="#"><img src="{{ asset('assets/images/our-team/team3.png') }}" alt="" ></a>
                                        </div>
                                        <div class="wt-team-info">
                                            <div class="wt-team-skew-block">

                                             </div>
                                             <div class="p-a20">
                                                <h4 class="wt-team-title text-uppercase"><a href="#">Michael Chen</a></h4>
                                                <p>Wellness Consultant</p>
                                            </div>
                                      </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 4 -->
                                <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                                    <div class="wt-team-four">
                                        <div class="wt-team-media">
                                            <a href="#"><img src="{{ asset('assets/images/our-team/team4.png') }}" alt="" ></a>
                                        </div>
                                        <div class="wt-team-info">
                                            <div class="wt-team-skew-block">

                                             </div>
                                             <div class="p-a20">
                                                <h4 class="wt-team-title text-uppercase"><a href="#">Aria Montgomery</a></h4>
                                                <p>Creative Hair Stylist</p>
                                            </div>
                                      </div>
                                    </div>
                                </div>

                             </div>

                        </div>

                    </div>
                </div>
                <!-- TEAM STYLE FOUR END -->

        </div>
        <!-- CONTENT END -->
@endsection
