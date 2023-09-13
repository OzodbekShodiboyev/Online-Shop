<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TopEsExpress') }}</title>

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
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('admin.layouts.navbar')
                <div>
                    <div>
                        <div class="container-fluid">
                            <div class="con m-1">
                                <div class="col-md-12">
                                    @if (session('message'))
                                        <div class="alert alert-success">{{ session('message') }}</div>
                                    @endif
                                </div>
                                <div class="card" style="">
                                    <div class="card-header py-3" style="background-color: rgb(22 163 74);">
                                        <h5 class="m-0 font-weight-bold text-white float-left">Slayderni tahrirlash</h5>
                                        <a href="{{ url('admin/sldr/') }}"
                                            class="btn btn-outline-success text-white float-end"
                                            style="font-size:12px">
                                            Qaytish
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ url('admin/sldr/' . $slider->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="id" value="{{ $slider->id }}">
                                            <div class="mb-3">
                                                <label for="">Sarlavha</label>
                                                <input type="text" value="{{ $slider->title }}" name="title"
                                                    class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="">Tavsif</label>
                                                <input type="text" value="{{ $slider->description }}"
                                                    name="description" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="image">Rasm</label>
                                                <input type="file" name="image" class="form-control" />
                                                <img src="{{ asset("$slider->image") }}" class="m-3 border shadow"
                                                    style="width: 200px; height: 130px;">
                                            </div>
                                            <div class="mb-3">
                                               
                                                <input style="width: 15px; height: 15px" type="checkbox" name="status"
                                                    {{ $slider->status ? 'checked' : '' }}>
                                                <label style="font-size: 18px" for="">Holat</label>
                                            </div>
                                            <div class="mb-3">
                                                <button type="submit" class="btn float-end" style="background-color: rgb(22 163 74); color:#fff">Saqlash</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <script>
                function openFileInput() {
                    document.getElementById('sliderImage').style.display = 'none';
                    document.getElementById('fileInputContainer').style.display = 'block';
                }
            </script>
            <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
            <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

            <!-- Core plugin JavaScript-->
            <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

            <!-- Custom scripts for all pages-->
            <script src="{{ asset('admin/js/sb-admin-2.min.js') }}"></script>
            <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
