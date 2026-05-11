@extends('layouts.app')

@section('title', 'Service Details - Pureexa')

@section('content')

@php
    $service_id = request()->get('service', 'back-massage');

    $services_data = [
        'back-massage' => [
            'title' => 'Back Massage',
            'image' => 'assets/images/our-services/large/s3.jpg',
            'desc' => 'Relieve muscle tension and reduce stress with our deep tissue back massage, designed to restore your body\'s natural balance and improve posture.',
            'time' => '45 Mins',
            'price' => '$36'
        ],
        'head-massage' => [
            'title' => 'Head Massage',
            'image' => 'assets/images/our-services/large/s4.jpg',
            'desc' => 'Experience deep relaxation with our soothing head massage that stimulates circulation, promotes hair growth, and melts away everyday anxiety.',
            'time' => '30 Mins',
            'price' => '$18'
        ],
        'body-scrub' => [
            'title' => 'Body Scrub',
            'image' => 'assets/images/our-services/large/s2.jpg',
            'desc' => 'Exfoliate and nourish your skin with our organic body scrubs, leaving your skin feeling silky smooth, glowing, and refreshed with natural minerals.',
            'time' => '60 Mins',
            'price' => '$42'
        ],
        'aromatherapy' => [
            'title' => 'Aromatherapy Massage',
            'image' => 'assets/images/our-services/large/s5.jpg',
            'desc' => 'Enhance your physical and emotional health with our aromatherapy massage using premium essential oils tailored to your specific wellness needs.',
            'time' => '60 Mins',
            'price' => '$45'
        ],
        'face-massage' => [
            'title' => 'Face Massage',
            'image' => 'assets/images/our-services/large/s1.jpg',
            'desc' => 'Relax and rejuvenate your facial muscles with our therapeutic massage techniques for a glowing complexion and better skin health through improved circulation.',
            'time' => '30 Mins',
            'price' => '$24'
        ],
        'beauty-spa' => [
            'title' => 'Beauty Spa',
            'image' => 'assets/images/our-services/large/s6.jpg',
            'desc' => 'Treat yourself to our signature beauty spa packages for a comprehensive makeover and unmatched relaxation in a peaceful sanctuary with expert care.',
            'time' => '120 Mins',
            'price' => '$99'
        ],
        'facial-spa' => [
            'title' => 'Facial Spa',
            'image' => 'assets/images/our-services/large/s2.jpg',
            'desc' => 'Revitalize your complexion with our deep-cleansing facial spas tailored for all skin types and professional beauty care needs using luxury products.',
            'time' => '45 Mins',
            'price' => '$40'
        ]
    ];

    $current_service = $services_data[$service_id] ?? $services_data['back-massage'];
@endphp

    <!-- CONTENT START -->
    <div class="page-content">
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper" style="background-image:url('{{ asset('assets/images/banner/about-banner.png') }}');">
                <div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry text-center">
                        <h2 class="text-white">{{ $current_service['title'] }}</h2>
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->

            <!-- BREADCRUMB ROW -->
            <div class="bg-gray-light p-tb20">
                <div class="container">
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="{{ url('/services') }}">Services</a></li>
                         <li>{{ $current_service['title'] }}</li>
                    </ul>
                </div>
            </div>
            <!-- BREADCRUMB  ROW END -->

              <!-- SECTION CONTENT -->
            <div class="section-full  p-t80 p-b50  ">
                <div class="container  bg-white ">
                    <div class="section-content ">
                        <div class="row">

                        	<!-- LEFT PART -->
                            <div class="col-lg-3 col-md-12 m-b30">
                                <!-- OUR SERVICES -->
                                <div class="wt-nav-block m-b50">
                                    <h3 class="wt-nav-title">Our Services</h3>
                                    <ul class="wt-nav wt-nav-pills">
                                      <li class="{{ $service_id == 'back-massage' ? 'active' : '' }}"><a href="{{ url('/services-details') }}?service=back-massage">Back Massage</a></li>
                                      <li class="{{ $service_id == 'head-massage' ? 'active' : '' }}"><a href="{{ url('/services-details') }}?service=head-massage">Head Massage</a></li>
                                      <li class="{{ $service_id == 'body-scrub' ? 'active' : '' }}"><a href="{{ url('/services-details') }}?service=body-scrub">Body Scrub</a></li>
                                      <li class="{{ $service_id == 'aromatherapy' ? 'active' : '' }}"><a href="{{ url('/services-details') }}?service=aromatherapy">Aromatherapy</a></li>
                                      <li class="{{ $service_id == 'face-massage' ? 'active' : '' }}"><a href="{{ url('/services-details') }}?service=face-massage">Face Massage</a></li>
                                      <li class="{{ $service_id == 'beauty-spa' ? 'active' : '' }}"><a href="{{ url('/services-details') }}?service=beauty-spa">Beauty & Spa Consultant</a></li>
                                      <li class="{{ $service_id == 'facial-spa' ? 'active' : '' }}"><a href="{{ url('/services-details') }}?service=facial-spa">Facial Spa</a></li>
                                    </ul>
                                </div>

                                <!-- OUR GALLERY -->
                                <div class="widget widget_gallery mfp-gallery m-b30">
                                    <h3 class="widget-title">Our Gallery</h3>
                                    <ul>
                                        @for($i=1; $i<=8; $i++)
                                        <li>
                                            <div class="wt-post-thum">
                                                <a href="{{ asset('assets/images/gallery/pic'.$i.'.jpg') }}" class="mfp-link" ><img src="{{ asset('assets/images/gallery/pic'.$i.'.jpg') }}" alt=""></a>
                                            </div>
                                        </li>
                                        @endfor
                                    </ul>
                                </div>

                                <!-- CONTACT INFO -->
                                <div class="wt-accordion acc-bg-gray" id="accordion9">

                                        <div class="panel wt-panel">

                                            <div class="acod-head acc-actives">
                                                <h3 class="acod-title text-uppercase">
                                                    <a data-bs-toggle="collapse" href="javascript:;"  data-bs-target="#collapseOne9"><i class="fa fa-globe"></i>
                                                    Expert Therapists
                                                        <span class="indicator"><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </h3>
                                            </div>

                                            <div id="collapseOne9" class="acod-body collapse show" data-bs-parent="#accordion9">
                                                <div class="acod-content p-tb15">Our massage therapists and estheticians are highly trained professionals, ensuring you receive the best care and experience during every visit.</div>
                                            </div>

                                        </div>

                                        <div class="panel wt-panel">
                                            <div class="acod-head">
                                                <h3 class="acod-title text-uppercase">
                                                    <a data-bs-toggle="collapse" class="collapsed" href="javascript:;"  data-bs-target="#collapseTwo10"><i class="fa-regular fa-image"></i>
                                                    Organic Products
                                                    <span class="indicator"><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div id="collapseTwo10" class="acod-body collapse" data-bs-parent="#accordion9" >
                                                <div class="acod-content p-tb15">We use 100% natural and organic health and beauty products that are gentle on your skin and friendly to the environment.</div>
                                            </div>
                                        </div>

                                        <div class="panel wt-panel">
                                            <div class="acod-head">
                                                <h3 class="acod-title text-uppercase">
                                                    <a data-bs-toggle="collapse" class="collapsed" href="javascript:;"  data-bs-target="#collapseThree11"><i class="fa fa-cog"></i>
                                                    Relaxing Ambience
                                                    <span class="indicator"><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div id="collapseThree11" class="acod-body collapse"  data-bs-parent="#accordion9">
                                                <div class="acod-content p-tb15">Our spa is designed to be a peaceful sanctuary where you can escape the hustle and bustle of daily life and fully unwind.</div>
                                            </div>
                                        </div>

                                </div>

                                <!-- SOCIAL MEDIA -->
                                <div class="m-t50">
                                    <h3 class="widget-title ">Social media</h3>
                                    <ul class="social-icons bdr-1 p-a10 bdr-gray text-center">
                                        <li><a href="https://www.facebook.com/" class="fa-brands fa-facebook-f"></a></li>
                                        <li><a href="https://x.com/" class="fa-brands fa-x-twitter"></a></li>
                                        <li><a href="https://www.linkedin.com/" class="fa-brands fa-linkedin-in"></a></li>
                                        <li><a href="https://www.pinterest.com/" class="fa-brands fa-pinterest-p"></a></li>
                                        <li><a href="https://www.behance.net/" class="fa-brands fa-behance"></a></li>
                                    </ul>
                                </div>

                             </div>
                            <!-- LEFT PART -->

                            <!-- RIGHT PART -->
                            <div class="col-lg-9 col-md-12 m-b30">

                                 <!-- SERVICES DETAILS -->
                                 <div class="p-lr15">
                                    <div class="wt-media wt-img-effect m-b30">
                                        <img src="{{ asset($current_service['image']) }}" alt="{{ $current_service['title'] }}">
                                    </div>
                                    <div class="section-head">
                                    	<div class="text-left m-b10">
                                             <h3 class="text-uppercase">{{ $current_service['title'] }}</h3>
                                             <div class="wt-separator-outer">
                                               <div class="wt-separator style-icon">
                                                   <i class="fa fa-leaf text-black"></i>
                                                   <span class="separator-left site-bg-primary"></span>
                                                   <span class="separator-right site-bg-primary"></span>
                                               </div>
                                            </div>
                                         </div>
                                    </div>

                                    <div class="service-details-content m-b30">
                                        <p>{{ $current_service['desc'] }}</p>
                                        <div class="row m-t30">
                                            <div class="col-md-4">
                                                <div class="wt-icon-box-wraper left p-a20 bg-gray m-b20">
                                                    <div class="icon-sm site-text-primary">
                                                        <i class="fa fa-clock-o"></i>
                                                    </div>
                                                    <div class="icon-content">
                                                        <h5 class="wt-tilte text-uppercase m-b0">Duration</h5>
                                                        <p>{{ $current_service['time'] }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="wt-icon-box-wraper left p-a20 bg-gray m-b20">
                                                    <div class="icon-sm site-text-primary">
                                                        <i class="fa fa-dollar"></i>
                                                    </div>
                                                    <div class="icon-content">
                                                        <h5 class="wt-tilte text-uppercase m-b0">Price</h5>
                                                        <p>{{ $current_service['price'] }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="section-head">
                                    	<div class="text-left m-b10">
                                             <h4 class="text-uppercase">Other Popular Services</h4>
                                             <div class="wt-separator-outer">
                                               <div class="wt-separator style-icon">
                                                   <i class="fa fa-leaf text-black"></i>
                                                   <span class="separator-left site-bg-primary"></span>
                                                   <span class="separator-right site-bg-primary"></span>
                                               </div>
                                            </div>
                                         </div>
                                    </div>

                                    <div class="section-content">
                                        <div class="owl-carousel blog-carousel  owl-btn-vertical-center">

                                            @foreach($services_data as $key => $service)
                                                @if($key != $service_id)
                                                    <div class="item">
                                                        <div class="ow-blog-post date-style-2">
                                                            <div class="ow-post-media wt-img-effect zoom-slow">
                                                                <img src="{{ asset($service['image']) }}" alt="{{ $service['title'] }}">
                                                            </div>
                                                            <div class="ow-post-info p-tb30 bg-white">
                                                                <div class="ow-post-title">
                                                                    <h3 class="post-title"><a href="{{ url('/services-details') }}?service={{ $key }}" title="{{ $service['title'] }}">{{ $service['title'] }}</a></h3>
                                                                </div>
                                                                <div class="ow-post-meta">
                                                                    <ul>
                                                                        <li class="post-date"> <i class="fa fa-clock-o"></i><strong>{{ $service['time'] }}</strong> </li>
                                                                        <li class="post-author"><i class="fa fa-tag"></i><a href="javascript:void(0);">Pureexa</a> </li>
                                                                        <li class="post-comment"><i class="fa fa-star text-yellow"></i> 4.9</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="ow-post-text">
                                                                    <p>{{ Str::limit($service['desc'], 100) }}</p>
                                                                </div>
                                                                <div class="ow-post-readmore ">
                                                                    <a href="{{ url('/services-details') }}?service={{ $key }}" title="READ MORE" rel="bookmark" class=" site-button-link"> READ MORE  <i class="fa fa-angle-double-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach

                                        </div>
                                    </div>

                                    <div class="row m-t50">
                                        <!-- OUR OFFER -->
                                         <div class="col-md-6 col-sm-6">
                                                <div class="text-left m-b10">
                                                     <h3 class="text-uppercase">Our Offer</h3>
                                                     <div class="wt-separator-outer">
                                                       <div class="wt-separator style-icon">
                                                           <i class="fa fa-leaf text-black"></i>
                                                           <span class="separator-left site-bg-primary"></span>
                                                           <span class="separator-right site-bg-primary"></span>
                                                       </div>
                                                    </div>
                                                 </div>
                                                <div>
                                                    <ul class="list-check secondry">
                                                    <li><p>Comprehensive Consultation tailored to your personal health & beauty needs.</p></li>
                                                    <li><p>Expert application of 100% natural, cruelty-free, and organic products.</p></li>
                                                    <li><p>Access to luxurious spa amenities, including sauna and relaxation lounges.</p></li>
                                                    <li><p>Personalized aftercare advice to maintain your glow and wellness.</p></li>
                                                    </ul>
                                                </div>
                                            </div>

                                         <!-- WHY IT'S BEST? -->
                                         <div class="col-md-6 col-sm-6">
                                                <div class="text-left m-b10">
                                                   <h3 class="text-uppercase">Why It's Best?</h3>
                                                   <div class="wt-separator-outer">
                                                       <div class="wt-separator style-icon">
                                                           <i class="fa fa-leaf text-black"></i>
                                                           <span class="separator-left site-bg-primary"></span>
                                                           <span class="separator-right site-bg-primary"></span>
                                                       </div>
                                                   </div>
                                                </div>
                                                <div class="wt-icon-box-wraper bx-style-2 m-l40 m-b20 p-a10 left">
                                                    <div class="wt-icon-box-sm site-text-primary bg-white radius bdr-2">
                                                        <a href="javascript:void(0);" class="icon-cell"><i class="fa fa-trophy"></i></a>
                                                    </div>
                                                    <div class="icon-content p-l40">
                                                        <h3 class="wt-tilte text-uppercase">BEST QUALITY</h3>
                                                    <p>We source only premium quality products and oils for your ultimate satisfaction and health.</p>
                                                    </div>
                                              </div>
                                                <div class="wt-icon-box-wraper bx-style-2 m-l40 m-b20 p-a10 left">
                                                    <div class="wt-icon-box-sm site-text-primary bg-white radius bdr-2">
                                                        <a href="javascript:void(0);" class="icon-cell"><i class="fa-regular fa-lightbulb"></i></a>
                                                    </div>
                                                    <div class="icon-content p-l40">
                                                        <h3 class="wt-tilte text-uppercase">INTEGRITY</h3>
                                                    <p>We believe in transparent pricing and genuine care for our clients' well-being.</p>
                                                    </div>
                                              </div>
                                            </div>
                                     </div>
                    			 </div>
                             </div>
                            <!-- RIGHT PART -->

                        </div>
                    </div>
                </div>
             </div>
            <!-- SECTION CONTENT END -->

    </div>
    <!-- CONTENT END -->
@endsection
