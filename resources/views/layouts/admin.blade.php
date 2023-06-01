<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BadommShop') }}</title>

    <link href="{{asset('admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="{{asset('admin/css/sb-admin-2.min.css')}}" rel="stylesheet">

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
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h3 class="h3 mb-0 text-gray-800">Dashboard</h3>
                    </div>

                    <div class="row">
                        <div class="col-md-12 grid-margin">
                
                            @if (session('message'))
                                <h6 class="alert alert-success">{{ session('message') }},</h6>
                            @endif
                            <div class="me-md-3 me-xl-5">
                                <p class="mb-md-0">Shop Analytics.</p>
                                <hr>
                            </div>
                
                            <div class="row">
                                @php
                                    $totalSales = 0;
                                    $totalAllocatedFunds = 0;
                                    $totalRevenue = 0;
                                    foreach ($orderItems as $orderItem) {
                                        $totalSales += $orderItem->quantity * $orderItem->price;
                                        $totalAllocatedFunds += $orderItem->quantity * $orderItem->price * (($orderItem->allocation_percentage * $orderItem->quantity) / 100);
                                    }
                                @endphp
                
                                <div class="col-md-3">
                                    <div class="card card-body bg-primary text-white mb-3">
                                        <label>Umumiy savdo</label>
                                        <h3>{{ number_format($totalSales) }} UZS</h3>
                                    </div>
                                </div>
                
                                <div class="col-md-3">
                                    <div class="card card-body bg-warning text-white mb-3">
                                        <label>Umumiy daromad</label>
                                        <h3>{{ number_format($totalSales - $totalAllocatedFunds) }} UZS</h3>
                                    </div>
                                </div>
                            </div>
                
                            <hr>
                
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card card-body bg-primary text-white mb-3">
                                        <label>Jami buyurtmalar</label>
                                        <h3>{{ $totalOrder }} ta</h3>
                                        <a href="{{ url('admin/orders') }}" class="text-white">Ko'rish</a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card card-body bg-success text-white mb-3">
                                        <label>Bugungi buyurtmalar</label>
                                        <h3>{{ $todayOrder }} ta</h3>
                                        <a href="{{ url('admin/orders') }}" class="text-white">Ko'rish</a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card card-body bg-warning text-white mb-3">
                                        <label>Bu oydagi buyurtmalar</label>
                                        <h3>{{ $thisMonthOrder }} ta</h3>
                                        <a href="{{ url('admin/orders') }}" class="text-white">Ko'rish</a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card card-body bg-danger text-white mb-3">
                                        <label>Bu yilgi buyurtmalar</label>
                                        <h3>{{ $thisYearOrder }}</h3>
                                        <a href="{{ url('admin/orders') }}" class="text-white">Ko'rish</a>
                                    </div>
                                </div>
                            </div>
                
                            <hr>
                
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card card-body bg-primary text-white mb-3">
                                        <label>Jami mahsulotlar</label>
                                        <h3>{{ $totalProducts }}</h3>
                                        <a href="{{ url('admin/products') }}" class="text-white">Ko'rish</a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card card-body bg-success text-white mb-3">
                                        <label>Jami kategoriyalar</label>
                                        <h3>{{ $totalCategories }}</h3>
                                        <a href="{{ url('admin/category') }}" class="text-white">Ko'rish</a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card card-body bg-warning text-white mb-3">
                                        <label>Jami brendlar</label>
                                        <h3>{{ $totalBrands }}</h3>
                                        <a href="{{ url('admin/brands') }}" class="text-white">Ko'rish</a>
                                    </div>
                                </div>
                            </div>
                
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card card-body bg-primary text-white mb-3">
                                        <label>Barcha foydalanuvchilar</label>
                                        <h3>{{ $totalAllUsers }}</h3>
                                        <a href="{{ url('admin/users') }}" class="text-white">Ko'rish</a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card card-body bg-success text-white mb-3">
                                        <label>Jami foydalanuvchilar</label>
                                        <h3>{{ $totalUser }}</h3>
                                        <a href="{{ url('admin/users') }}" class="text-white">Ko'rish</a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card card-body bg-warning text-white mb-3">
                                        <label>Jami adminstratorlar</label>
                                        <h3>{{ $totalAdmin }}</h3>
                                        <a href="{{ url('admin/users') }}" class="text-white">Ko'rish</a>
                                    </div>
                                </div>
                            </div>
                
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

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
    <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('admin/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{asset('admin/js/demo/chart-pie-demo.js')}}"></script>
</body>
</html>