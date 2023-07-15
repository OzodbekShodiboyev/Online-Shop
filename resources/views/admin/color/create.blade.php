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
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                @include('admin.layouts.navbar')


                <div class="col-md-12">
                    <div class="">
                        @if (session('message'))
                            <div class="alert alert-success">{{ session('message') }}</div>
                        @endif
                    </div>
                    <div class="card">
                        <div class="card-header text-white" style="background-color: rgb(22 163 74) ;">
                            <h3 style="">Rang qo'shish 
                                <a href="{{ url('admin/colors/') }}" class="btn btn-outline-success text-white float-end"
                                style="font-size:12px">Qaytish</a>
                            </h3>
                        </div>
                        <div class="card-body">
                            <form  action="{{ url('admin/colors/') }}" method="POST">
                                @csrf
                                
                                <div class="row d-flex justify-content-center ">
                                <div class="col-md-10 mb-3">
                                    <label for="">Rang nomi</label>
                                    <input type="text" name="name" class="form-control ">
                                </div>
                                <div class="col-md-10 mb-3">
                                    <label for="">Rang kodi</label>
                                    <input type="text" name="code" class="form-control">
                                </div>
                                <div class="col-md-10 mb-3 mt-2 " style="font-size:18px">
                                    <input type="checkbox" name="status" style="width: 18px; height:18px">
                                    <label for="" class="ml-2">Holat</label>

                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn float-end text-white" style="background-color: rgb(22 163 74) ;">Saqlash</button>
                                </div>
                            </div>
                            </form>
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
