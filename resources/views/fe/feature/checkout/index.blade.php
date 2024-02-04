@extends('fe.feature.layout')
@section('feature.content')
    <!-- Ec checkout page -->
    <form method="GET" action="{{ route('place.order') }}">
        <section class="ec-page-content section-space-p">
            <div class="container">
                <div class="row">
                    <div class="ec-checkout-leftside col-lg-8 col-md-12 ">
                        <!-- checkout content Start -->
                        <div class="ec-checkout-content">
                            <div class="ec-checkout-inner">
                                <div class="ec-checkout-wrap mb-4 p-4 border border-light">
                                    <div class="ec-checkout-block ec-check-bill">
                                        <h3 class="ec-checkout-title">Billing Details</h3>
                                        <div class="ec-bl-block-content">
                                            <div class="ec-check-subtitle">Checkout Options</div>
                                            <span class="ec-bill-option">
                                                <span>
                                                    <input type="radio" id="bill1" name="radio-group">
                                                    <label for="bill1">I want to use an existing address</label>
                                                </span>
                                                <span>
                                                    <input type="radio" id="bill2" name="radio-group" checked>
                                                    <label for="bill2">I want to use new address</label>
                                                </span>
                                            </span>
                                            <div class="ec-check-bill-form">
                                                <form action="#" method="post">
                                                    <span class="ec-bill-wrap ec-bill-half">
                                                        <label>First name*</label>
                                                        <input type="text" name="firstname"
                                                            placeholder="Enter your first name" required />
                                                    </span>
                                                    <span class="ec-bill-wrap ec-bill-half">
                                                        <label>Last name*</label>
                                                        <input type="text" name="lastname"
                                                            placeholder="Enter your last name" required />
                                                    </span>
                                                    <span class="ec-bill-wrap ec-bill-half">
                                                        <label>Address</label>
                                                        <input type="text" name="address" placeholder="Address line" />
                                                    </span>
                                                    <span class="ec-bill-wrap ec-bill-half">
                                                        <label>Phone number</label>
                                                        <input type="text" name="phone" placeholder="Phone number" />
                                                    </span>
                                                    <span class="ec-bill-wrap">
                                                        <label>Province/City</label>
                                                        <span class="ec-bl-select-inner">
                                                            <select name="ec_select_city" id="ec-select-city"
                                                                class="ec-bill-select">
                                                                <option selected disabled>Province/City</option>
                                                                @foreach ($cities['results'] as $city)
                                                                    <option data-id={{ $city['id'] }}
                                                                        value="{{ $city['full_name'] }}">
                                                                        {{ $city['full_name'] }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </span>
                                                    </span>
                                                    <span class="ec-bill-wrap">
                                                        <label>District/Town *</label>
                                                        <span class="ec-bl-select-inner">
                                                            <select name="ec_select_district" id="ec-select-district"
                                                                class="ec-bill-select">
                                                                <option selected disabled>District/Town</option>
                                                            </select>
                                                        </span>
                                                    </span>
                                                    <span class="ec-bill-wrap">
                                                        <label>Ward/Commune</label>
                                                        <span class="ec-bl-select-inner">
                                                            <select name="ec_select_ward" id="ec-select-ward"
                                                                class="ec-bill-select">
                                                                <option selected disabled>Ward/Commune</option>
                                                            </select>
                                                        </span>
                                                    </span>
                                                </form>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <span class="ec-check-order-btn">
                                    <button type="submit" class="btn btn-primary" href="#">Place order</button>
                                </span>
                            </div>
                        </div>
                        <!--cart content End -->
                    </div>
                    <!-- Sidebar Area Start -->
                    <div class="ec-checkout-rightside col-lg-4 col-md-12">
                        <div class="ec-sidebar-wrap">
                            <!-- Sidebar Summary Block -->
                            <div class="ec-sidebar-block">
                                <div class="ec-sb-title">
                                    <h3 class="ec-sidebar-title">Summary</h3>
                                </div>
                                <div class="ec-sb-block-content">
                                    <div class="ec-checkout-pro">
                                        @foreach (session()->get('cart') as $cart)
                                            @php
                                                $subTotal = 0;
                                                $price = $cart['sale_price'] != null ? $cart['sale_price'] : $cart['price'];
                                                $subTotal += $price;
                                            @endphp
                                            <div class="col-sm-12 mb-6">
                                                <div class="ec-product-inner">
                                                    <div class="ec-pro-image-outer">
                                                        <div class="ec-pro-image">
                                                            <a href="product-left-sidebar.html" class="image">
                                                                <img class="main-image" src="{{ asset($cart['image']) }}"
                                                                    alt="Product" />
                                                                <img class="hover-image" src="{{ asset($cart['image']) }}"
                                                                    alt="Product" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="ec-pro-content">
                                                        <h5 class="ec-pro-title"><a
                                                                href="product-left-sidebar.html">{{ $cart['name'] }}</a>
                                                        </h5>
                                                        <div class="ec-pro-rating">
                                                            {{-- <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i> --}}
                                                            <span>Quantity: {{ $cart['quantity'] }}
                                                        </div>
                                                        <span class="ec-price">
                                                            <span
                                                                {{ $cart['sale_price'] == null ? 'class=new-price' : 'class=old-price' }}>{{ number_format($cart['price'], 0, '', '.') }}
                                                                đ</span>
                                                            <span
                                                                class="new-price">{{ number_format($cart['sale_price'], 0, '', '.') }}
                                                                đ</span>
                                                        </span>
                                                        <div class="ec-pro-option">
                                                            <div class="ec-pro-color">
                                                                <span class="ec-pro-opt-label">Color</span>
                                                                @foreach ($cart['attributes'] as $attribute)
                                                                    @if ($attribute['name'] == 'color')
                                                                        <span>Color: {{ $attribute['value'] }}</span>
                                                                    @endif
                                                                @endforeach
                                                                {{-- <ul class="ec-opt-swatch ec-change-img">
                                                                    <li class="active"><a href="#"
                                                                            class="ec-opt-clr-img"
                                                                            data-src="assets/images/product-image/1_1.jpg"
                                                                            data-src-hover="assets/images/product-image/1_1.jpg"
                                                                            data-tooltip="Gray"><span
                                                                                style="background-color:#6d4c36;"></span></a>
                                                                    </li>
                                                                    <li><a href="#" class="ec-opt-clr-img"
                                                                            data-src="assets/images/product-image/1_2.jpg"
                                                                            data-src-hover="assets/images/product-image/1_2.jpg"
                                                                            data-tooltip="Orange"><span
                                                                                style="background-color:#ffb0e1;"></span></a>
                                                                    </li>
                                                                    <li><a href="#" class="ec-opt-clr-img"
                                                                            data-src="assets/images/product-image/1_3.jpg"
                                                                            data-src-hover="assets/images/product-image/1_3.jpg"
                                                                            data-tooltip="Green"><span
                                                                                style="background-color:#8beeff;"></span></a>
                                                                    </li>
                                                                    <li><a href="#" class="ec-opt-clr-img"
                                                                            data-src="assets/images/product-image/1_4.jpg"
                                                                            data-src-hover="assets/images/product-image/1_4.jpg"
                                                                            data-tooltip="Sky Blue"><span
                                                                                style="background-color:#74f8d1;"></span></a>
                                                                    </li>
                                                                </ul> --}}
                                                            </div>
                                                            <div class="ec-pro-size">
                                                                <span class="ec-pro-opt-label">Size</span>
                                                                @foreach ($cart['attributes'] as $attribute)
                                                                    @if ($attribute['name'] == 'size')
                                                                        <span>Size: {{ $attribute['value'] }}</span>
                                                                    @endif
                                                                @endforeach
                                                                {{-- <ul class="ec-opt-size">
                                                                    <li class="active"><a href="#"
                                                                            class="ec-opt-sz" data-old="$95.00"
                                                                            data-new="$79.00" data-tooltip="Small">S</a>
                                                                    </li>
                                                                    <li><a href="#" class="ec-opt-sz"
                                                                            data-old="$90.00" data-new="$70.00"
                                                                            data-tooltip="Medium">M</a></li>
                                                                    <li><a href="#" class="ec-opt-sz"
                                                                            data-old="$80.00" data-new="$60.00"
                                                                            data-tooltip="Large">X</a></li>
                                                                    <li><a href="#" class="ec-opt-sz"
                                                                            data-old="$70.00" data-new="$50.00"
                                                                            data-tooltip="Extra Large">XL</a>
                                                                    </li>
                                                                </ul> --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="ec-checkout-summary">
                                        <div>
                                            <span class="text-left">Sub-total</span>
                                            <span class="text-right">{{ number_format($subTotal, 0, '', '.') }}
                                                đ</span>
                                        </div>
                                        <div>
                                            <span class="text-left">Delivery charges</span>
                                            <span class="text-right">{{ number_format(0, 0, '', '.') }} đ</span>
                                        </div>
                                        <div>
                                            <span class="text-left">Coupan discount</span>
                                            <span class="text-right"><a class="ec-checkout-coupan">Apply coupan</a></span>
                                        </div>
                                        <div class="ec-checkout-coupan-content">
                                            <form class="ec-checkout-coupan-form" name="ec-checkout-coupan-form"
                                                method="post" action="#">
                                                <input class="ec-coupan" type="text" required=""
                                                    placeholder="Enter Your Coupan Code" name="ec-coupan" value="">
                                                <button class="ec-coupan-btn button btn-primary" type="submit"
                                                    name="subscribe" value="">Apply</button>
                                            </form>
                                        </div>
                                        <div class="ec-checkout-summary-total">
                                            <span class="text-left">Total amount</span>
                                            <span class="text-right">{{ number_format($subTotal, 0, '.', '.') }}
                                                đ</span>
                                        </div>
                                        <input hidden name="total" value={{ $subTotal }}>
                                    </div>
                                </div>
                            </div>
                            <!-- Sidebar Summary Block -->
                        </div>
                        {{-- <div class="ec-sidebar-wrap ec-checkout-del-wrap">
                            <!-- Sidebar Summary Block -->
                            <div class="ec-sidebar-block">
                                <div class="ec-sb-title">
                                    <h3 class="ec-sidebar-title">Phương thức vận chuyển</h3>
                                </div>
                                <div class="ec-sb-block-content">
                                    <div class="ec-checkout-del">
                                        <div class="ec-del-desc">Hãy chọn phương thức vận chuyển mà bạn muốn cho đơn
                                            hàng này.</div>
                                        <form action="#">
                                            <span class="ec-del-option">
                                                <span>
                                                    <span class="ec-del-opt-head">Free Shipping</span>
                                                    <input type="radio" id="del1" name="radio_group_delivery"
                                                        value="Free Shipping" checked>
                                                    <label for="del1">Rate - 0 đ</label>
                                                </span>
                                                <span>
                                                    <span class="ec-del-opt-head">Flat Rate</span>
                                                    <input type="radio" id="del2" name="radio_group_delivery"
                                                        value="Flat Rate">
                                                    <label for="del2">Rate - 20.000 đ</label>
                                                </span>
                                            </span>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Sidebar Summary Block -->
                        </div> --}}
                        {{-- <div class="ec-sidebar-wrap ec-checkout-pay-wrap">
                            <!-- Sidebar Payment Block -->
                            <div class="ec-sidebar-block">
                                <div class="ec-sb-title">
                                    <h3 class="ec-sidebar-title">Phương thức thanh toán</h3>
                                </div>
                                <div class="ec-sb-block-content">
                                    <div class="ec-checkout-pay">
                                        <div class="ec-pay-desc">
                                            Xin hãy chọn phương thức thanh toán bạn muốn cho đơn hàng này.
                                        </div>
                                        <form action="#">
                                            <span class="ec-pay-option">
                                                <span>
                                                    <input value="1" type="checkbox" id="pay1"
                                                        name="payment_method_id" checked>
                                                    <label for="pay1">Trả tiền khi nhận</label>
                                                </span>
                                            </span>
                                            <span class="ec-pay-commemt">
                                                <span class="ec-pay-opt-head">Thêm ghi chú vào đơn hàng của bạn</span>
                                                <textarea placeholder="Ghi chú" name="note"></textarea>
                                            </span>
                                            <span class="ec-pay-agree"><input type="checkbox" value=""><a
                                                    href="#">Tôi đã đọc và đồng ý với <span>Điều khoản và dịch
                                                        vụ</span></a><span class="checked"></span></span>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Sidebar Payment Block -->
                        </div> --}}
                        {{-- <div class="ec-sidebar-wrap ec-check-pay-img-wrap">
                            <!-- Sidebar Payment Block -->
                            <div class="ec-sidebar-block">
                                <div class="ec-sb-title">
                                    <h3 class="ec-sidebar-title">Phương thức thanh toán</h3>
                                </div>
                                <div class="ec-sb-block-content">
                                    <div class="ec-check-pay-img-inner">
                                        <div class="ec-check-pay-img">
                                            <img src={{ asset('frontend/assets/images/icons/payment1.png') }}
                                                alt="">
                                        </div>
                                        <div class="ec-check-pay-img">
                                            <img src={{ asset('frontend/assets/images/icons/payment2.png') }}
                                                alt="">
                                        </div>
                                        <div class="ec-check-pay-img">
                                            <img src={{ asset('frontend/assets/images/icons/payment3.png') }}
                                                alt="">
                                        </div>
                                        <div class="ec-check-pay-img">
                                            <img src={{ asset('frontend/assets/images/icons/payment4.png') }}
                                                alt="">
                                        </div>
                                        <div class="ec-check-pay-img">
                                            <img src={{ asset('frontend/assets/images/icons/payment5.png') }}
                                                alt="">
                                        </div>
                                        <div class="ec-check-pay-img">
                                            <img src={{ asset('frontend/assets/images/icons/payment6.png') }}
                                                alt="">
                                        </div>
                                        <div class="ec-check-pay-img">
                                            <img src={{ asset('frontend/assets/images/icons/payment7.png') }}
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Sidebar Payment Block -->
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>
    </form>
    <!-- New Product Start -->
    <section class="section ec-new-product section-space-p">
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
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                    <div class="ec-product-inner">
                        <div class="ec-pro-image-outer">
                            <div class="ec-pro-image">
                                <a href="product-left-sidebar.html" class="image">
                                    <img class="main-image" src="assets/images/product-image/6_1.jpg" alt="Product" />
                                    <img class="hover-image" src="assets/images/product-image/6_2.jpg" alt="Product" />
                                </a>
                                <span class="percentage">20%</span>
                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i
                                        class="fi-rr-eye"></i></a>
                                <div class="ec-pro-actions">
                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i
                                            class="fi fi-rr-arrows-repeat"></i></a>
                                    <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i>
                                        Add To Cart</button>
                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="ec-pro-content">
                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Round Neck T-Shirt</a></h5>
                            <div class="ec-pro-rating">
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star"></i>
                            </div>
                            <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer
                                took a galley.</div>
                            <span class="ec-price">
                                <span class="old-price">$27.00</span>
                                <span class="new-price">$22.00</span>
                            </span>
                            <div class="ec-pro-option">
                                <div class="ec-pro-color">
                                    <span class="ec-pro-opt-label">Color</span>
                                    <ul class="ec-opt-swatch ec-change-img">
                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                data-src="assets/images/product-image/6_1.jpg"
                                                data-src-hover="assets/images/product-image/6_1.jpg"
                                                data-tooltip="Gray"><span style="background-color:#e8c2ff;"></span></a>
                                        </li>
                                        <li><a href="#" class="ec-opt-clr-img"
                                                data-src="assets/images/product-image/6_2.jpg"
                                                data-src-hover="assets/images/product-image/6_2.jpg"
                                                data-tooltip="Orange"><span style="background-color:#9cfdd5;"></span></a>
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
                                <a href="product-left-sidebar.html" class="image">
                                    <img class="main-image" src="assets/images/product-image/7_1.jpg" alt="Product" />
                                    <img class="hover-image" src="assets/images/product-image/7_2.jpg" alt="Product" />
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
                                    <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i>
                                        Add To Cart</button>
                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="ec-pro-content">
                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Full Sleeve Shirt</a></h5>
                            <div class="ec-pro-rating">
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star"></i>
                            </div>
                            <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer
                                took a galley.</div>
                            <span class="ec-price">
                                <span class="old-price">$12.00</span>
                                <span class="new-price">$10.00</span>
                            </span>
                            <div class="ec-pro-option">
                                <div class="ec-pro-color">
                                    <span class="ec-pro-opt-label">Color</span>
                                    <ul class="ec-opt-swatch ec-change-img">
                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                data-src="assets/images/product-image/7_1.jpg"
                                                data-src-hover="assets/images/product-image/7_1.jpg"
                                                data-tooltip="Gray"><span style="background-color:#01f1f1;"></span></a>
                                        </li>
                                        <li><a href="#" class="ec-opt-clr-img"
                                                data-src="assets/images/product-image/7_2.jpg"
                                                data-src-hover="assets/images/product-image/7_2.jpg"
                                                data-tooltip="Orange"><span style="background-color:#b89df8;"></span></a>
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
                                <a href="product-left-sidebar.html" class="image">
                                    <img class="main-image" src="assets/images/product-image/1_1.jpg" alt="Product" />
                                    <img class="hover-image" src="assets/images/product-image/1_2.jpg" alt="Product" />
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
                                    <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i>
                                        Add To Cart</button>
                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="ec-pro-content">
                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Cute Baby Toy's</a></h5>
                            <div class="ec-pro-rating">
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star"></i>
                            </div>
                            <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer
                                took a galley.</div>
                            <span class="ec-price">
                                <span class="old-price">$40.00</span>
                                <span class="new-price">$30.00</span>
                            </span>
                            <div class="ec-pro-option">
                                <div class="ec-pro-color">
                                    <span class="ec-pro-opt-label">Color</span>
                                    <ul class="ec-opt-swatch ec-change-img">
                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                data-src="assets/images/product-image/1_1.jpg"
                                                data-src-hover="assets/images/product-image/1_1.jpg"
                                                data-tooltip="Gray"><span style="background-color:#90cdf7;"></span></a>
                                        </li>
                                        <li><a href="#" class="ec-opt-clr-img"
                                                data-src="assets/images/product-image/1_2.jpg"
                                                data-src-hover="assets/images/product-image/1_2.jpg"
                                                data-tooltip="Orange"><span style="background-color:#ff3b66;"></span></a>
                                        </li>
                                        <li><a href="#" class="ec-opt-clr-img"
                                                data-src="assets/images/product-image/1_3.jpg"
                                                data-src-hover="assets/images/product-image/1_3.jpg"
                                                data-tooltip="Green"><span style="background-color:#ffc476;"></span></a>
                                        </li>
                                        <li><a href="#" class="ec-opt-clr-img"
                                                data-src="assets/images/product-image/1_4.jpg"
                                                data-src-hover="assets/images/product-image/1_4.jpg"
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
                                <a href="product-left-sidebar.html" class="image">
                                    <img class="main-image" src="assets/images/product-image/2_1.jpg" alt="Product" />
                                    <img class="hover-image" src="assets/images/product-image/2_2.jpg" alt="Product" />
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
                                    <button title="Add To Cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i>
                                        Add To Cart</button>
                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="ec-pro-content">
                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Jumbo Carry Bag</a></h5>
                            <div class="ec-pro-rating">
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star"></i>
                            </div>
                            <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer
                                took a galley.</div>
                            <span class="ec-price">
                                <span class="old-price">$50.00</span>
                                <span class="new-price">$40.00</span>
                            </span>
                            <div class="ec-pro-option">
                                <div class="ec-pro-color">
                                    <span class="ec-pro-opt-label">Color</span>
                                    <ul class="ec-opt-swatch ec-change-img">
                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                data-src="assets/images/product-image/2_1.jpg"
                                                data-src-hover="assets/images/product-image/2_2.jpg"
                                                data-tooltip="Gray"><span style="background-color:#fdbf04;"></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 shop-all-btn"><a href="#">Shop All Collection</a></div>
            </div>
        </div>
    </section>
    <!-- New Product end -->
@endsection

@section('feature.script')
    <script>
        $('#ec-select-city').on('change', function() {
            let cityID = $(this).find("option:selected").attr('data-id');
            $.ajax({
                url: '/api/districts',
                type: 'GET',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    cityID: cityID
                },
                success: function(response) {
                    let html;
                    response.results.forEach(element => {
                        html +=
                            `<option data-id=${element.id} value=${element.full_name}>${element.full_name}</option>`;
                    });
                    $("#ec-select-district").html(html)
                    $("#ec-select-ward").html("<option selected disabled>Phường/Xã</option>")
                },
                error: function(xhr, status, error) {
                    alert("Error: " + error);
                }
            });
        });
        $('#ec-select-district').on('change', function() {
            let districtID = $(this).find("option:selected").attr('data-id');
            $.ajax({
                url: '/api/wards',
                type: 'GET',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    districtID: districtID
                },
                success: function(response) {
                    let html;
                    response.results.forEach(element => {
                        html +=
                            `<option data-id=${element.id} value=${element.full_name}>${element.full_name}</option>`;
                    });
                    $("#ec-select-ward").html(html)
                },
                error: function(xhr, status, error) {
                    alert("Error: " + error);
                }
            });
        });
    </script>
@endsection
