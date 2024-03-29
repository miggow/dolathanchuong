@extends('admin.layout')
@section('admin.content')
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>Product</h1>
                    <p class="breadcrumbs"><span><a href={{ route('home') }}>Home</a></span>
                        <span><i class="mdi mdi-chevron-right"></i></span>Product
                    </p>
                </div>
                <div>
                    <a href="{{ route('product.create') }}" class="btn btn-primary"> Add Porduct</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-default">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="responsive-data-table" class="table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Name</th>
                                            <th>Gía</th>
                                            <th>Sale</th>
                                            <th>Giao dịch</th>
                                            <th>Kho</th>
                                            <th>Status</th>
                                            <th>Mới</th>
                                            <th>Nổi bật</th>
                                            <th>Khuyến mãi</th>
                                            {{-- <th>Date</th> --}}
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>
                                                    <img class="tbl-thumb"
                                                        src="{{ asset($product->images->first()->path ?? '') }}"
                                                        alt="Product Image" />
                                                </td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ number_format($product->variants->min('price'), '0', '.', '.') }} đ
                                                    <br> - <br>
                                                    {{ number_format($product->variants->max('price'), '0', '.', '.') }} đ
                                                </td>
                                                <td>{{ number_format($product->variants->min('sale_price'), '0', '.', '.') }}
                                                    đ <br> - <br>
                                                    {{ number_format($product->variants->max('sale_price'), '0', '.', '.') }}
                                                    đ</td>
                                                <td>61</td>
                                                <td>{{ $product->variants->sum('quantity') }}</td>
                                                <td>
                                                    <select data-id={{ $product->id }} id="product-status"
                                                        class="form-control">
                                                        <option value="publish"
                                                            {{ $product->status == 'publish' ? 'selected' : '' }}>
                                                            Hoạt động
                                                        </option>
                                                        <option value="draft"
                                                            {{ $product->status == 'draft' ? 'selected' : '' }}>
                                                            Ngừng hiển thị
                                                        </option>
                                                    </select>
                                                </td>
                                                {{-- <td>{{ $product->created_at }}</td> --}}
                                                <td>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox"
                                                            {{ $product->is_new == 1 ? 'checked' : null }}
                                                            data-id={{ $product->id }} data-type="is_new">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox"
                                                            {{ $product->is_sale == 1 ? 'checked' : null }}
                                                            data-id={{ $product->id }} data-type="is_sale">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox"
                                                            {{ $product->is_outstanding == 1 ? 'checked' : null }}
                                                            data-id={{ $product->id }} data-type="is_outstanding">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a class="btn btn-sm btn-outline-success"
                                                        href="{{ route('inventory.index', $product->id) }}">Kho</a>
                                                    <a class="btn btn-sm btn-outline-warning"
                                                        href="{{ route('product.edit', $product->id) }}">Edit</a>
                                                    <button class="btn btn-outline-danger btn-sm confirm-delete"
                                                        data-href="{{ route('destroy.product', encrypt($product->id)) }}">Delete</button>
                                                    {{-- <a class="btn btn-sm btn-success" href="#">Delete</a> --}}
                                                </td>
                                            </tr>
                                        @endforeach

                                        {{--
                                        <tr>
                                            <td><img class="tbl-thumb" src=""
                                                    alt="Product Image" /></td>
                                            <td>Full Sleeve Cap T-Shirt</td>
                                            <td>$40</td>
                                            <td>30% OFF</td>
                                            <td>80</td>
                                            <td>621</td>
                                            <td>ACTIVE</td>
                                            <td>2021-10-30</td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <button type="button" class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                        data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr> --}}



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Content -->
    </div>
@endsection
@section('script')
    <script>
        $(document).on('click', '.form-check-input', function() {
            let check = $(this).prop('checked');
            let productID = $(this).data('id');
            let type = $(this).data('type');
            $.ajax({
                url: '/api/product/type/' + productID,
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // For CSRF token
                },
                data: {
                    type: type,
                    check: check == true ? 1 : 0,
                },
                success: function(response) {
                    alert(response.message);
                },
                error: function(xhr, status, error) {
                    alert("Error: " + error);
                }
            });
        });
        $(document).on('change', '#product-status', function() {
            let productID = $(this).data('id');
            let status = $(this).val();
            $.ajax({
                url: '/api/product/status/' + productID,
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // For CSRF token
                },
                data: {
                    status: status
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
@section('modal')
    @include('modal.delete')
@endsection
