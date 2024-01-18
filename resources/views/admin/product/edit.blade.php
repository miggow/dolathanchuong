@extends('admin.layout')
@section('admin.content')
    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>Add Product</h1>
                    <p class="breadcrumbs"><span><a href={{ route('home') }}>Home</a></span>
                        <span><i class="mdi mdi-chevron-right"></i></span>Product
                    </p>
                </div>
                <div>
                    <a href="product-list.html" class="btn btn-primary"> View All
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
                                                        <!-- Chỉ hiển thị input file nếu bạn muốn thêm hoặc thay đổi hình ảnh -->
                                                        <input type='file' id="imageUpload" name="images[]"
                                                            accept=".png, .jpg, .jpeg" class="ec-image-upload" />
                                                        <label for="imageUpload">
                                                            <img src="{{ asset('admin/assets/img/icons/edit.svg') }}"
                                                                class="svg_img header_svg" alt="edit" />
                                                        </label>
                                                    </div>
                                                    <div class="avatar-delete">
                                                        <button type="button" id="removeImage">X</button>
                                                    </div>
                                                    <div class="avatar-preview ec-preview">
                                                        <div class="imagePreview ec-div-preview">
                                                            <!-- Hiển thị hình ảnh đầu tiên -->
                                                            @if ($product->images->isNotEmpty())
                                                                <img class="ec-image-preview"
                                                                    src="{{ asset($product->images->first()->path) }}"
                                                                    alt="Product Image" />
                                                            @else
                                                                <img class="ec-image-preview"
                                                                    src="{{ asset('admin/assets/img/products/default-image.jpg') }}"
                                                                    alt="Default Image" />
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="thumb-upload-set col-md-12">
                                                    <!-- Lặp qua các hình ảnh và bỏ qua hình ảnh đầu tiên đã được hiển thị -->
                                                    @foreach ($product->images->skip(1) as $index => $image)
                                                        <div class="thumb-upload">
                                                            <div class="thumb-edit">
                                                                <!-- Thêm input file nếu bạn muốn thay đổi hình ảnh này -->
                                                                <input type='file' id="thumbUpload0{{ $index + 1 }}"
                                                                    name="images[]" class="ec-image-upload"
                                                                    accept=".png, .jpg, .jpeg" />
                                                                <label for="thumbUpload0{{ $index + 1 }}">
                                                                    <img src="{{ asset('admin/assets/img/icons/edit.svg') }}"
                                                                        class="svg_img header_svg" alt="edit" />
                                                                </label>
                                                            </div>
                                                            <div class="thumb-delete"></div>
                                                            <div class="thumb-preview ec-preview">
                                                                <div class="image-thumb-preview">
                                                                    <img class="image-thumb-preview ec-image-preview"
                                                                        src="{{ asset($image->path) }}"
                                                                        alt="Product Image" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="ec-vendor-upload-detail row g-3">
                                            <div class="mt-3 col-md-6">
                                                <label for="inputEmail4" class="form-label">Tên sản phẩm</label>
                                                <input type="text" name="name" value="{{ $product->name }}"
                                                    class="form-control slug-title" id="inputEmail4">
                                            </div>
                                            <div class="mt-3 col-md-6">
                                                <label class="form-label">Danh mục</label>
                                                <select name="category_id" id="Categories" class="form-select">
                                                    @foreach ($categories as $category)
                                                        @if (!empty($category->children))
                                                            <optgroup label="{{ $category->name }}">
                                                                @foreach ($category->children as $item)
                                                                    <option value="{{ $item->id }}"
                                                                        @if ($product->category_id == $item->id) selected @endif>
                                                                        {{ $item->name }}
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
                                            <div class="mt-3 col-md-12">
                                                <label class="form-label">Mô tả</label>
                                                <textarea class="form-control" rows="2" name="description" id="description">{{ $product->description }}</textarea>
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
@section('script')
    @include('toolbar')
@endsection
