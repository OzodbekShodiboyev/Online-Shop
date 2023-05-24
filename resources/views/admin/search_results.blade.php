<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome CSS -->
    <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom styles -->
    <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

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

                <div class="container">
                    <h2>Search Results</h2>

                    <div class="card">
                        <div class="card-body">
                            @foreach ($results['products'] as $product)
                                <div class="row g-0">
                                    <div class="col-md-2">
                                        @foreach ($product->productImages as $image)
                                            <img src="{{ asset($image->image) }}" alt="{{ $product->name }}"
                                                height="135px" style="margin-top: 10px; padding-left:30px">
                                        @endforeach
                                    </div>
                                    <div class="col-md-10">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $product->name }}</h5>
                                            <p class="card-text">{{ $product->description }}</p>
                                            <a href="{{ url('admin/products/' . $product->id . '/edit') }}"
                                                class="btn btn-primary">View Product</a>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            @endforeach

                            @foreach ($results['users'] as $user)
                                <div class="card-user" style="margin-bottom: 0px;">
                                    <div class="row align-items-center">
                                        <div class="col-md-4">
                                            <div class="card-body">
                                                <h4>User name</h4>
                                                <h5 class="card-title">{{ $user->name }}</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card-body">
                                                <h4>User email</h4>
                                                <h6 class="card-text">{{ $user->email }}</h6>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-end" style="margin-top: 4%; margin-bottom: 0px;">
                                            <a href="{{ url('admin/users/' . $user->id . '/edit') }}"
                                                class="btn btn-sm btn-primary">View User</a>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            @endforeach


                            @foreach ($results['categories'] as $category)
                                <div class="row g-0">
                                    <div class="col-md-2">
                                        <img src="{{ $category->image }}" class="img-fluid"
                                            alt="{{ $category->name }}">
                                    </div>
                                    <div class="col-md-10">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $category->name }}</h5>
                                            <a href="{{ url('admin/category/' . $category->id . '/edit') }}"
                                                class="btn btn-primary">View Category</a>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            @endforeach

                            @foreach ($results['brands'] as $brand)
                                <div class="row g-0">
                                    <div class="col-md-12">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $brand->name }}</h5>
                                            <a href="{{ url('admin/brands/' . $brand->id . '/edit') }}"
                                                class="btn btn-primary">View Brand</a>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            @endforeach

                            @foreach ($results['orders'] as $order)
                                <div class="row g-0">
                                    <div class="col-md-12">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $order->order_number }}</h5>
                                            <a href="{{ url('admin/orders/' . $item->id) }}"
                                                class="btn btn-primary">View Order</a>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            @endforeach

                            @foreach ($results['colors'] as $color)
                                <div class="row g-0">
                                    <div class="col-md-12">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $color->name }}</h5>
                                            <div class="color-box" style="background-color: {{ $color->code }}">
                                            </div>
                                            <a href="{{ url('admin/colors/' . $color->id . '/edit') }}"
                                                class="btn btn-primary">View Color</a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-2yX+egazMXUyq2aIbfbQ1fZTCq3CtwR+FN83t4QeR9e4asYi7cM7kGw7H+4flpea" crossorigin="anonymous">
    </script>
    <script src="assets/lib/easing/easing.min.js"></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <!-- Contact Javascript File -->
    <script src="assets/mail/jqBootstrapValidation.min.js"></script>
    <script src="assets/mail/contact.js"></script>
    <script src="assets/js/shopcart2.js"></script>

    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>

    @livewireScripts
</body>

</html>
