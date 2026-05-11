@extends('layouts.app')

@section('title', $title . ' - Pureexa')

@section('content')
    <!-- CONTENT START -->
    <div class="page-content">
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper" style="background-image:url('{{ asset('assets/images/banner/about-banner.png') }}');">
                <div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <h2 class="text-white text-center">{{ $title }}</h2>
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->

            <!-- BREADCRUMB ROW -->
            <div class="bg-gray-light p-tb20">
                <div class="container">
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                    <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
                    @if(isset($category) || isset($brand))
                        <li><a href="{{ url('/products') }}">Products</a></li>
                    @endif
                         <li>{{ $breadcrumb }}</li>
                    </ul>
                </div>
            </div>
            <!-- BREADCRUMB  ROW END -->

            <!-- SECTION CONTENT -->
            <div class="section-full p-t80 p-b50  ">
                <div class="container">
                <!-- TITLE START -->
                    <div class="section-head text-center">
                            <h3 class="text-uppercase">{{ $title }}</h3>
                            <div class="wt-separator-outer">
                               <div class="wt-separator style-icon">
                                   <i class="fa fa-leaf text-black"></i>
                                   <span class="separator-left site-bg-primary"></span>
                                   <span class="separator-right site-bg-primary"></span>
                               </div>
                           </div>
                            <p>Explore our exclusive collection of premium beauty and wellness products. From organic skincare to luxury fragrances, we bring you the best brands to enhance your daily self-care routine.</p>
                        </div>
                    <!-- TITLE END -->
                    <div class="section-content">
                        <div class="row">

                            @foreach($products as $product)
                            <!-- PRODUCT ITEM -->
                            <div class="col-lg-3 col-md-6 m-b30">
                                @php
                                    $imagePath = $product['img'];
                                    // If the image doesn't start with known prefixes, prefix it with products/
                                    if (!str_starts_with($imagePath, 'products/') && 
                                        !str_starts_with($imagePath, 'brandProduct/') && 
                                        !str_starts_with($imagePath, 'product/')) {
                                        $imagePath = 'products/' . $imagePath;
                                    }
                                @endphp
                                <x-product-card 
                                    image="{{ asset('assets/images/' . $imagePath) }}"
                                    title="{{ $product['name'] }}"
                                    price="{{ $product['price'] }}"
                                    badge="New"
                                    :showAction="false"
                                />
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
