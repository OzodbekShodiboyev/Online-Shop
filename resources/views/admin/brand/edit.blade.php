<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

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
                <div class="col-md-12 ">
                    <div class="card m-5">
                        <div class="card-header text-white" style="background-color: rgb(22 163 74)">
                            <h3>Brendni tahrirlash
                                <a href="{{ url('admin/brands') }}"
                                class="btn btn-outline-success text-white float-end"
                                        style="font-size:12px">
                                        Qaytish
                                    </a>
                            </h3>


                        </div>
                        <div class="card-body ">
                            <form action="{{ url('admin/brands/'.$brand->id.'/update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$brand->id}}">
                                <div class="row d-flex justify-content-center">
                                    <div class=" col-md-10 mb-3">
                                        <label for="Name">Nomi</label>
                                        <input type="text" name="name" value="{{ $brand->name }}" id="name" class="form-control">
                                        @error('name') <small class="text-danger">{{ $message }}</small>@enderror
                                    </div>
                                    <div class="col-md-10 mb-3">
                                        <label>Kategory tanlang</label>
                                        <select name="category_id" class="form-control">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}
                                                </option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class=" col-md-10 mb-3">
                                        <label for="slug">Slug</label>
                                        <input type="text" name="slug" value="{{ $brand->slug }}" id="slug" class="form-control">
                                         @error('slug') <small class="text-danger">{{ $message }}</small>@enderror

                                         <div class=" col-md-0 mt-3 mb-3">
                                            <label for="status">Holat</label><br />
                                            <input type="checkbox"  {{ $brand->status == '1' ? 'checked' : '' }} name="status" id="status">
                                            @error('status') <small class="text-danger">{{ $message }}</small>@enderror
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12 mb-3">
                                        <button type="submit" class="btn text-white float-end" style="background-color: rgb(22 163 74)">Update</button>
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




    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('admin/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
