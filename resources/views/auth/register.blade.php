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
    <div class="container mt-3" style="min-height: 80vh;">
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
                    <h2 class="title text-dark">@lang('public.register')</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="name" placeholder="@lang('public.name')" type="text"
                            @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required
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
                            @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required
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
                        style="background-color: #7bb768; border-radius: 49px; height: 49px; text-transform: uppercase;font-weight: 600;margin: 10px 0;transition: 0.5s; cursor: pointer;">
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
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                        laboriosam ad deleniti.
                    </p>
                    <button class="btn transparent text-white" id="sign-in-btn">
                        Sign in
                    </button>
                </div>
                <img src="{{ asset('assets/img/log.svg') }}" class="image" alt="" />
            </div>
        </div>
    </div>
    </div>


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5" id="footer">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">{{ $appSetting->website_name ?? 'Sayt Nomi' }}</h5>
                <p class="mb-4">{{ $appSetting->page_title ?? 'Qisqa malumot' }}</p>
                <p class="mb-2"><i
                        class="fa fa-map-marker-alt text-white mr-3"></i>{{ $appSetting->address ?? 'Address' }}
                </p>
                <p class="mb-2"><i class="fa fa-envelope text-white mr-3"></i>Telegram:
                    {{ $appSetting->telegram }}
                </p>
                <p class="mb-0"><i class="fa fa-phone-alt text-white mr-3"></i>{{ $appSetting->phone1 ?? 'phone' }}
                </p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <h5 class="text-secondary text-uppercase mb-4">@lang('public.quick_shop')</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a href="/" class="text-secondary mb-2"><i
                                    class="fa fa-angle-right mr-2"></i>@lang('public.main')</a>
                            <a href="{{ url('/new-arrivals') }}" class="text-secondary mb-2"><i
                                    class="fa fa-angle-right mr-2"></i>@lang('public.new_product')</a>
                            <a href="{{ url('wishlist') }}" class="text-secondary mb-2"><i
                                    class="fa fa-angle-right mr-2"></i>@lang('public.sorted')</a>
                            <a href="{{ url('cart') }}" class="text-secondary mb-2"><i
                                    class="fa fa-angle-right mr-2"></i>@lang('public.basket')</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h6 class="text-secondary text-center mt-4 mb-3">@lang('public.join_us')</h6>
                        {{-- {{dd($appSetting)}} --}}
                        <div class="d-flex m-3">
                            @if ($appSetting->telegram)
                                <a class="btn text-light" style="width: 600px; background-color:#229ED9; "
                                    href="{{ $appSetting->telegram }}" target="_blank"><i class="fab fa-telegram">
                                        Telegram</i></a>
                            @endif


                        </div>
                        <div class="d-flex m-3">
                            @if ($appSetting->instagram)
                                <a class="btn text-light"
                                    style="width: 600px;   background: #f09433; 
                            background: -moz-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%); 
                            background: -webkit-linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); 
                            background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); 
                            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f09433', endColorstr='#bc1888',GradientType=1 );"
                                    href="{{ $appSetting->instagram }}" target="_blank"><i class="fab fa-instagram">
                                        Instagram</i></a>
                            @endif
                        </div>
                        <div class="d-flex m-3">
                            @if ($appSetting->facebook)
                                <a class="btn text-light" style="width: 600px;   background: #3b5998 ; "
                                    href="{{ $appSetting->facebook }}" target="_blank"><i class="fab fa-facebook">
                                        Facebook</i></a>
                            @endif
                        </div>
                        <div class="d-flex m-3">
                            @if ($appSetting->youtube)
                                <a class="btn text-light" style="width: 600px;   background: #c4302b ; "
                                    href="{{ $appSetting->youtube }}" target="_blank"><i class="fab fa-youtube"> You
                                        Tube</i></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer End -->

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
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
