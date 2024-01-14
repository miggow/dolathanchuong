@extends('admin.layout')
@section('admin.content')
    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper ec-ec-content-wrapper mb-m-24px">
        <div class="content">
            <div class="breadcrumb-wrapper breadcrumb-contacts">
                <div>
                    <h1>Cập nhập sản phẩm: {{ $product->name }}</h1>
                    <p class="breadcrumbs"><span><a href="{{ route('admin.home') }}">Home</a></span>
                        <span><i class="mdi mdi-chevron-right"></i></span> Cập nhật kho
                    </p>
                </div>
                <div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-add-contact">
                        Thêm biến thể mới
                    </button>
                </div>
            </div>
            <div class="row">
                @foreach ($product->variants as $variant)
                    <div class="col-lg-6 col-xl-4 mb-24px">
                        <div class="ec-user-card card card-default p-4">
                            <a href="javascript:0" class="media text-secondary detail-vaiant" data-bs-toggle="modal"
                                data-id="{{ $variant->id }}" data-price="{{ number_format($variant->price, 0, '.', '') }}"
                                data-sale="{{ number_format($variant->sale_price, 0, '.', '') }}"
                                data-quantity="{{ $variant->quantity }}"
                                data-imagepath={{ asset($product->images->first()->path ?? '') }} data-product="{{ $product->name }}"
                                data-url="{{ route('inventory.update', $variant->id) }}" data-bs-target="#modalContact">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-2 text-dark">
                                        {{ $product->name }}
                                        @foreach ($variant->attributes as $attribute)
                                            @if ($loop->first)
                                                {{ $attribute->pivot->value }}
                                            @else
                                                - {{ $attribute->pivot->value }}
                                            @endif
                                        @endforeach
                                    </h5>

                                    <ul class="list-unstyled">
                                        <li class="d-flex mb-1">
                                            <span>SKU: {{ $variant->sku }}</span>
                                        </li>
                                        <li class="d-flex mb-1">
                                            <span>Giá: {{ number_format($variant->price, 0, '.', '.') }} đ</span>
                                        </li>
                                        @if ($variant->sale_price)
                                            <li class="d-flex mb-1">
                                                <span>Giá khuyến mãi:
                                                    {{ number_format($variant->sale_price, 0, '.', '.') }}
                                                    đ</span>
                                            </li>
                                        @endif
                                        <li class="d-flex mb-1">
                                            <span>Số lượng: {{ $variant->quantity }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div> <!-- End Content -->
    </div> <!-- End Content Wrapper -->
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $(".detail-vaiant").click(function() {
                const id = $(this).attr("data-id");
                const price = $(this).attr("data-price");
                const sale = $(this).attr("data-sale");
                const quantity = $(this).attr("data-quantity");
                const product = $(this).attr("data-product");
                const image = $(this).attr("data-imagepath");
                $("#modalContact").modal("show");
                $("#image").attr("src", image);
                $("#product-name").text(product);
                $("#price").val(price);
                $("#sale").val(sale);
                $("#quantity").val(quantity);
                $("#id_variant").val(id);
                $('#myForm').attr('action', $(this).attr("data-url"));
                const baseUrl = "{{ route('inventory.destroy', ['id' => ':id']) }}";
                // Thay thế ':id' bằng ID thực tế
                const newHref = baseUrl.replace(':id', id);
                $(".btn-remove-variant").attr('href', newHref);
            });
        });
    </script>
@endsection
@section('modal')
    <!-- Contact Modal -->
    <div class="modal fade modal-contact-detail" id="modalContact" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header justify-content-end border-bottom-0">

                    <button type="button" class="btn-close-icon" data-bs-dismiss="modal" aria-label="Close">
                        <i class="mdi mdi-close"></i>
                    </button>
                </div>

                <div class="modal-body pt-0">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <div class="profile-content-left px-4">
                                <div class="text-center widget-profile px-0 border-0">
                                    <div class="card-img mx-auto rounded-circle">
                                        <img src="" id="image" alt="user image">
                                    </div>

                                    <div class="card-body">
                                        <h4 class="py-2 text-dark" id="product-name"></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="contact-info px-4">
                                <form id="myForm" method="POST">
                                    @csrf
                                    <input type="hidden" id="id_variant">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="price">Giá</label>
                                                <input type="text" class="form-control" id="price" name="price">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="sale">Giảm giá</label>
                                                <input type="text" class="form-control" id="sale" name="sale_price">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="quantity">Giá</label>
                                                <input type="text" class="form-control" id="quantity" name="quantity">
                                            </div>
                                        </div>

                                    </div>
                                    <a class="btn btn-danger btn-remove-variant" href="#">Xóa</a>
                                    <button type="submit" class="btn btn-success text-center">Lưu</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-add-contact" id="modal-add-contact" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <form action="{{ route('inventory.store', $product->id) }}" method="POST">
                    @csrf
                    <div class="modal-header px-4">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Thêm mới sản phẩm vào kho</h5>
                    </div>

                    <div class="modal-body px-4">
                        {{-- <div class="form-group row mb-6">
                            <label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">User
                                Image</label>

                            <div class="col-sm-8 col-lg-10">
                                <div class="custom-file mb-1">
                                    <input type="file" class="custom-file-input" id="coverImage" required>
                                    <label class="custom-file-label" for="coverImage">Choose
                                        file...</label>
                                    <div class="invalid-feedback">Example invalid custom file feedback
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        <div class="row mb-2">

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="color">Màu:</label>
                                    <input type="text" class="form-control" id="color" name="color">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="size">Kích thước:</label>
                                    <input type="text" class="form-control" id="size" name="size">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label for="price">Giá:</label>
                                    <input type="number" class="form-control" id="price" name="price">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label for="sale_price">Giảm giá: </label>
                                    <input type="number" class="form-control" id="sale_price" name="sale_price">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label for="quantity">Số lượng: </label>
                                    <input type="text" class="form-control" id="quantity" value=""
                                        name="quantity">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer px-4">
                        <button type="button" class="btn btn-secondary btn-pill" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary btn-pill">Save Contact</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
