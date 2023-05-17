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
                                            <button class="btn" style="background-color: rgb(22 163 74) ;"
                                                type="button">
                                                <i class="fas fa-search fa-fw" style="color: white;"></i>

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
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIIAAAB5CAMAAADCiAkVAAAAY1BMVEX///9APz9EQ0MxMDA3NjY7Ojo0MzP6+vq6urosKyskIyOdnZ0oJychICDv7+9oaGjLy8vi4uLV1dWUlJRhYWGJiYlTUlJbWlqurq5OTU1vbm7AwMB4d3cdGxukpKSCgoIXFRW8QGGdAAADl0lEQVRoge2ai5aiMAyGKW2hRahcBeTivP9TLujsDjpIG23onD3zv4CfaRKSv/W8X72s0FNZKpouzTMVugBQh+7SxlHs91UxitwBhKCBZGQW5yyQ0RCURZPtSTB+kEdxRiNZpXsR5Mk3gpsCehK7EIQX9gRhCoasc/Tfb/r6KcAVIm5wCRopOd9EICS6IAKoY6z5+atoj4eQt7oI3CQLNITj8zy8V4JVnWlkSECIj9Que7NjmEUrFILQKBc/xVDadXg0jwIJcMJQAhAIUQgE4QAhoBhN8unXaVXcR0AQEoJAEoSEHCkIAeMkigCEwBBqooIh8NI+AjAKhNlv0gcgwmAfoYGlI/mwj9DBihIDAdaaUBBgDZqQGGFm8GEILQICYGSZxI/2CbwRVJUY3dHLIWMTztfaA1VlhDK6bSyTK0IwHdJTCyHw/bNthrAGxWDSYHuhUcC2gLBTKVBXmMRb20O0AmXCJGZ9uQVtMrMS+37LATgvRPaLUpkv1rMwZkevAlUlw/B7UlCDDg4ICLCZRaI4LSdITSQYBF4DOAmGY7tlgChQJMfrYtwaeI1DMDVpaRYIHycZZ2XCpE3zMsM0w01mWJSW8KXUIB1oh4oQmiAgX1XpkwFliVlKv2BL9NshbZv2MVzPOwnNUkXxbiP+KtSEge9wYbnt+KCMKo9KN08CPxm1CNEeV7bbCBje809E2LbkdzmIbUuejjsgaJwOecbujtlZ16CZj5sODdPvVBznivBThZELbN9aWBAYrrasxppaKuNdhvkYtRmmJ4D9yoNSWM4I1dQxzGbhkvSdvfPIKma4xNxTRH5hJRShKAeo5/hPwVCLd0ORV5S+EIBFKCit3liusqZmwIu51VCwWrzUKVTX81cyYE08bitwVnQXDiwBjYLkCFj0lOgHW/9/IR5TswIJ0/ObCbihgJbaXqGak3y5Ak3E5emwGQph6qO8A0Fp/xQiOyboAFexZ9uGsFsCm4pWL/BG4L34e1ozxDqY0/6uVp78ZBYaMUjy27Tfo5bimvjDZyPfNRGuegwD8L2ODfGHGdfwTalVybsxIndA8OBKAR+w2RFvHafCrOWnonZxEEQuZxgX5zAlw8KyV6A3Ita0NAgzN1FY3qE56I2z+PkLweSiAwNhcW3QuUcQ7hGgbxkxENw0xyUC7PmaPYTzL8J9a4K+7v2PEC7uESrnCEHxi/AjEJZTkyuE8WchcN+FgpvP8QdK9z1yRhl2GgAAAABJRU5ErkJggg==">
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
                                    <a class="dropdown-item" href="route('logout')"
                                        onclick="event.preventDefault();
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
                <div>
                    <div>
                        <div class="container-fluid">
                            <div class="con">
                                    <div class="con shadow m-5">
                                        <div class="card-header text-white" style="background-color: rgb(22 163 74) ;">
                                            <h3 style="">Update Products
                                                <a href="{{ url('admin/products') }}"
                                                    class="btn btn-outline-success text-white float-end"
                                                    style="font-size:12px">
                                                    BACK
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

                                            <form action="{{ url('admin/products/' . $product->id . '/update') }}"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')

                                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link active text-dark" id="home-tab"
                                                            data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                                                            type="button" role="tab"
                                                            aria-controls="home-tab-pane" aria-selected="true">
                                                            Home
                                                        </button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link text-dark" id="seotag-tab"
                                                            data-bs-toggle="tab" data-bs-target="#seotag-tab-pane"
                                                            type="button" role="tab"
                                                            aria-controls="seotag-tab-pane" aria-selected="false">
                                                            SEO Tags
                                                        </button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link text-dark" id="details-tab"
                                                            data-bs-toggle="tab" data-bs-target="#details-tab-pane"
                                                            type="button" role="tab"
                                                            aria-controls="details-tab-pane" aria-selected="false">
                                                            Details
                                                        </button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link text-dark" id="image-tab"
                                                            data-bs-toggle="tab" data-bs-target="#image-tab-pane"
                                                            type="button" role="tab"
                                                            aria-controls="image-tab-pane" aria-selected="false">
                                                            Image
                                                        </button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link text-dark" id="color-tab"
                                                            data-bs-toggle="tab" data-bs-target="#color-tab-pane"
                                                            type="button" role="tab"
                                                            aria-controls="color-tab-pane" aria-selected="false">
                                                            Color
                                                        </button>
                                                    </li>
                                                </ul>
                                                <div class="tab-content" id="myTabContent">
                                                    <div class="tab-pane fade border p-4 show active"
                                                        id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                                                        tabindex="0">
                                                        <div class="row d-flex justify-content-center">
                                                            <div class="mb-3 mt-2 col-md-11">
                                                                <label>Category</label>
                                                                <select name="category_id" class="form-control">
                                                                    @foreach ($categories as $category)
                                                                        <option value="{{ $category->id }}"
                                                                            {{ $category->id == $product->category_id ? 'selected' : '' }}>
                                                                            {{ $category->name }}
                                                                        </option>
                                                                    @endforeach

                                                                </select>
                                                            </div>
                                                            <div class="mb-3 col-md-11">
                                                                <label for="">Product Name</label>
                                                                <input type="text" name="name"
                                                                    value="{{ $product->name }}"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="mb-3 col-md-11">
                                                                <label for="">Product Slug</label>
                                                                <input type="text" name="slug"
                                                                    value="{{ $product->slug }}"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="mb-3 mt-2 col-md-11">
                                                                <label>Select Brand</label>
                                                                <select name="brand" class="form-control">
                                                                    @foreach ($brands as $brand)
                                                                        <option value="{{ $brand->name }}"
                                                                            {{ $brand->name == $product->brand ? 'selected' : '' }}>
                                                                            {{ $brand->name }}
                                                                        </option>
                                                                    @endforeach

                                                                </select>
                                                            </div>
                                                            <div class="mb-3 col-md-11">
                                                                <label for="">Small Description</label>
                                                                <input type="text"
                                                                    value="{{ $product->small_description }}"
                                                                    name="small_description" class="form-control">
                                                            </div>
                                                            <div class="mb-3 col-md-11">
                                                                <label for="">Description</label>
                                                                <input type="text"
                                                                    value="{{ $product->description }}"
                                                                    name="description" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade border p-4" id="seotag-tab-pane"
                                                        role="tabpanel" aria-labelledby="seotag-tab" tabindex="0">
                                                        <div class="row d-flex justify-content-center">
                                                            <div class="mb-3 col-md-11">
                                                                <label for="">Meta Title</label>
                                                                <input type="text"
                                                                    value="{{ $product->meta_title }}"
                                                                    name="meta_title" class="form-control">
                                                            </div>
                                                            <div class="mb-3 col-md-11">
                                                                <label for="">Meta Description</label>
                                                                <input type="text"
                                                                    value="{{ $product->meta_description }}"
                                                                    name="meta_description" class="form-control">
                                                            </div>
                                                            <div class="mb-3 col-md-11">
                                                                <label for="">Meta Keyword</label>
                                                                <input type="text" name="meta_keyword"
                                                                    value="{{ $product->meta_keyword }}"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade border p-4" id="details-tab-pane"
                                                        role="tabpanel" aria-labelledby="details-tab" tabindex="0">
                                                        <div class="row d-flex justify-content-center">
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label for="">Original Price</label>
                                                                    <input type="text" name="original_price"
                                                                        value="{{ $product->original_price }}"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label for="">Selling Price</label>
                                                                    <input type="text" name="selling_price"
                                                                        value="{{ $product->selling_price }}"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label for="">Quantity</label>
                                                                    <input type="number" name="quantity"
                                                                        value="{{ $product->quantity }}"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-0">
                                                                <div class="mt-4">
                                                                    <input type="checkbox" name="trending"
                                                                        class=""
                                                                        {{ $product->trending == '1' ? 'checked' : '' }}
                                                                        style="width: 18px; height: 18px;">
                                                                    <label for="">Trending</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-0">
                                                                <div class="mt-3">
                                                                    <input type="checkbox" name="status"
                                                                        {{ $product->trending == '1' ? 'checked' : '' }}
                                                                        style="width: 18px; height: 18px;">
                                                                    <label for="">Status</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade border p-4" id="image-tab-pane"
                                                        role="tabpanel" aria-labelledby="image-tab" tabindex="0">
                                                        <div class="mb-3">
                                                            <label>Upload Product Images</label>
                                                            <input name="image[]" type="file" multiple
                                                                class="form-control">
                                                        </div>
                                                        <div>
                                                            @if ($product->productImages)
                                                                <div class="row">
                                                                    @foreach ($product->productImages as $image)
                                                                        <div class="col-md-2">
                                                                            <img src="{{ asset($image->image) }}"
                                                                                class="me-4 border"
                                                                                style="width: 240px; height: 240px;">
                                                                            <a class="d-block btn btn-outline-danger"
                                                                                href="{{ url('admin/product-image/' . $image->id . '/delete') }}">Delete</a>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            @else
                                                                <h5>NO Image</h5>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade border p-4" id="color-tab-pane"
                                                        role="tabpanel" aria-labelledby="color-tab" tabindex="0">
                                                        <div class="mb-3">

                                                            <h4>Add product Color</h4>
                                                            <label>Select Color</label>
                                                            <hr />

                                                            <div class="row">
                                                                @forelse ($colors as $color)
                                                                    <div class="col-md-3">
                                                                        <div class="p-2 border m-2">
                                                                            Color: <input
                                                                                name="colors[{{ $color->id }}]"
                                                                                type="checkbox"
                                                                                value="{{ $color->id }}"
                                                                                class="p-2 border m-2">{{ $color->name }}
                                                                            <br />
                                                                            Quantity: <input type="number"
                                                                                name="colorquantity[{{ $color->id }}]"
                                                                                style="width: 70px; border:1px solid ">
                                                                        </div>
                                                                    </div>
                                                                @empty
                                                                    <div class="col-md-12">
                                                                        <h3>Colors Not found</h3>
                                                                    </div>
                                                                @endforelse

                                                            </div>

                                                        </div>
                                                        <div class="table-responsive">
                                                            <table class="table table-sm table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Color name</th>
                                                                        <th>Quantity</th>
                                                                        <th>Delete</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($product->productColors as $productColor)
                                                                        <tr class="productColorTr">
                                                                            <td>
                                                                                @if ($productColor->color)
                                                                                    {{ $productColor->color->name }}
                                                                                @else
                                                                                    Color Not Found
                                                                                @endif

                                                                            </td>
                                                                            <td>
                                                                                <div class="input-group mb-3"
                                                                                    style="width: 150px">
                                                                                    <input type="text"
                                                                                        value="{{ $productColor->quantity }}"
                                                                                        class="updateProductColorQty form-control form-control-sm" />
                                                                                    <button type="button"
                                                                                        value="{{ $productColor->id }}"
                                                                                        class="updateProductColorBtn btn btn-primary btn-sm text-white">Update</button>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button"
                                                                                    value="{{ $productColor->id }}"class="deleteProductColorBtn btn btn-danger btn-sm text-white">Delete</button>

                                                                            </td>

                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button type="submit" class="btn float-end mt-3 text-white"
                                                        style="background-color: rgb(22 163 74) ;">Update</button>
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
        <script>
            $(document).ready(function() {
                $(document).on("click", ".updateProductColorBtn", function() {
                    var product_id = "{{ $product->id }}";
                    var prod_color_id = $(this).val();
                    var qty = $(this).closest(".productColorTr").find(".updateProductColorQty").val();
                    if (qty <= 0) {
                        alert("Stok alanı boş bırakılamaz");
                        return false;
                    }
                    var data = {
                        qty: qty,
                        product_id: product_id,
                        _token: "{{ csrf_token() }}"
                    };
                    $.ajax({
                        type: "POST",
                        url: "/admin/product/product-color/" + prod_color_id,
                        data: data,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            alert(response.message);
                        },
                    });
                });

                $(document).on("click", ".deleteProductColorBtn", function() {
                    var prod_color_id = $(this).val();
                    var thisClick = $(this);
                    $.ajax({
                        type: "GET",
                        url: "/admin/product/product-color/" + prod_color_id + "/delete",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            thisClick.closest(".productColorTr").remove();
                            alert(response.message);
                        },
                    });
                });
            });
        </script>




</body>

</html>
