@extends('layouts.app')

@section('title', 'Terms & Conditions')

@section('content')
    <!-- CONTENT START -->
    <div class="page-content">

        <!-- INNER PAGE BANNER -->
        <div class="wt-bnr-inr overlay-wraper" style="background-image:url('{{ asset('assets/images/banner/about-banner.png') }}');">
            <div class="overlay-main bg-black opacity-07"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <h2 class="text-white text-center">Terms & Conditions</h2>
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->

        <!-- BREADCRUMB ROW -->
        <div class="bg-gray-light p-tb20">
            <div class="container">
                <ul class="wt-breadcrumb breadcrumb-style-2">
                    <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
                    <li>Terms & Conditions</li>
                </ul>
            </div>
        </div>
        <!-- BREADCRUMB ROW END -->

        <!-- TERMS AND CONDITIONS SECTION START -->
        <div class="section-full p-t80 p-b50">
            <div class="container">
                <div class="section-content">
                    <div class="section-head text-left">
                        <h2 class="text-uppercase site-text-primary">Terms & Conditions</h2>
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="m-b30">
                        <h3>1. Agreement to Terms</h3>
                        <p>By accessing our website, you agree to be bound by these Terms and Conditions and to comply with all applicable laws and regulations. If you do not agree with any of these terms, you are prohibited from using or accessing this site.</p>
                    </div>

                    <div class="m-b30">
                        <h3>2. Use License</h3>
                        <p>Permission is granted to temporarily download one copy of the materials (information or software) on Pureexa's website for personal, non-commercial transitory viewing only.</p>
                        <p>This is the grant of a license, not a transfer of title, and under this license you may not:</p>
                        <ul class="list-check-circle primary">
                            <li>Modify or copy the materials.</li>
                            <li>Use the materials for any commercial purpose, or for any public display (commercial or non-commercial).</li>
                            <li>Attempt to decompile or reverse engineer any software contained on Pureexa's website.</li>
                            <li>Remove any copyright or other proprietary notations from the materials.</li>
                        </ul>
                    </div>

                    <div class="m-b30">
                        <h3>3. Disclaimer</h3>
                        <p>The materials on Pureexa's website are provided on an 'as is' basis. Pureexa makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties including, without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights.</p>
                    </div>

                    <div class="m-b30">
                        <h3>4. Limitations</h3>
                        <p>In no event shall Pureexa or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on Pureexa's website, even if Pureexa or a Pureexa authorized representative has been notified orally or in writing of the possibility of such damage.</p>
                    </div>

                    <div class="m-b30">
                        <h3>5. Governing Law</h3>
                        <p>These terms and conditions are governed by and construed in accordance with the laws and you irrevocably submit to the exclusive jurisdiction of the courts in that State or location.</p>
                    </div>

                </div>
            </div>
        </div>
        <!-- TERMS AND CONDITIONS SECTION END -->

    </div>
    <!-- CONTENT END -->
@endsection
