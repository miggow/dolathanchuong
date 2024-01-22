<div class="ec-left-sidebar ec-bg-sidebar">
    <div id="sidebar" class="sidebar ec-sidebar-footer">

        <div class="ec-brand">
            <a href="{{ route('home') }}" class="" title="De-ba">
                <img class="text-center ec-brand-icon" src="{{ asset('frontend/assets/images/debalogo.jpg') }}"
                    style="max-width: unset" height="50" width="175" />
            </a>
        </div>

        <!-- begin sidebar scrollbar -->
        <div class="ec-navigation" data-simplebar>
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <!-- Dashboard -->
                <li>
                    <a class="sidenav-item-link" href="{{ route('admin.home') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                    <hr>
                </li>


                <!-- Users -->
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-account-group"></i>
                        <span class="nav-text">Users</span> <b class="caret"></b>
                    </a>
                    <div class="collapse">
                        <ul class="sub-menu" id="users" data-parent="#sidebar-menu">

                            <li class="">
                                <a class="sidenav-item-link" href="{{ route('user.index') }}">
                                    <span class="nav-text">User List</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <hr>
                </li>

                <!-- Category -->
                <li class="has-sub {{ areActiveRoutes(['category.index']) }}">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-dns-outline"></i>
                        <span class="nav-text">Categories</span> <b class="caret"></b>
                    </a>
                    <div class="collapse {{ areActiveRoutes(['category.index']) }}">
                        <ul class="sub-menu" id="categorys" data-parent="#sidebar-menu">
                            <li class="{{ areActiveRoutes(['category.index']) }}">
                                <a class="sidenav-item-link" href="{{ route('category.index') }}">
                                    <span class="nav-text">Danh mục</span>
                                </a>
                            </li>
                            <li class="{{ areActiveRoutes(['sub-category.index']) }}">
                                <a class="sidenav-item-link" href="{{ route('sub-category.index') }}">
                                    <span class="nav-text">Danh mục con</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Products -->
                <li class="has-sub {{ areActiveRoutes(['product.index']) }}">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-palette-advanced"></i>
                        <span class="nav-text">Products</span> <b class="caret"></b>
                    </a>
                    <div class="collapse {{ areActiveRoutes(['product.index']) }}">
                        <ul class="sub-menu" id="products" data-parent="#sidebar-menu">
                            <li class="{{ areActiveRoutes(['product.index']) }}">
                                <a class="sidenav-item-link" href="{{ route('product.index') }}">
                                    <span class="nav-text">List Product</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Orders -->
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-cart"></i>
                        <span class="nav-text">Orders</span> <b class="caret"></b>
                    </a>
                    <div class="collapse">
                        <ul class="sub-menu" id="orders" data-parent="#sidebar-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="new-order.html">
                                    <span class="nav-text">New Order</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="order-history.html">
                                    <span class="nav-text">Order History</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="order-detail.html">
                                    <span class="nav-text">Order Detail</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="invoice.html">
                                    <span class="nav-text">Invoice</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- Orders -->
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-settings"></i>
                        <span class="nav-text">Setting</span> <b class="caret"></b>
                    </a>
                    <div class="collapse">
                        <ul class="sub-menu" id="settings" data-parent="#setting">
                            <li class="">
                                <a class="sidenav-item-link" href="{{ route('banner.index') }}">
                                    <span class="nav-text">Banner</span>
                                </a>
                            </li>
                            {{-- <li class="">
                                <a class="sidenav-item-link" href="order-history.html">
                                    <span class="nav-text">Order History</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="order-detail.html">
                                    <span class="nav-text">Order Detail</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="invoice.html">
                                    <span class="nav-text">Invoice</span>
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                </li>


            </ul>
        </div>
    </div>
</div>
