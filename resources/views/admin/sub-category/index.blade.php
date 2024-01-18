@extends('admin.layout')
@section('admin.content')
    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper breadcrumb-wrapper-2 breadcrumb-contacts">
                <h1>Sub Category</h1>
                <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>Sub Category
                </p>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-12">
                    <div class="ec-cat-list card card-default mb-24px">
                        <div class="card-body">
                            <div class="ec-cat-form">
                                <h4>Add Sub Category</h4>

                                <form action="{{ route('sub-category.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="text" class="col-12 col-form-label">Name</label>
                                        <div class="col-12">
                                            <input id="text" name="name" class="form-control here slug-title"
                                                type="text">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="parent-category" class="col-12 col-form-label">Danh mục cha</label>
                                        <div class="col-12">
                                            <select id="parent-category" name="parent_id" class="custom-select" required>
                                                <option value="">Chọn danh mục cha</option>
                                                @foreach ($parentCategory as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-12">
                    <div class="ec-cat-list card card-default">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="responsive-data-table" class="table">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Main Categories</th>
                                            <th>Product</th>
                                            {{-- <th>Total Sell</th> --}}
                                            {{-- <th>Status</th> --}}
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($categories as $category)
                                            <tr>
                                                <td>{{ $category->name }}</td>
                                                <td>
                                                    <span class="ec-sub-cat-list">
                                                        <span class="ec-sub-cat-tag">{{ $category->parent->name }}</span>
                                                    </span>
                                                </td>
                                                <td>{{ $category->products->count() }}</td>
                                                {{-- <td>2161</td> --}}
                                                {{-- <td>ACTIVE</td> --}}
                                                <td class="btn-group">
                                                    <button type="button"
                                                        class="btn-edit-category btn btn-sm btn-outline-warning me-2"
                                                        data-bs-toggle="modal" data-bs-target="#edit-category"
                                                        data-id="{{ encrypt($category->id) }}"
                                                        data-name="{{ $category->name }}">Edit</button>
                                                    <button class="btn btn-outline-danger btn-sm confirm-delete"
                                                        data-href="{{ route('destroy.sub-category', encrypt($category->id)) }}">Delete</button>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Content -->
    </div> <!-- End Content Wrapper -->
@endsection
@section('modal')
    <div class="modal fade" id="edit-category" tabindex="-1" aria-labelledby="edit-categoryLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="edit-categoryLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="form-edit" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="text" class="col-12 col-form-label">Name</label>
                            <div class="col-12">
                                <input id="name-form" name="name" class="form-control here slug-title" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('modal.delete')
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $(".btn-edit-category").click(function() {
                var categoryId = $(this).data('id');
                var url = "{{ route('sub-category.update', ':id') }}".replace(':id', categoryId);
                $('#form-edit').attr('action', url);
                $('#name-form').attr('value', $(this).data('name'));
            });
        });
    </script>
@endsection
