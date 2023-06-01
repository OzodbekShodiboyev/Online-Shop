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
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/navbar.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/kabinet.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/profil.css')}}" rel="stylesheet">
    <!--<link href="/css/profil.css" rel="stylesheet">-->
    <link href="{{asset('assets/css/shopcart2.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <header>

        <!-- Topbar Start -->
        <div class="container-fluid">

            <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
                <div class="col-lg-6">
                    <a href="{{ url('/') }}" class="text-decoration-none">
                        <span class="h1 text-uppercase text-success bg-dark px-2">Badomm</span>
                        <span class="h1 text-uppercase text-dark bg-success px-2 ml-n1">Shop</span>
                    </a>

                </div>
                <div class="col-lg-6 col-6 text-right">
                    <p class="m-0">Telefon raqami:</p>
                    <h5 class="m-0">{{ $appSetting->phone1 ?? '' }}</h5>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="#" method="POST" action="{{ route('login') }}" class="sign-in-form">
                    @csrf
                    <h2 class="title text-dark">Ro'yxatdan o'tish</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="name" placeholder="Name" type="text" @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input id="email" placeholder="Email" type="email" @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="password"  placeholder="Parol kiriting" type="password" @error('password') is-invalid @enderror" name="password"
                            required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="password-confirm"  placeholder="Parolni qayta kiriting"  type="password" name="password_confirmation"
                            required autocomplete="new-password">
                    </div>
                    <button type="submit" class="btn text-white" style="background-color: #7bb768; border-radius: 49px; height: 49px; text-transform: uppercase;font-weight: 600;margin: 10px 0;transition: 0.5s; cursor: pointer;">
                        {{ __("Ro'yxatdan o'tish") }}
                    </button>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
              <div class="content">
                <a href="/login" class="btn border text-white">
                  Kirish
                </a>
                <p>
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
                  ex ratione. Aliquid!
                </p>
              </div>
              <img src="{{asset('assets/img/log.svg')}}" class="image" alt="" />
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
              <img src="{{asset('assets/img/log.svg')}}" class="image" alt="" />
            </div>
          </div>
        </div>
    </div>


    <div class="container-fluid bg-dark text-secondary mt-5 pt-5" id="footer">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">Aloqada bo'ling</h5>
                <p class="mb-4">No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et et dolor sed
                    dolor. Rebum tempor no vero est magna amet no</p>
                <p class="mb-2"><i
                        class="fa fa-map-marker-alt text-white mr-3"></i>{{ $appSetting->address ?? 'Manzil' }}
                </p>
                <!--  -->
                <p class="mb-0"><i class="fa fa-phone-alt text-white mr-3"></i>{{ $appSetting->phone1 ?? 'Telefon raqam' }}
                </p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <h5 class="text-secondary text-uppercase mb-4">Quick Shop</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2"><i class="fa fa-angle-right mr-2"></i>Bosh sahifa</a>
                            <a class="text-secondary mb-2"><i class="fa fa-angle-right mr-2"></i>Bizning do'kon</a>
                            <a class="text-secondary mb-2"><i class="fa fa-angle-right mr-2"></i>Savatcha</a>
                            <a class="text-secondary mb-2"><i class="fa fa-angle-right mr-2"></i>Sotib olish</a>
                            <a class="text-secondary"><i class="fa fa-angle-right mr-2"></i>Biz bilan bog'lanish</a>
                        </div>
                    </div>            
                    <div class="col-md-4 mb-5">
                        <h6 class="text-secondary text-center mt-4 mb-3">Bizga qo'shiling</h6>

                    </div>
                </div>
            </div>
    </div>
    
        <a href="#" class="btn btn-success back-to-top"><i class="fa fa-angle-double-up"></i></a>

        <!-- Back to Top -->

        <br> <br> <br>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('assets/lib/easing/easing.min.js')}}"></script>
        <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <!-- Contact Javascript File -->
        <script src="{{ asset('assets/mail/jqBootstrapValidation.min.js')}}"></script>
        <script src="{{ asset('assets/mail/contact.js')}}"></script>
        <script src="{{ asset('assets/js/main2.js')}}"></script>
        <script src="{{ asset('assets/js/shopcart2.js')}}"></script>
        <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
        <!-- Template Javascript -->
        <script src="{{ asset('assets/js/main.js')}}"></script>
</body>

</html>


{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
