<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TopEsExpress') }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome CSS -->
    <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom styles -->
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
                <div>
                    <div>
                        <div class="container-fluid">
                            <div class="con m-1" style="height: 500px">

                                @if (session('message'))
                                    <div class="alert alert success">{{ session('message') }}</div>
                                @endif

                                <div class="card shadow mb-4">
                                    <div class="card-header py-3" style="background-color: rgb(22 163 74) ;">
                                        <h5 class="m-0 font-weight-bold text-white">Search Results</h5>
                                    </div>
                                    
                                    <div class="card-body">
                                        @if (count($results['products']) === 0 && count($results['users']) === 0 && count($results['categories']) === 0 && count($results['brands']) === 0 && count($results['colors']) === 0)
                                            <div class="alert alert-info">Not Found</div>
                                        @endif
                                        @foreach ($results['products'] as $product)
                                            <a href="{{ url('admin/products/' . $product->id . '/edit') }}"
                                                class="text-decoration-none">
                                                <div class="row g-0 d-flex justify-content-between border m-2 p-2">
                                                    <div class="col-md-1 ml-2 align-self-center">
                                                        @foreach ($product->productImages as $key => $image)
                                                            @if ($key < 1)
                                                                <img src="{{ asset($image->image) }}"
                                                                    alt="{{ $product->name }}" class="img-fluid">
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    <div class="col-md-3 d-flex align-items-center text-center">
                                                        <h6 class="card-title mb-0"><b>{{ $product->name }}</b></h6>
                                                    </div>
                                                    <div
                                                        class="col-md-1 d-flex align-items-center justify-content-center">
                                                        <button class="btn btn-outline-success btn-sm">Ko'rish</button>
                                                    </div>
                                                </div>
                                            </a>
                                        
                                        @endforeach

                                        @foreach ($results['users'] as $user)

                                        <a href="{{ url('admin/users/' . $user->id . '/edit') }}"
                                            class="text-decoration-none">
                                            <div class="row g-0 d-flex justify-content-between border m-2 p-2">
                                                <div class="col-md-1 ml-2 align-self-center">
                                                    <h6><b>Foydalanuvchi:</b></h6>
                                                                <p>{{ $user->name }}</p>
                                                </div>
                                                <div class="col-md-3 d-flex align-items-center text-center">
                                                    <h6><b>Email:</b></h6>
                                                                <p>{{ $user->email }}</p>

                                                </div>
                                                <div
                                                    class="col-md-1 d-flex align-items-center justify-content-center">
                                                    <button class="btn btn-outline-success btn-sm">Ko'rish</button>
                                                </div>
                                            </div>
                                        </a>
                                        @endforeach



                                        @foreach ($results['categories'] as $category)
                                            <a href="{{ url('admin/category/' . $category->id . '/edit') }}"
                                                class="text-decoration-none">
                                                <div class="row g-0 d-flex justify-content-between border m-2 p-2">
                                                    <div class="col-md-1 ml-2 align-self-center">
                                                        <img src="/Uploads/Category/{{ $category->image }}"
                                                            class="img-fluid" alt="{{ $category->name }}">
                                                    </div>
                                                    <div class="col-md-3 d-flex align-items-center text-center">
                                                        <h6 class="card-title mb-0"><b>Category nomi:</b>
                                                            {{ $category->name }}</h6>
                                                    </div>
                                                    <div
                                                        class="col-md-1 d-flex align-items-center justify-content-center">
                                                        <button class="btn btn-outline-success btn-sm">Ko'rish</button>
                                                    </div>
                                                </div>
                                            </a>
                                        @endforeach


                                        @foreach ($results['brands'] as $brand)
                                            <a href="{{ url('admin/brands/' . $brand->id . '/edit') }}"
                                                class="text-decoration-none">
                                                <div class="row g-0 d-flex justify-content-between border m-2 p-2">
                                                    <div class="col-md-1 ml-2 align-self-center">
                                                        <h6>{{ $brand->name }}</h6>
                                                    </div>
                                                    <div class="col-md-3 d-flex align-items-center text-center">


                                                    </div>
                                                    <div
                                                        class="col-md-1 d-flex align-items-center justify-content-center">
                                                        <button class="btn btn-outline-success btn-sm">Ko'rish</button>
                                                    </div>
                                                </div>
                                            </a>
                                        @endforeach

                                        @foreach ($results['colors'] as $color)
                                            <a href="{{ url('admin/colors/' . $color->id . '/edit') }}"
                                                class="text-decoration-none">
                                                <div class="row g-0 d-flex justify-content-between border m-2 p-2">
                                                    <div class="col-md-1 ml-2 align-self-center">
                                                        <h6>{{ $color->name }}</h6>
                                                    </div>
                                                    <div class="col-md-3 d-flex align-items-center text-center">


                                                    </div>
                                                    <div
                                                        class="col-md-1 d-flex align-items-center justify-content-center">
                                                        <button class="btn btn-outline-success btn-sm">Ko'rish</button>
                                                    </div>
                                                </div>
                                            </a>
                                        @endforeach
                                        
                                        
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('admin/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
