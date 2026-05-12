@extends('layouts.app')

@section('title', 'Our Projects - Pureexa')

@section('content')
    <!-- CONTENT START -->
    <div class="page-content">
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper" style="background-image:url('{{ asset('assets/images/banner/about-banner.png') }}');">
                <div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <h2 class="text-white text-center">Projects</h2>
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->

            <!-- BREADCRUMB ROW -->
            <div class="bg-gray-light p-tb20">
                <div class="container">
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                         <li>Projects</li>
                    </ul>
                </div>
            </div>
            <!-- BREADCRUMB  ROW END -->

            <!-- SECTION CONTENT START -->
            <div class="section-full p-t80 p-b50 bg-white">
                <div class="container">
                    <div class="section-content">
                        <div class="row">
                            @foreach($projects as $slug => $project)
                                <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                                    <div class="wt-box">
                                        <div class="wt-media wt-img-effect zoom-slow">
                                            <a href="{{ route('project.details', $slug) }}">
                                                <img src="{{ asset('assets/images/company/' . $project['image']) }}" alt="{{ $project['name'] }}">
                                            </a>
                                        </div>
                                        <div class="wt-info p-a30 bg-gray">
                                            <h4 class="wt-title m-t0">
                                                <a href="{{ route('project.details', $slug) }}">{{ $project['name'] }}</a>
                                            </h4>
                                            <p>{{ $project['description'] }}</p>
                                            <a href="{{ route('project.details', $slug) }}" class="site-button-link">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- SECTION CONTENT END -->

    </div>
    <!-- CONTENT END -->
@endsection
