<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TopEsExpress - Internet Magazin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="./favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/kabinet.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/profil.css') }}" rel="stylesheet">
    <!--<link href="/css/profil.css" rel="stylesheet">-->
    <link href="{{ asset('assets/css/shopcart2.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <style>
        @media (max-width: 870px) {
            .signin-signup {
                width: 100%;
                top: 85%;
                transform: translate(-50%, -100%);
                transition: 1s 0.8s ease-in-out;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <header>
        <!-- Topbar Start -->
        <div class="container-fluid">
            <div class="row bg-secondary py-1 px-xl-5">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="d-inline-flex align-items-center h-100">
                        <a class="text-body mr-3" href="#footer">About</a>
                        <a class="text-body mr-3" href="#footer">Contact</a>
                        <a class="text-body mr-3" href="#footer">Help</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right" style="display: flex; justify-content: flex-end;">
                    <div class="d-inline-flex align-items-center">
                        <div class="btn-group mx-2">
                            <button type="button" class="btn btn-sm btn-light dropdown-toggle"
                                data-toggle="dropdown">UZS</button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <button class="dropdown-item" type="button">UZS</button>
                            </div>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-light dropdown-toggle"
                                data-toggle="dropdown">{{ strtoupper(Session::get('locale', 'uz')) }}</button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{ url('locale/uz') }}" type="button">🇺🇿 Uzbek</a>
                                <a class="dropdown-item" href="{{ url('locale/ru') }}" type="button">🇷🇺 Russian</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row align-items-center bg-dark py-3 px-xl-5 d-none d-lg-flex">
                <div class="col-lg-4">
                    <a href="{{ url('/') }}" class="text-decoration-none bg p-0 m-0">
                        <img src="./globus-removebg-preview.png" alt="" class="bg-dark m-0 p-0" height="35" style="width:125px">
                        
                    </a>
                </div>
                <div class="col-lg-4 col-6 text-left">
                    <form action="{{ url('search') }}" method="GET" role="search">
                        <div class="input-group">
                            <input type="search" name="search" class="form-control bg-dark"
                                value="{{ Request::get('search') }}" placeholder="@lang('public.search')" style="color: #EBEBEB;">
                            <div class="input-group-append">
                                <button type="submit" class="input-group-text bg-dark text-success">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-6 text-right text-white">
                    <p class="m-0 text-white">Telephone Number:</p>
                    <h5 class="m-0 text-white">{{ $appSetting->phone1 ?? '' }}</h5>
                </div>
            </div>
        </div>
        <!-- Topbar End -->
        <!-- Navbar Start -->
        <div class="container-fluid bg-dark mt-30">
            <div class="row px-xl-5">
                <div class="col-lg-9">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                        <a href="{{ url('/') }} " class="text-decoration-none d-block d-lg-none">
                            <img src="{{ asset('globus-removebg-preview.png') }}" alt=""
                                class="bg-dark m-0 p-0" height="35">
                            
                        </a>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar End -->

        <div class="header_navbar_collapse off-nav" style="display: block;">
            <ul class="header_navbar_collapse_nav mt-2" style="min-height: 40px;">
                <li class="header_navbar_collapse_nav_item">
                    <div class="header_navbar_collapse_nav_item_pad">
                        <a class="header_navbar_collapse_nav_item_link active text-dark" href="{{ url('/') }}">
                            <span class="fas fa-home fa-lg"></span>
                        </a>
                    </div>
                </li>

                <li class="header_navbar_collapse_nav_item">
                    <div class="header_navbar_collapse_nav_item_pad">
                        <a class="header_navbar_collapse_nav_item_link text-dark" href="{{ url('/collections') }}">
                            <span class="fas fa-solid fa-list-ul fa-lg" style="font-size: 22px;"></span>
                        </a>
                    </div>
                </li>

                <li class="header_navbar_collapse_nav_item">
                    <div class="header_navbar_collapse_nav_item_pad">
                        <a class="header_navbar_collapse_nav_item_link text-dark btn position-relative"
                            href="{{ url('wishlist') }}">
                            <span class="fas fa-solid fa-heart fa-lg" aria-hidden="true"></span>
                            <span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger mt-2 "
                                style="margin-left: -15%">
                                <livewire:frontend.wishlist-count />
                            </span>
                        </a>
                    </div>
                </li>

                <li class="header_navbar_collapse_nav_item">
                    <div class="header_navbar_collapse_nav_item_pad">
                        <a class="header_navbar_collapse_nav_item_link text-dark btn position-relative"
                            href="{{ url('cart') }}">
                            <span class="fas fa-shopping-cart fa-lg" aria-hidden="true"></span>
                            <span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger mt-2 "
                                style="margin-left: -15%">
                                <livewire:frontend.cart.cart-count />
                            </span>
                        </a>
                    </div>
                </li>

                <li class="header_navbar_collapse_nav_item">
                    <div class="header_navbar_collapse_nav_item_pad ">
                        @if (Route::has('login'))
                            @auth
                                <a class="header_navbar_collapse_nav_item_link" href="#" id="userDropdown"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="position-relative d-flex justify-content-center icon-notifications">
                                        <span class="fas fa-user fa-lg text-dark"></span>
                                    </span>
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    style="margin-top: -26%" aria-labelledby="userDropdown">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a class="dropdown-item" href="route('logout')"
                                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                            {{ __('Chiqish') }}
                                        </a>
                                    </form>
                                </div>
                            @else
                                <a href="{{ route('login') }}" class="header_navbar_collapse_nav_item_link ">
                                    <span class="position-relative d-flex justify-content-center icon-notifications">
                                        <span class="fas fa-user fa-lg text-dark"></span>
                                    </span>
                                </a>
                            @endauth
                        @endif
                    </div>
                </li>
            </ul>
        </div>
        </nav>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    </header>

    <div class="container loginMargin" style="min-height: 80vh;">
        <div class="forms-container">
            <div class="signin-signup">
                @if ($errors->any())
                    <div class="alert alert-danger rounded m-2">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif
                <form action="#" method="POST" action="{{ route('login') }}" class="sign-in-form">
                    @csrf
                    <h4 class="title text-dark">@lang('public.register')</h4>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="name" placeholder="@lang('public.name')" type="text"
                            @error('name') is-invalid @enderror name="name" value="{{ old('name') }}" required
                            autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input id="email" placeholder="@lang('public.email')" type="email"
                            @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required
                            autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="password" placeholder="@lang('public.password')" type="password"
                            @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="password-confirm" placeholder="@lang('public.password_confirm')" type="password"
                            name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <button type="submit" class="btn text-white"
                        style="background-color: #f98c05; border-radius: 49px; height: 49px; text-transform: uppercase;font-weight: 600;margin: 10px 0;transition: 0.5s; cursor: pointer;">
                        @lang('public.register')
                    </button>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <a href="/login" class="btn border text-white">
                        @lang('public.login')
                    </a>
                    <p>
                        @lang('public.buying')
                    </p>
                </div>
                <img src="{{ asset('assets/img/log.svg') }}" class="image" alt="" />
            </div>
        </div>
    </div>
    </div>

    <a href="#" class="btn btn-success back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <!-- Contact Javascript File -->
    <script src="{{ asset('assets/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('assets/mail/contact.js') }}"></script>
    <script src="{{ asset('assets/js/main2.js') }}"></script>
    <script src="{{ asset('assets/js/shopcart2.js') }}"></script>
    
    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
