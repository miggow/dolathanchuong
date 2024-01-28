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

                        <!-- Category Videos Table -->
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">Image icon</th>
                                    <th scope="col" class="text-center">Video</th>
                                    <th scope="col" class="text-center">Title</th>
                                    <th scope="col" class="text-center">Order</th>
                                    <th scope="col" class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Replace with dynamic rows -->
                                @foreach ($categoryVideos as $video)
                                    <tr>
                                        <td class="text-center" style="vertical-align: middle;">
                                            <img height="60px" width="60px" style="object-fit: cover"
                                                src="{{ asset($video->image_icon) }}" alt="Product Image" />
                                        </td>
                                        <td class="text-center" style="vertical-align: middle;">
                                            <video width="300" height="200" controls>
                                                <source src="{{ asset($video->video) }}" type="video/mp4">
                                            </video>
                                        </td>
                                        <td class="text-center" style="vertical-align: middle;">{{ $video->title }}</td>
                                        <td class="text-center" style="vertical-align: middle;">{{ $video->order }}</td>
                                        <td class="text-center" style="vertical-align: middle;" class="table-actions">
                                            <button type="button"
                                                class="btn-edit-category-video btn btn-sm btn-outline-warning me-2"
                                                data-bs-toggle="modal" data-bs-target="#edit-category-video"
                                                data-id="{{ encrypt($video->id) }}" data-title="{{ $video->title }}"
                                                data-video="{{ asset($video->video) }}"
                                                data-image_icon="{{ $video->image_icon }}"
                                                data-order="{{ $video->order }}">Edit</button>
                                            <button class="btn btn-outline-danger btn-sm confirm-delete"
                                                data-href="{{ route('category-video.destroy', encrypt($video->id)) }}">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                                <!-- Repeat for other category videos -->
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
                    <form action="{{ route('category-video.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="categoryVideo" class="form-label">Image icon</label>
                            <input type="file" class="form-control" name="image_icon" id="categoryVideoImage"
                                accept="image/*" required>
                        </div>
                        <div class="mb-3">
                            <label for="categoryVideo" class="form-label">Video</label>
                            <input type="file" class="form-control" name="video" id="categoryVideoVideo"
                                accept="video/*" required>
                        </div>
                        <div class="mb-3">
                            <label for="categoryVideo" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Type the video name">
                        </div>
                        <div class="mb-3">
                            <label for="categoryVideo" class="form-label">Order</label>
                            <input type="number" class="form-control" name="order" min="0" value="1">
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
    <div class="modal fade" id="edit-category-video" tabindex="-1" aria-labelledby="addCategoryVideoModalLabel"
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
                            <label for="categoryVideo" class="form-label">Image icon</label>
                            <input type="file" class="form-control" name="image_icon" id="categoryVideoImage"
                                accept="image/*" required>
                        </div>
                        <div class="mb-3">
                            <label for="categoryVideo" class="form-label">Video</label>
                            <input type="file" class="form-control" name="video" id="categoryVideoVideo"
                                accept="video/*" required>
                        </div>
                        <div class="mb-3">
                            <label for="categoryVideo" class="form-label">Name</label>
                            <input type="text" class="form-control" name="title" id="title"
                                placeholder="Type the video name">
                        </div>
                        <div class="mb-3">
                            <label for="categoryVideo" class="form-label">Order</label>
                            <input type="number" class="form-control" name="order" id="order" min="0"
                                value="1">
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
        $("#categoryVideoImage").on('change', function(e) {
            for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {
                var file = e.originalEvent.srcElement.files[i];
                if ($("#add-img").length)
                    $("#add-img").remove()
                var img = document.createElement("img");
                var reader = new FileReader();
                reader.onloadend = function() {
                    img.id = "add-img"
                    img.height = 300
                    img.src = reader.result;
                }
                reader.readAsDataURL(file);
                $("#categoryVideoImage").after(img);
            }
        });
        $("#categoryVideoVideo").on('change', function(e) {
            for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {
                var file = e.originalEvent.srcElement.files[i];
                if ($("#add-video").length)
                    $("#add-video").remove()
                var video = document.createElement("video");
                var source = document.createElement("source")
                video.id = "add-video"
                video.height = 300
                video.controls = "controls"
                source.src = URL.createObjectURL(file)
                source.type = "video/mp4"
                video.append(source);
                video.load();
                $("#categoryVideoVideo").after(video);
            }
        });
        $(document).ready(function() {
            $(".btn-edit-category-video").click(function() {
                var id = $(this).data('id');
                var url = "{{ route('category-video.update', ':id') }}".replace(':id', id);
                $('#form-edit').attr('action', url);
                $('#title').attr('value', $(this).data('title'));
                $('#order').attr('value', $(this).data('order'));
            });
        });
    </script>
@endsection
