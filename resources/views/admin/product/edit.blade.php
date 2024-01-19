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
                        <form action="{{ route('product.update', encrypt($product->id)) }}" enctype="multipart/form-data" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="card-body">
                                <div class="row ec-vendor-uploads">
                                    <div class="col-lg-4">
                                        <div class="ec-vendor-img-upload">
                                            <div class="ec-vendor-main-img">
                                                <div class="avatar-upload" data-image-id="{{ encrypt($product->images->first()->id) }}">
                                                    <div class="avatar-edit">
                                                        <!-- Chỉ hiển thị input file nếu bạn muốn thêm hoặc thay đổi hình ảnh -->
                                                        <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg"
                                                            class="ec-image-upload" />
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
                                                                    src="{{ asset('admin/assets/img/products/vender-upload-thumb-preview.jpg') }}"
                                                                    alt="Default Image" />
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="thumb-upload-set col-md-12" id="thumbUploadContainer">
                                                    <!-- Lặp qua các hình ảnh và bỏ qua hình ảnh đầu tiên đã được hiển thị -->
                                                    @foreach ($product->images->skip(1) as $index => $image)
                                                        <div class="thumb-upload" data-image-id="{{ encrypt($image->id) }}">
                                                            <div class="thumb-edit">
                                                                <!-- Thêm input file nếu bạn muốn thay đổi hình ảnh này -->
                                                                <input type='file' id="thumbUpload0{{ $index + 1 }}"
                                                                    class="ec-image-upload" accept=".png, .jpg, .jpeg" />
                                                                <label for="thumbUpload0{{ $index + 1 }}">
                                                                    <img src="{{ asset('admin/assets/img/icons/edit.svg') }}"
                                                                        class="svg_img header_svg" alt="edit" />
                                                                </label>
                                                            </div>
                                                            <button type="button"
                                                                class="thumb-delete remove-image-btn"></button>
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
                                                <div class="thumb-upload add-new-thumb">
                                                    <button type="button" id="addNewImageButton" class="btn btn-primary">
                                                        <i class="mdi mdi-plus"></i>
                                                        <!-- Sử dụng Font Awesome hoặc biểu tượng khác -->
                                                    </button>
                                                </div>
                                                {{-- <button type="button" id="addNewImageButton" class="btn btn-primary">Thêm
                                                    Hình Ảnh Mới</button> --}}

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
    <script>
        $(document).ready(function() {
            $('#addNewImageButton').click(function() {
                var newImageIndex = $('#thumbUploadContainer .thumb-upload').length;
                var thumbUploadHtml = `
            <div class="thumb-upload">
                <div class="thumb-edit">
                    <input type='file' id="thumbUpload${newImageIndex}" name="images[]" class="ec-image-upload" accept=".png, .jpg, .jpeg" onchange="previewImage(this, 'preview${newImageIndex}')" />
                    <label for="thumbUpload${newImageIndex}">
                        <img src="{{ asset('admin/assets/img/icons/edit.svg') }}" class="svg_img header_svg" alt="edit" />
                    </label>
                </div>
                    <button type="button" class="thumb-delete remove-image-btn"></button>
                <div class="thumb-preview ec-preview">
                    <div class="image-thumb-preview" id="preview${newImageIndex}">
                        <img class="image-thumb-preview ec-image-preview"
                            src="{{ asset('admin/assets/img/products/vender-upload-thumb-preview.jpg') }}"
                            alt="Default Image" />
                    </div>
                </div>
            </div>
        `;
                $('#thumbUploadContainer').append(thumbUploadHtml);
            });

            $('#thumbUploadContainer').on('click', '.remove-image-btn', function() {
                $(this).closest('.thumb-upload').remove();
            });
            $('#thumbUploadContainer').on('click', '.remove-image-btn', function() {
                var thumbUploadDiv = $(this).closest('.thumb-upload');
                var imageId = thumbUploadDiv.data('image-id');
                if (imageId) {
                    $.ajax({
                        url: "{{ route('destroy.product.image') }}",
                        type: 'post',
                        data: {
                            "_token": "{{ csrf_token() }}",
                            id: imageId
                        },
                        success: function(response) {
                            thumbUploadDiv.remove();
                        },
                        error: function(xhr, status, error) {
                            console.error("Error: " + error);
                        }
                    });
                } else {
                    thumbUploadDiv.remove();
                }
            });
            // $('.ec-image-upload').change(function() {
            //     var fileInput = this;
            //     var imageId = $(this).closest('.thumb-upload').data('image-id');
            //     if (fileInput.files[0]) {
            //         var formData = new FormData();
            //         formData.append('image', fileInput.files[0]);
            //         formData.append('id', imageId);

            //         $.ajax({
            //             url: "{{ route('update.product.image') }}",
            //             type: 'POST',
            //             data: formData,
            //             contentType: false,
            //             processData: false,
            //             headers: {
            //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //             },
            //             success: function(response) {
            //                 if (response.success && response.path) {
            //                     thumbUploadDiv.find('.ec-image-preview').attr('src', response
            //                         .path);
            //                 }
            //             },
            //             error: function(xhr, status, error) {
            //                 // Xử lý lỗi
            //             }
            //         });
            //     }
            // });
            $('body').on('change', '.ec-image-upload', function() {
                var fileInput = this;
                var parentDiv = $(this).closest('.thumb-upload, .avatar-upload');
                var imageId = parentDiv.data('image-id'); // Lấy ID ảnh (có thể mã hóa hoặc không)

                if (fileInput.files[0]) {
                    var formData = new FormData();
                    formData.append('image', fileInput.files[0]);
                    formData.append('id', imageId);

                    $.ajax({
                        url: "{{ route('update.product.image') }}", // URL xử lý cập nhật ảnh
                        type: 'POST',
                        data: formData,
                        contentType: false,
                        processData: false,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            if (response.success && response.path) {
                                // Cập nhật preview ảnh
                                if (parentDiv.hasClass('thumb-upload')) {
                                    // Xử lý cập nhật cho thumb-upload
                                    parentDiv.find('.ec-image-preview').attr('src', response
                                        .path);
                                } else if (parentDiv.hasClass('avatar-upload')) {
                                    // Xử lý cập nhật cho avatar-upload
                                    parentDiv.find('.ec-image-preview').attr('src', response
                                        .path);
                                }
                            }
                        },
                        error: function(xhr, status, error) {
                            // Xử lý lỗi
                        }
                    });
                }
            });
        });

        function previewImage(inputElement, previewElementId) {
            var file = inputElement.files[0];
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#' + previewElementId + ' img').attr('src', e.target.result);
            };
            reader.readAsDataURL(file);
        }
    </script>
@endsection
