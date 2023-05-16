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
                                <button class="btn" style="background-color: rgb(22 163 74) ;" type="button">
                                    <i class="fas fa-search fa-sm" style="background-color: rgb(22 163 74) ;"></i>
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
                                            <button class="btn" style="background-color: rgb(22 163 74) ;"  type="button">
                                                <i style="background-color: rgb(22 163 74) ;" class="fas fa-search fa-sm"></i>
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
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-white" style="background-color: rgb(22 163 74) ;">
                            <h3>Edit Category
                                <a href="{{ url('admin/category') }}"
                                    class="btn btn-outline-success text-white float-end" style="background-color: rgb(22 163 74) ;">BACK</a>
                            </h3>


                        </div>
                        <div class="card-body">
                            <form action="{{ url('admin/category/'.$category->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class=" col-md-6 mb-3">
                                        <label for="Name">Name</label>
                                        <input type="text" name="name" value="{{ $category->name }}" id="name" class="form-control">
                                        @error('name') <small class="text-danger">{{ $message }}</small>@enderror
                                    </div>
                                    <div class=" col-md-6 mb-3">
                                        <label for="slug">Slug</label>
                                        <input type="text" name="slug" value="{{ $category->slug }}" id="slug" class="form-control">
                                         @error('slug') <small class="text-danger">{{ $message }}</small>@enderror
                                    </div>
                                    <div class=" col-md-12 mb-3">
                                        <label for="description">Description</label>
                                        <textarea type="text" name="description" rows="3" id="description" class="form-control">{{ $category->description }}</textarea>
                                        @error('description') <small class="text-danger">{{ $message }}</small>@enderror
                                    </div>
                                    {{-- <div class=" col-md-6 mb-3">
                                        <label for="image">Image</label>
                                        <input type="file" name="image" id="image" class="form-control">
                                        <img src="{{ asset("$category->image") }}" alt="">
                                    </div> --}}
                                    <div class=" col-md-6 mb-3">
                                        <label for="image">Change Image</label>
                                        <div class="image-preview">
                                            <img class="img-responsive mt-2" style="width:300px; height:200px;"
                                                alt="image" src="/Uploads/Category/{{ $category->image }}">
                                            <input type="file" name="image" id="image"
                                                class="form-control d-none">
                                        </div>
                                        @error('image')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <script>
                                        // Add event listener to the image element
                                        document.querySelector('.image-preview img').addEventListener('click', function() {
                                            // Trigger a click event on the file input element
                                            document.querySelector('.image-preview input[type=file]').click();
                                        });
// Preview selected image
                                        document.querySelector('.image-preview input[type=file]').addEventListener('change', function() {
                                            var reader = new FileReader();
                                            reader.onload = function(e) {
                                                document.querySelector('.image-preview img').setAttribute('src', e.target.result);
                                            };
                                            reader.readAsDataURL(this.files[0]);
                                        });
                                    </script>
                                    <div class=" col-md-6 mb-3">
                                        <label for="status">Status</label><br />
                                        <input type="checkbox" name="status" id="status">
                                        @error('status') <small class="text-danger">{{ $message }}</small>@enderror
                                    </div>
                                    <div class="col-md-12 mb-5 mt-5">
                                        <h3>SEO Tags</h3>
                                    </div>
                                    <div class=" col-md-12 mb-3">
                                        <label for="meta_title">Meta_title</label>
                                        <input type="text" value="{{ $category->meta_title }}" name="meta_title" id="meta_title" class="form-control">
                                        @error('meta_title') <small class="text-danger">{{ $message }}</small>@enderror
                                    </div>
                                    <div class=" col-md-12 mb-3">
                                        <label for="meta_keyword">Meta_Keyword</label>
                                        <textarea type="text" name="meta_keyword" id="meta_keyword" rows="3" class="form-control">{{ $category->name }}</textarea>
                                        @error('meta_keyword') <small class="text-danger">{{ $message }}</small>@enderror
                                    </div>
                                    <div class=" col-md-12 mb-3">
                                        <label for="meta_description">Meta_description</label>
                                        <textarea type="text" name="meta_description" id="meta_description" rows="3" class="form-control">{{ $category->name }}</textarea>
                                        @error('meta_description') <small class="text-danger">{{ $message }}</small>@enderror
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <button type="submit" class="btn text-white float-end" style="background-color: rgb(22 163 74) ;">Update</button>
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


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Add Category</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form>
                            <div class="form-group">
                                <label for="product-name">Category Name</label>
                                <input type="text" class="form-control" id="product-name" name="product-name"
                                    placeholder="Enter product name" required>
                            </div>
                            <div class="form-group">
                                <label for="product-image">Category Image</label>
                                <input type="file" class="form-control-file" id="product-image"
                                    name="product-image" accept="image/*" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Product</button>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
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