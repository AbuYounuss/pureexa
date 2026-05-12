@extends('layouts.app')

@section('title', $project['name'] . ' - Project Details')

@section('content')
    <!-- CONTENT START -->
    <div class="page-content">

        <!-- INNER PAGE BANNER -->
        <div class="wt-bnr-inr overlay-wraper" style="background-image:url('{{ asset('assets/images/banner/about-banner.png') }}');">
            <div class="overlay-main bg-black opacity-07"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <h2 class="text-white text-center">{{ $project['name'] }}</h2>
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->

        <!-- BREADCRUMB ROW -->
        <div class="bg-gray-light p-tb20">
            <div class="container">
                <ul class="wt-breadcrumb breadcrumb-style-2">
                    <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="javascript:;">Projects</a></li>
                    <li>{{ $project['name'] }}</li>
                </ul>
            </div>
        </div>
        <!-- BREADCRUMB ROW END -->

        <!-- PROJECT DETAIL SECTION START -->
        <div class="section-full p-t80 p-b50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 m-b30">
                        <div class="about-com-pic">
                            <div class="wt-box border-2 p-a20">
                                <img src="{{ asset('assets/images/company/' . $project['image']) }}" alt="{{ $project['name'] }}" class="img-responsive" style="width: 100%; max-height: 400px; object-fit: contain;">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 m-b30">
                        <div class="section-head text-left">
                            <h2 class="text-uppercase site-text-primary">{{ $project['title'] }}</h2>
                            <div class="wt-separator-outer">
                                <div class="wt-separator style-icon">
                                    <i class="fa fa-leaf text-black"></i>
                                    <span class="separator-left site-bg-primary"></span>
                                    <span class="separator-right site-bg-primary"></span>
                                </div>
                            </div>
                            <h3>{{ $project['name'] }}</h3>
                            <p class="m-b20"><strong>Category:</strong> <span class="site-text-primary">{{ $project['category'] }}</span></p>
                            <p>{{ $project['description'] }}</p>
                        </div>

                        <div class="wt-icon-box-wraper left m-b30">
                            <div class="icon-md site-text-primary">
                                <span class="icon-cell"><i class="fa fa-globe"></i></span>
                            </div>
                            <div class="icon-content">
                                <h4 class="wt-tilte text-uppercase m-b5">Website URL</h4>
                                @php
                                    $domainName = str_replace('.com', '', $project['name']);
                                @endphp
                                <p><a href="https://{{ strtolower($domainName) }}.com" target="_blank" class="site-text-primary">https://{{ $domainName }}<span class="site-text-primary">.com</span></a></p>
                            </div>
                        </div>

                        <div class="wt-icon-box-wraper left m-b30">
                            <div class="icon-md site-text-primary">
                                <span class="icon-cell"><i class="fa fa-check-circle"></i></span>
                            </div>
                            <div class="icon-content">
                                <h4 class="wt-tilte text-uppercase m-b5">Project Status</h4>
                                <p>Live & Functional</p>
                            </div>
                        </div>

                        <a href="{{ route('contact') }}" class="site-button text-uppercase radius-sm font-weight-700 button-lg">Request a Similar Project</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- PROJECT DETAIL SECTION END -->

        <!-- RELATED PROJECTS SECTION START -->
        <div class="section-full p-t80 p-b50 bg-gray">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="text-uppercase">Others Company</h2>
                    <div class="wt-separator style-icon">
                        <i class="fa fa-leaf text-black"></i>
                        <span class="separator-left site-bg-primary"></span>
                        <span class="separator-right site-bg-primary"></span>
                    </div>
                </div>

                <div class="section-content">
                    <div class="row d-flex justify-content-center">
                        @php
                            $all_projects = [
                                'hopeexa' => ['name' => 'Hopeexa.com', 'image' => 'hopeexa.png', 'title' => 'Charity'],
                                'sitvly' => ['name' => 'Sitvly.com', 'image' => 'sitvly.png', 'title' => 'Real Estate'],
                                'bookopa' => ['name' => 'Bookopa.com', 'image' => 'bookopa.png', 'title' => 'Booking'],
                                'martopa' => ['name' => 'Martopa.com', 'image' => 'martopa.png', 'title' => 'E-Commerce'],
                                'viewvvly' => ['name' => 'Viewvly.com', 'image' => 'vievvly.png', 'title' => 'OTT'],
                            ];
                        @endphp

                        @foreach($all_projects as $slug => $p)
                            @continue($p['name'] == $project['name'])
                            <div class="col-lg-3 col-md-4 col-sm-6 m-b30">
                                <div class="wt-box text-center bg-white p-a10">
                                    <div class="wt-media">
                                        <a href="{{ url('/projects/' . $slug) }}">
                                            <img src="{{ asset('assets/images/company/' . $p['image']) }}" alt="{{ $p['name'] }}" style="max-height: 40px; object-fit: contain;">
                                        </a>
                                    </div>
                                    <div class="wt-info p-t10">
                                        <h6 class="wt-title m-b0"><a href="{{ url('/projects/' . $slug) }}">{{ $p['name'] }}</a></h6>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- RELATED PROJECTS SECTION END -->

    </div>
    <!-- CONTENT END -->
@endsection
