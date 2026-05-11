@extends('layouts.app')

@php
    $title = 'Our Products';
    $breadcrumb = 'Products';
    
    $products = [
        ['name' => 'Skincare Serum', 'price' => '$25.00', 'img' => 'products/pic-1.jpg'],
        ['name' => 'Moisturizing Cream', 'price' => '$30.00', 'img' => 'products/pic-2.jpg'],
        ['name' => 'Herbal Shampoo', 'price' => '$15.00', 'img' => 'products/pic-3.jpg'],
        ['name' => 'Organic Soap', 'price' => '$10.00', 'img' => 'products/pic-4.jpg'],
        ['name' => 'Face Wash', 'price' => '$18.00', 'img' => 'products/pic-5.jpg'],
        ['name' => 'Body Lotion', 'price' => '$22.00', 'img' => 'products/pic-6.jpg'],
        ['name' => 'Sunscreen', 'price' => '$28.00', 'img' => 'products/pic-7.jpg'],
        ['name' => 'Eye Cream', 'price' => '$35.00', 'img' => 'products/pic-8.jpg'],
    ];

    $category_data = [
        'skincare' => [
            'folder' => 'product/skincareSerum',
            'products' => [
                ['name' => 'Revolution Niacinamide Serum', 'price' => '$20.00', 'img' => 'one.jpg'],
                ['name' => 'Guanjing Hyaluronic Acid B5', 'price' => '$25.00', 'img' => 'two.png'],
                ['name' => 'Anua Niacinamide + TXA', 'price' => '$30.00', 'img' => 'three.png'],
                ['name' => 'SkinCeuticals C E Ferulic', 'price' => '$150.00', 'img' => 'four.png'],
                ['name' => 'Anua Azelaic Acid Serum', 'price' => '$40.00', 'img' => 'five.png'],
                ['name' => 'Dot & Key Watermelon Serum', 'price' => '$45.00', 'img' => 'six.png'],
            ]
        ],
        'makeup' => [
            'folder' => 'product/mackupProduct',
            'products' => [
                ['name' => 'Complete Makeup Kit', 'price' => '$55.00', 'img' => '1.png'],
                ['name' => 'Cosmetic Collection', 'price' => '$48.00', 'img' => '2.png'],
                ['name' => 'Professional Brush Set', 'price' => '$32.00', 'img' => '3.png'],
                ['name' => 'Makeup Essentials Group', 'price' => '$45.00', 'img' => '4.png'],
                ['name' => 'High-End Makeup Set', 'price' => '$120.00', 'img' => '5.png'],
                ['name' => 'Blush & Foundation Kit', 'price' => '$30.00', 'img' => '6.png'],
            ]
        ],
        'haircare' => [
            'folder' => 'product/haircareProduct',
            'products' => [
                ['name' => 'Dove Hair Fall Rescue', 'price' => '$12.00', 'img' => '1.png'],
                ['name' => 'Cantu & Shea Moisture Set', 'price' => '$34.00', 'img' => '2.png'],
                ['name' => 'Curl Girl Styling Kit', 'price' => '$26.00', 'img' => '3.png'],
                ['name' => 'TRESemmé Keratin Shine', 'price' => '$18.00', 'img' => '4.png'],
                ['name' => 'Shea Butter & Coconut Oil', 'price' => '$15.00', 'img' => '5.png'],
                ['name' => 'Hair Care Essentials', 'price' => '$22.00', 'img' => '6.png'],
            ]
        ],
        'bodycare' => [
            'folder' => 'product/bodycare',
            'products' => [
                ['name' => 'Rare Beauty Body Lotion', 'price' => '$28.00', 'img' => '1.png'],
                ['name' => 'Naturium Body Collection', 'price' => '$45.00', 'img' => '2.png'],
                ['name' => 'African Botanics Wash', 'price' => '$34.00', 'img' => '3.png'],
                ['name' => 'Aroma Magic Body Care', 'price' => '$18.00', 'img' => '4.png'],
                ['name' => 'Vaadi Herbals Glow Kit', 'price' => '$20.00', 'img' => '5.png'],
                ['name' => 'The Body Shop Shea Kit', 'price' => '$40.00', 'img' => '6.png'],
            ]
        ],
        'supplements' => [
            'folder' => 'product/supplementProduct',
            'products' => [
                ['name' => 'Premium Multivitamins', 'price' => '$35.00', 'img' => '1.png'],
                ['name' => 'Daily Vitamin Capsules', 'price' => '$25.00', 'img' => '2.png'],
                ['name' => 'Beleaf Gluta Plus', 'price' => '$40.00', 'img' => '3.png'],
                ['name' => 'Gluta Vita Supplement', 'price' => '$45.00', 'img' => '4.png'],
                ['name' => 'Basic Whey & Mass Gainer', 'price' => '$60.00', 'img' => '5.png'],
                ['name' => 'Gluta Collagen Pink', 'price' => '$50.00', 'img' => '6.png'],
            ]
        ]
    ];

    if (isset($category) && isset($category_data[$category])) {
        $title = ucfirst($category) . ' Products';
        $breadcrumb = ucfirst($category);
        $current_folder = $category_data[$category]['folder'];
        $category_products = $category_data[$category]['products'];
        
        $products = [];
        foreach($category_products as $cp) {
            $products[] = [
                'name' => $cp['name'],
                'price' => $cp['price'],
                'img' => $current_folder . '/' . $cp['img']
            ];
        }
    } elseif (isset($brand)) {
        $title = ucfirst($brand) . ' Brand';
        $breadcrumb = ucfirst($brand);
    }
@endphp

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
                                <div class="wt-box bg-white border-1">
                                    <div class="wt-media">
                                        <a href="javascript:;"><img src="{{ asset('assets/images/' . $product['img']) }}" alt="{{ $product['name'] }}"></a>
                                    </div>
                                    <div class="wt-info p-a20 text-center">
                                        <h4 class="wt-title m-t0"><a href="javascript:;">{{ $product['name'] }}</a></h4>
                                        <span class="price site-text-primary h5">{{ $product['price'] }}</span>
                                        <div class="m-t10">
                                            <a href="javascript:;" class="site-button btn-sm">Add to Cart</a>
                                        </div>
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
