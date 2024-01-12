@extends('admin.layout')
@section('admin.content')
    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper breadcrumb-wrapper-2 breadcrumb-contacts">
                <h1>Main Category</h1>
                <p class="breadcrumbs"><span><a href={{route('home')}}>Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>Main Category
                </p>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-12">
                    <div class="ec-cat-list card card-default mb-24px">
                        <div class="card-body">
                            <div class="ec-cat-form">
                                <h4>Add New Category</h4>
                                <form action="{{ route('category.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="text" class="col-12 col-form-label">Name</label>
                                        <div class="col-12">
                                            <input id="name" name="name" class="form-control here slug-title"
                                                type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="parent_id" class="col-12 col-form-label">Parent Category</label>
                                        <div class="col-12">
                                            <select id="parent_id" name="parent_id" class="form-control">
                                                <option value=""></option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
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
                                            <th>Sub Categories</th>
                                            <th>Product</th>
                                            {{-- <th>Total Sell</th> --}}
                                            <th>Status</th>
                                            {{-- <th>Trending</th> --}}
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($categories as $category)
                                            <tr>

                                                <td>{{ $category->name }}</td>
                                                <td>
                                                    <span class="ec-sub-cat-list">
                                                        @if ($category->children)
                                                            @foreach ($category->children as $children)
                                                                <span class="ec-sub-cat-tag">{{ $children->name }}</span>
                                                            @endforeach
                                                        @endif
                                                    </span>
                                                </td>
                                                <td>{{ $category->getTotalProductCountAttribute() }}</td>
                                                {{-- <td>2161</td> --}}
                                                <td>ACTIVE</td>
                                                {{-- <td><span class="badge badge-success">Top</span></td> --}}
                                                <td class="btn-group">
                                                    <button type="button"
                                                        class="btn-edit-category btn btn-sm btn-outline-warning me-2"
                                                        data-bs-toggle="modal" data-bs-target="#edit-category"
                                                        data-id="{{ $category->id }}"
                                                        data-name="{{ $category->name }}">Edit</button>
                                                    <button class="btn btn-outline-danger btn-sm confirm-delete"
                                                        data-href="{{ route('destroy.category', encrypt($category->id)) }}">Delete</button>
                                                </td>
                                            </tr>
                                        @endforeach


                                        {{-- <tr>
                                            <td>Perfume</td>
                                            <td>
                                                <span class="ec-sub-cat-list">
                                                    <span class="ec-sub-cat-count" title="Total Sub Categories">4</span>
                                                    <span class="ec-sub-cat-tag">Clothes perfume</span>
                                                    <span class="ec-sub-cat-tag">deodorant </span>
                                                    <span class="ec-sub-cat-tag">Flower fragrance </span>
                                                    <span class="ec-sub-cat-tag">Air Freshener</span>
                                                </span>
                                            </td>
                                            <td>38</td>
                                            <td>ACTIVE</td>
                                            <td>
                                                <div class="btn-group">
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
    </div> <!-- End Content Wrapper -->
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
@endsection
@section('modal')
    @include('modal.delete')
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $(".btn-edit-category").click(function() {
                var categoryId = $(this).data('id');
                var url = "{{ route('category.update', ':id') }}".replace(':id', categoryId);
                $('#form-edit').attr('action', url);
                $('#name-form').attr('value', $(this).data('name'));
            });
        });
    </script>
@endsection
