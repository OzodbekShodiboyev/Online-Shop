<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BadommShop') }}</title>

    <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    @livewireStyles
</head>

<body id="page-top">
    <div id="wrapper">
        @include('admin.layouts.sidebar')
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('admin.layouts.navbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="col-md-12 " style="height: 500px">
                    <div class="card">
                        <div class="card-header text-white" style="background-color: rgb(22 163 74) ;">
                            <h3>Kategoriyani tahrirlash
                                <a href="{{ url('admin/category') }}"
                                    class="btn btn-outline-success text-white float-end" style="font-size:12px">
                                    Qaytish
                                </a>
                            </h3>


                        </div>
                        <div class="card-body">
                            <form action="{{ url('admin/category/' . $category->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class=" col-md-6 mb-3 d-block" style="display: block">
                                        <label for="Name">Nomi</label>
                                        <input type="text" name="name" value="{{ $category->name }}"
                                            id="name" class="form-control">
                                        @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror

                                        <div class=" mt-5">
                                            <label for="slug">Slug</label>
                                            <input type="text" name="slug" value="{{ $category->slug }}"
                                                id="slug" class="form-control">
                                            @error('slug')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="card" style="width: 10rem;" >
                                        <img src="/Uploads/Category/{{ $category->image }}" class="card-img-top" alt="image" width="150px" height="150px">
                                        <div class="card-body">
                                            <input type="file" name="image" id="image"
                                                class="form-control d-none">
                                          <h5 class="card-title text-center"><label for="image" class="text-center mt-1">Rasmni o'zgartirish</label></h5>
                                        </div>
                                        @error('image')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                      </div>

                                    <div class=" col-md-12 mb-3">
                                        <label for="description">Tavsif</label>
                                        <textarea type="text" name="description" rows="3" id="description" class="form-control">{{ $category->description }}</textarea>
                                        @error('description')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mb-1 mt-1">
                                        <h4>SEO teglari</h4>
                                    </div>
                                    <div class=" col-md-6 mb-3">
                                        <label for="meta_title">Meta sarlavhasi</label>
                                        <input type="text" value="{{ $category->meta_title }}" name="meta_title"
                                            id="meta_title" class="form-control">
                                        @error('meta_title')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class=" col-md-6 mb-3">
                                        <label for="meta_keyword">Meta kalit so'z</label>
                                        <input type="text" name="meta_keyword" id="meta_keyword"
                                            class="form-control" value={{ $category->name }}>
                                        @error('meta_keyword')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class=" col-md-12 mb-3">
                                        <label for="meta_description">Meta tavsifi</label>
                                        <textarea type="text" name="meta_description" id="meta_description" rows="3" class="form-control">{{ $category->name }}</textarea>
                                        @error('meta_description')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-2 mt-2" style="font-size:18px">
                                        <input type="checkbox" {{ $category->status == '1' ? 'checked' : '' }}
                                            name="status" id="status" style="width: 18px; height:18px">
                                        <label for="status">Status</label>
                                        @error('status')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <button type="submit" class="btn text-white float-end"
                                            style="background-color: rgb(22 163 74) ;">Yangilash</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Add Category</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form>
                            <div class="form-group">
                                <label for="product-name">Category Name</label>
                                <input type="text" class="form-control" id="product-name" name="product-name"
                                    placeholder="Enter product name" required>
                            </div>
                            <div class="form-group">
                                <label for="product-image">Category Image</label>
                                <input type="file" class="form-control-file" id="product-image"
                                    name="product-image" accept="image/*" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Product</button>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>



    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('admin/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        // Add event listener to the image element
        document.querySelector('.image-preview img').addEventListener('click', function() {
            // Trigger a click event on the file input element
            document.querySelector('.image-preview input[type=file]').click();
        });
        document.querySelector('.image-preview input[type=file]').addEventListener('change', function() {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.querySelector('.image-preview img').setAttribute('src', e.target.result);
            };
            reader.readAsDataURL(this.files[0]);
        });
    </script>
</body>

</html>
