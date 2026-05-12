@extends('layouts.app')

@section('title', 'Contact Us - Pureexa')

@section('content')
    <!-- CONTENT START -->
    <div class="page-content">
        <!-- INNER PAGE BANNER -->
        <div class="wt-bnr-inr overlay-wraper" style="background-image:url('{{ asset('assets/images/banner/about-banner.png') }}');">
            <div class="overlay-main bg-black opacity-07"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <h2 class="text-white text-center">Contact Us</h2>
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->

        <!-- BREADCRUMB ROW -->
        <div class="bg-gray-light p-tb20">
            <div class="container">
                <ul class="wt-breadcrumb breadcrumb-style-2">
                    <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
        <!-- BREADCRUMB ROW END -->

        <!-- SECTION CONTENT START -->
        <div class="section-full p-t80 p-b50">
            <div class="container">
                <div class="section-content">
                    <div class="row">

                        <!-- CONTACT FORM -->
                        <div class="col-lg-8 col-md-12 m-b30">
                            <div class="section-head text-left">
                                <h3 class="text-uppercase">Get In Touch</h3>
                                <div class="wt-separator-outer">
                                    <div class="wt-separator style-icon">
                                        <i class="fa fa-leaf text-black"></i>
                                        <span class="separator-left site-bg-primary"></span>
                                        <span class="separator-right site-bg-primary"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-form-bx bg-gray p-a30">
                                <form class="cons-contact-form" method="post" action="">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input name="username" type="text" required class="form-control" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input name="email" type="email" class="form-control" required placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input name="phone" type="text" class="form-control" required placeholder="Phone">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input name="subject" type="text" class="form-control" required placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea name="message" rows="4" class="form-control " required placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-right">
                                            <button type="button" class="site-button site-bg-primary text-uppercase" id="submit-contact-btn">Submit Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- CONTACT INFO -->
                        <div class="col-lg-4 col-md-12 m-b30">
                            <div class="section-head text-left">
                                <h3 class="text-uppercase">Contact Info</h3>
                                <div class="wt-separator-outer">
                                    <div class="wt-separator style-icon">
                                        <i class="fa fa-leaf text-black"></i>
                                        <span class="separator-left site-bg-primary"></span>
                                        <span class="separator-right site-bg-primary"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-info bg-gray p-a30">
                                <div class="wt-icon-box-wraper left m-b30">
                                    <div class="icon-sm site-text-primary">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <div class="icon-content">
                                        <h4 class="wt-tilte text-uppercase m-b0">Address</h4>
                                        <p>432 Park Avenue, Suite 4200 New York, NY 10022</p>
                                    </div>
                                </div>
                                <div class="wt-icon-box-wraper left m-b30">
                                    <div class="icon-sm site-text-primary">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <div class="icon-content">
                                        <h4 class="wt-tilte text-uppercase m-b0">Email</h4>
                                        <p>info@pureexa.com</p>
                                    </div>
                                </div>
                                <div class="wt-icon-box-wraper left">
                                    <div class="icon-sm site-text-primary">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="icon-content">
                                        <h4 class="wt-tilte text-uppercase m-b0">Phone</h4>
                                        <p>+77 634 545 144</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- SECTION CONTENT END -->

        <!-- NOT AVAILABLE MODAL -->
        <div class="modal fade" id="notAvailableModal" tabindex="-1" role="dialog" aria-labelledby="notAvailableModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header site-bg-primary text-white">
                        <h5 class="modal-title" id="notAvailableModalLabel">Notice</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center p-t40 p-b40">
                        <i class="fa fa-globe site-text-primary m-b20" style="font-size: 50px;"></i>
                        <h4>Service Unavailable</h4>
                        <p class="m-b0">We are sorry, but our services are currently not available in your country. Please stay tuned for future updates.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="site-button site-bg-primary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- GOOGLE MAP -->
        <div class="section-full">
            <div class="container-fluid">
                <div class="wt-box">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.7253410627243!2d76.8130719150245!3d30.726829981639313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fed0be656223d%3A0xa94f7d46b7642647!2sThe%20Web%20Max!5e0!3m2!1sen!2sin!4v1625470000000!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>

    </div>
    <!-- CONTENT END -->
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const submitBtn = document.getElementById('submit-contact-btn');
        if (submitBtn) {
            submitBtn.addEventListener('click', function() {
                var modalEl = document.getElementById('notAvailableModal');
                var myModal = new bootstrap.Modal(modalEl);
                myModal.show();
            });
        }
    });
</script>
@endpush
