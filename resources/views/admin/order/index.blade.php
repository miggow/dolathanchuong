@extends('admin.layout')
@section('admin.content')
    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper breadcrumb-wrapper-2">
                <h1>New Orders</h1>
                <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>Orders
                </p>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-default">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="responsive-data-table" class="table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Customer</th>
                                            <th>Items</th>
                                            <th>Price</th>
                                            {{-- <th>Payment</th> --}}
                                            <th>Payment status</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                            @php
                                                if ($order->status == 'pending') {
                                                    $badge = 'badge-secondary';
                                                }
                                                if ($order->status == 'ready to ship' || $order->status == 'return') {
                                                    $badge = 'badge-warning';
                                                }
                                                if ($order->status == 'on the way') {
                                                    $badge = 'badge-info';
                                                }
                                                if ($order->status == 'delivered') {
                                                    $badge = 'badge-success';
                                                }
                                                if ($order->status == 'canceled') {
                                                    $badge = 'badge-danger';
                                                }
                                            @endphp
                                            <tr>
                                                <td>{{ $order->id }}</td>
                                                <td><strong>{{ $order->customer->customer_name }}</strong><br>
                                                    {{ $order->customer->phone }}
                                                </td>
                                                <td>
                                                    @foreach ($order->order_details as $detail)
                                                        @php
                                                            $quantity = 0;
                                                            $quantity += $detail->quantity;
                                                        @endphp
                                                    @endforeach
                                                    {{ $quantity }}
                                                </td>
                                                <td>{{ number_format($order->total, 0, '.', '.') }} đ</td>
                                                {{-- <td>{{ $order->payment_method->name }}</td> --}}
                                                <td>
                                                    <span
                                                        class="badge {{ $order->payment_status == 'paid' ? 'badge-success' : 'badge-secondary' }}">{{ $order->payment_status }}<span>
                                                </td>
                                                <td>
                                                    <span class="badge {{ $badge }}">{{ $order->status }}</span>
                                                </td>
                                                <td>{{ $order->created_at }}</td>
                                                <td>
                                                    <div class="btn-group mb-1">
                                                        <button type="button" class="btn btn-outline-success">Info</button>
                                                        <button type="button"
                                                            class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false" data-display="static">
                                                            <span class="sr-only">Info</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item"
                                                                href="{{ route('order.show', $order->id) }}">Chi tiết</a>
                                                            <a class="dropdown-item btn-update-order-status"
                                                                data-id="{{ $order->id }}" data-bs-toggle="modal"
                                                                data-bs-target="#update-order-status">Cập nhật trạng thái
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        {{-- <tr>
                                            <td>1050</td>
                                            <td><strong>John Deo</strong><br>
                                                johny@example.com
                                            </td>
                                            <td>3</td>
                                            <td>$80</td>
                                            <td>PAID</td>
                                            <td><span class="mb-2 mr-2 badge badge-secondary">Pending</span>
                                            </td>
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
                                                        <a class="dropdown-item" href="#">Detail</a>
                                                        <a class="dropdown-item" href="#">Track</a>
                                                        <a class="dropdown-item" href="#">Cancel</a>
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
    <!-- End Content Wrapper -->
@endsection
@section('modal')
    <div class="modal fade" id="update-order-status" tabindex="-1" aria-labelledby="addInstagramFeedModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="addInstagramFeedModalLabel">Cập nhật trạng thái đơn hàng</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                    <form enctype="multipart/form-data" id="form-edit" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="order-status" class="form-label">Trạng thái đơn hàng</label>
                            <select id="parent_id" name="status" class="form-control">
                                <option value="ready to ship">Sẵn sàng vận chuyển</option>
                                <option value="on the way">Đang trên đường giao</option>
                                <option value="delivered">Đã giao</option>
                                <option value="canceled">Hủy</option>
                            </select>
                        </div>
                        <!-- Submit Button -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $(".btn-update-order-status").click(function() {
                var id = $(this).data('id');
                var url = "{{ route('order.update', ':id') }}".replace(':id', id);
                $('#form-edit').attr('action', url);
            });
        });
    </script>
@endsection
