<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/img/b.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/kabinet.css') }}" rel="stylesheet">
    <!--<link href="/css/profil.css" rel="stylesheet">-->
    <link href="{{ asset('assets/css/shopcart2.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    </head>

    <body>
        <header>

            <!-- Topbar Start -->
            <div class="container-fluid">
                <div class="row bg-secondary py-1 px-xl-5">
                    <div class="col-lg-6 d-none d-lg-block">
                        <div class="d-inline-flex align-items-center h-100">
                            <a class="text-body mr-3" href="/about.html">About</a>
                            <a class="text-body mr-3" href="">Contact</a>
                            <a class="text-body mr-3" href="">Help</a>
                            <a class="text-body mr-3" href="">FAQs</a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center text-lg-right">
                        <div class="d-inline-flex align-items-center">
                            <div class=" align-items-centr bg-white d-block d-lg-none">
                                <div class="d-inline-flex align-items-center h-100">
                                    <a class="text-body mr-3">Badomm Shop - Internet do'kon</a>


                                </div>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-light dropdown-toggle"
                                    data-toggle="dropdown">UZ</button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <button class="dropdown-item" type="button">UZ</button>
                                    <button class="dropdown-item" type="button">RU</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
                    <div class="col-lg-4">
                        <a href="{{ url('/') }}" class="text-decoration-none">
                            <span class="h1 text-uppercase text-success bg-dark px-2">Badomm</span>
                            <span class="h1 text-uppercase text-dark bg-success px-2 ml-n1">Shop</span>
                        </a>

                    </div>
                    <div class="col-lg-4 col-6 text-left">
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Mahsulotlarni qidirish">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-transparent text-success">
                                        <i class="fa fa-search"></i>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4 col-6 text-right">
                        <p class="m-0">Telephone Number:</p>
                        <h5 class="m-0">+998 99-315-30-90</h5>
                    </div>
                </div>
            </div>
            <!-- Topbar End -->
            <!-- Navbar Start -->
            <div class="container-fluid bg-dark mb-30">
                <div class="row px-xl-5">
                    <div class="col-lg-3 d-none d-lg-block">
                        <a class="btn d-flex align-items-center justify-content-between bg-success w-100"
                            data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                            <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categories</h6>
                            <i class="fa fa-angle-down text-dark"></i>
                        </a>
                        <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light"
                            id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                            <div class="navbar-nav w-100">
                                <a href="{{ url('/collections') }}" class="nav-item nav-link">Barcha kategoriyalar</a>
                                @foreach ($categories_all as $category)
                                    <a href="/shop.html" class="nav-item nav-link">{{ $category->name }}</a>
                                @endforeach
                            </div>
                        </nav>

                    </div>
                    <div class="col-lg-9">
                        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                            <a href="{{ url('/') }}" class="text-decoration-none d-block d-lg-none">
                                <span class="h1 text-uppercase text-success bg-dark px-2">Badomm</span>
                                <span class="h1 text-uppercase text-dark bg-success px-2 ml-n1">Shop</span>
                            </a>
                            <button type="button" class="navbar-toggler bg-success" data-toggle="collapse"
                                data-target="#navbarCollapse">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                                <div class="navbar-nav mr-auto py-0">
                                    <a href="{{ url('/') }}"
                                        class="nav-item nav-link active text-white">Home</a>
                                    <a href="shop.html" class="nav-item nav-link text-white">Shop</a>
                                    <a href="detail.html" class="nav-item nav-link text-white">Shop Detail</a>
                                </div>
                                <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                                    <i class=" btn px-0 ml-3 bx bx-shopping-bag text-white" id="cart-icon"></i>
                                    <span
                                        class="badge border border-secondary rounded-circle bg-danger text-white mr-4"
                                        id="cart-icon-span" style="padding-bottom: 2px; margin-left: -12%;">0</span>

                                    @if (Route::has('login'))
                                        @auth
                                            <a href="{{ url('/') }}"
                                                class="dashboard-link text-light text-decoration-none">Home</a>
                                        @else
                                            <a href="{{ route('login') }}"
                                                class="login-link text-light text-decoration-none">
                                                <span class="fas fa-user fa-lg text-white"></span>
                                                Log in
                                            </a>
                                        @endauth
                                    @endif
                                </div>
                            </div>
                        </nav>

                    </div>
                    <div class="col-lg-9 bg-white" style="background-color:#6C757D;">
                        <div class=" align-items-center bg-white d-block d-lg-none">
                            <nav class="navbar navbar-expand-lg bg-white navbar-white py-1 py-lg-0 px-0">
                                <div class="col-lg-3 col-10 text-left">
                                    <form action="">
                                        <div class="input-group">
                                            <input type="text" class="form-control"
                                                placeholder="Mahsulotlarni qidirish">
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-transparent text-success">
                                                    <i class="fa fa-search"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <i class=" btn px-0 ml-3 bx bx-shopping-bag text-success" id="cart-icon2"></i>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Navbar End -->




            <!-- Mobil navbar -->
            <div class="header_navbar_collapse off-nav" style="display: block;">
                <ul class="header_navbar_collapse_nav" style="min-height: 54px;">
                    <li class="header_navbar_collapse_nav_item">
                        <div class="header_navbar_collapse_nav_item_pad">
                            <a class="header_navbar_collapse_nav_item_link active text-dark"
                                href="{{ url('/') }}"><span class="fas fa-home fa-lg"></span>
                                <p></p>
                            </a>
                        </div>
                    </li>

                    <li class="header_navbar_collapse_nav_item">
                        <div class="header_navbar_collapse_nav_item_pad">
                            <a class="header_navbar_collapse_nav_item_link " href="/about.html">
                                <span class="far fa-file-alt fa-lg text-dark"></span>
                                <p></p>
                            </a>
                        </div>
                    </li>

                    <li class="header_navbar_collapse_nav_item">
                        <div class="header_navbar_collapse_nav_item_pad">
                            <a class="header_navbar_collapse_nav_item_link text-dark" href="/cart.html"> <span
                                    class="fas fa-shopping-cart fa-lg" aria-hidden="true"></span>
                                <p></p>
                            </a>
                        </div>
                    </li>

                    <li class="header_navbar_collapse_nav_item">
                        <div class="header_navbar_collapse_nav_item_pad">
                            <a class="header_navbar_collapse_nav_item_link text-dark" target="_blank"
                                href="https://t.me/Ssuleiymann">
                                <span class="fas fa-phone fa-lg" aria-hidden="true"></span>
                                <p></p>
                            </a>
                        </div>
                    </li>

                    <li class="header_navbar_collapse_nav_item">
                        <div class="header_navbar_collapse_nav_item_pad ">
                            <a class="header_navbar_collapse_nav_item_link " href="/profil.html"> <span
                                    class="position-relative d-flex justify-content-center icon-notifications">
                                    <span class="fas fa-user fa-lg text-dark"></span>
                                </span>

                                <p></p>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            </nav>


            <div class="cart">
                <h2 class="cart-title">Your Cart</h2>
                <div class="cart-content">
                </div>
                <!--Total-->
                <div class="total">
                    <div class="total-title">Total</div>
                    <div class="total-price">$0</div>
                </div>
                <!--buy button-->
                <a href="/profil.html"><button type="button" class="btn-buy">Buy Now</button></a>
                <!-- cart close -->
                <i class="bx bx-x" id="close-cart"></i>
            </div>
            </div>
              <div>
                <livewire:frontend.product.view :category="$category" :product="$product" />
            </div>          
            
        </header>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <!-- Contact Javascript File -->
        <script src="{{ asset('assets/mail/jqBootstrapValidation.min.js') }}"></script>
        <script src="{{ asset('assets/mail/contact.js') }}"></script>
        <script src="{{ asset('assets/js/shopcart2.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>

</html>