<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BadommShop - Internet Magazin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="/img/b.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <!-- Font Awesome -->

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
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-ezgZDJ0kSOi1T+M2kz7P8WqL7pqR0ZQOeXta8zfl6iPhNIyXsl5F0bG7/4jOoG3K" crossorigin="anonymous">
        
    @livewireStyles
    
    
    <!-- other links -->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <style>
        @media (max-width: 870px) {
            .signin-signup {
                width: 100%;
                top: 80%;
                transform: translate(-50%, -100%);
                transition: 1s 0.8s ease-in-out;
            }
        }
    </style>
    
    
</head>

<body>
    <!-- Topbar Start -->

    <div class="container-fluid">

        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-6">
                <a href="{{ url('/') }}" class="text-decoration-none">
                    <span class="h1 text-uppercase text-success bg-dark px-2">Badomm</span>
                    <span class="h1 text-uppercase text-dark bg-success px-2 ml-n1">Shop</span>
                </a>
                
            </div>
            <div class="col-lg- d-flex col-6 d-flex" style="justify-content: flex-end;">
                <div>
                    <p class="m-0">Telefom raqami:</p>
                    <h5 class="m-0">{{ $appSetting->phone1 ?? '' }}</h5>
                </div>
                <div class="btn-group ml-3">
                    <button type="button" class="btn btn-md border rounded btn-light dropdown-toggle"
                        data-toggle="dropdown">UZ</button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{ url('locale/uz') }}" type="button">UZ</a>
                        <a class="dropdown-item" href="{{ url('locale/ru') }}" type="button">RU</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="min-height: 80vh;">
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
                    <h2 class="title text-dark">Kirish</h2>

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="email" placeholder="Email" type="email" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="password" placeholder="Parol kiriting" type="password" name="password" required
                            autocomplete="current-password">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    <input type="submit" value="KIrish" class="btnn " style="background-color: #7bb768" />
                </form>


            </div>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <a href="/register" class="btn border text-white">
                        @lang('public.register')
                    </a>
                    <p>
                        @lang('public.buying')
                    </p>
                </div>
                <img src="{{ asset('assets/img/log.svg') }}" class="image" alt="" />
            </div>
        </div>
    </div>


    <!-- Footer Start -->
    @include('layouts.footer')

    <!-- Footer End -->

    <a href="#" class="btn btn-success back-to-top"><i class="fa fa-angle-double-up"></i></a>
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
                        <ion-icon style="font-size: 22px; margin-top:5px;" name="grid">
                            
                        </ion-icon>
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
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
