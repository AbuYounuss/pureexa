@extends('layouts.app')

@section('title', 'Home Page')

@section('content')


     <!-- CONTENT START -->
        <div class="page-content">

            {{-- slider components add --}}
            @include('components.slider')

            {{-- welcome Section --}}
            @include('components.welcome-section')

             {{-- our services Section --}}
            @include('components.our-service-section')


           {{-- pricing serction --}}
            @include('components.pricing-section')

             {{-- company status section --}}

            @include('components.company-status')

             {{-- our experts section --}}
            @include('components.ourexperts-section')

            {{-- our special offer section --}}
            @include('components.specialoffer-section')

             {{-- our gallery section --}}
            @include('components.ourgallery-section')

            {{-- our pricing table section --}}
            @include('components.pricing-table-section')

            {{-- our product section --}}
            @include('components.ourproduct-section')

             {{-- our testimonial section --}}
            @include('components.ourtestimonial-section')

            {{-- <!-- CONTACT US SECTION END  -->
			<div class="section-full p-t100 p-b70">
                <div class="container equal-wraper no-col-gap m-b30">

                        <!-- TITLE START -->
                        <div class="section-head text-center">
                            <h2><span class="site-text-primary"> Contact</span> Us</h2>
                            <div class="wt-separator-outer ">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        </div>
                        <!-- TITLE END -->

                        <div class="row conntact-home bg-gray m-b30">
                        	<div class="col-lg-4 col-md-6 contact-home-left bg-no-repeat site-bg-primary bg-left-center"  style="background-image:url('{{ asset('assets/images/background/contact-map.png') }}');">
                            	<div class="section-content">
                                	<div class="p-a50">

                                        <div class="wt-icon-box-wraper left p-b20 text-white">
                                            <span class="icon-lg">
                                                <span class="flaticon-placeholder"></span>
                                            </span>
                                            <div class="icon-content">
                                                <h3 class="m-b5">Address</h3>
                                                <span class="font-12">295 Madison Ave, 12th Floor New York, NY 10017</span>
                                            </div>
                                        </div>

                                        <div class="wt-icon-box-wraper left p-b20 text-white">
                                            <span class="icon-lg">
                                                <span class="flaticon-envelope"></span>
                                            </span>
                                            <div class="icon-content">
                                                <h3 class="m-b5">Email</h3>
                                                <span class="font-12">info @example.com </span><br>
                                                <span class="font-12">info2 @example.com </span>
                                            </div>
                                        </div>

                                        <div class="wt-icon-box-wraper left p-b20 text-white">
                                            <span class="icon-lg">
                                                <span class="flaticon-smartphone"></span>
                                            </span>
                                            <div class="icon-content">
                                                <h3 class="m-b5">Phone</h3>
                                                <span class="font-12">+77 634 545 144 </span><br>
                                                <span class="font-12">+77 634 255 147 </span>
                                            </div>
                                        </div>

                                        <div class="Opening-hours text-white">
                                            <h3 class="wt-title text-uppercase m-t0">Opening Hours</h3>
                                            <ul class="list-unstyled">
                                                <li>Monday - Friday <span class="pull-right">9.00 - 5.00 Pm</span></li>
                                                <li>Saturday <span class="pull-right">9.00 - 2.00 Pm</span></li>
                                                <li>Sunday <span class="pull-right">Closed</span></li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-6">
                            	<div class="section-content bg-gray">
                                      <div class="contact-home-right p-a30">
                                      	<h3 class="text-uppercase font-26 p-b20 font-weight-400">GET IN TOUCH</h3>
                                      	<form  class="cons-contact-form2" method="post" action="https://thewebmax.org/spa/phpmailer/mail.php">
                                        	<div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                    <input name="username" type="text" required class="form-control" placeholder="Neme">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                    <input name="email" type="text" class="form-control" required placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-book"></i></span>
                                                    <input name="phone" type="text" class="form-control" required placeholder="Phone">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon v-align-t"><i class="fa fa-pencil"></i></span>
                                                    <textarea name="message" class="form-control" rows="4" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <button type="submit" class="site-button skew-icon-btn radius-sm">
                                              <span class="font-weight-700 inline-block text-uppercase p-lr15">Submit</span>
                                            </button>
                                        </form>
                                      </div>
                                </div>
                            </div>
                        </div>

                </div>

            </div>
            <!-- CONTACT US OFFER SECTION END  --> --}}

            {{-- our projects --}}
            @include('components.project-section')

        </div>
        <!-- CONTENT END -->
@endsection
