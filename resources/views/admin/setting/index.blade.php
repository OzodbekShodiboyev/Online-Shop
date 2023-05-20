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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
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
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12.grid-margin">
                            @if (session('message'))
                                <div class="alert alert-success mb-3"> {{ session('message') }} </div>
                            @endif

                            <form method="POST" action="{{ url('/admin/settings') }}">
                                @csrf

                                {{-- Website Details --}}
                                <div class="card mb-3">
                                    <div class="card-header" style="background-color: rgb(22 163 74) ;">
                                        <h3 class="text-white mb-0">Veb-sayt tafsilotlari</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label>Veb-sayt nomi</label>
                                                <input type="text" name="website_name"
                                                    value="{{ $setting->website_name ?? '' }}" class="form-control" />
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label>Veb-sayt URL</label>
                                                <input type="text" name="website_url"
                                                    value="{{ $setting->website_url ?? '' }}" class="form-control" />
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label>Sahifa sarlavhasi</label>
                                                <input type="text" name="page_title"
                                                    value="{{ $setting->page_title ?? '' }}" class="form-control" />
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label>Meta kalit so'zlar</label>
                                                <textarea name="meta_keyword" class="form-control" rows="3">{{ $setting->meta_keyword ?? '' }}</textarea>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label>Meta tavsifi</label>
                                                <textarea name="meta_description" class="form-control" rows="3">{{ $setting->meta_description ?? '' }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Website Information --}}
                                <div class="card mb-3">
                                    <div class="card-header" style="background-color: rgb(22 163 74) ;">
                                        <h3 class="text-white mb-0">Veb-sayt ma'lumotlari</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label>Manzil</label>
                                                <textarea type="text" name="address" class="form-control" rows="3">{{ $setting->address ?? '' }}</textarea>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label>Telefon raqami 1</label>
                                                <input type="text" name="phone1"
                                                    value="{{ $setting->phone1 ?? '' }}" class="form-control" />
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label>Telefon raqami 2</label>
                                                <input type="text" name="phone2"
                                                    value="{{ $setting->phone2 ?? '' }}" class="form-control" />
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label>Elektron pochta 1 *</label>
                                                <input type="text" name="email1"
                                                    value="{{ $setting->email1 ?? '' }}" class="form-control" />
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label>Elektron pochta 2</label>
                                                <input type="text" name="email2"
                                                    value="{{ $setting->email2 ?? '' }}" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Social Media Links --}}
                                <div class="card mb-3">
                                    <div class="card-header" style="background-color: rgb(22 163 74) ;">
                                        <h3 class="text-white mb-0">Veb-sayt - Ijtimoiy tarmoqlar</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label>Facebook (ixtiyoriy)</label>
                                                <input type="text" name="facebook"
                                                    value="{{ $setting->facebook ?? '' }}" class="form-control" />
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label>Telegram (ixtiyoriy)</label>
                                                <input type="text" name="telegram"
                                                    value="{{ $setting->telegram ?? '' }}" class="form-control" />
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label>Instagram (ixtiyoriy)</label>
                                                <input type="text" name="instagram"
                                                    value="{{ $setting->instagram ?? '' }}" class="form-control" />
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label>Youtube (ixtiyoriy)</label>
                                                <input type="text" name="youtube"
                                                    value="{{ $setting->youtube ?? '' }}" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-end">
                                    <button type="submit" class="btn text-white mb-5 float-end"
                                        style="background-color: rgb(22 163 74) ;">Saqlash</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <!-- End of Main Content -->
            </div>
            <!-- End of Content Wrapper -->

        </div>
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
        <script src="{{ asset('admin/js/demo/chart-pie-demo.js') }}"></script>
</body>

</html>
