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
                        <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                         <li>Projects</li>
                    </ul>
                </div>
            </div>
            <!-- BREADCRUMB  ROW END -->



    </div>
    <!-- CONTENT END -->
@endsection
