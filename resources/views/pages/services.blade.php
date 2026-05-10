@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <!-- CONTENT START -->
    <div class="page-content">
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper" style="background-image:url('{{ asset('assets/images/banner/about-banner.png') }}');">
                <div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <h2 class="text-white text-center">Services</h2>
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->

            <!-- BREADCRUMB ROW -->
            <div class="bg-gray-light p-tb20">
                <div class="container">
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                    <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
                         <li>Services</li>
                    </ul>
                </div>
            </div>
            <!-- BREADCRUMB  ROW END -->

            <!-- SECTION CONTENT -->
            <div class="section-full p-t80 p-b50  ">
                <div class="container">
                	<!-- TITLE START -->
                    <div class="section-head text-center">
                            <h3 class="text-uppercase">Our Services</h3>
                            <div class="wt-separator-outer">
                               <div class="wt-separator style-icon">
                                   <i class="fa fa-leaf text-black"></i>
                                   <span class="separator-left site-bg-primary"></span>
                                   <span class="separator-right site-bg-primary"></span>
                               </div>
                           </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                            since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book has survived.</p>
                        </div>
                    <!-- TITLE END -->
                    <div class="section-content">
                        <div class="row">

                            <!-- COLUMNS 1 -->
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="wt-box bg-white">
                                    <div class="wt-media">
                                        <a href="{{ url('/services-details') }}"><img src="{{ asset('assets/images/our-work/pic1.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray">
                                        <h4 class="wt-title m-t0"><a href="{{ url('/services-details') }}">Back Massage</a></h4>
                                        <p>Lorem ipsum dolor consectetur adipiscing Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius . </p>
                                        <a href="{{ url('/services-details') }}" class="site-button ">More <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 2 -->
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="wt-box bg-white">
                                    <div class="wt-media">
                                        <a href="{{ url('/services-details') }}"><img src="{{ asset('assets/images/our-work/pic2.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray">
                                        <h4 class="wt-title m-t0"><a href="{{ url('/services-details') }}">Head Massage </a></h4>
                                        <p>Lorem ipsum dolor consectetur adipiscing Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius . </p>
                                        <a href="{{ url('/services-details') }}" class="site-button ">More <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 3 -->
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="wt-box bg-white">
                                    <div class="wt-media">
                                        <a href="{{ url('/services-details') }}"><img src="{{ asset('assets/images/our-work/pic3.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray">
                                        <h4 class="wt-title m-t0"><a href="{{ url('/services-details') }}">Body Scrub</a></h4>
                                        <p>Lorem ipsum dolor consectetur adipiscing Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius . </p>
                                        <a href="{{ url('/services-details') }}" class="site-button ">More <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 4 -->
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="wt-box bg-white">
                                    <div class="wt-media">
                                        <a href="{{ url('/services-details') }}"><img src="{{ asset('assets/images/our-work/pic4.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray">
                                        <h4 class="wt-title m-t0"><a href="{{ url('/services-details') }}">Aromatherapy Massage</a></h4>
                                        <p>Lorem ipsum dolor consectetur adipiscing Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius . </p>
                                        <a href="{{ url('/services-details') }}" class="site-button ">More <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 5 -->
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="wt-box bg-white">
                                    <div class="wt-media">
                                        <a href="{{ url('/services-details') }}"><img src="{{ asset('assets/images/our-work/pic5.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray">
                                        <h4 class="wt-title m-t0"><a href="{{ url('/services-details') }}">Massages & Body</a></h4>
                                        <p>Lorem ipsum dolor consectetur adipiscing Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius . </p>
                                        <a href="{{ url('/services-details') }}" class="site-button ">More <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 6 -->
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="wt-box bg-white">
                                    <div class="wt-media">
                                        <a href="{{ url('/services-details') }}"><img src="{{ asset('assets/images/our-work/pic6.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray">
                                        <h4 class="wt-title m-t0"><a href="{{ url('/services-details') }}">Beauty Spa</a></h4>
                                        <p>Lorem ipsum dolor consectetur adipiscing Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius . </p>
                                        <a href="{{ url('/services-details') }}" class="site-button ">More <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 7 -->
                             <div class="col-lg-4 col-md-6 m-b30">
                                <div class="wt-box bg-white">
                                    <div class="wt-media">
                                        <a href="{{ url('/services-details') }}"><img src="{{ asset('assets/images/our-work/pic7.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray">
                                        <h4 class="wt-title m-t0"><a href="{{ url('/services-details') }}">Highway</a></h4>
                                        <p>Lorem ipsum dolor consectetur adipiscing Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius . </p>
                                        <a href="{{ url('/services-details') }}" class="site-button ">More <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 8 -->
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="wt-box bg-white">
                                    <div class="wt-media">
                                        <a href="{{ url('/services-details') }}"><img src="{{ asset('assets/images/our-work/pic8.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray">
                                        <h4 class="wt-title m-t0"><a href="{{ url('/services-details') }}">Facial Spa</a></h4>
                                        <p>Lorem ipsum dolor consectetur adipiscing Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius . </p>
                                        <a href="{{ url('/services-details') }}" class="site-button  ">More <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 9 -->
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="wt-box bg-white">
                                    <div class="wt-media">
                                        <a href="{{ url('/services-details') }}"><img src="{{ asset('assets/images/our-work/pic1.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray">
                                        <h4 class="wt-title m-t0"><a href="{{ url('/services-details') }}">Hair Makeup</a></h4>
                                        <p>Lorem ipsum dolor consectetur adipiscing Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius . </p>
                                        <a href="{{ url('/services-details') }}" class="site-button ">More <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    {{-- <!-- PAGINATION START -->
                    <div class="pagination-bx  clearfix ">
                        <ul class = "custom-pagination pagination-1">
                            <li><a href = "#">&laquo;</a></li>
                            <li class = "active"><a href = "#">1</a></li>
                            <li><a href = "#">2</a></li>
                            <li><a href = "#">3</a></li>
                            <li><a href = "#">4</a></li>
                            <li><a href = "#">5</a></li>
                            <li><a href = "#">&raquo;</a></li>
                        </ul>
                    </div>
                    <!-- PAGINATION END --> --}}
                </div>
            </div>
            <!-- SECTION CONTENT END -->

    </div>
    <!-- CONTENT END -->
@endsection
