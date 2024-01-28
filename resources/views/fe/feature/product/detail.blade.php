@extends('fe.feature.layout')
@section('feature.content')
    <!-- Ec breadcrumb start -->
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Product</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="ec-breadcrumb-item active">Product</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-pro-rightside ec-common-rightside col-lg-9 order-lg-last col-md-12 order-md-first">
                    <input type="hidden" id="productId" value="{{ $product->id }}">
                    <!-- Single product content Start -->
                    <div class="single-pro-block">
                        <div class="single-pro-inner">
                            <div class="row">
                                <div class="single-pro-img mb-3">
                                    <div class="single-product-scroll">
                                        <div class="single-product-cover">
                                            @foreach ($product->images as $image)
                                                <div class="single-slide zoom-image-hover">
                                                    <img class="img-responsive" src="{{ asset($image->path) }}"
                                                        alt="">
                                                </div>
                                            @endforeach

                                        </div>
                                        <div class="single-nav-thumb">
                                            @foreach ($product->images as $image_preview)
                                                <div class="single-slide">
                                                    <img class="img-responsive" src="{{ asset($image_preview->path) }}"
                                                        alt="">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="single-pro-desc">
                                    <div class="single-pro-content">
                                        <h5 class="ec-single-title">{{ $product->name }}</h5>
                                        <div class="ec-single-price-stoke">
                                            <div class="ec-single-price">
                                                @php
                                                    $variant = $product->variants()->first();
                                                @endphp
                                                <span
                                                    class="ec-single-ps-title text-decoration-line-through text-danger">{{ $product->has_variants == 0 && $variant->sale_price != 0 ? number_format($product->variants()->first()->price, 0, '.', '.') . ' đ' : '' }}</span>
                                                <span class="new-price">
                                                    @if ($product->has_variants == 0)
                                                        @if ($variant && $variant->sale_price != 0)
                                                            {{ number_format($variant->sale_price, 0, '.', '.') . ' đ' }}
                                                        @else
                                                            {{ number_format($variant ? $variant->price : 0, 0, '.', '.') . ' đ' }}
                                                        @endif
                                                    @endif

                                                </span>
                                            </div>
                                            <div class="ec-single-stoke">
                                                <span class="ec-single-ps-title">IN STOCK</span>
                                                <span class="ec-single-sku">SKU#: WH12</span>
                                            </div>
                                        </div>
                                        @php
                                            $variantSizeAttributes = $product->getVariantAttributesWithDetails(['size']);
                                            $variantColorAttributes = $product->getVariantAttributesWithDetails(['color']);

                                        @endphp
                                        <div class="ec-pro-variation">
                                            @if (!empty($variantSizeAttributes))
                                                <div class="ec-pro-variation-inner ec-pro-variation-size">
                                                    <span>SIZE</span>
                                                    <div class="ec-pro-variation-content">
                                                        <ul>
                                                            @foreach ($variantSizeAttributes as $key => $attr)
                                                                <li class="{{ $key == 0 ? 'active' : '' }}"
                                                                    data-price="{{ number_format($attr['price'], 0, '.', '.') }}"
                                                                    data-sale-price="{{ number_format($attr['sale_price'], 0, '.', '.') }}"
                                                                    data-sku="{{ $attr['sku'] }}"
                                                                    data-id="{{ $attr['variant_id'] }}">
                                                                    <span>{{ $attr['attribute_value'] }}</span>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            @endif
                                            @if (!empty($variantColorAttributes))
                                                <div class="ec-pro-variation-inner ec-pro-variation-color">
                                                    <span>Color</span>
                                                    <div class="ec-pro-variation-content">
                                                        <ul>
                                                            @foreach ($variantColorAttributes as $key => $attr)
                                                                <li class="{{ $key == 0 ? 'active' : '' }}"
                                                                    data-price="{{ number_format($attr['price'], 0, '.', '.') }}"
                                                                    data-sale-price="{{ number_format($attr['sale_price'], 0, '.', '.') }}"
                                                                    data-sku="{{ $attr['sku'] }}"
                                                                    data-id="{{ $attr['variant_id'] }}">
                                                                    <span>{{ $attr['attribute_value'] }}</span>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>

                                        <div class="ec-single-qty">
                                            <div class="qty-plus-minus">
                                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                                            </div>
                                            <div class="ec-single-cart ">
                                                <button class="btn btn-primary">Add To Cart</button>
                                            </div>
                                            {{-- <div class="ec-single-wishlist">
                                                <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                        class="fi-rr-shopping-basket"></i></a>
                                            </div>
                                            <div class="ec-single-quickview">
                                                <a href="#" class="ec-btn-group quickview"
                                                    data-link-action="quickview" title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                            </div> --}}
                                        </div>
                                        <div class="ec-single-social">
                                            <ul class="mb-0">
                                                {{-- <li class="list-inline-item facebook"><a href="#"><i
                                                            class="ecicon eci-facebook"></i></a></li>
                                                <li class="list-inline-item twitter"><a href="#"><i
                                                            class="ecicon eci-twitter"></i></a></li>
                                                <li class="list-inline-item instagram"><a href="#"><i
                                                            class="ecicon eci-instagram"></i></a></li>
                                                <li class="list-inline-item youtube-play"><a href="#"><i
                                                            class="ecicon eci-youtube-play"></i></a></li>
                                                <li class="list-inline-item behance"><a href="#"><i
                                                            class="ecicon eci-behance"></i></a></li>
                                                <li class="list-inline-item whatsapp"><a href="#"><i
                                                            class="ecicon eci-whatsapp"></i></a></li>
                                                <li class="list-inline-item plus"><a href="#"><i
                                                            class="ecicon eci-plus"></i></a></li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Single product content End -->
                    <!-- Single product tab start -->
                    <div class="ec-single-pro-tab">
                        <div class="ec-single-pro-tab-wrapper">
                            <div class="ec-single-pro-tab-nav">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#ec-spt-nav-details"
                                            role="tablist">Detail</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content  ec-single-pro-tab-content">
                                <div id="ec-spt-nav-details" class="tab-pane fade show active">
                                    <div class="ec-single-pro-tab-desc">
                                        {!! $product->description !!}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- product details description area end -->
                </div>
                <!-- Sidebar Area Start -->
                <div class="ec-pro-leftside ec-common-leftside col-lg-3 order-lg-first col-md-12 order-md-last">
                    <div class="ec-sidebar-wrap">
                        <!-- Sidebar Category Block -->
                        <div class="ec-sidebar-block">
                            <div class="ec-sb-title">
                                <h3 class="ec-sidebar-title">Category</h3>
                            </div>
                            <div class="ec-sb-block-content">
                                <ul>
                                    <li>
                                        <div class="ec-sidebar-block-item">clothes</div>
                                        <ul style="display: block;">
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Men
                                                        <span>-25</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Women
                                                        <span>-52</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Boy
                                                        <span>-40</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Girl
                                                        <span>-35</span></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="ec-sb-block-content">
                                <ul>
                                    <li>
                                        <div class="ec-sidebar-block-item">shoes</div>
                                        <ul>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Men
                                                        <span>-25</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Women
                                                        <span>-52</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Boy
                                                        <span>-40</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Girl
                                                        <span>-35</span></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="ec-sb-block-content">
                                <ul>
                                    <li>
                                        <div class="ec-sidebar-block-item">bag</div>
                                        <ul>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Men
                                                        <span>-25</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Women
                                                        <span>-52</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Boy
                                                        <span>-40</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Girl
                                                        <span>-35</span></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="ec-sb-block-content">
                                <ul>
                                    <li>
                                        <div class="ec-sidebar-block-item">cosmetics</div>
                                        <ul>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Men
                                                        <span>-25</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Women
                                                        <span>-52</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Boy
                                                        <span>-40</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Girl
                                                        <span>-35</span></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="ec-sb-block-content">
                                <ul>
                                    <li>
                                        <div class="ec-sidebar-block-item">electronics</div>
                                        <ul>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Men
                                                        <span>-25</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Women
                                                        <span>-52</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Boy
                                                        <span>-40</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Girl
                                                        <span>-35</span></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="ec-sb-block-content">
                                <ul>
                                    <li>
                                        <div class="ec-sidebar-block-item">phone</div>
                                        <ul>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Men
                                                        <span>-25</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Women
                                                        <span>-52</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Boy
                                                        <span>-40</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Girl
                                                        <span>-35</span></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="ec-sb-block-content">
                                <ul>
                                    <li>
                                        <div class="ec-sidebar-block-item">accessories</div>
                                        <ul>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Men
                                                        <span>-25</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Women
                                                        <span>-52</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Boy
                                                        <span>-40</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="#">Girl
                                                        <span>-35</span></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar Category Block -->
                    </div>
                    <div class="ec-sidebar-slider">
                        <div class="ec-sb-slider-title">Best Sellers</div>
                        <div class="ec-sb-pro-sl">
                            <div>
                                <div class="ec-sb-pro-sl-item">
                                    <a href="#" class="sidekka_pro_img"><img
                                            src="{{ asset('frontend/assets/images/product-image/1_1.jpg') }}" alt="product" /></a>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="#">Beautiful Teddy
                                                Bear</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <span class="ec-price">
                                            <span class="old-price">$100.00</span>
                                            <span class="new-price">$80.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="ec-sb-pro-sl-item">
                                    <a href="#" class="sidekka_pro_img"><img
                                            src="{{ asset('frontend/assets/images/product-image/2_1.jpg') }}" alt="product" /></a>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="#">Gym Backpack</a>
                                        </h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <span class="ec-price">
                                            <span class="old-price">$100.00</span>
                                            <span class="new-price">$80.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="ec-sb-pro-sl-item">
                                    <a href="#" class="sidekka_pro_img"><img
                                            src="{{ asset('frontend/assets/images/product-image/3_1.jpg') }}" alt="product" /></a>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="#">Beautiful Purse for
                                                Women</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <span class="ec-price">
                                            <span class="old-price">$100.00</span>
                                            <span class="new-price">$80.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="ec-sb-pro-sl-item">
                                    <a href="#" class="sidekka_pro_img"><img
                                            src="{{ asset('frontend/assets/images/product-image/4_1.jpg') }}" alt="product" /></a>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="#">Wool Felt Long Brim
                                                Hat</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <span class="ec-price">
                                            <span class="old-price">$100.00</span>
                                            <span class="new-price">$80.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="ec-sb-pro-sl-item">
                                    <a href="#" class="sidekka_pro_img"><img
                                            src="{{ asset('frontend/assets/images/product-image/5_1.jpg') }}" alt="product" /></a>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="#">Black Leather
                                                Belt</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <span class="ec-price">
                                            <span class="old-price">$100.00</span>
                                            <span class="new-price">$80.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="ec-sb-pro-sl-item">
                                    <a href="#" class="sidekka_pro_img"><img
                                            src="{{ asset('frontend/assets/images/product-image/6_2.jpg') }}" alt="product" /></a>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="#">Beautiful Tee for
                                                Women</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <span class="ec-price">
                                            <span class="old-price">$100.00</span>
                                            <span class="new-price">$80.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="ec-sb-pro-sl-item">
                                    <a href="#" class="sidekka_pro_img"><img
                                            src="{{ asset('frontend/assets/images/product-image/7_1.jpg') }}" alt="product" /></a>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="#">Cotton Shirt for
                                                Men</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <span class="ec-price">
                                            <span class="old-price">$100.00</span>
                                            <span class="new-price">$80.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="ec-sb-pro-sl-item">
                                    <a href="#" class="sidekka_pro_img"><img
                                            src="assets/images/product-image/8_2.jpg" alt="product" /></a>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="#">I Watch for Men</a>
                                        </h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <span class="ec-price">
                                            <span class="old-price">$100.00</span>
                                            <span class="new-price">$80.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar Area Start -->
            </div>
        </div>
    </section>
    <section class="section ec-releted-product section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Related products</h2>
                        <h2 class="ec-title">Related products</h2>
                        <p class="sub-title">Browse The Collection of Top Products</p>
                    </div>
                </div>
            </div>
            <div class="row margin-minus-b-30">
                @if (empty($product_same_category))
                    @foreach ($product_same_category as $item_new)
                        <!-- Related Product Content -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                            <div class="ec-product-inner">
                                <div class="ec-pro-image-outer">
                                    <div class="ec-pro-image">
                                        <a href="#" class="image">
                                            <img class="main-image"
                                                src="{{ asset($item_new->images->first()->path ?? '') }}"
                                                alt="item_new" />
                                            <img class="hover-image"
                                                src="{{ asset($item_new->images->skip(1)->first()->path ?? '') }}"
                                                alt="item_new" />
                                        </a>
                                        <a href="#" class="quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                        <div class="ec-pro-actions">
                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><i
                                                    class="fi fi-rr-arrows-repeat"></i></a>
                                            <button title="Add To Cart" class="add-to-cart"><i
                                                    class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                            <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                    class="fi-rr-heart"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="ec-pro-content">
                                    <h5 class="ec-pro-title"><a
                                            href="{{ route('feature.product.detail', encrypt($item_new->id)) }}">{{ $item_new->name }}</a>
                                    </h5>
                                    <span class="ec-price">
                                        @if ($item_new->variants()->first()->sale_price != 0)
                                            <span
                                                class="old-price">{{ number_format($item_new->variants->min('price'), '0', '.', '.') }}
                                                đ</span>
                                            <span
                                                class="new-price">{{ number_format($item_new->variants->min('sale_price'), '0', '.', '.') }}
                                                đ</span>
                                        @else
                                            <span
                                                class="new-price">{{ number_format($item_new->variants->min('price'), '0', '.', '.') }}
                                                đ</span>
                                        @endif
                                    </span>
                                    <div class="ec-pro-option">
                                        @php
                                            $colorAttributes = $item_new->getVariantAttributesWithDetails(['color']);
                                            $variantAttributes = $item_new->getVariantAttributesWithDetails(['size']);
                                        @endphp
                                        @if (count($colorAttributes) > 0)
                                            <div class="ec-pro-color">
                                                <span class="ec-pro-opt-label">Color</span>
                                                <ul class="ec-opt-swatch ec-change-img">
                                                    @foreach ($colorAttributes as $key => $attr)
                                                        <li class="active"><a href="#"
                                                                data-src="{{ asset($item_new->images->first()->path ?? '') }}"
                                                                data-src-hover="{{ asset($item_new->images->skip(1)->first()->path ?? '') }}"
                                                                data-tooltip="Gray"><span>{{ $attr['attribute_value'] }}</span></a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        @if (count($variantAttributes) > 0)
                                            <div class="ec-pro-size">
                                                <span class="ec-pro-opt-label">Size</span>
                                                <ul class="ec-opt-size">
                                                    @foreach ($variantAttributes as $key => $attr)
                                                        <li class="{{ $key == 0 ? 'active' : '' }}"><a href="#"
                                                                class="ec-opt-sz"
                                                                data-old="{{ number_format($attr['price'], '0', '.', '.') }} đ"
                                                                data-new="{{ number_format($attr['sale_price'], '0', '.', '.') }} đ"
                                                                data-tooltip="Small">{{ $attr['attribute_value'] }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @else
                                            <div class="ec-pro-size" style="height: 17px">
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="#" class="image">
                                        <img class="main-image" src="{{ asset('frontend/assets/images/product-image/6_1.jpg') }}"
                                            alt="Product" />
                                        <img class="hover-image" src="{{ asset('frontend/assets/images/product-image/6_2.jpg') }}"
                                            alt="Product" />
                                    </a>
                                    <span class="percentage">20%</span>
                                    <a href="#" class="quickview" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i
                                            class="fi-rr-eye"></i></a>
                                    <div class="ec-pro-actions">
                                        <a href="compare.html" class="ec-btn-group compare" title="Compare"><i
                                                class="fi fi-rr-arrows-repeat"></i></a>
                                        <button title="Add To Cart" class="add-to-cart"><i
                                                class="fi-rr-shopping-basket"></i>
                                            Add To Cart</button>
                                        <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="#">Round Neck T-Shirt</a></h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an
                                    unknown printer took a galley.</div>
                                <span class="ec-price">
                                    <span class="old-price">$27.00</span>
                                    <span class="new-price">$22.00</span>
                                </span>
                                <div class="ec-pro-option">
                                    <div class="ec-pro-color">
                                        <span class="ec-pro-opt-label">Color</span>
                                        <ul class="ec-opt-swatch ec-change-img">
                                            <li class="active"><a href="#" class="ec-opt-clr-img"
                                                    data-src="{{ asset('frontend/assets/images/product-image/6_1.jpg') }}"
                                                    data-src-hover="{{ asset('frontend/assets/images/product-image/6_1.jpg') }}"
                                                    data-tooltip="Gray"><span
                                                        style="background-color:#e8c2ff;"></span></a>
                                            </li>
                                            <li><a href="#" class="ec-opt-clr-img"
                                                    data-src="{{ asset('frontend/assets/images/product-image/6_2.jpg') }}"
                                                    data-src-hover="{{ asset('frontend/assets/images/product-image/6_2.jpg') }}"
                                                    data-tooltip="Orange"><span
                                                        style="background-color:#9cfdd5;"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="ec-pro-size">
                                        <span class="ec-pro-opt-label">Size</span>
                                        <ul class="ec-opt-size">
                                            <li class="active"><a href="#" class="ec-opt-sz" data-old="$25.00"
                                                    data-new="$20.00" data-tooltip="Small">S</a></li>
                                            <li><a href="#" class="ec-opt-sz" data-old="$27.00" data-new="$22.00"
                                                    data-tooltip="Medium">M</a></li>
                                            <li><a href="#" class="ec-opt-sz" data-old="$35.00" data-new="$30.00"
                                                    data-tooltip="Extra Large">XL</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="#" class="image">
                                        <img class="main-image" src="{{ asset('frontend/assets/images/product-image/7_1.jpg') }}"
                                            alt="Product" />
                                        <img class="hover-image" src="{{ asset('frontend/assets/images/product-image/7_2.jpg') }}"
                                            alt="Product" />
                                    </a>
                                    <span class="percentage">20%</span>
                                    <span class="flags">
                                        <span class="sale">Sale</span>
                                    </span>
                                    <a href="#" class="quickview" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i
                                            class="fi-rr-eye"></i></a>
                                    <div class="ec-pro-actions">
                                        <a href="compare.html" class="ec-btn-group compare" title="Compare"><i
                                                class="fi fi-rr-arrows-repeat"></i></a>
                                        <button title="Add To Cart" class="add-to-cart"><i
                                                class="fi-rr-shopping-basket"></i>
                                            Add To Cart</button>
                                        <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="#">Full Sleeve Shirt</a></h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an
                                    unknown printer took a galley.</div>
                                <span class="ec-price">
                                    <span class="old-price">$12.00</span>
                                    <span class="new-price">$10.00</span>
                                </span>
                                <div class="ec-pro-option">
                                    <div class="ec-pro-color">
                                        <span class="ec-pro-opt-label">Color</span>
                                        <ul class="ec-opt-swatch ec-change-img">
                                            <li class="active"><a href="#" class="ec-opt-clr-img"
                                                    data-src="{{ asset('frontend/assets/images/product-image/7_1.jpg') }}"
                                                    data-src-hover="{{ asset('frontend/assets/images/product-image/7_1.jpg') }}"
                                                    data-tooltip="Gray"><span
                                                        style="background-color:#01f1f1;"></span></a>
                                            </li>
                                            <li><a href="#" class="ec-opt-clr-img"
                                                    data-src="{{ asset('frontend/assets/images/product-image/7_2.jpg') }}"
                                                    data-src-hover="{{ asset('frontend/assets/images/product-image/7_2.jpg') }}"
                                                    data-tooltip="Orange"><span
                                                        style="background-color:#b89df8;"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="ec-pro-size">
                                        <span class="ec-pro-opt-label">Size</span>
                                        <ul class="ec-opt-size">
                                            <li class="active"><a href="#" class="ec-opt-sz" data-old="$12.00"
                                                    data-new="$10.00" data-tooltip="Small">S</a></li>
                                            <li><a href="#" class="ec-opt-sz" data-old="$15.00" data-new="$12.00"
                                                    data-tooltip="Medium">M</a></li>
                                            <li><a href="#" class="ec-opt-sz" data-old="$20.00" data-new="$17.00"
                                                    data-tooltip="Extra Large">XL</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="#" class="image">
                                        <img class="main-image" src="{{ asset('frontend/assets/images/product-image/1_1.jpg') }}"
                                            alt="Product" />
                                        <img class="hover-image" src="{{ asset('frontend/assets/images/product-image/1_2.jpg') }}"
                                            alt="Product" />
                                    </a>
                                    <span class="percentage">20%</span>
                                    <span class="flags">
                                        <span class="sale">Sale</span>
                                    </span>
                                    <a href="#" class="quickview" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i
                                            class="fi-rr-eye"></i></a>
                                    <div class="ec-pro-actions">
                                        <a href="compare.html" class="ec-btn-group compare" title="Compare"><i
                                                class="fi fi-rr-arrows-repeat"></i></a>
                                        <button title="Add To Cart" class="add-to-cart"><i
                                                class="fi-rr-shopping-basket"></i>
                                            Add To Cart</button>
                                        <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="#">Cute Baby Toy's</a></h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an
                                    unknown printer took a galley.</div>
                                <span class="ec-price">
                                    <span class="old-price">$40.00</span>
                                    <span class="new-price">$30.00</span>
                                </span>
                                <div class="ec-pro-option">
                                    <div class="ec-pro-color">
                                        <span class="ec-pro-opt-label">Color</span>
                                        <ul class="ec-opt-swatch ec-change-img">
                                            <li class="active"><a href="#" class="ec-opt-clr-img"
                                                    data-src="{{ asset('frontend/assets/images/product-image/1_1.jpg') }}"
                                                    data-src-hover="{{ asset('frontend/assets/images/product-image/1_1.jpg') }}"
                                                    data-tooltip="Gray"><span
                                                        style="background-color:#90cdf7;"></span></a>
                                            </li>
                                            <li><a href="#" class="ec-opt-clr-img"
                                                    data-src="{{ asset('frontend/assets/images/product-image/1_2.jpg') }}"
                                                    data-src-hover="{{ asset('frontend/assets/images/product-image/1_2.jpg') }}"
                                                    data-tooltip="Orange"><span
                                                        style="background-color:#ff3b66;"></span></a>
                                            </li>
                                            <li><a href="#" class="ec-opt-clr-img"
                                                    data-src="{{ asset('frontend/assets/images/product-image/1_3.jpg') }}"
                                                    data-src-hover="{{ asset('frontend/assets/images/product-image/1_3.jpg') }}"
                                                    data-tooltip="Green"><span
                                                        style="background-color:#ffc476;"></span></a>
                                            </li>
                                            <li><a href="#" class="ec-opt-clr-img"
                                                    data-src="{{ asset('frontend/assets/images/product-image/1_4.jpg') }}"
                                                    data-src-hover="{{ asset('frontend/assets/images/product-image/1_4.jpg') }}"
                                                    data-tooltip="Sky Blue"><span
                                                        style="background-color:#1af0ba;"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="ec-pro-size">
                                        <span class="ec-pro-opt-label">Size</span>
                                        <ul class="ec-opt-size">
                                            <li class="active"><a href="#" class="ec-opt-sz" data-old="$40.00"
                                                    data-new="$30.00" data-tooltip="Small">S</a></li>
                                            <li><a href="#" class="ec-opt-sz" data-old="$50.00" data-new="$40.00"
                                                    data-tooltip="Medium">M</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="#" class="image">
                                        <img class="main-image" src="{{ asset('frontend/assets/images/product-image/2_1.jpg') }}"
                                            alt="Product" />
                                        <img class="hover-image" src="{{ asset('frontend/assets/images/product-image/2_2.jpg') }}"
                                            alt="Product" />
                                    </a>
                                    <span class="percentage">20%</span>
                                    <span class="flags">
                                        <span class="new">New</span>
                                    </span>
                                    <a href="#" class="quickview" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i
                                            class="fi-rr-eye"></i></a>
                                    <div class="ec-pro-actions">
                                        <a href="compare.html" class="ec-btn-group compare" title="Compare"><i
                                                class="fi fi-rr-arrows-repeat"></i></a>
                                        <button title="Add To Cart" class="add-to-cart"><i
                                                class="fi-rr-shopping-basket"></i>
                                            Add To Cart</button>
                                        <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="#">Jumbo Carry Bag</a></h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an
                                    unknown printer took a galley.</div>
                                <span class="ec-price">
                                    <span class="old-price">$50.00</span>
                                    <span class="new-price">$40.00</span>
                                </span>
                                <div class="ec-pro-option">
                                    <div class="ec-pro-color">
                                        <span class="ec-pro-opt-label">Color</span>
                                        <ul class="ec-opt-swatch ec-change-img">
                                            <li class="active"><a href="#" class="ec-opt-clr-img"
                                                    data-src="{{ asset('assets/images/product-image/2_1.jpg') }}"
                                                    data-src-hover="{{ asset('frontend/assets/images/product-image/2_2.jpg') }}"
                                                    data-tooltip="Gray"><span
                                                        style="background-color:#fdbf04;"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <!-- Related Product Content -->

            </div>
        </div>
    </section>
@endsection
@section('feature.script')
    <script>
        $(document).ready(function() {
            function updateProductInfo(variant) {
                var price = variant.data('price');
                var salePrice = variant.data('sale-price');
                var sku = variant.data('sku');

                $('.ec-single-price .new-price').text(salePrice + ' đ');
                if (price) {
                    $('.ec-single-price .ec-single-ps-title').text(price + ' đ').show();
                } else {
                    $('.ec-single-price .ec-single-ps-title').hide();
                }
                $('.ec-single-price-stoke .ec-single-sku').text('SKU#: ' + sku);
            }

            if ($('.ec-pro-variation-size li').length > 0) {
                updateProductInfo($('.ec-pro-variation-size li.active').first());
            }
            if ($('.ec-pro-variation-color li').length > 0) {
                updateProductInfo($('.ec-pro-variation-color li.active').first());
            }
            $('.ec-pro-variation-size li').on('click', function() {
                var selectedVariant = $(this);
                updateProductInfo(selectedVariant);
            });

            $('.ec-pro-variation-color li').on('click', function() {
                var selectedVariant = $(this);
                updateProductInfo(selectedVariant);
            });
        });
    </script>
    <script>
        $('.ec-single-cart button').on('click', function() {
            var quantity = $('.qty-input').val();
            var variantId = $('.ec-pro-variation-size li.active, .ec-pro-variation-color li.active').data('id');

            $.ajax({
                url: '/cart/add',
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    variant_id: variantId,
                    quantity: quantity
                },
                success: function(response) {
                    alert(response.message);
                },
                error: function(xhr, status, error) {
                    alert("Error: " + error);
                }
            });
        });
    </script>
@endsection
