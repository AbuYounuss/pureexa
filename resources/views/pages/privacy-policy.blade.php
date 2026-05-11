@extends('layouts.app')

@section('title', 'Privacy Policy')

@section('content')
    <!-- CONTENT START -->
    <div class="page-content">

        <!-- INNER PAGE BANNER -->
        <div class="wt-bnr-inr overlay-wraper" style="background-image:url('{{ asset('assets/images/banner/about-banner.png') }}');">
            <div class="overlay-main bg-black opacity-07"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <h2 class="text-white text-center">Privacy Policy</h2>
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->

        <!-- BREADCRUMB ROW -->
        <div class="bg-gray-light p-tb20">
            <div class="container">
                <ul class="wt-breadcrumb breadcrumb-style-2">
                    <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
                    <li>Privacy Policy</li>
                </ul>
            </div>
        </div>
        <!-- BREADCRUMB ROW END -->

        <!-- PRIVACY POLICY SECTION START -->
        <div class="section-full p-t80 p-b50">
            <div class="container">
                <div class="section-content">
                    <div class="section-head text-left">
                        <h2 class="text-uppercase site-text-primary">Our Privacy Policy</h2>
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="m-b30">
                        <h3>1. Introduction</h3>
                        <p>Welcome to Pureexa. We value your privacy and are committed to protecting your personal data. This privacy policy will inform you as to how we look after your personal data when you visit our website and tell you about your privacy rights and how the law protects you.</p>
                    </div>

                    <div class="m-b30">
                        <h3>2. The Data We Collect About You</h3>
                        <p>Personal data, or personal information, means any information about an individual from which that person can be identified. We may collect, use, store and transfer different kinds of personal data about you which we have grouped together as follows:</p>
                        <ul class="list-check-circle primary">
                            <li>Identity Data includes first name, last name, username or similar identifier.</li>
                            <li>Contact Data includes billing address, delivery address, email address and telephone numbers.</li>
                            <li>Technical Data includes internet protocol (IP) address, your login data, browser type and version.</li>
                            <li>Usage Data includes information about how you use our website, products and services.</li>
                        </ul>
                    </div>

                    <div class="m-b30">
                        <h3>3. How We Use Your Personal Data</h3>
                        <p>We will only use your personal data when the law allows us to. Most commonly, we will use your personal data in the following circumstances:</p>
                        <ul class="list-check-circle primary">
                            <li>Where we need to perform the contract we are about to enter into or have entered into with you.</li>
                            <li>Where it is necessary for our legitimate interests and your interests and fundamental rights do not override those interests.</li>
                            <li>Where we need to comply with a legal or regulatory obligation.</li>
                        </ul>
                    </div>

                    <div class="m-b30">
                        <h3>4. Data Security</h3>
                        <p>We have put in place appropriate security measures to prevent your personal data from being accidentally lost, used or accessed in an unauthorized way, altered or disclosed. In addition, we limit access to your personal data to those employees, agents, contractors and other third parties who have a business need to know.</p>
                    </div>

                    <div class="m-b30">
                        <h3>5. Your Legal Rights</h3>
                        <p>Under certain circumstances, you have rights under data protection laws in relation to your personal data, including the right to request access, correction, erasure, restriction, transfer, to object to processing, to portability of data and (where the lawful ground of processing is consent) to withdraw consent.</p>
                    </div>

                </div>
            </div>
        </div>
        <!-- PRIVACY POLICY SECTION END -->

    </div>
    <!-- CONTENT END -->
@endsection
