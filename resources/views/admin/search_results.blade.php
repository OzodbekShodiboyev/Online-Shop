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

                <div class="container">
                    <h2>Search Results</h2>

                    <h3>Products</h3>
                    @foreach ($results['products'] as $product)
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ $product->description }}</p>
                                <a href="{{ url('admin/products', $product->id) }}" class="btn btn-primary">View
                                    Product</a>
                            </div>
                        </div>
                    @endforeach

                    <h3>Users</h3>
                    @foreach ($results['users'] as $user)
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $user->name }}</h5>
                                <p class="card-text">{{ $user->email }}</p>
                                <a href="{{ url('admin/users', $user->id) }}" class="btn btn-primary">View User</a>
                            </div>
                        </div>
                    @endforeach

                    <h3>Categories</h3>
                    @foreach ($results['categories'] as $category)
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $category->name }}</h5>
                                <a href="{{ url('admin/categories', $category->id) }}" class="btn btn-primary">View
                                    Category</a>
                            </div>
                        </div>
                    @endforeach

                    <h3>Brands</h3>
                    @foreach ($results['brands'] as $brand)
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $brand->name }}</h5>
                                <a href="{{ url('admin/brands', $brand->id) }}" class="btn btn-primary">View Brand</a>
                            </div>
                        </div>
                    @endforeach

                    <h3>Orders</h3>
                    @foreach ($results['orders'] as $order)
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $order->order_number }}</h5>
                                <a href="{{ url('admin/orders', $order->id) }}" class="btn btn-primary">View Order</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>

</html>
