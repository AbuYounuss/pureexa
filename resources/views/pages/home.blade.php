@extends('layouts.app')

@section('title', 'Pureexa - Health & Beauty Spa')

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

            {{-- brand showcase section --}}
            @include('components.brand-showcase')

             {{-- our testimonial section --}}
            @include('components.ourtestimonial-section')

            {{-- FAQ Section --}}
            @include('components.faq-section')

            {{-- our projects --}}
            @include('components.project-section')

        </div>
        <!-- CONTENT END -->
@endsection
