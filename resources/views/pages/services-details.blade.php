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
                        <h2 class="text-white text-center">Services-details</h2>
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->

            <!-- BREADCRUMB ROW -->
            <div class="bg-gray-light p-tb20">
                <div class="container">
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
                         <li>Services-details</li>
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
                                <!-- WHAT WE DO -->
                                <div class="wt-nav-block m-b50">
                                    <h3 class="wt-nav-title">What we do</h3>
                                    <ul class="wt-nav wt-nav-pills">
                                      <li><a href="about-1.html">Electricity</a></li>
                                      <li><a href="about-1.html">Refurbishment</a></li>
                                      <li><a href="about-1.html">House Security</a></li>
                                      <li><a href="about-1.html">Laminate flooring</a></li>
                                      <li><a href="about-1.html">General Contracting</a></li>
                                      <li><a href="about-1.html">Beauty & Spa Consultant</a></li>
                                    </ul>
                                </div>
                                <!-- OUR SERVICES -->
                                <div class="widget widget_gallery mfp-gallery">
                                    <h3 class="widget-title">Our Gallery</h3>
                                    <ul>
                                        <li>
                                            <div class="wt-post-thum">
                                                <a href="{{ asset('assets/images/gallery/pic1.jpg') }}" class="mfp-link" ><img src="{{ asset('assets/images/gallery/thumb/pic1.jpg') }}" alt=""></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="{{ asset('assets/images/gallery/pic2.jpg') }}" class="mfp-link"><img src="{{ asset('assets/images/gallery/thumb/pic2.jpg') }}" alt=""></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum  ">
                                                <a href="{{ asset('assets/images/gallery/pic3.jpg') }}" class="mfp-link"><img src="{{ asset('assets/images/gallery/thumb/pic3.jpg') }}" alt=""></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="{{ asset('assets/images/gallery/pic4.jpg') }}" class="mfp-link"><img src="{{ asset('assets/images/gallery/thumb/pic4.jpg') }}" alt=""></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="{{ asset('assets/images/gallery/pic5.jpg') }}" class="mfp-link"><img src="{{ asset('assets/images/gallery/thumb/pic5.jpg') }}" alt=""></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="{{ asset('assets/images/gallery/pic6.jpg') }}" class="mfp-link"><img src="{{ asset('assets/images/gallery/thumb/pic6.jpg') }}" alt=""></a>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="{{ asset('assets/images/gallery/pic7.jpg') }}" class="mfp-link"><img src="{{ asset('assets/images/gallery/thumb/pic7.jpg') }}" alt=""></a>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="{{ asset('assets/images/gallery/pic8.jpg') }}" class="mfp-link"><img src="{{ asset('assets/images/gallery/thumb/pic8.jpg') }}" alt=""></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- SOCIAL MEDIA -->
                                <div class="m-b50">
                                    <h3 class="widget-title ">Social media</h3>
                                    <ul class="social-icons bdr-1 p-a10 bdr-gray">
                                        <li><a href="https://www.facebook.com/" class="fa-brands fa-facebook-f"></a></li>
                                        <li><a href="https://x.com/" class="fa-brands fa-x-twitter"></a></li>
                                        <li><a href="https://www.linkedin.com/" class="fa-brands fa-linkedin-in"></a></li>
                                        <li><a href="https://www.pinterest.com/" class="fa-brands fa-pinterest-p"></a></li>
                                        <li><a href="https://www.behance.net/" class="fa-brands fa-behance"></a></li>
                                    </ul>
                                </div>


                                <div class="wt-accordion acc-bg-gray" id="accordion9">

                                        <div class="panel wt-panel">

                                            <div class="acod-head acc-actives">
                                                <h3 class="acod-title text-uppercase">
                                                    <a data-bs-toggle="collapse" href="javascript:;"  data-bs-target="#collapseOne9"><i class="fa fa-globe"></i>
                                                        Awsome Web Design
                                                        <span class="indicator"><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </h3>
                                            </div>

                                            <div id="collapseOne9" class="acod-body collapse show" data-bs-parent="#accordion9">
                                                <div class="acod-content p-tb15">Web design lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of type and scrambled it.</div>
                                            </div>

                                        </div>

                                        <div class="panel wt-panel">
                                            <div class="acod-head">
                                                <h3 class="acod-title text-uppercase">
                                                    <a data-bs-toggle="collapse" class="collapsed" href="javascript:;"  data-bs-target="#collapseTwo10"><i class="fa-regular fa-image"></i>
                                                    Graphic Design
                                                    <span class="indicator"><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div id="collapseTwo10" class="acod-body collapse" data-bs-parent="#accordion9" >
                                                <div class="acod-content p-tb15">Graphic design lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of type and scrambled.</div>
                                            </div>
                                        </div>

                                        <div class="panel wt-panel">
                                            <div class="acod-head">
                                                <h3 class="acod-title text-uppercase">
                                                    <a data-bs-toggle="collapse" class="collapsed" href="javascript:;"  data-bs-target="#collapseThree11"><i class="fa fa-cog"></i>
                                                    Fast Developement
                                                    <span class="indicator"><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div id="collapseThree11" class="acod-body collapse"  data-bs-parent="#accordion9">
                                                <div class="acod-content p-tb15">Developement lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of type and scrambled.</div>
                                            </div>
                                        </div>

                                </div>


                             </div>
                            <!-- LEFT PART -->

                            <!-- RIGHT PART -->
                            <div class="col-lg-9 col-md-12 m-b30">
                       			<!-- BLOG POST CAROUSEL -->

                                 <!-- SERVICES SITE -->
                                 <div class="p-lr15">
                                    <div class="section-head">
                                    	<div class="text-left m-b10">
                                             <h3 class="text-uppercase">Services Sites</h3>
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

                                            <div class="item">
                                                <div class="ow-blog-post date-style-2">
                                                    <div class="ow-post-media wt-img-effect zoom-slow">
                                                        <img src="{{ asset('assets/images/our-work/pic2.jpg') }}" alt="">
                                                    </div>
                                                    <div class="ow-post-info p-tb30 bg-white">
                                                        <div class="ow-post-title">
                                                            <h3 class="post-title"><a href="blog-single.html" title="Video post">Back Massage</a></h3>
                                                        </div>
                                                        <div class="ow-post-meta">
                                                            <ul>
                                                                <li class="post-date"> <i class="fa fa-calendar"></i><strong>17 Mar</strong> <span> 2026</span> </li>
                                                                <li class="post-author"><i class="fa fa-user"></i>By <a href="blog-single.html" title="Posts by John" rel="author">John</a> </li>
                                                                <li class="post-comment"><i class="fa fa-comments"></i> <a href="blog-single.html" class="comments-link">1 Comment</a> </li>
                                                            </ul>
                                                        </div>
                                                        <div class="ow-post-text">
                                                            <p>Lorem Ipsum by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal .</p>
                                                        </div>
                                                        <div class="ow-post-readmore ">
                                                            <a href="blog-single.html" title="READ MORE" rel="bookmark" class=" site-button-link"> READ MORE  <i class="fa fa-angle-double-right"></i></a>
                                                        </div>
                                                        <div class="ow-post-tags clearfix">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="ow-blog-post date-style-2">
                                                    <div class="ow-post-media wt-img-effect zoom-slow">
                                                        <img src="{{ asset('assets/images/our-work/pic6.jpg') }}" alt="">
                                                    </div>
                                                    <div class="ow-post-info p-tb30 bg-white">
                                                        <div class="ow-post-title">
                                                            <h3 class="post-title"><a href="blog-single.html" title="Video post">Head Massage </a></h3>
                                                        </div>
                                                        <div class="ow-post-meta">
                                                            <ul>
                                                                <li class="post-date"> <i class="fa fa-calendar"></i><strong>17 Mar</strong> <span> 2026</span> </li>
                                                                <li class="post-author"><i class="fa fa-user"></i>By <a href="blog-single.html" title="Posts by John" rel="author">John</a> </li>
                                                                <li class="post-comment"><i class="fa fa-comments"></i> <a href="blog-single.html" class="comments-link">1 Comment</a> </li>
                                                            </ul>
                                                        </div>
                                                        <div class="ow-post-text">
                                                            <p>Lorem Ipsum by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal .</p>
                                                        </div>
                                                        <div class="ow-post-readmore ">
                                                            <a href="blog-single.html" title="READ MORE" rel="bookmark" class=" site-button-link"> READ MORE  <i class="fa fa-angle-double-right"></i></a>
                                                        </div>
                                                        <div class="ow-post-tags clearfix">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="ow-blog-post date-style-2">
                                                    <div class="ow-post-media wt-img-effect zoom-slow">
                                                        <img src="{{ asset('assets/images/our-work/pic4.jpg') }}" alt="">
                                                    </div>
                                                    <div class="ow-post-info p-tb30 bg-white">
                                                        <div class="ow-post-title">
                                                            <h3 class="post-title"><a href="blog-single.html" title="Video post">Body Scrub</a></h3>
                                                        </div>
                                                        <div class="ow-post-meta">
                                                            <ul>
                                                                <li class="post-date"> <i class="fa fa-calendar"></i><strong>17 Mar</strong> <span> 2026</span> </li>
                                                                <li class="post-author"><i class="fa fa-user"></i>By <a href="blog-single.html" title="Posts by John" rel="author">John</a> </li>
                                                                <li class="post-comment"><i class="fa fa-comments"></i> <a href="blog-single.html" class="comments-link">1 Comment</a> </li>
                                                            </ul>
                                                        </div>
                                                        <div class="ow-post-text">
                                                            <p>Lorem Ipsum by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal .</p>
                                                        </div>
                                                        <div class="ow-post-readmore ">
                                                            <a href="blog-single.html" title="READ MORE" rel="bookmark" class=" site-button-link"> READ MORE  <i class="fa fa-angle-double-right"></i></a>
                                                        </div>
                                                        <div class="ow-post-tags clearfix">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="ow-blog-post date-style-2 date-skew">
                                                    <div class="ow-post-media wt-img-effect zoom-slow">
                                                        <img src="{{ asset('assets/images/our-work/pic1.jpg') }}" alt="">
                                                    </div>
                                                    <div class="ow-post-info p-tb30 bg-white">
                                                        <div class="ow-post-title">
                                                            <h3 class="post-title"><a href="blog-single.html" title="Video post">Massages & Body</a></h3>
                                                        </div>
                                                        <div class="ow-post-meta">
                                                            <ul>
                                                                <li class="post-date"> <i class="fa fa-calendar"></i><strong>17 Mar</strong> <span> 2026</span> </li>
                                                                <li class="post-author"><i class="fa fa-user"></i>By <a href="blog-single.html" title="Posts by John" rel="author">John</a> </li>
                                                                <li class="post-comment"><i class="fa fa-comments"></i> <a href="blog-single.html" class="comments-link">1 Comment</a> </li>
                                                            </ul>
                                                        </div>
                                                        <div class="ow-post-text">
                                                            <p>Lorem Ipsum by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal .</p>
                                                        </div>
                                                        <div class="ow-post-readmore ">
                                                            <a href="blog-single.html" title="READ MORE" rel="bookmark" class=" site-button-link"> READ MORE  <i class="fa fa-angle-double-right"></i></a>
                                                        </div>
                                                        <div class="ow-post-tags clearfix">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="ow-blog-post date-style-2">
                                                    <div class="ow-post-media wt-img-effect zoom-slow">
                                                        <img src="{{ asset('assets/images/our-work/pic5.jpg') }}" alt="">
                                                    </div>
                                                    <div class="ow-post-info p-tb30 bg-white">
                                                        <div class="ow-post-title">
                                                            <h3 class="post-title"><a href="blog-single.html" title="Video post">Back Massage</a></h3>
                                                        </div>
                                                        <div class="ow-post-meta">
                                                            <ul>
                                                                <li class="post-date"> <i class="fa fa-calendar"></i><strong>17 Mar</strong> <span> 2026</span> </li>
                                                                <li class="post-author"><i class="fa fa-user"></i>By <a href="blog-single.html" title="Posts by John" rel="author">John</a> </li>
                                                                <li class="post-comment"><i class="fa fa-comments"></i> <a href="blog-single.html" class="comments-link">1 Comment</a> </li>
                                                            </ul>
                                                        </div>
                                                        <div class="ow-post-text">
                                                            <p>Lorem Ipsum by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal .</p>
                                                        </div>
                                                        <div class="ow-post-readmore ">
                                                            <a href="blog-single.html" title="READ MORE" rel="bookmark" class=" site-button-link"> READ MORE  <i class="fa fa-angle-double-right"></i></a>
                                                        </div>
                                                        <div class="ow-post-tags clearfix">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="ow-blog-post date-style-2 ">
                                                    <div class="ow-post-media wt-img-effect zoom-slow">
                                                        <img src="{{ asset('assets/images/our-work/pic3.jpg') }}" alt="">
                                                    </div>
                                                    <div class="ow-post-info p-tb30 bg-white">
                                                        <div class="ow-post-title">
                                                            <h3 class="post-title"><a href="blog-single.html" title="Video post">Head Massage </a></h3>
                                                        </div>
                                                        <div class="ow-post-meta">
                                                            <ul>
                                                                <li class="post-date"> <i class="fa fa-calendar"></i><strong>17 Mar</strong> <span> 2026</span> </li>
                                                                <li class="post-author"><i class="fa fa-user"></i>By <a href="blog-single.html" title="Posts by John" rel="author">John</a> </li>
                                                                <li class="post-comment"><i class="fa fa-comments"></i> <a href="blog-single.html" class="comments-link">1 Comment</a> </li>
                                                            </ul>
                                                        </div>
                                                        <div class="ow-post-text">
                                                            <p>Lorem Ipsum by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal .</p>
                                                        </div>
                                                        <div class="ow-post-readmore ">
                                                            <a href="blog-single.html" title="READ MORE" rel="bookmark" class=" site-button-link"> READ MORE  <i class="fa fa-angle-double-right"></i></a>
                                                        </div>
                                                        <div class="ow-post-tags clearfix">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
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
                                                        <li><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p></li>
                                                        <li><p>Dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p></li>
                                                        <li><p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p></li>
                                                        <li><p>Dorem ipsum dolor sit amet rem Ipsum has been the industry's standard dummy text.</p></li>
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
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing  sed diam nibh euismod .</p>
                                                    </div>
                                              </div>
                                                <div class="wt-icon-box-wraper bx-style-2 m-l40 m-b20 p-a10 left">
                                                    <div class="wt-icon-box-sm site-text-primary bg-white radius bdr-2">
                                                        <a href="javascript:void(0);" class="icon-cell"><i class="fa fa-pencil"></i></a>
                                                    </div>
                                                    <div class="icon-content p-l40">
                                                        <h3 class="wt-tilte text-uppercase">INTEGRITY</h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing  sed diam nibh euismod .</p>
                                                    </div>
                                              </div>
                                                <div class="wt-icon-box-wraper bx-style-2 m-l40 m-b20 p-a10 left">
                                                    <div class="wt-icon-box-sm site-text-primary bg-white radius bdr-2">
                                                        <a href="javascript:void(0);" class="icon-cell"><i class="fa fa-flag-checkered"></i></a>
                                                    </div>
                                                    <div class="icon-content p-l40">
                                                        <h3 class="wt-tilte text-uppercase">STRATEGY</h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing  sed diam nibh euismod .</p>
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
