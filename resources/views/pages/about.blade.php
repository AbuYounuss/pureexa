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
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                      Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown  galley.
                                    </p>
                                    <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged. It was popularised in the with the .
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
                                                <p>Lorem ipsum dolor sit piscing sed diam nonmy end .</p>
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
                                                <p>Lorem ipsum dolor sit piscing sed diam nonmy end .</p>
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
                                                <p>Lorem ipsum dolor sit piscing sed diam nonmy end .</p>
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
                                                <p>Lorem ipsum dolor sit piscing sed diam nonmy end .</p>
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
                                        <a href="#" class="icon-cell"><i class="flaticon-cosmetics" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="wt-tilte text-uppercase">Steam Bath</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 2 -->
                            <div class="col-lg-4 col-md-6 col-sm-6 m-b30 animate_line">
                                <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                                    <div class="icon-md site-text-primary m-b20">
                                        <a href="#" class="icon-cell"><i class="flaticon-blush"></i></a>
                                    </div>
                                    <div class="icon-content ">
                                        <h3 class="wt-tilte text-uppercase">Herbal & Natural</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 3 -->
                            <div class="col-lg-4 col-md-6 col-sm-6 m-b30 animate_line">
                                <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                                    <div class="icon-md site-text-primary m-b20">
                                        <a href="#" class="icon-cell"><i class="flaticon-combs"></i></a>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="wt-tilte text-uppercase">Trained Professionals</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 4 -->
                            <div class="col-lg-4 col-md-6 col-sm-6 m-b30 animate_line">
                                <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                                    <div class="icon-md site-text-primary m-b20">
                                        <a href="#" class="icon-cell"><i class="flaticon-bronzer"></i></a>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="wt-tilte text-uppercase">Naturally Spa</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 5 -->
                            <div class="col-lg-4 col-md-6 col-sm-6 m-b30 animate_line">
                                <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                                    <div class="icon-md site-text-primary m-b20">
                                        <a href="#" class="icon-cell"><i class="flaticon-hair-dryer"></i></a>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="wt-tilte text-uppercase">Effective Treatments</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
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
                                        <h3 class="wt-tilte text-uppercase">AESTHETICS</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
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
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                since the 1500s, when an unknown printer took a galley.</p>
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
                                                {{-- <div class="social-icons-outer p-a20">
                                                    <ul class="social-icons social-square social-dark white-border m-b0">
                                                        <li><a href="https://www.facebook.com/" class="fa-brands fa-facebook-f"></a></li>
                                                        <li><a href="https://x.com/" class="fa-brands fa-x-twitter"></a></li>
                                                        <li><a href="https://www.linkedin.com/" class="fa-brands fa-linkedin-in"></a></li>
                                                        <li><a href="https://www.pinterest.com/" class="fa-brands fa-pinterest-p"></a></li>
                                                    </ul>
                                                </div> --}}
                                             </div>
                                             <div class="p-a20">
                                                <h4 class="wt-team-title text-uppercase"><a href="our-team-detail.html">Richard Wagner</a></h4>
                                                <p>Beauty Therapist</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 2 -->
                                <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                                    <div class="wt-team-four">
                                        <div class="wt-team-media">
                                            <a href="our-team-detail.html"><img src="{{ asset('assets/images/our-team/team2.png') }}" alt="" ></a>
                                        </div>
                                        <div class="wt-team-info">
                                            <div class="wt-team-skew-block">
                                                {{-- <div class="social-icons-outer p-a20">
                                                    <ul class="social-icons social-square social-dark white-border m-b0">
                                                        <li><a href="https://www.facebook.com/" class="fa-brands fa-facebook-f"></a></li>
                                                        <li><a href="https://x.com/" class="fa-brands fa-x-twitter"></a></li>
                                                        <li><a href="https://www.linkedin.com/" class="fa-brands fa-linkedin-in"></a></li>
                                                        <li><a href="https://www.pinterest.com/" class="fa-brands fa-pinterest-p"></a></li>
                                                    </ul>
                                                </div> --}}
                                             </div>
                                             <div class="p-a20">
                                                <h4 class="wt-team-title text-uppercase"><a href="our-team-detail.html">Lisa Anderson</a></h4>
                                                <p>Beauty Therapist</p>
                                            </div>
                                      </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 3 -->
                                <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                                    <div class="wt-team-four">
                                        <div class="wt-team-media">
                                            <a href="our-team-detail.html"><img src="{{ asset('assets/images/our-team/team3.png') }}" alt="" ></a>
                                        </div>
                                        <div class="wt-team-info">
                                            <div class="wt-team-skew-block">
                                                {{-- <div class="social-icons-outer p-a20">
                                                    <ul class="social-icons social-square social-dark white-border m-b0">
                                                        <li><a href="https://www.facebook.com/" class="fa-brands fa-facebook-f"></a></li>
                                                        <li><a href="https://x.com/" class="fa-brands fa-x-twitter"></a></li>
                                                        <li><a href="https://www.linkedin.com/" class="fa-brands fa-linkedin-in"></a></li>
                                                        <li><a href="https://www.pinterest.com/" class="fa-brands fa-pinterest-p"></a></li>
                                                    </ul>
                                                </div> --}}
                                             </div>
                                             <div class="p-a20">
                                                <h4 class="wt-team-title text-uppercase"><a href="our-team-detail.html">Tommy Atkins</a></h4>
                                                <p>Beauty Therapist</p>
                                            </div>
                                      </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 4 -->
                                <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                                    <div class="wt-team-four">
                                        <div class="wt-team-media">
                                            <a href="our-team-detail.html"><img src="{{ asset('assets/images/our-team/team4.png') }}" alt="" ></a>
                                        </div>
                                        <div class="wt-team-info">
                                            <div class="wt-team-skew-block">
                                                {{-- <div class="social-icons-outer p-a20">
                                                    <ul class="social-icons social-square social-dark white-border m-b0">
                                                        <li><a href="https://www.facebook.com/" class="fa-brands fa-facebook-f"></a></li>
                                                        <li><a href="https://x.com/" class="fa-brands fa-x-twitter"></a></li>
                                                        <li><a href="https://www.linkedin.com/" class="fa-brands fa-linkedin-in"></a></li>
                                                        <li><a href="https://www.pinterest.com/" class="fa-brands fa-pinterest-p"></a></li>
                                                    </ul>
                                                </div> --}}
                                             </div>
                                             <div class="p-a20">
                                                <h4 class="wt-team-title text-uppercase"><a href="our-team-detail.html">John Halpern</a></h4>
                                                <p>Beauty Therapist</p>
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
