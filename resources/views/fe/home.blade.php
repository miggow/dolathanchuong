@extends('fe.layout')
@section('fe.css')
@endsection
@section('fe.content')
    <!-- Category Sidebar start -->
    <div class="ec-side-cat-overlay"></div>
    <div class="col-lg-3 category-sidebar" data-animation="fadeIn">
        <div class="cat-sidebar">
            <div class="cat-sidebar-box">
                <div class="ec-sidebar-wrap">
                    <!-- Sidebar Category Block -->
                    <div class="ec-sidebar-block">
                        <div class="ec-sb-title">
                            <h3 class="ec-sidebar-title">Category<button class="ec-close">×</button></h3>
                        </div>
                        <div class="ec-sb-block-content">
                            <ul>
                                <li>
                                    <div class="ec-sidebar-block-item"><img src="frontend/assets/images/icons/dress-8.png"
                                            class="svg_img" alt="drink" />Cothes</div>
                                    <ul style="display: block;">
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Shirt
                                                    <span title="Available Stock">- 25</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">shorts
                                                    & jeans <span title="Available Stock">- 52</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a
                                                    href="shop-left-sidebar-col-3.html">jacket<span
                                                        title="Available Stock">- 500</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">dress
                                                    & frock <span title="Available Stock">- 35</span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="ec-sb-block-content">
                            <ul>
                                <li>
                                    <div class="ec-sidebar-block-item"><img src="frontend/assets/images/icons/shoes-8.png"
                                            class="svg_img" alt="drink" />Footwear</div>
                                    <ul>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Sports
                                                    <span title="Available Stock">- 25</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Formal
                                                    <span title="Available Stock">- 52</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Casual
                                                    <span title="Available Stock">- 40</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">safety
                                                    shoes <span title="Available Stock">- 35</span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="ec-sb-block-content">
                            <ul>
                                <li>
                                    <div class="ec-sidebar-block-item"><img src="frontend/assets/images/icons/jewelry-8.png"
                                            class="svg_img" alt="drink" />jewelry</div>
                                    <ul>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Earrings
                                                    <span title="Available Stock">- 50</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Couple
                                                    Rings <span title="Available Stock">- 35</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Necklace
                                                    <span title="Available Stock">- 40</span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="ec-sb-block-content">
                            <ul>
                                <li>
                                    <div class="ec-sidebar-block-item"><img src="frontend/assets/images/icons/perfume-8.png"
                                            class="svg_img" alt="drink" />perfume</div>
                                    <ul>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Clothes
                                                    perfume<span title="Available Stock">- 4 pcs</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a
                                                    href="shop-left-sidebar-col-3.html">deodorant <span
                                                        title="Available Stock">- 52 pcs</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Flower
                                                    fragrance <span title="Available Stock">- 10 pack</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Air
                                                    Freshener<span title="Available Stock">- 35 pack</span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="ec-sb-block-content">
                            <ul>
                                <li>
                                    <div class="ec-sidebar-block-item"><img
                                            src="frontend/assets/images/icons/cosmetics-8.png" class="svg_img"
                                            alt="drink" />cosmetics</div>
                                    <ul>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a
                                                    href="shop-left-sidebar-col-3.html">shampoo<span
                                                        title="Available Stock"></span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a
                                                    href="shop-left-sidebar-col-3.html">Sunscreen<span
                                                        title="Available Stock"></span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">body
                                                    wash<span title="Available Stock"></span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">makeup
                                                    kit<span title="Available Stock"></span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="ec-sb-block-content">
                            <ul>
                                <li>
                                    <div class="ec-sidebar-block-item"><img src="frontend/assets/images/icons/glasses-8.png"
                                            class="svg_img" alt="drink" />glasses</div>
                                    <ul>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a
                                                    href="shop-left-sidebar-col-3.html">Sunglasses <span
                                                        title="Available Stock">- 20</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Lenses
                                                    <span title="Available Stock">- 52</span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="ec-sb-block-content">
                            <ul>
                                <li>
                                    <div class="ec-sidebar-block-item"><img src="frontend/assets/images/icons/bag-8.png"
                                            class="svg_img" alt="drink" />bags</div>
                                    <ul>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a
                                                    href="shop-left-sidebar-col-3.html">shopping bag <span
                                                        title="Available Stock">- 25</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Gym
                                                    backpack <span title="Available Stock">- 52</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">purse
                                                    <span title="Available Stock">- 40</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">wallet
                                                    <span title="Available Stock">- 35</span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Sidebar Category Block -->
                </div>
            </div>
            <div class="ec-sidebar-slider-cat">
                <div class="ec-sb-slider-title">Best Sellers</div>
                <div class="ec-sb-pro-sl">
                    <div>
                        <div class="ec-sb-pro-sl-item">
                            <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                    src="frontend/assets/images/product-image/1.jpg" alt="product" /></a>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">baby fabric shoes</a>
                                </h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                </div>
                                <span class="ec-price">
                                    <span class="old-price">$5.00</span>
                                    <span class="new-price">$4.00</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="ec-sb-pro-sl-item">
                            <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                    src="frontend/assets/images/product-image/2.jpg" alt="product" /></a>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Men's hoodies t-shirt</a>
                                </h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <span class="ec-price">
                                    <span class="old-price">$10.00</span>
                                    <span class="new-price">$7.00</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="ec-sb-pro-sl-item">
                            <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                    src="frontend/assets/images/product-image/3.jpg" alt="product" /></a>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Girls t-shirt</a></h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <span class="ec-price">
                                    <span class="old-price">$5.00</span>
                                    <span class="new-price">$3.00</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="ec-sb-pro-sl-item">
                            <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                    src="frontend/assets/images/product-image/4.jpg" alt="product" /></a>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">woolen hat for men</a>
                                </h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                </div>
                                <span class="ec-price">
                                    <span class="old-price">$15.00</span>
                                    <span class="new-price">$12.00</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="ec-sb-pro-sl-item">
                            <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                    src="frontend/assets/images/product-image/5.jpg" alt="product" /></a>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Womens purse</a></h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <span class="ec-price">
                                    <span class="old-price">$15.00</span>
                                    <span class="new-price">$12.00</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="ec-sb-pro-sl-item">
                            <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                    src="frontend/assets/images/product-image/6.jpg" alt="product" /></a>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Baby toy doctor kit</a>
                                </h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                    <i class="ecicon eci-star"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <span class="ec-price">
                                    <span class="old-price">$50.00</span>
                                    <span class="new-price">$45.00</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="ec-sb-pro-sl-item">
                            <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                    src="frontend/assets/images/product-image/7.jpg" alt="product" /></a>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">teddy bear baby toy</a>
                                </h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                </div>
                                <span class="ec-price">
                                    <span class="old-price">$35.00</span>
                                    <span class="new-price">$25.00</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="ec-sb-pro-sl-item">
                            <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                    src="frontend/assets/images/product-image/2.jpg" alt="product" /></a>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Mens hoodies blue</a>
                                </h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <span class="ec-price">
                                    <span class="old-price">$15.00</span>
                                    <span class="new-price">$13.00</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-header-next-sec ec-main-slider section section-space-pb">
        <div class="ec-slider swiper-container main-slider-nav main-slider-dot">
            <!-- Main slider -->
            <div class="swiper-wrapper">
                @if (!empty($banners))
                    @foreach ($banners as $banner)
                        <div class="ec-slide-item swiper-slide d-flex"
                            style="width: 100%; background-image: url('{{ asset($banner->image) }}'); background-repeat: no-repeat; background-size: cover; background-position: center; overflow-y: hidden;">
                            <div class="container align-self-center">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                                        <div class="ec-slide-content slider-animation">
                                            {{-- <h1 class="ec-slide-title">New Fashion Collection</h1>
                                    <h2 class="ec-slide-stitle">Sale Offer</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                                    <a href="#" class="btn btn-lg btn-secondary">Order Now</a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="ec-slide-item swiper-slide d-flex"
                        style="width: 100%; background-image: url('/frontend/assets/images/406923517_253853657707601_1104735501352917681_n.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center; overflow-y: hidden;">
                        <div class="container align-self-center">
                            <div class="row">
                                <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                                    <div class="ec-slide-content slider-animation">
                                        {{-- <h1 class="ec-slide-title">New Fashion Collection</h1>
                                    <h2 class="ec-slide-stitle">Sale Offer</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                                    <a href="#" class="btn btn-lg btn-secondary">Order Now</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ec-slide-item swiper-slide d-flex"
                        style="width: 100%; background-image: url('/frontend/assets/images/404507601_246211555138478_3735670549288177643_n.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center; overflow-y: hidden;">
                        <div class="container align-self-center">
                            <div class="row">
                                <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                                    <div class="ec-slide-content slider-animation">
                                        {{-- <h1 class="ec-slide-title">Boat Headphone Sets</h1>
                                    <h2 class="ec-slide-stitle">Sale Offer</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                                    <a href="#" class="btn btn-lg btn-secondary">Order Now</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

            </div>
            <div class="swiper-pagination swiper-pagination-white"></div>
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
    <!-- Product tab Area Start -->
    <section class="section ec-product-tab section-space-p" id="collection">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Our Top Collection</h2>
                        <h2 class="ec-title">Our Top Collection</h2>
                        <p class="sub-title">Browse The Collection of Top Products</p>
                    </div>
                </div>

                <!-- Tab Start -->
                <div class="col-md-12 text-center">
                    <ul class="ec-pro-tab-nav nav justify-content-center">
                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#tab-pro-for-all">For
                                All</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-pro-for-new">New
                                Product</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-pro-for-sale">On
                                Sale</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                href="#tab-pro-for-outstanding">Outstanding Product</a></li>
                    </ul>
                </div>
                <!-- Tab End -->
            </div>
            <div class="row">
                <div class="col">
                    <div class="tab-content">
                        <!-- 1st Product tab start -->
                        <div class="tab-pane fade show active" id="tab-pro-for-all">
                            <div class="row">
                                <!-- Product Content -->
                                @include('fe.product_list', ['products' => $products])
                            </div>
                        </div>
                        <!-- ec 1st Product tab end -->
                        <!-- ec 2nd Product tab start -->
                        <div class="tab-pane fade" id="tab-pro-for-new">
                            <div class="row">
                                <!-- Product Content -->
                                @include('fe.product_list', ['products' => $newProducts])
                            </div>
                        </div>
                        <!-- ec 2nd Product tab end -->
                        <!-- ec 3rd Product tab start -->
                        <div class="tab-pane fade" id="tab-pro-for-sale">
                            <div class="row">
                                <!-- Product Content -->
                                @include('fe.product_list', ['products' => $saleProducts])
                            </div>
                        </div>
                        <!-- ec 3rd Product tab end -->
                        <!-- ec 4th Product tab start -->
                        <div class="tab-pane fade" id="tab-pro-for-outstanding">
                            <div class="row">
                                <!-- Product Content -->
                                @include('fe.product_list', ['products' => $outstandingProducts])
                            </div>
                        </div>
                        <!-- ec 4th Product tab end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ec Product tab Area End -->
    <!-- ec Banner Section Start -->
    <section class="ec-banner section section-space-p">
        <h2 class="d-none">Banner</h2>
        <div class="container">
            <!-- ec Banners Start -->
            <div class="ec-banner-inner">
                <!--ec Banner Start -->
                <div class="ec-banner-block ec-banner-block-2">
                    <div class="row">
                        <div class="banner-block col-lg-6 col-md-12 margin-b-30" data-animation="slideInRight">
                            <div class="bnr-overlay">
                                <img src="frontend/assets/images/banner/2.jpg" alt="" />
                                <div class="banner-text">
                                    <span class="ec-banner-stitle">New Arrivals</span>
                                    <span class="ec-banner-title">mens<br> Sport shoes</span>
                                    <span class="ec-banner-discount">30% Discount</span>
                                </div>
                                <div class="banner-content">
                                    <span class="ec-banner-btn"><a href="#">Order Now</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="banner-block col-lg-6 col-md-12" data-animation="slideInLeft">
                            <div class="bnr-overlay">
                                <img src="frontend/assets/images/banner/3.jpg" alt="" />
                                <div class="banner-text">
                                    <span class="ec-banner-stitle">New Trending</span>
                                    <span class="ec-banner-title">Smart<br> watches</span>
                                    <span class="ec-banner-discount">Buy any 3 Items & get <br>20% Discount</span>
                                </div>
                                <div class="banner-content">
                                    <span class="ec-banner-btn"><a href="#">Order Now</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ec Banner End -->
                </div>
                <!-- ec Banners End -->
            </div>
        </div>
    </section>
    <!-- ec Banner Section End -->

    <!--  Category Section Start -->
    <section class="section ec-category-section section-space-p" id="categories">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Our Top Collection</h2>
                        <h2 class="ec-title">Top Categories</h2>
                        <p class="sub-title">Browse The Collection of Top Categories</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--Category Nav Start -->
                <div class="col-lg-3">
                    <ul class="ec-cat-tab-nav nav">
                        {{-- <li class="cat-item">
                            <a class="cat-link active" data-bs-toggle="tab" href="#tab-cat-1">
                                <div class="cat-icons"><img class="cat-icon"
                                        src="{{ asset('frontend/assets/images/icons/cat_1.png') }}" alt="cat-icon"><img
                                        class="cat-icon-hover" src="frontend/assets/images/icons/cat_1_1.png"
                                        alt="cat-icon">
                                </div>
                                <div class="cat-desc">
                                    <span>Clothes</span>
                                    <span>440 Products</span>
                                </div>
                            </a>
                        </li> --}}
                        @php $i=0; @endphp
                        @foreach ($categoryVideos as $categoryVideo)
                            <li class="cat-item">
                                <a class="cat-link {{ $loop->first ? 'active' : '' }}" data-bs-toggle="tab"
                                    aria-selected="{{ $loop->first ? 'true' : 'false' }}"
                                    href="#tab-cat-{{ $categoryVideo->order }}">
                                    {{-- <div class="cat-icons">
                <img width="40" height="40" class="cat-icon"
                    src="{{ asset($categoryVideo->image_icon) }}" alt="cat-icon">
                <img width="40" height="40" class="cat-icon-hover"
                    src="{{ asset($categoryVideo->image_icon) }}" alt="cat-icon">
            </div> --}}
                                    <div class="cat-desc"><span>{{ $categoryVideo->title }}</span>
                                        {{-- <span>510 Products</span> --}}
                                    </div>
                                </a>
                            </li>
                        @endforeach

                        {{-- @php $i=0; @endphp
                        @foreach ($categoryVideos as $categoryVideo)
                            <li class="cat-item">
                                <a class="cat-link {{ $i == 0 ? 'active' : '' }}" data-bs-toggle="tab" aria-selected="{{ $i == 0 ? 'true' : 'false' }}" href="#tab-cat-{{ $categoryVideo->order }}">
                                    <div class="cat-icons">
                                        <img width="40" height="40" class="cat-icon"
                                            src="{{ asset($categoryVideo->image_icon) }}" alt="cat-icon">
                                        <img width="40" height="40" class="cat-icon-hover"
                                            src="{{ asset($categoryVideo->image_icon) }}" alt="cat-icon">
                                    </div>
                                    <div class="cat-desc"><span>{{ $categoryVideo->title }}</span><span>510 Products</span>
                                    </div>
                                </a>
                            </li>
                            @php $i++; @endphp
                        @endforeach --}}
                    </ul>
                </div>
                <!-- Category Nav End -->
                <!--Category Tab Start -->
                <div class="col-lg-9">
                    <div class="tab-content">
                        <!-- 1st Category tab end -->
                        {{-- <div class="tab-pane fade show active" id="tab-cat-1">
                            <div class="row">
                                <img src="{{ asset('frontend/assets/images/cat-banner/1.jpg') }}" alt="" />
                            </div>
                            <span class="panel-overlay">
                                <a href="shop-left-sidebar-col-3.html" class="btn btn-primary">View All</a>
                            </span>
                        </div> --}}
                        <!-- 1st Category tab end -->
                        @foreach ($categoryVideos as $categoryVideo)
                            <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}"
                                id="tab-cat-{{ $categoryVideo->order }}">
                                <div class="row">
                                    <video loop="true" autoplay="autoplay" controls muted width="1020"
                                        height="350">
                                        <source src="{{ asset($categoryVideo->video) }}">
                                    </video>
                                </div>
                                {{-- <span class="panel-overlay">
            <a href="shop-left-sidebar-col-3.html" class="btn btn-primary">View All</a>
        </span> --}}
                            </div>
                        @endforeach
                    </div>
                    <!-- Category Tab End -->
                </div>
            </div>
        </div>
    </section>
    <!-- Category Section End -->

    <!--  Feature & Special Section Start -->
    {{-- <section class="section ec-fre-spe-section section-space-p" id="offers">
        <div class="container">
            <div class="row">
                <!--  Feature Section Start -->
                <div class="ec-fre-section col-lg-6 col-md-6 col-sm-6 margin-b-30" data-animation="slideInRight">
                    <div class="col-md-12 text-left">
                        <div class="section-title">
                            <h2 class="ec-bg-title">Feature Items</h2>
                            <h2 class="ec-title">Feature Items</h2>
                        </div>
                    </div>

                    <div class="ec-fre-products">
                        <div class="ec-fs-product">
                            <div class="ec-fs-pro-inner">
                                <div class="ec-fs-pro-image-outer col-lg-6 col-md-6 col-sm-6">
                                    <div class="ec-fs-pro-image">
                                        <a href="product-left-sidebar.html" class="image"><img class="main-image"
                                                src="{{ asset('frontend/assets/images/product-image/1_1.jpg') }}"
                                                alt="Product" /></a>
                                        <a href="#" class="quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                    </div>
                                </div>
                                <div class="ec-fs-pro-content col-lg-6 col-md-6 col-sm-6">
                                    <h5 class="ec-fs-pro-title"><a href="product-left-sidebar.html">Baby Toy
                                            Teddybear</a>
                                    </h5>
                                    <div class="ec-fs-pro-rating">
                                        <span class="ec-fs-rating-icon">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </span>
                                        <span class="ec-fs-rating-text">4 Review</span>
                                    </div>
                                    <div class="ec-fs-price">
                                        <span class="old-price">$549.00</span>
                                        <span class="new-price">$480.00</span>
                                    </div>

                                    <div class="countdowntimer"><span id="ec-fs-count-1"></span></div>
                                    <div class="ec-fs-pro-desc">Lorem Ipsum is simply dummy text the printing and
                                        typesetting.
                                    </div>
                                    <div class="ec-fs-pro-book">Total Booking: <span>25</span></div>
                                    <div class="ec-fs-pro-btn">
                                        <a href="#" class="btn btn-lg btn-secondary">Remind Me</a>
                                        <a href="#" class="btn btn-lg btn-primary">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ec-fs-product">
                            <div class="ec-fs-pro-inner">
                                <div class="ec-fs-pro-image-outer col-lg-6 col-md-6 col-sm-6">
                                    <div class="ec-fs-pro-image">
                                        <a href="product-left-sidebar.html" class="image"><img class="main-image"
                                                src="{{ asset('frontend/assets/images/product-image/3_1.jpg') }}"
                                                alt="Product" /></a>
                                        <a href="#" class="quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                    </div>
                                </div>
                                <div class="ec-fs-pro-content col-lg-6 col-md-6 col-sm-6">
                                    <h5 class="ec-fs-pro-title"><a href="product-left-sidebar.html">Leather Purse
                                            For
                                            Women</a>
                                    </h5>
                                    <div class="ec-fs-pro-rating">
                                        <span class="ec-fs-rating-icon">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                        </span>
                                        <span class="ec-fs-rating-text">4 Review</span>
                                    </div>
                                    <div class="ec-fs-price">
                                        <span class="old-price">$300.00</span>
                                        <span class="new-price">$250.00</span>
                                    </div>

                                    <div class="countdowntimer"><span id="ec-fs-count-2"></span></div>
                                    <div class="ec-fs-pro-desc">Lorem Ipsum is simply dummy text the printing and
                                        typesetting.
                                    </div>
                                    <div class="ec-fs-pro-book">Total Booking: <span>25</span></div>
                                    <div class="ec-fs-pro-btn">
                                        <a href="#" class="btn btn-lg btn-secondary">Remind Me</a>
                                        <a href="#" class="btn btn-lg btn-primary">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  Feature Section End -->
                <!--  Special Section Start -->
                <div class="ec-spe-section col-lg-6 col-md-6 col-sm-6" data-animation="slideInLeft">
                    <div class="col-md-12 text-left">
                        <div class="section-title">
                            <h2 class="ec-bg-title">Limited Time Offer</h2>
                            <h2 class="ec-title">Limited Time Offer</h2>
                        </div>
                    </div>

                    <div class="ec-spe-products">
                        <div class="ec-fs-product">
                            <div class="ec-fs-pro-inner">
                                <div class="ec-fs-pro-image-outer col-lg-6 col-md-6 col-sm-6">
                                    <div class="ec-fs-pro-image">
                                        <a href="product-left-sidebar.html" class="image"><img class="main-image"
                                                src="{{ asset('frontend/assets/images/product-image/8_1.jpg') }}"
                                                alt="Product" /></a>
                                        <a href="#" class="quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                    </div>
                                </div>
                                <div class="ec-fs-pro-content col-lg-6 col-md-6 col-sm-6">
                                    <h5 class="ec-fs-pro-title"><a href="product-left-sidebar.html">Smart watch
                                            Firebolt</a>
                                    </h5>
                                    <div class="ec-fs-pro-rating">
                                        <span class="ec-fs-rating-icon">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </span>
                                        <span class="ec-fs-rating-text">4 Review</span>
                                    </div>
                                    <div class="ec-fs-price">
                                        <span class="old-price">$200.00</span>
                                        <span class="new-price">$180.00</span>
                                    </div>
                                    <div class="countdowntimer"><span id="ec-fs-count-3"></span></div>
                                    <div class="ec-fs-pro-desc">Lorem Ipsum is simply dummy text the printing and
                                        typesetting.
                                    </div>
                                    <div class="ec-fs-pro-book">Total Booking: <span>25</span></div>
                                    <div class="ec-fs-pro-btn">
                                        <a href="#" class="btn btn-lg btn-secondary">Remind Me</a>
                                        <a href="#" class="btn btn-lg btn-primary">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ec-fs-product">
                            <div class="ec-fs-pro-inner">
                                <div class="ec-fs-pro-image-outer col-lg-6 col-md-6 col-sm-6">
                                    <div class="ec-fs-pro-image">
                                        <a href="product-left-sidebar.html" class="image"><img class="main-image"
                                                src="{{ asset('frontend/assets/images/product-image/10_1.jpg') }}"
                                                alt="Product" /></a>
                                        <a href="#" class="quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                    </div>
                                </div>
                                <div class="ec-fs-pro-content col-lg-6 col-md-6 col-sm-6">
                                    <h5 class="ec-fs-pro-title"><a href="product-left-sidebar.html">Casual Shoes
                                            Men</a>
                                    </h5>
                                    <div class="ec-fs-pro-rating">
                                        <span class="ec-fs-rating-icon">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                        </span>
                                        <span class="ec-fs-rating-text">4 Review</span>
                                    </div>
                                    <div class="ec-fs-price">
                                        <span class="old-price">$120.00</span>
                                        <span class="new-price">$95.00</span>
                                    </div>

                                    <div class="countdowntimer"><span id="ec-fs-count-4"></span></div>
                                    <div class="ec-fs-pro-desc">Lorem Ipsum is simply dummy text the printing and
                                        typesetting.
                                    </div>
                                    <div class="ec-fs-pro-book">Total Booking: <span>25</span></div>
                                    <div class="ec-fs-pro-btn">
                                        <a href="#" class="btn btn-lg btn-secondary">Remind Me</a>
                                        <a href="#" class="btn btn-lg btn-primary">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  Special Section End -->
            </div>
        </div>
    </section> --}}
    <!-- Feature & Special Section End -->

    <!--  Top Vendor Section Start -->
    {{-- <section class="section section-space-p" id="vendors">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Top Vendor</h2>
                        <h2 class="ec-title">Top Vendor</h2>
                        <p class="sub-title">Browse The Collection of <a href="catalog-multi-vendor.html">All
                                Vendors.</a></p>
                    </div>
                </div>
            </div>
            <div class="row margin-minus-t-15 margin-minus-b-15">
                <div class="col-sm-12 col-md-6 col-lg-3 ec_ven_content" data-animation="zoomIn">
                    <div class="ec-vendor-card">
                        <div class="ec-vendor-detail">
                            <div class="ec-vendor-avtar">
                                <img src="{{ asset('frontend/assets/images/vendor/2.jpg') }}" alt="vendor img">
                            </div>
                            <div class="ec-vendor-info">
                                <a href="catalog-single-vendor.html" class="name">Marvelus</a>
                                <p class="prod-count">154 Products</p>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <div class="ec-sale">
                                    <p title="Weekly sales">Sales 954</p>
                                </div>
                            </div>
                        </div>
                        <div class="ec-vendor-prod">
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.html"><img
                                        src="{{ asset('frontend/assets/images/product-image/1_1.jpg') }}"
                                        alt="vendor img"></a>
                            </div>
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.html"><img
                                        src="{{ asset('frontend/assets/images/product-image/2_1.jpg') }}"
                                        alt="vendor img"></a>
                            </div>
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.html"><img
                                        src="{{ asset('frontend/assets/images/product-image/3_1.jpg') }}"
                                        alt="vendor img"></a>
                            </div>
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.html"><img
                                        src="{{ asset('frontend/assets/images/product-image/4_1.jpg') }}"
                                        alt="vendor img"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 ec_ven_content" data-animation="zoomIn">
                    <div class="ec-vendor-card">
                        <div class="ec-vendor-detail">
                            <div class="ec-vendor-avtar">
                                <img src="{{ asset('frontend/assets/images/vendor/3.jpg') }}" alt="vendor img">
                            </div>
                            <div class="ec-vendor-info">
                                <a href="catalog-single-vendor.html" class="name">Oreva Fashion</a>
                                <p class="prod-count">546 Products</p>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                </div>
                                <div class="ec-sale">
                                    <p title="Weekly sales">Sales 785</p>
                                </div>
                            </div>
                        </div>
                        <div class="ec-vendor-prod">
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.html"><img
                                        src="{{ asset('frontend/assets/images/product-image/5_1.jpg') }}"
                                        alt="vendor img"></a>
                            </div>
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.html"><img
                                        src="{{ asset('frontend/assets/images/product-image/6_1.jpg') }}"
                                        alt="vendor img"></a>
                            </div>
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.html"><img
                                        src="{{ asset('frontend/assets/images/product-image/7_1.jpg') }}"
                                        alt="vendor img"></a>
                            </div>
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.html"><img
                                        src="{{ asset('frontend/assets/images/product-image/8_1.jpg') }}"
                                        alt="vendor img"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 ec_ven_content" data-animation="zoomIn">
                    <div class="ec-vendor-card">
                        <div class="ec-vendor-detail">
                            <div class="ec-vendor-avtar">
                                <img src="{{ asset('frontend/assets/images/vendor/4.jpg') }}" alt="vendor img">
                            </div>
                            <div class="ec-vendor-info">
                                <a href="catalog-single-vendor.html" class="name">Cenva Art</a>
                                <p class="prod-count">854 Products</p>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <div class="ec-sale">
                                    <p title="Weekly sales">Sales 587</p>
                                </div>
                            </div>
                        </div>
                        <div class="ec-vendor-prod">
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.html"><img
                                        src="{{ asset('frontend/assets/images/product-image/9_1.jpg') }}"
                                        alt="vendor img"></a>
                            </div>
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.html"><img
                                        src="{{ asset('frontend/assets/images/product-image/10_1.jpg') }}"
                                        alt="vendor img"></a>
                            </div>
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.html"><img
                                        src="{{ asset('frontend/assets/images/product-image/11_1.jpg') }}"
                                        alt="vendor img"></a>
                            </div>
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.html"><img
                                        src="{{ asset('frontend/assets/images/product-image/12_1.jpg') }}"
                                        alt="vendor img"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 ec_ven_content" data-animation="zoomIn">
                    <div class="ec-vendor-card">
                        <div class="ec-vendor-detail">
                            <div class="ec-vendor-avtar">
                                <img src="frontend/assets/images/vendor/5.jpg" alt="vendor img">
                            </div>
                            <div class="ec-vendor-info">
                                <a href="catalog-single-vendor.html" class="name">Neon Fashion</a>
                                <p class="prod-count">154 Products</p>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                </div>
                                <div class="ec-sale">
                                    <p title="Weekly sales">Sales 354</p>
                                </div>
                            </div>
                        </div>
                        <div class="ec-vendor-prod">
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.html"><img
                                        src="{{ asset('frontend/assets/images/product-image/13_1.jpg') }}"
                                        alt="vendor img"></a>
                            </div>
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.html"><img
                                        src="{{ asset('frontend/assets/images/product-image/14_1.jpg') }}"
                                        alt="vendor img"></a>
                            </div>
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.html"><img
                                        src="{{ asset('frontend/assets/images/product-image/15_1.jpg') }}"
                                        alt="vendor img"></a>
                            </div>
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.html"><img
                                        src="{{ asset('frontend/assets/images/product-image/16_1.jpg') }}"
                                        alt="vendor img"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Top Vendor Section End --> --}}

    <!--  services Section Start -->
    <section class="section ec-services-section section-space-p" id="services">
        <h2 class="d-none">Services</h2>
        <div class="container">
            <div class="row">
                <div class="ec_ser_content ec_ser_content_1 col-sm-12 col-md-6 col-lg-3" data-animation="zoomIn">
                    <div class="ec_ser_inner">
                        <div class="ec-service-image">
                            <i class="fi fi-ts-truck-moving"></i>
                        </div>
                        <div class="ec-service-desc">
                            <h2>Free Shipping</h2>
                            <p>Free shipping on all US order or order above $200</p>
                        </div>
                    </div>
                </div>
                <div class="ec_ser_content ec_ser_content_2 col-sm-12 col-md-6 col-lg-3" data-animation="zoomIn">
                    <div class="ec_ser_inner">
                        <div class="ec-service-image">
                            <i class="fi fi-ts-hand-holding-seeding"></i>
                        </div>
                        <div class="ec-service-desc">
                            <h2>24X7 Support</h2>
                            <p>Contact us 24 hours a day, 7 days a week</p>
                        </div>
                    </div>
                </div>
                <div class="ec_ser_content ec_ser_content_3 col-sm-12 col-md-6 col-lg-3" data-animation="zoomIn">
                    <div class="ec_ser_inner">
                        <div class="ec-service-image">
                            <i class="fi fi-ts-badge-percent"></i>
                        </div>
                        <div class="ec-service-desc">
                            <h2>30 Days Return</h2>
                            <p>Simply return it within 30 days for an exchange</p>
                        </div>
                    </div>
                </div>
                <div class="ec_ser_content ec_ser_content_4 col-sm-12 col-md-6 col-lg-3" data-animation="zoomIn">
                    <div class="ec_ser_inner">
                        <div class="ec-service-image">
                            <i class="fi fi-ts-donate"></i>
                        </div>
                        <div class="ec-service-desc">
                            <h2>Payment Secure</h2>
                            <p>Contact us 24 hours a day, 7 days a week</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--services Section End -->

    <!--  offer Section Start -->
    <section class="section ec-offer-section section-space-p section-space-m">
        <h2 class="d-none">Offer</h2>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center ec-offer-content">
                    <h2 class="ec-offer-title">Sunglasses</h2>
                    <h3 class="ec-offer-stitle" data-animation="slideInDown">Super Offer</h3>
                    <span class="ec-offer-img" data-animation="zoomIn"><img
                            src="frontend/assets/images/offer-image/1.png" alt="offer image" /></span>
                    <span class="ec-offer-desc">Acetate Frame Sunglasses</span>
                    <span class="ec-offer-price">$40.00 Only</span>
                    <a class="btn btn-primary" href="shop-left-sidebar-col-3.html" data-animation="zoomIn">Shop
                        Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- offer Section End -->

    <!-- New Product Start -->
    <section class="section ec-new-product section-space-p" id="arrivals">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">New Arrivals</h2>
                        <h2 class="ec-title">New Arrivals</h2>
                        <p class="sub-title">Browse The Collection of Top Products</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- New Product Content -->
                @foreach ($newProducts as $item_new)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content" data-animation="flipInY">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image" src="{{ asset($item_new->images->first()->path ?? '') }}"
                                            alt="item_new" />
                                        <img class="hover-image"
                                            src="{{ asset($item_new->images->skip(1)->first()->path ?? '') }}"
                                            alt="item_new" />
                                    </a>
                                    <a href="#" class="quickview" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i
                                            class="fi-rr-eye"></i></a>
                                    <div class="ec-pro-actions">
                                        <a href="compare.html" class="ec-btn-group compare" title="Compare"><i
                                                class="fi fi-rr-arrows-repeat"></i></a>
                                        <button title="Add To Cart" class="add-to-cart"><i
                                                class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                        <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
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


                <div class="col-sm-12 shop-all-btn"><a href="shop-left-sidebar-col-3.html">Shop All Collection</a>
                </div>
            </div>
        </div>
    </section>
    <!-- New Product end -->

    <!-- ec testmonial Start -->
    {{-- <section class="section ec-test-section section-space-ptb-100 section-space-m" id="reviews">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title mb-0">
                        <h2 class="ec-bg-title">Testimonial</h2>
                        <h2 class="ec-title">Client Review</h2>
                        <p class="sub-title mb-3">What say client about us</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ec-test-outer">
                    <ul id="ec-testimonial-slider">
                        <li class="ec-test-item">
                            <i class="fi-rr-quote-right top"></i>
                            <div class="ec-test-inner">
                                <div class="ec-test-img"><img alt="testimonial" title="testimonial"
                                        src="frontend/assets/images/testimonial/1.jpg" /></div>
                                <div class="ec-test-content">
                                    <div class="ec-test-desc">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                        ever since the 1500s, when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen</div>
                                    <div class="ec-test-name">John Doe</div>
                                    <div class="ec-test-designation">General Manager</div>
                                    <div class="ec-test-rating">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                    </div>
                                </div>
                            </div>
                            <i class="fi-rr-quote-right bottom"></i>
                        </li>
                        <li class="ec-test-item ">
                            <i class="fi-rr-quote-right top"></i>
                            <div class="ec-test-inner">
                                <div class="ec-test-img"><img alt="testimonial" title="testimonial"
                                        src="frontend/assets/images/testimonial/2.jpg" /></div>
                                <div class="ec-test-content">
                                    <div class="ec-test-desc">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                        ever since the 1500s, when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen</div>
                                    <div class="ec-test-name">John Doe</div>
                                    <div class="ec-test-designation">General Manager</div>
                                    <div class="ec-test-rating">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                    </div>
                                </div>
                            </div>
                            <i class="fi-rr-quote-right bottom"></i>
                        </li>
                        <li class="ec-test-item">
                            <i class="fi-rr-quote-right top"></i>
                            <div class="ec-test-inner">
                                <div class="ec-test-img"><img alt="testimonial" title="testimonial"
                                        src="frontend/assets/images/testimonial/3.jpg" /></div>
                                <div class="ec-test-content">
                                    <div class="ec-test-desc">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                        ever since the 1500s, when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen</div>
                                    <div class="ec-test-name">John Doe</div>
                                    <div class="ec-test-designation">General Manager</div>
                                    <div class="ec-test-rating">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                    </div>
                                </div>
                            </div>
                            <i class="fi-rr-quote-right bottom"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ec testmonial end -->

    <!-- Ec Brand Section Start -->
    {{-- <section class="section ec-brand-area section-space-p">
        <h2 class="d-none">Brand</h2>
        <div class="container">
            <div class="row">
                <div class="ec-brand-outer">
                    <ul id="ec-brand-slider">
                        <li class="ec-brand-item" data-animation="zoomIn">
                            <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="frontend/assets/images/brand-image/1.png" /></a></div>
                        </li>
                        <li class="ec-brand-item" data-animation="zoomIn">
                            <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="frontend/assets/images/brand-image/2.png" /></a></div>
                        </li>
                        <li class="ec-brand-item" data-animation="zoomIn">
                            <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="frontend/assets/images/brand-image/3.png" /></a></div>
                        </li>
                        <li class="ec-brand-item" data-animation="zoomIn">
                            <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="frontend/assets/images/brand-image/4.png" /></a></div>
                        </li>
                        <li class="ec-brand-item" data-animation="zoomIn">
                            <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="frontend/assets/images/brand-image/5.png" /></a></div>
                        </li>
                        <li class="ec-brand-item" data-animation="zoomIn">
                            <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="frontend/assets/images/brand-image/6.png" /></a></div>
                        </li>
                        <li class="ec-brand-item" data-animation="zoomIn">
                            <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="frontend/assets/images/brand-image/7.png" /></a></div>
                        </li>
                        <li class="ec-brand-item" data-animation="zoomIn">
                            <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="frontend/assets/images/brand-image/8.png" /></a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Ec Brand Section End -->

    <!-- Ec Instagram Start -->
    <section class="section ec-instagram-section module section-space-p" id="insta">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Instagram Feed</h2>
                        <h2 class="ec-title">Instagram Feed</h2>
                        <p class="sub-title">Share your store with us</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="ec-insta-wrapper">
            <div class="ec-insta-outer">
                <div class="container" data-animation="fadeIn">
                    <div class="insta-auto">
                        @if (count($instagramFeeds) > 0)
                            @foreach ($instagramFeeds as $feed)
                                <!-- instagram item -->
                                <div class="ec-insta-item">
                                    <div class="ec-insta-inner">
                                        <a href={{ $feed->link }} target="_blank"><img
                                                style="object-fit: cover; max-width: 480px; max-height: 340px; "
                                                src={{ $feed->image }} alt="insta"></a>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="ec-insta-item">
                                <div class="ec-insta-inner">
                                    <a href="#" target="_blank"><img
                                            src="frontend/assets/images/instragram-image/1.jpg" alt="insta"></a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Ec Instagram End -->
@endsection
@section('fe.modal')
    <div class="modal fade" id="ec_quickview_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="btn-close qty_close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <!-- Swiper -->
                            <div class="qty-product-cover">
                                <div class="qty-slide">
                                    <img class="img-responsive"
                                        src="{{ asset('frontend/assets/images/product-image/3_1.jpg') }}" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive"
                                        src="{{ asset('frontend/assets/images/product-image/3_2.jpg') }}" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive"
                                        src="{{ asset('frontend/assets/images/product-image/3_3.jpg') }}" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="frontend/assets/images/product-image/3_4.jpg"
                                        alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="frontend/assets/images/product-image/3_5.jpg"
                                        alt="">
                                </div>
                            </div>
                            <div class="qty-nav-thumb">
                                <div class="qty-slide">
                                    <img class="img-responsive"
                                        src="{{ asset('frontend/assets/images/product-image/3_1.jpg') }}" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive"
                                        src="{{ asset('frontend/assets/images/product-image/3_2.jpg') }}" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive"
                                        src="{{ asset('frontend/assets/images/product-image/3_3.jpg') }}" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="frontend/assets/images/product-image/3_4.jpg"
                                        alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="frontend/assets/images/product-image/3_5.jpg"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="quickview-pro-content">
                                <h5 class="ec-quick-title"><a href="product-left-sidebar.html">Handbag leather purse
                                        for
                                        women</a>
                                </h5>
                                <div class="ec-quickview-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>

                                <div class="ec-quickview-desc">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                    since the 1500s,</div>
                                <div class="ec-quickview-price">
                                    <span class="old-price">$100.00</span>
                                    <span class="new-price">$80.00</span>
                                </div>

                                <div class="ec-pro-variation">
                                    <div class="ec-pro-variation-inner ec-pro-variation-color">
                                        <span>Color</span>
                                        <div class="ec-pro-color">
                                            <ul class="ec-opt-swatch">
                                                <li><span style="background-color:#ebbf60;"></span></li>
                                                <li><span style="background-color:#75e3ff;"></span></li>
                                                <li><span style="background-color:#11f7d8;"></span></li>
                                                <li><span style="background-color:#acff7c;"></span></li>
                                                <li><span style="background-color:#e996fa;"></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ec-pro-variation-inner ec-pro-variation-size ec-pro-size">
                                        <span>Size</span>
                                        <div class="ec-pro-variation-content">
                                            <ul class="ec-opt-size">
                                                <li class="active"><a href="#" class="ec-opt-sz"
                                                        data-tooltip="Small">S</a></li>
                                                <li><a href="#" class="ec-opt-sz" data-tooltip="Medium">M</a>
                                                </li>
                                                <li><a href="#" class="ec-opt-sz" data-tooltip="Large">X</a>
                                                </li>
                                                <li><a href="#" class="ec-opt-sz" data-tooltip="Extra Large">XL</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ec-quickview-qty">
                                    <div class="qty-plus-minus">
                                        <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                                    </div>
                                    <div class="ec-quickview-cart ">
                                        <button class="btn btn-primary"><i class="fi-rr-shopping-basket"></i> Add To
                                            Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
