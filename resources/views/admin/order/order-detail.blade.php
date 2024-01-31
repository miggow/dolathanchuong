{{-- $orderDetail->order_details->variant->product->images[0] --}}
@extends('admin.layout')
@section('admin.content')
    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper breadcrumb-wrapper-2">
                <h1>Order Detail</h1>
                <p class="breadcrumbs"><span><a href="{{ route('admin.home') }}">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>Orders
                </p>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="ec-odr-dtl card card-default">
                        <div class="card-header card-header-border-bottom d-flex justify-content-between">
                            <h2 class="ec-odr">Order Detail<br>
                                <span class="small">Order ID: #{{ $orderDetail->id }}</span>
                            </h2>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6">
                                    <address class="info-grid">
                                        <div class="info-title"><strong>Customer:</strong></div><br>
                                        <div class="info-content">
                                            <abbr title="Phone">Address:</abbr> {{ $orderDetail->address }}<br />
                                            <abbr title="Phone">Phone:</abbr> {{ $orderDetail->customer->phone }}
                                        </div>
                                    </address>
                                </div>
                                <div class="col-xl-3 col-lg-6">
                                    <address class="info-grid">
                                        <div class="info-title"><strong>Shipped To:</strong></div><br>
                                        <div class="info-content">
                                            Elaine Hernandez<br>
                                            P. Sherman 42,<br>
                                            Wallaby Way, Sidney<br>
                                            <abbr title="Phone">P:</abbr> (123) 345-6789
                                        </div>
                                    </address>
                                </div>
                                <div class="col-xl-3 col-lg-6">
                                    <address class="info-grid">
                                        <div class="info-title"><strong>Payment Method:</strong></div><br>
                                        <div class="info-content">
                                            {{ $orderDetail->payment_method->name }}<br>
                                            {{ $orderDetail->customer->customer_name }}<br>
                                        </div>
                                    </address>
                                </div>
                                <div class="col-xl-3 col-lg-6">
                                    <address class="info-grid">
                                        <div class="info-title"><strong>Order Date:</strong></div><br>
                                        <div class="info-content">
                                            <abbr title="Phone">Time:</abbr>
                                            {{ date('H:i', strtotime($orderDetail->created_at)) }}<br>
                                            <abbr title="Phone">Day:</abbr>
                                            {{ date('l, d-m-Y', strtotime($orderDetail->created_at)) }}<br>
                                        </div>
                                    </address>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="tbl-title">PRODUCT SUMMARY</h3>
                                    <div class="table-responsive">
                                        <table class="table table-striped o-tbl">
                                            <thead>
                                                <tr class="line">
                                                    <td><strong>#</strong></td>
                                                    <td class="text-center"><strong>IMAGE</strong></td>
                                                    <td class="text-center"><strong>PRODUCT</strong></td>
                                                    <td class="text-center"><strong>PRICE/UNIT</strong></td>
                                                    <td class="text-right"><strong>QUANTITY</strong></td>
                                                    <td class="text-right"><strong>SUBTOTAL</strong></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $total = $i = 0; @endphp
                                                @foreach ($orderDetail->order_details as $detail)
                                                    @php
                                                        $i++;
                                                        $subtotal = $detail->quantity * $detail->variant->price;
                                                        $total += $subtotal;
                                                    @endphp
                                                    <tr>
                                                        <td>{{ $i }}</td>
                                                        <td class="text-center">
                                                            <img class="product-img"
                                                                src={{ asset($detail->variant->product->images[0]->path) }}
                                                                alt="" width="50" height="50" />
                                                        </td>
                                                        <td>
                                                            <strong>{{ $detail->variant->product->name }}</strong><br />
                                                            {{ $detail->variant->product->description }}
                                                        </td>
                                                        <td class="text-center">{{ $detail->quantity }}</td>
                                                        <td class="text-right">
                                                            {{ number_format($detail->variant->price, 0, '.', ',') }} đ
                                                        </td>
                                                        <td class="text-right">
                                                            {{ number_format($subtotal, 0, '.', ',') }}
                                                            đ
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                <tr>
                                                    <td colspan="4"></td>
                                                    <td class="text-right"><strong>Taxes</strong></td>
                                                    <td class="text-right"><strong>N/A</strong></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">
                                                    </td>
                                                    <td class="text-right"><strong>Total</strong></td>
                                                    <td class="text-right">
                                                        <strong>{{ number_format($total, 0, '.', ',') }} đ</strong>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4"></td>
                                                    <td class="text-right"><strong>Payment Status</strong></td>
                                                    <td class="text-right">
                                                        <strong>{{ $orderDetail->payment_status }}</strong>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tracking Detail -->
                    <div class="card mt-4 trk-order">
                        <div class="p-4 text-center text-white text-lg bg-dark rounded-top">
                            <span class="text-uppercase">Tracking Order No - </span>
                            <span class="text-medium">{{ $orderDetail->id }}</span>
                        </div>
                        <div class="d-flex flex-wrap flex-sm-nowrap justify-content-between py-3 px-2 bg-secondary">
                            <div class="w-100 text-center py-1 px-2">
                                <span class="text-medium">Shipped Via:</span> {{ $orderDetail->delivery_method }}
                            </div>
                            <div class="w-100 text-center py-1 px-2">
                                <span class="text-medium">Status:</span> {{ $orderDetail->status }}
                            </div>
                            <div class="w-100 text-center py-1 px-2">
                                <span class="text-medium">Expected Date:</span> 12-11-2045
                            </div>
                        </div>
                        <div class="card-body">
                            <div
                                class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between padding-top-2x padding-bottom-1x">
                                <div
                                    class="step {{ $orderDetail->status == 'pending' || $orderDetail->status == 'ready to ship' || $orderDetail->status == 'on the way' || $orderDetail->status == 'delivered' ? 'completed' : '' }}">
                                    <div class="step-icon-wrap">
                                        <div class="step-icon"><i class="mdi mdi-cart"></i></div>
                                    </div>
                                    <h4 class="step-title">Confirmed Order</h4>
                                </div>
                                <div
                                    class="step {{ $orderDetail->status == 'ready to ship' || $orderDetail->status == 'on the way' || $orderDetail->status == 'delivered' ? 'completed' : '' }}">
                                    <div class="step-icon-wrap">
                                        <div class="step-icon"><i class="mdi mdi-tumblr-reblog"></i></div>
                                    </div>
                                    <h4 class="step-title">Processing Order</h4>
                                </div>
                                <div
                                    class="step {{ $orderDetail->status == 'on the way' || $orderDetail->status == 'delivered' ? 'completed' : '' }}">
                                    <div class="step-icon-wrap">
                                        <div class="step-icon"><i class="mdi mdi-gift"></i></div>
                                    </div>
                                    <h4 class="step-title">Product Dispatched</h4>
                                </div>
                                <div
                                    class="step {{ $orderDetail->status == 'on the way' || $orderDetail->status == 'delivered' ? 'completed' : '' }}">
                                    <div class="step-icon-wrap">
                                        <div class="step-icon"><i class="mdi mdi-truck-delivery"></i></div>
                                    </div>
                                    <h4 class="step-title">On Delivery</h4>
                                </div>
                                <div class="step {{ $orderDetail->status == 'delivered' ? 'completed' : '' }}">
                                    <div class="step-icon-wrap">
                                        <div class="step-icon"><i class="mdi mdi-hail"></i></div>
                                    </div>
                                    <h4 class="step-title">Product Delivered</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Content -->
    </div> <!-- End Content Wrapper -->
@endsection
