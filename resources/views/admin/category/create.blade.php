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
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn" style="background-color: #1cc88a" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn" style="background-color: #1cc88a" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIIAAAB5CAMAAADCiAkVAAAAY1BMVEX///9APz9EQ0MxMDA3NjY7Ojo0MzP6+vq6urosKyskIyOdnZ0oJychICDv7+9oaGjLy8vi4uLV1dWUlJRhYWGJiYlTUlJbWlqurq5OTU1vbm7AwMB4d3cdGxukpKSCgoIXFRW8QGGdAAADl0lEQVRoge2ai5aiMAyGKW2hRahcBeTivP9TLujsDjpIG23onD3zv4CfaRKSv/W8X72s0FNZKpouzTMVugBQh+7SxlHs91UxitwBhKCBZGQW5yyQ0RCURZPtSTB+kEdxRiNZpXsR5Mk3gpsCehK7EIQX9gRhCoasc/Tfb/r6KcAVIm5wCRopOd9EICS6IAKoY6z5+atoj4eQt7oI3CQLNITj8zy8V4JVnWlkSECIj9Que7NjmEUrFILQKBc/xVDadXg0jwIJcMJQAhAIUQgE4QAhoBhN8unXaVXcR0AQEoJAEoSEHCkIAeMkigCEwBBqooIh8NI+AjAKhNlv0gcgwmAfoYGlI/mwj9DBihIDAdaaUBBgDZqQGGFm8GEILQICYGSZxI/2CbwRVJUY3dHLIWMTztfaA1VlhDK6bSyTK0IwHdJTCyHw/bNthrAGxWDSYHuhUcC2gLBTKVBXmMRb20O0AmXCJGZ9uQVtMrMS+37LATgvRPaLUpkv1rMwZkevAlUlw/B7UlCDDg4ICLCZRaI4LSdITSQYBF4DOAmGY7tlgChQJMfrYtwaeI1DMDVpaRYIHycZZ2XCpE3zMsM0w01mWJSW8KXUIB1oh4oQmiAgX1XpkwFliVlKv2BL9NshbZv2MVzPOwnNUkXxbiP+KtSEge9wYbnt+KCMKo9KN08CPxm1CNEeV7bbCBje809E2LbkdzmIbUuejjsgaJwOecbujtlZ16CZj5sODdPvVBznivBThZELbN9aWBAYrrasxppaKuNdhvkYtRmmJ4D9yoNSWM4I1dQxzGbhkvSdvfPIKma4xNxTRH5hJRShKAeo5/hPwVCLd0ORV5S+EIBFKCit3liusqZmwIu51VCwWrzUKVTX81cyYE08bitwVnQXDiwBjYLkCFj0lOgHW/9/IR5TswIJ0/ObCbihgJbaXqGak3y5Ak3E5emwGQph6qO8A0Fp/xQiOyboAFexZ9uGsFsCm4pWL/BG4L34e1ozxDqY0/6uVp78ZBYaMUjy27Tfo5bimvjDZyPfNRGuegwD8L2ODfGHGdfwTalVybsxIndA8OBKAR+w2RFvHafCrOWnonZxEEQuZxgX5zAlw8KyV6A3Ita0NAgzN1FY3qE56I2z+PkLweSiAwNhcW3QuUcQ7hGgbxkxENw0xyUC7PmaPYTzL8J9a4K+7v2PEC7uESrnCEHxi/AjEJZTkyuE8WchcN+FgpvP8QdK9z1yRhl2GgAAAABJRU5ErkJggg==">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                <a class="dropdown-item" href="route('logout')" onclick="event.preventDefault();
                                this.closest('form').submit();">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="col-md-12" style="">
                    <div class="card">
                        <div style="background-color: rgb(22 163 74);" class="card-header text-white    ">
                            <h3>Add Category
                                <a href="{{ url('admin/category/') }}"
                                    class="btn btn-success btn-md text-white float-end" style="background-color: rgb(22 163 74) ;">BACK</a>
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('admin/category') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="">Name</label>
                                        <input type="text" name="name" class="form-control" id="">
                                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Slug</label>
                                        <input type="text" name="slug" class="form-control" id="">
                                        @error('slug') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="">Description</label>
                                        <textarea  name="description" class="form-control" rows="3"></textarea>
                                        @error('description') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Image</label>
                                        <div>
                                            <i class="" id="uploadIcon" style="cursor:pointer;">
                                            
                                                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                                    <svg height="50px" width="50px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                                                        viewBox="0 0 512.001 512.001" xml:space="preserve">
                                                    <path style="fill:#EC5565;" d="M512.001,256.006c0,141.395-114.606,255.998-255.996,255.994
                                                        C114.606,512.004,0.001,397.402,0.001,256.006C-0.007,114.61,114.606,0,256.005,0C397.395,0,512.001,114.614,512.001,256.006z"/>
                                                    <path style="fill:#D94453;" d="M498.97,336.634L310.696,148.357c-0.001-0.001-0.002-0.001-0.002-0.001l-1.666-1.667l-1.668-1.668
                                                        l-46.714-46.713l-1.666-1.667l-1.668-1.668l-0.002-0.001l-1.666-1.667c-0.001-0.001-0.001-0.001-0.001-0.001l-1.667-1.668
                                                        c-0.636-0.637-1.394-1.146-2.237-1.498c-0.837-0.349-1.743-0.538-2.671-0.538H96.534c-3.833,0-6.933,3.105-6.933,6.933v291.2
                                                        c0,2.347,1.241,4.32,3.025,5.574c0.463,0.659,112.783,112.978,113.441,113.441c0.117,0.167,0.295,0.272,0.426,0.426
                                                        c16.023,3.14,32.569,4.828,49.513,4.827C369.214,512.003,465.185,438.501,498.97,336.634z"/>
                                                    <g>
                                                        <path style="fill:#F4F6F9;" d="M103.467,103.467h138.667v62.4c0,3.829,3.101,6.933,6.933,6.933h62.4v48.533h13.867v-55.44
                                                            c0-0.004-0.002-0.009-0.002-0.014l0.002-0.013c0-0.739-0.206-1.415-0.42-2.083c-0.058-0.176-0.038-0.373-0.11-0.545
                                                            c-0.365-0.89-0.91-1.676-1.589-2.334l-69.239-69.267c-0.635-0.637-1.394-1.146-2.238-1.498c-0.837-0.351-1.742-0.54-2.67-0.54
                                                            H96.534c-3.833,0-6.933,3.104-6.933,6.933v291.2c0,3.829,3.101,6.933,6.933,6.933h138.667V380.8H103.467V103.467z M256.001,113.275
                                                            l45.639,45.659h-45.639V113.275z"/>
                                                        <path style="fill:#F4F6F9;" d="M332.267,242.133c-49.698,0-90.133,40.432-90.133,90.133s40.435,90.133,90.133,90.133
                                                            s90.133-40.432,90.133-90.133S381.965,242.133,332.267,242.133z M332.267,408.533c-42.053,0-76.267-34.213-76.267-76.267
                                                            S290.214,256,332.267,256s76.267,34.213,76.267,76.267S374.321,408.533,332.267,408.533z"/>
                                                        <path style="fill:#F4F6F9;" d="M337.231,289.618c-1.26-1.3-3.009-2.121-4.964-2.121c-1.955,0-3.705,0.82-4.964,2.121l-30.19,30.19
                                                            c-2.708,2.708-2.708,7.095,0,9.804c2.708,2.708,7.095,2.708,9.804,0l18.417-18.416v58.866c0,3.829,3.101,6.933,6.933,6.933
                                                            s6.933-3.104,6.933-6.933v-58.866l18.417,18.417c1.355,1.355,3.129,2.031,4.902,2.031s3.548-0.677,4.902-2.031
                                                            c2.708-2.708,2.708-7.095,0-9.804L337.231,289.618z"/>
                                                    </g>
                                                    </svg>
                                    </i>
                                            <input type="file" name="image" class="form-control" id="fileInput" style="display:none;">
                                        </div>
                                        @error('image') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="">Status</label></br>
                                        <input type="checkbox" name="status">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <h4>SEO Tags</h4>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="">Meta Title</label>
                                        <input type="text" name="meta_title" class="form-control">
                                        @error('meta_title') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="">Meta Keyword</label>
                                        <textarea name="meta_keyword" class="form-control" rows="3"></textarea>
                                        @error('meta_keyword') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="">Meta Description</label>
                                        <input  name="meta_description" class="form-control" rows="3">
                                        @error('meta_description') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    <div class="col-md-12 mb-3">
                                            <button type="submit"  class="btn btn-primary float-end" style="background-color: rgb(22 163 74);">Save</button>
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

    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('admin/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script>
    document.getElementById('uploadIcon').addEventListener('click', function() {
        document.getElementById('fileInput').click();
    });
</script>

</body>

</html>
