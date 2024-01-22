@extends('admin.layout')
@section('admin.content')
    <!-- PAGE WRAPPER -->


    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>Product</h1>
                    <p class="breadcrumbs"><span><a href={{ route('home') }}>Home</a></span>
                        <span><i class="mdi mdi-chevron-right"></i>Settings</span>
                        <span><i class="mdi mdi-chevron-right"></i>Banner</span>
                    </p>
                </div>
                <div>
                    {{-- <a href="{{ route('product.create') }}" class="btn btn-primary"> Add Porduct</a> --}}
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addBannerModal">
                        Add Banner
                    </button>
                </div>
            </div>
            <!-- Image Upload Form -->
            <div class="card bg-white">
                {{-- <div class="card-header">
                    <h4 class="card-title">Add Banner Images</h4>
                </div> --}}
                <div class="card-body">
                    <!-- Form -->
                    <div class="container mt-5">

                        <!-- Banners Table -->
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">Image</th>
                                    <th scope="col" class="text-center">Order</th>
                                    <th scope="col" class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Replace with dynamic rows -->
                                @foreach ($banners as $key => $banner)
                                    <tr>
                                        <td>
                                            <img width="100%" height="300px" style="object-fit: cover"
                                                src="{{ asset($banner->image) }}" alt="Product Image" />
                                        </td>
                                        <td class="text-center" style="text-align: center; vertical-align: middle;">
                                            {{ $banner->order }}</td>
                                        <td class="text-center" style="text-align: center; vertical-align: middle;"
                                            class="table-actions">
                                            <button type="button"
                                                class="btn-edit-banner btn btn-sm btn-outline-warning me-2"
                                                data-bs-toggle="modal" data-bs-target="#edit-banner"
                                                data-id="{{ encrypt($banner->id) }}"
                                                data-order="{{ $banner->order }}">Edit</button>
                                            <button class="btn btn-outline-danger btn-sm confirm-delete"
                                                data-href="{{ route('destroy.banner', encrypt($banner->id)) }}">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                                <!-- Repeat for other banners -->
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div> <!-- End Content -->
    </div> <!-- End Content Wrapper -->
@endsection
@section('modal')
    @include('modal.delete')
    <div class="modal fade" id="addBannerModal" tabindex="-1" aria-labelledby="addBannerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="addBannerModalLabel">Add New Banner</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                    <form action="{{ route('banner.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="bannerImage" class="form-label">Image</label>
                            <input type="file" class="form-control" name="banner" id="bannerImage" accept="image/*"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="bannerImage" class="form-label">Sort</label>
                            <input type="number" class="form-control" name="sort" min="0" value="1">
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
    <div class="modal fade" id="edit-banner" tabindex="-1" aria-labelledby="addBannerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="addBannerModalLabel">Add New Banner</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                    <form enctype="multipart/form-data" id="form-edit" method="POST"  enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="bannerImage" class="form-label">Image</label>
                            <input type="file" class="form-control" name="banner" id="bannerImage" accept="image/*"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="bannerImage" class="form-label">Sort</label>
                            <input type="number" class="form-control" id="order" name="sort" min="0" value="1">
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
            $(".btn-edit-banner").click(function() {
                var id = $(this).data('id');
                var url = "{{ route('banner.update', ':id') }}".replace(':id', id);
                $('#form-edit').attr('action', url);
                $('#order').attr('value', $(this).data('order'));
            });
        });
    </script>
@endsection
