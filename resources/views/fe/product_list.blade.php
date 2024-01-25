@foreach ($products as $product)
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content"
    data-animation="fadeIn">
    <div class="ec-product-inner">
        <div class="ec-pro-image-outer">
            <div class="ec-pro-image">
                <a href="product-left-sidebar.html" class="image">
                    <img class="main-image"
                        src="{{ asset($product->images->first()->path ?? '') }}"
                        alt="Product" />
                    <img class="hover-image"
                        src="{{ asset($product->images->skip(1)->first()->path ?? '') }}"
                        alt="Product" />
                </a>
                <a href="#" class="quickview" data-link-action="quickview"
                    title="Quick view" data-bs-toggle="modal"
                    data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                <div class="ec-pro-actions">
                    <a href="compare.html" class="ec-btn-group compare"
                        title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                    <button title="Add To Cart" class="add-to-cart"><i
                            class="fi-rr-shopping-basket"></i> Add To Cart</button>
                    <a class="ec-btn-group wishlist" title="Wishlist"><i
                            class="fi-rr-heart"></i></a>
                </div>
            </div>
        </div>

        <div class="ec-pro-content">
            <h5 class="ec-pro-title"><a
                    href="{{ route('feature.product.detail', encrypt($product->id)) }}">{{ $product->name }}</a>
            </h5>
            <span class="ec-price">
                @if ($product->variants()->first()->sale_price != 0)
                    <span
                        class="old-price">{{ number_format($product->variants->min('price'), '0', '.', '.') }}
                        đ</span>
                    <span
                        class="new-price">{{ number_format($product->variants->min('sale_price'), '0', '.', '.') }}
                        đ</span>
                @else
                    <span
                        class="new-price">{{ number_format($product->variants->min('price'), '0', '.', '.') }}
                        đ</span>
                @endif
            </span>
            <div class="ec-pro-option">
                @php
                    $colorAttributes = $product->getVariantAttributesWithDetails(['color']);
                    $variantAttributes = $product->getVariantAttributesWithDetails(['size']);
                @endphp
                @if (count($colorAttributes) > 0)
                    <div class="ec-pro-color">
                        <span class="ec-pro-opt-label">Color</span>
                        <ul class="ec-opt-swatch ec-change-img">
                            @foreach ($colorAttributes as $key => $attr)
                                <li class="active"><a href="#"
                                        data-src="{{ asset($product->images->first()->path ?? '') }}"
                                        data-src-hover="{{ asset($product->images->skip(1)->first()->path ?? '') }}"
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
                                <li class="{{ $key == 0 ? 'active' : '' }}"><a
                                        href="#" class="ec-opt-sz"
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

<div class="col-sm-12 shop-all-btn"><a href="{{ route('feature.product.list') }}">Shop All Collection</a></div>