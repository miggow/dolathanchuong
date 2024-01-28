@extends('admin.layout')
@section('admin.content')
    <!-- PAGE WRAPPER -->


    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>Category Video</h1>
                    <p class="breadcrumbs"><span><a href={{ route('home') }}>Home</a></span>
                        <span><i class="mdi mdi-chevron-right"></i>Settings</span>
                        <span><i class="mdi mdi-chevron-right"></i>Category Video</span>
                    </p>
                </div>
                <div>
                    {{-- <a href="{{ route('product.create') }}" class="btn btn-primary"> Add Porduct</a> --}}
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#addCategoryVideoModal">
                        Add Category Video
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
                                    <th scope="col" class="text-center">Image icon</th>
                                    <th scope="col" class="text-center">Video</th>
                                    <th scope="col" class="text-center">Name</th>
                                    <th scope="col" class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Replace with dynamic rows -->
                                @foreach ($instagramFeeds as $feed)
                                    <tr>
                                        <td>
                                            <img width="100px" height="100px" style="object-fit: cover"
                                                src="{{ asset($feed->image) }}" alt="Product Image" />
                                        </td>
                                        <td class="text-center" style="text-align: center; vertical-align: middle;">
                                            <a href={{ $feed->link }}>{{ $feed->link }}</a>
                                        </td>
                                        <td class="text-center" style="text-align: center; vertical-align: middle;"
                                            class="table-actions">
                                            <button type="button"
                                                class="btn-edit-category-video btn btn-sm btn-outline-warning me-2"
                                                data-bs-toggle="modal" data-bs-target="#edit-instagram-feed"
                                                data-id="{{ encrypt($feed->id) }}"
                                                data-link="{{ $feed->link }}">Edit</button>
                                            <button class="btn btn-outline-danger btn-sm confirm-delete"
                                                data-href="{{ route('instagram-feed.destroy', encrypt($feed->id)) }}">Delete</button>
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
    <div class="modal fade" id="addCategoryVideoModal" tabindex="-1" aria-labelledby="addCategoryVideoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="addCategoryVideoModalLabel">Add New Category Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                    <form action="{{ route('instagram-feed.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="instagramFeed" class="form-label">Image</label>
                            <input type="file" class="form-control" name="instagram_feed" id="instagramFeed"
                                accept="image/*" required onchange="readURL(this);">
                        </div>
                        <div class="mb-3">
                            <label for="instagramFeed" class="form-label">Link</label>
                            <input type="text" class="form-control" name="link"
                                placeholder="Copy and paste an instagram link">
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
    <div class="modal fade" id="edit-instagram-feed" tabindex="-1" aria-labelledby="addCategoryVideoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="addCategoryVideoModalLabel">Edit Category Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                    <form enctype="multipart/form-data" id="form-edit" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="instagramFeed" class="form-label">Image</label>
                            <input type="file" class="form-control" name="instagram_feed" id="instagramFeed"
                                accept="image/*" required>
                        </div>
                        <div class="mb-3">
                            <label for="instagramFeed" class="form-label">Sort</label>
                            <input type="text" class="form-control" id="link" name="link">
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
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah').attr('src', e.target.result).width(150).height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        $(document).ready(function() {
            $(".btn-edit-category-video").click(function() {
                var id = $(this).data('id');
                var url = "{{ route('instagram-feed.update', ':id') }}".replace(':id', id);
                $('#form-edit').attr('action', url);
                $('#link').attr('value', $(this).data('link'));
            });
        });
    </script>
@endsection
