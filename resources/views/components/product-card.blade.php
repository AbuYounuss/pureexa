@props(['image', 'title', 'price', 'url' => 'javascript:;', 'badge' => null, 'desc' => null, 'showAction' => false])

@pushOnce('styles')
<style>
    .product-card {
        background: #fff;
        border-radius: 15px;
        overflow: hidden;
        transition: all 0.3s ease;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        border: 1px solid #eee;
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    .product-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        border-color: #EC5598;
    }
    .product-media {
        position: relative;
        overflow: hidden;
        aspect-ratio: 1/1;
        background: #f9f9f9;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .product-media img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
        padding: 0;
    }
    /* Only add padding and contain if the image isn't supposed to cover the whole box.
       Since products and our-products use cover without padding, we'll make a modifier class or just stick to object-fit: cover */
    .product-media.contain-img img {
        object-fit: contain;
        padding: 15px;
    }
    .product-card:hover .product-media img {
        transform: scale(1.1);
    }
    .product-info {
        padding: 20px;
        text-align: center;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .product-title {
        font-size: 18px;
        font-weight: 600;
        margin: 0 0 10px 0;
        color: #333;
        transition: color 0.3s ease;
    }
    .product-title a {
        color: #333;
        text-decoration: none !important;
    }
    .product-card:hover .product-title a {
        color: #EC5598;
    }
    .product-price {
        font-size: 20px;
        font-weight: 700;
        color: #EC5598;
        margin-bottom: 15px;
    }
    .product-desc {
        font-size: 14px;
        color: #777;
        margin-bottom: 15px;
    }
    .product-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        background: #EC5598;
        color: #fff;
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        z-index: 1;
    }
    .product-action {
        margin-top: 10px;
    }
    .product-action .btn {
        width: 100%;
        border-radius: 30px;
        background: #EC5598;
        color: #fff;
        border: none;
        padding: 10px 20px;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    .product-action .btn:hover {
        background: #d84582;
        transform: translateY(-2px);
    }
</style>
@endpushOnce

<div class="product-card">
    <div class="product-media {{ $desc ? 'contain-img' : '' }}">
        @if($badge)
            <span class="product-badge">{{ $badge }}</span>
        @endif
        <a href="{{ $url }}">
            <img src="{{ $image }}" alt="{{ $title }}">
        </a>
    </div>
    <div class="product-info">
        <div>
            <h4 class="product-title"><a href="{{ $url }}">{{ $title }}</a></h4>
            @if($desc)
                <p class="product-desc">{{ $desc }}</p>
            @endif
        </div>
        <div>
            <div class="product-price">{{ $price }}</div>
            @if($showAction)
            <div class="product-action">
                <button type="button" class="btn btn-primary"><i class="fa fa-shopping-cart m-r5"></i> Add to Cart</button>
            </div>
            @endif
        </div>
    </div>
</div>
