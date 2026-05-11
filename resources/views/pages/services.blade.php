@extends('layouts.app')

@section('title', 'Our Services - Pureexa')

@push('styles')
<style>
    .wt-info .wt-title {
        min-height: 40px;
    }
    .wt-info p {
        min-height: 80px;
    }
</style>
@endpush

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
                            <p>Discover our wide range of premium health and beauty services. From relaxing massages to rejuvenating facial spas, we offer the perfect treatments to help you unwind, refresh, and enhance your natural beauty.</p>
                        </div>
                    <!-- TITLE END -->
                    <div class="section-content">
                        <div class="row">

                            <!-- COLUMNS 1 -->
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="wt-box bg-white">
                                    <div class="wt-media">
                                        <a href="{{ url('/services-details') }}?service=back-massage"><img src="{{ asset('assets/images/our-services/large/s3.jpg') }}" alt="Back Massage"></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray text-center">
                                        <h4 class="wt-title m-t0"><a href="{{ url('/services-details') }}?service=back-massage">Back Massage</a></h4>
                                        <p>Relieve muscle tension and reduce stress with our deep tissue back massage, designed to restore your body's natural balance.</p>
                                        <a href="{{ url('/services-details') }}?service=back-massage" class="site-button ">More <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 2 -->
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="wt-box bg-white">
                                    <div class="wt-media">
                                        <a href="{{ url('/services-details') }}?service=head-massage"><img src="{{ asset('assets/images/our-services/large/s4.jpg') }}" alt="Head Massage"></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray text-center">
                                        <h4 class="wt-title m-t0"><a href="{{ url('/services-details') }}?service=head-massage">Head Massage </a></h4>
                                        <p>Experience deep relaxation with our soothing head massage that stimulates circulation and melts away everyday anxiety.</p>
                                        <a href="{{ url('/services-details') }}?service=head-massage" class="site-button ">More <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 3 -->
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="wt-box bg-white">
                                    <div class="wt-media">
                                        <a href="{{ url('/services-details') }}?service=body-scrub"><img src="{{ asset('assets/images/our-services/large/s2.jpg') }}" alt="Body Scrub"></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray text-center">
                                        <h4 class="wt-title m-t0"><a href="{{ url('/services-details') }}?service=body-scrub">Body Scrub</a></h4>
                                        <p>Exfoliate and nourish your skin with our organic body scrubs, leaving your skin feeling silky smooth, glowing, and refreshed.</p>
                                        <a href="{{ url('/services-details') }}?service=body-scrub" class="site-button ">More <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 4 -->
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="wt-box bg-white">
                                    <div class="wt-media">
                                        <a href="{{ url('/services-details') }}?service=aromatherapy"><img src="{{ asset('assets/images/our-services/large/s5.jpg') }}" alt="Aromatherapy Massage"></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray text-center">
                                        <h4 class="wt-title m-t0"><a href="{{ url('/services-details') }}?service=aromatherapy">Aromatherapy Massage</a></h4>
                                        <p>Enhance your physical and emotional health with our aromatherapy massage using premium essential oils.</p>
                                        <a href="{{ url('/services-details') }}?service=aromatherapy" class="site-button ">More <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 5 -->
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="wt-box bg-white">
                                    <div class="wt-media">
                                        <a href="{{ url('/services-details') }}?service=face-massage"><img src="{{ asset('assets/images/our-services/large/s1.jpg') }}" alt="Face Massage"></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray text-center">
                                        <h4 class="wt-title m-t0"><a href="{{ url('/services-details') }}?service=face-massage">Face Massage</a></h4>
                                        <p>Relax and rejuvenate your facial muscles with our therapeutic massage techniques for a glowing complexion.</p>
                                        <a href="{{ url('/services-details') }}?service=face-massage" class="site-button ">More <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 6 -->
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="wt-box bg-white">
                                    <div class="wt-media">
                                        <a href="{{ url('/services-details') }}?service=beauty-spa"><img src="{{ asset('assets/images/our-services/large/s6.jpg') }}" alt="Beauty Spa"></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray text-center">
                                        <h4 class="wt-title m-t0"><a href="{{ url('/services-details') }}?service=beauty-spa">Beauty Spa</a></h4>
                                        <p>Treat yourself to our signature beauty spa packages for a comprehensive makeover and unmatched relaxation.</p>
                                        <a href="{{ url('/services-details') }}?service=beauty-spa" class="site-button ">More <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 7 -->
                             <div class="col-lg-4 col-md-6 m-b30">
                                <div class="wt-box bg-white">
                                    <div class="wt-media">
                                        <a href="{{ url('/services-details') }}?service=facial-spa"><img src="{{ asset('assets/images/our-services/large/s2.jpg') }}" alt="Facial Spa"></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray text-center">
                                        <h4 class="wt-title m-t0"><a href="{{ url('/services-details') }}?service=facial-spa">Facial Spa</a></h4>
                                        <p>Revitalize your complexion with our deep-cleansing facial spas tailored for all skin types and beauty needs.</p>
                                        <a href="{{ url('/services-details') }}?service=facial-spa" class="site-button ">More <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <!-- SECTION CONTENT END -->

    </div>
    <!-- CONTENT END -->
@endsection
