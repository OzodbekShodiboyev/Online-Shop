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
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div>
                    <div>
                        <div class="container-fluid">
                            <div class="con card shadow m-5">
                                <div class="card-header text-white" style="background-color: rgb(22 163 74) ;">
                                <h3 style="">Mahsulotlarni qo'shish
                                    <a href="{{ url('admin/products') }}"
                                        class="btn btn-outline-success text-white float-end" style="font-size:12px">
                                        Qaytish
                                    </a>
                                </h3>
                            </div>
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-warning">
                                        @foreach ($errors->all() as $error)
                                            <div>{{ $error }}</div>
                                        @endforeach
                                    </div>

                                @endif

                                    <form action="{{ url('admin/products/store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active text-dark" id="home-tab"
                                                    data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                                                    type="button" role="tab" aria-controls="home-tab-pane"
                                                    aria-selected="true">
                                                    Asosiy
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link text-dark" id="seotag-tab"
                                                    data-bs-toggle="tab" data-bs-target="#seotag-tab-pane"
                                                    type="button" role="tab" aria-controls="seotag-tab-pane"
                                                    aria-selected="false">
                                                    SEO teglari
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link text-dark" id="details-tab"
                                                    data-bs-toggle="tab" data-bs-target="#details-tab-pane"
                                                    type="button" role="tab" aria-controls="details-tab-pane"
                                                    aria-selected="false">
                                                    Tafsilotlar
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link text-dark" id="image-tab"
                                                    data-bs-toggle="tab" data-bs-target="#image-tab-pane"
                                                    type="button" role="tab" aria-controls="image-tab-pane"
                                                    aria-selected="false">
                                                    Rasm
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link text-dark" id="color-tab"
                                                    data-bs-toggle="tab" data-bs-target="#color-tab-pane"
                                                    type="button" role="tab" aria-controls="color-tab-pane"
                                                    aria-selected="false">
                                                    Mahsulot rangi
                                                </button>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade border p-4 show active " id="home-tab-pane"
                                                role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                                <div class="row d-flex justify-content-center">
                                                    <div class="mb-2 mt-2 col-md-11">
                                                        <label>Kategory</label>
                                                        <select name="category_id" class="form-control">
                                                            @foreach ($categories as $category)
                                                                <option value="{{ $category->id }}">
                                                                    {{ $category->name }}
                                                                </option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                    <div class="mb-2 col-md-11">
                                                        <label for="">Mahsulot nomi</label>
                                                        <input type="text" name="name" class="form-control">
                                                    </div>
                                                    <div class="mb-2 col-md-11">
                                                        <label for="">Mahsulot Slug</label>
                                                        <input type="text" name="slug" class="form-control">
                                                    </div>
                                                    <div class="mb-2 mt-2 col-md-11">
                                                        <label>Brendni tanlang</label>
                                                        <select name="brand" class="form-control">
                                                            @foreach ($brands as $brand)
                                                                <option value="{{ $brand->name }}">
                                                                    {{ $brand->name }}
                                                                </option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                    <div class="mb-2 col-md-11">
                                                        <label for="">Kichik tavsif</label>
                                                        <input type="text" name="small_description"
                                                            class="form-control">
                                                    </div>
                                                    <div class="mb-2 col-md-11">
                                                        <label for="">Tavsif</label>
                                                        <input type="text" name="description"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade border p-4" id="seotag-tab-pane"
                                                role="tabpanel" aria-labelledby="seotag-tab" tabindex="0">
                                                <div class="row d-flex justify-content-center">
                                                    <div class="mb-3 col-md-11">
                                                        <label for="">Meta sarlavhasi</label>
                                                        <input type="text" name="meta_title" class="form-control">
                                                    </div>
                                                    <div class="mb-3 col-md-11">
                                                        <label for="">Meta tavsifi</label>
                                                        <input type="text" name="meta_description"
                                                            class="form-control">
                                                    </div>
                                                    <div class="mb-3 col-md-11">
                                                        <label for="">Meta kalit so'z</label>
                                                        <input type="text" name="meta_keyword"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade border p-4" id="details-tab-pane"
                                                role="tabpanel" aria-labelledby="details-tab" tabindex="0">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-3 col-md-11">
                                                            <label for="">Asl narxi</label>
                                                            <input type="text" name="original_price"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3 col-md-11">
                                                            <label for="">Sotish narxi</label>
                                                            <input type="text" name="selling_price"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label for="">Miqdori</label>
                                                            <input type="number" name="quantity"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 ml-3">
                                                        <div class="col-md-0 mb-2 mt-2 ">
                                                            <input type="checkbox" name="trending"
                                                                style="width: 18px; height:18px">
                                                            <label for="">Trendda</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 ml-3">
                                                        <div class="col-md-0 mb-2 mt-2 ">
                                                            <input type="checkbox" name="featured"
                                                                style="width: 18px; height:18px">
                                                            <label for="">Tavsiya etilgan</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 ml-2">
                                                        <div class="col-md-0 mb-2 mt-2 " style="font-size:16px">
                                                            <input type="checkbox" name="status"
                                                                style="width: 18px; height:18px">
                                                            <label for="" class="ml-2">Holat</label>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade border p-4" id="image-tab-pane" role="tabpanel"
                                                aria-labelledby="image-tab" tabindex="0">
                                                <div class="mb-3">
                                                    <label>Mahsulot rasmlarini yuklang</label>
                                                    <input name="image[]" type="file" multiple
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade border p-4" id="color-tab-pane" role="tabpanel"
                                                aria-labelledby="color-tab" tabindex="0">
                                                <div class="mb-3">
                                                    <label>Rangni tanlang</label>
                                                    <?php $soni = 1; ?>
                                                    <hr />
                                                    <div class="row">
                                                        <table class="table table-bordered table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th>Soni</th>
                                                                    <th>Rang</th>
                                                                    <th>Holati</th>
                                                                    <th>Miqdori</th>
                                                                    {{-- <th>Action</th> --}}
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                @forelse ($colors as $color)
                                                                    <tr>
                                                                        <td><?php echo $soni++; ?></td>
                                                                        <td>{{ $color->name }}</td>
                                                                        <td>
                                                                            <input name="colors[{{ $color->id }}]"
                                                                                type="checkbox"
                                                                                value="{{ $color->id }}">
                                                                        </td>
                                                                        <td>
                                                                            <input type="number"
                                                                                name="colorquantity[{{ $color->id }}]"
                                                                                style="width: 70px; border:1px solid ">
                                                                        </td>
                                                                    @empty
                                                                        <div class="col-md-12">
                                                                            <h3>Ranglar topilmadi</h3>
                                                                        </div>
                                                                    </tr>
                                                                @endforelse

                                                            </tbody>
                                                        </table>


                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <button type="submit" class="btn mt-3 float-end text-white "
                                                style="background-color: rgb(22 163 74) ;">Saqlash</button>
                                        </div>
                                    </form>
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
