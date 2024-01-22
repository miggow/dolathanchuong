@extends('admin.layout')
@section('admin.content')
    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>Add Product</h1>
                    <p class="breadcrumbs"><span><a href={{route('home')}}>Home</a></span>
                        <span><i class="mdi mdi-chevron-right"></i></span>Product
                    </p>
                </div>
                <div>
                    <a href="{{route('product.index')}}" class="btn btn-primary"> View All
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-default">
                        <div class="card-header card-header-border-bottom">
                            <h2>Add Product</h2>
                        </div>
                        <form action="{{ route('product.store') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="row ec-vendor-uploads">
                                    <div class="col-lg-4">
                                        <div class="ec-vendor-img-upload">
                                            <div class="ec-vendor-main-img">
                                                <div class="avatar-upload">
                                                    <div class="avatar-edit">
                                                        <input type='file' id="imageUpload" name="images[]" required
                                                            class="ec-image-upload" accept=".png, .jpg, .jpeg" />
                                                        <label for="imageUpload"><img src="{{ asset('admin/assets/img/icons/edit.svg') }}"
                                                                class="svg_img header_svg" alt="edit" /></label>
                                                    </div>
                                                    <div class="avatar-preview ec-preview">
                                                        <div class="imagePreview ec-div-preview">
                                                            <img class="ec-image-preview"
                                                                src="{{ asset('admin/assets/img/products/vender-upload-preview.jpg') }}"
                                                                alt="edit" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="thumb-upload-set colo-md-12">
                                                    <div class="thumb-upload">
                                                        <div class="thumb-edit">
                                                            <input type='file' id="thumbUpload01" name="images[]" required
                                                                class="ec-image-upload" accept=".png, .jpg, .jpeg" />
                                                            <label for="imageUpload"><img src="{{ asset('admin/assets/img/icons/edit.svg') }}"
                                                                    class="svg_img header_svg" alt="edit" /></label>
                                                        </div>
                                                        <div class="thumb-preview ec-preview">
                                                            <div class="image-thumb-preview">
                                                                <img class="image-thumb-preview ec-image-preview"
                                                                    src="{{ asset('admin/assets/img/products/vender-upload-thumb-preview.jpg') }}"
                                                                    alt="edit" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="thumb-upload">
                                                        <div class="thumb-edit">
                                                            <input type='file' id="thumbUpload02" name="images[]"
                                                                class="ec-image-upload" accept=".png, .jpg, .jpeg" />
                                                            <label for="imageUpload"><img src="{{ asset('admin/assets/img/icons/edit.svg') }}"
                                                                    class="svg_img header_svg" alt="edit" /></label>
                                                        </div>
                                                        <div class="thumb-preview ec-preview">
                                                            <div class="image-thumb-preview">
                                                                <img class="image-thumb-preview ec-image-preview"
                                                                    src="{{ asset('admin/assets/img/products/vender-upload-thumb-preview.jpg') }}"
                                                                    alt="edit" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="thumb-upload">
                                                        <div class="thumb-edit">
                                                            <input type='file' id="thumbUpload03" name="images[]"
                                                                class="ec-image-upload" accept=".png, .jpg, .jpeg" />
                                                            <label for="imageUpload"><img src="{{ asset('admin/assets/img/icons/edit.svg') }}"
                                                                    class="svg_img header_svg" alt="edit" /></label>
                                                        </div>
                                                        <div class="thumb-preview ec-preview">
                                                            <div class="image-thumb-preview">
                                                                <img class="image-thumb-preview ec-image-preview"
                                                                    src="{{ asset('admin/assets/img/products/vender-upload-thumb-preview.jpg') }}"
                                                                    alt="edit" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="thumb-upload">
                                                        <div class="thumb-edit">
                                                            <input type='file' id="thumbUpload04" name="images[]"
                                                                class="ec-image-upload" accept=".png, .jpg, .jpeg" />
                                                            <label for="imageUpload"><img src="{{ asset('admin/assets/img/icons/edit.svg') }}"
                                                                    class="svg_img header_svg" alt="edit" /></label>
                                                        </div>
                                                        <div class="thumb-preview ec-preview">
                                                            <div class="image-thumb-preview">
                                                                <img class="image-thumb-preview ec-image-preview"
                                                                    src="{{ asset('admin/assets/img/products/vender-upload-thumb-preview.jpg') }}"
                                                                    alt="edit" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="thumb-upload">
                                                        <div class="thumb-edit">
                                                            <input type='file' id="thumbUpload05" name="images[]"
                                                                class="ec-image-upload" accept=".png, .jpg, .jpeg" />
                                                            <label for="imageUpload"><img src="{{ asset('admin/assets/img/icons/edit.svg') }}"
                                                                    class="svg_img header_svg" alt="edit" /></label>
                                                        </div>
                                                        <div class="thumb-preview ec-preview">
                                                            <div class="image-thumb-preview">
                                                                <img class="image-thumb-preview ec-image-preview"
                                                                    src="{{ asset('admin/assets/img/products/vender-upload-thumb-preview.jpg') }}"
                                                                    alt="edit" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="thumb-upload">
                                                        <div class="thumb-edit">
                                                            <input type='file' id="thumbUpload06" name="images[]"
                                                                class="ec-image-upload" accept=".png, .jpg, .jpeg" />
                                                            <label for="imageUpload"><img src="{{ asset('admin/assets/img/icons/edit.svg') }}"
                                                                    class="svg_img header_svg" alt="edit" /></label>
                                                        </div>
                                                        <div class="thumb-preview ec-preview">
                                                            <div class="image-thumb-preview">
                                                                <img class="image-thumb-preview ec-image-preview"
                                                                    src="{{ asset('admin/assets/img/products/vender-upload-thumb-preview.jpg') }}"
                                                                    alt="edit" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="ec-vendor-upload-detail row g-3">
                                            <div class="mt-3 col-md-6">
                                                <label for="inputEmail4" class="form-label">Tên sản phẩm</label>
                                                <input type="text" name="name" class="form-control slug-title"
                                                    id="inputEmail4">
                                            </div>
                                            <div class="mt-3 col-md-6">
                                                <label class="form-label">Danh mục</label>
                                                <select name="category_id" id="Categories" class="form-select">
                                                    @foreach ($categories as $category)
                                                        @if (!empty($category->children))
                                                            <optgroup label="{{ $category->name }}">
                                                                @foreach ($category->children as $item)
                                                                    <option value="{{ $item->id }}">{{ $item->name }}
                                                                    </option>
                                                                @endforeach
                                                            </optgroup>
                                                        @else
                                                            <option value="{{ $category->id }}">{{ $category->name }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="container">
                                                <div class="mt-3 col-md-12 form-switch">
                                                    <input class="form-check-input" name="isVariation" type="checkbox"
                                                        id="enableVariations" onchange="toggleVariations(this)">
                                                    <label class="form-check-label" for="enableVariations">Sản phẩm có
                                                        biến
                                                        thể</label>
                                                </div>
                                            </div>
                                            <div class="container variation" style="display: none">
                                                <div class="my-3">
                                                    <div class="my-3">
                                                        <button type="button" class="btn btn-sm btn-primary"
                                                            onclick="addVariation()"><i class="mdi mdi-plus">Thêm Kết Hợp
                                                                Biến
                                                                Thể</i></button>
                                                    </div>
                                                    <div id="VariationsContainer">
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="input-group mt-3 priceQuantityFields">
                                                <input type="text" class="form-control" name="sku"
                                                    placeholder="SKU">
                                                <input type="number" class="form-control" name="price"
                                                    placeholder="Giá">
                                                <input type="number" class="form-control" name="sale_price"
                                                    placeholder="Khuyến Mãi">
                                                <input type="number" class="form-control" name="quantity"
                                                    placeholder="Số lượng">
                                            </div>
                                            <div class="mt-3 col-md-12">
                                                <label class="form-label">Mô tả</label>
                                                <textarea class="form-control" rows="2" name="description" id="description"></textarea>
                                            </div>

                                            {{-- <div class="mt-3 col-md-6 priceQuantityFields" style="">
                                                <label class="form-label">Price</label>
                                                <input type="number" name="price" class="form-control"
                                                    id="price1">
                                            </div>
                                            <div class="mt-3 col-md-6 priceQuantityFields" style="">
                                                <label class="form-label">Quantity</label>
                                                <input type="number" name="quantity" class="form-control"
                                                    id="quantity1">
                                            </div> --}}
                                            <div class="mt-3 col-md-12">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- End Content -->
    </div> <!-- End Content Wrapper -->
@endsection
@section('modal')
    @include('modal.delete')
@endsection
@section('script')
    <script>
        function toggleVariations(checkbox) {
            var container = $('.priceQuantityFields');
            var variation = $('.variation');

            if (checkbox.checked) {
                container.css('display', 'none');
                variation.show();

            } else {
                container.show();
                variation.css('display', 'none');
            }
            // variation.find('.select2').select2();
        }
        window.addVariation = function() {
            var container = document.getElementById("VariationsContainer");

            var combinationDiv = document.createElement("div");
            combinationDiv.classList.add("input-group", "mb-3");

            combinationDiv.innerHTML = `
        <input type="text" class="form-control" name="variation[sku][]" placeholder="SKU">
        <input type="text" class="form-control" name="variation[color][]" placeholder="Màu sắc">
        <input type="text" class="form-control" name="variation[size][]" placeholder="Kích thước">
        <input type="number" class="form-control" name="variation[price][]" placeholder="Giá">
        <input type="number" class="form-control" name="variation[sale_price][]" placeholder="Khuyến Mãi">
        <input type="number" class="form-control" name="variation[quantity][]" placeholder="Số lượng">
        <button type="button" class="btn btn-danger" onclick="removeVariation(this)">Xóa</button>
    `;

            container.appendChild(combinationDiv);
        };


        window.removeVariation = function(button) {
            button.parentElement.remove();
        };
    </script>
    @include('toolbar')
@endsection
