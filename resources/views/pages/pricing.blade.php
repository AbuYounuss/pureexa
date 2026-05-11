@extends('layouts.app')

@section('title', 'Pricing Page')

@section('content')
    <!-- CONTENT START -->
    <div class="page-content">

        <!-- INNER PAGE BANNER -->
        <div class="wt-bnr-inr overlay-wraper" style="background-image:url('{{ asset('assets/images/banner/about-banner.png') }}');">
            <div class="overlay-main bg-black opacity-07"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <h2 class="text-white text-center">Pricing</h2>
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->

        <!-- BREADCRUMB ROW -->
        <div class="bg-gray-light p-tb20">
            <div class="container">
                <ul class="wt-breadcrumb breadcrumb-style-2">
                    <li><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                    <li>Pricing</li>
                </ul>
            </div>
        </div>
        <!-- BREADCRUMB  ROW END -->

        <!-- PRICING SECTION START -->
        <div class="section-full p-t80 p-b50">
            <div class="container">
                <div class="section-head text-center">
                    <h3 class="text-uppercase">Our Pricing Plans</h3>
                    <div class="wt-separator-outer">
                        <div class="wt-separator style-icon">
                            <i class="fa fa-leaf text-black"></i>
                            <span class="separator-left site-bg-primary"></span>
                            <span class="separator-right site-bg-primary"></span>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="pricingtable-row">
                        <div class="row d-flex justify-content-center">

                            <div class="col-lg-4 col-md-4 col-sm-6 m-b30">
                                <div class="pricingtable-wrapper pricing-table-style-4">
                                    <div class="pricingtable-inner bg-white radius">
                                        <div class="overlay-wraper pricingtable-inner-overlay bg-no-repeat bg-cover" style="background-image:url('{{ asset('assets/images/our-work/pic1.jpg') }}');">
                                            <div class="pricingtable-title">
                                                <h3>Basic Plan</h3>
                                            </div>
                                            <div class="pricingtable-price">
                                                <span class="pricingtable-bx">$29</span>
                                                <span class="pricingtable-type">Month</span>
                                            </div>
                                            <div class="overlay-main bg-black opacity-07"></div>
                                        </div>
                                        <ul class="pricingtable-features">
                                            <li><i class="fa fa-check"></i> Phone & Email Support </li>
                                            <li><i class="fa fa-times"></i> 3 Social Account </li>
                                            <li><i class="fa fa-check"></i> Branded Reports </li>
                                            <li><i class="fa fa-check"></i> Unlock rewards</li>
                                            <li><i class="fa fa-times"></i> Support Forum</li>
                                        </ul>
                                        <div class="pricingtable-footer">
                                            <a href="javascript:void(0);" class="site-button text-uppercase radius-sm">Purchase</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6 m-b30">
                                <div class="pricingtable-wrapper pricing-table-style-4">
                                    <div class="pricingtable-inner bg-white radius">
                                        <div class="overlay-wraper pricingtable-inner-overlay bg-no-repeat bg-cover" style="background-image:url('{{ asset('assets/images/our-work/pic2.jpg') }}');">
                                            <div class="pricingtable-title">
                                                <h3>Pro Plan</h3>
                                            </div>
                                            <div class="pricingtable-price">
                                                <span class="pricingtable-bx">$49</span>
                                                <span class="pricingtable-type">Month</span>
                                            </div>
                                            <div class="overlay-main bg-black opacity-07"></div>
                                        </div>
                                        <ul class="pricingtable-features">
                                            <li><i class="fa fa-check"></i> Phone & Email Support </li>
                                            <li><i class="fa fa-check"></i> 3 Social Account </li>
                                            <li><i class="fa fa-check"></i> Branded Reports </li>
                                            <li><i class="fa fa-check"></i> Unlock rewards</li>
                                            <li><i class="fa fa-check"></i> Support Forum</li>
                                        </ul>
                                        <div class="pricingtable-footer">
                                            <a href="javascript:void(0);" class="site-button text-uppercase radius-sm">Purchase</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6 m-b30">
                                <div class="pricingtable-wrapper pricing-table-style-4">
                                    <div class="pricingtable-inner bg-white radius">
                                        <div class="overlay-wraper pricingtable-inner-overlay bg-no-repeat bg-cover" style="background-image:url('{{ asset('assets/images/our-work/pic3.jpg') }}');">
                                            <div class="pricingtable-title">
                                                <h3>Premium Plan</h3>
                                            </div>
                                            <div class="pricingtable-price">
                                                <span class="pricingtable-bx">$99</span>
                                                <span class="pricingtable-type">Month</span>
                                            </div>
                                            <div class="overlay-main bg-black opacity-07"></div>
                                        </div>
                                        <ul class="pricingtable-features">
                                            <li><i class="fa fa-check"></i> Phone & Email Support </li>
                                            <li><i class="fa fa-check"></i> 5 Social Account </li>
                                            <li><i class="fa fa-check"></i> Branded Reports </li>
                                            <li><i class="fa fa-check"></i> Unlock rewards</li>
                                            <li><i class="fa fa-check"></i> 24/7 Support Forum</li>
                                        </ul>
                                        <div class="pricingtable-footer">
                                            <a href="javascript:void(0);" class="site-button text-uppercase radius-sm">Purchase</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PRICING SECTION END -->

    </div>
    <!-- CONTENT END -->
@endsection
