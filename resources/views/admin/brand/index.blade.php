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
                <div>
                    <div>
                        <div class="container-fluid">
                            <div class="con m-1">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3" style="background-color: rgb(22 163 74) ;">
                                        <h5 class="m-0 font-weight-bold text-white">Brendlar</h5>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <a href="{{ url('admin/brands/create') }}" style="background-color: rgb(22 163 74) ;">
                                                <button type="button" class="btn mb-2 btn text-white" style="background-color: rgb(22 163 74) ;">
                                                    🏘 Brend qo'shish
                                                </button>
                                            </a>
                                            @if ($data->isEmpty())
                                                <p class="text-center h3">No brand</p>
                                            @else
                                                <div class="table-responsive">
                                                <table class="table table-bordered table-striped" id="dataTable" width="100%"
                                                    cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th>Id</th>
                                                            <th>Nomi</th>
                                                            <th>Slug</th>
                                                            <th>Holat</th>
                                                            <th>Kategoriya</th>
                                                            <th>Tahrirlash</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="border: none">
                                                        @php
                                                            $counter = 1; // Initialize the counter
                                                        @endphp

                                                        @foreach ($data as $dat)
                                                            <tr style="border: none">
                                                                <td >{{ $counter }}</td>
                                                                <td>{{ $dat->name }}</td>
                                                                <td>{{ $dat->slug }}</td>
                                                                <td>{{ $dat->status }}</td>
                                                                <td>
                                                                    @if ($dat->category)
                                                                    {{ $dat->category->name }}
                                                                @else
                                                                    No Category
                                                                @endif
                                                                </td>
                                                                <td>
                                                                    <a href="{{ url('admin/brands/' . $dat->id . '/edit') }}"
                                                                        class="btn btn-warning"><i class="fa fa-solid fa-pen"></i></a>
                                                                    <a href="{{ url('admin/brands/' . $dat->id . '/delete') }}"
                                                                        onclick="return confirm('Haqiqatan ham ushbu turkumni oʻchirib tashlamoqchimisiz?')"
                                                                        class="btn btn-danger"><i class="fa fa-sharp fa-regular fa-trash"></i></a>
                                                                </td>
                                                            </tr>
                                                            @php
                                                                $counter++; // Increment the counter
                                                            @endphp
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
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

    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('admin/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
