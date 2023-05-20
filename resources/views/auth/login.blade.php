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
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/css/navbar.css" rel="stylesheet"> 
    <link href="assets/css/kabinet.css" rel="stylesheet">
    <link href="assets/css/profil.css" rel="stylesheet">
    <!--<link href="/css/profil.css" rel="stylesheet">-->
    <link href="assets/css/shopcart2.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <header>

          <!-- Topbar Start -->
<div class="container-fluid">
   
    <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
        <div class="col-lg-6">
            <a href="{{url('/')}}" class="text-decoration-none">
                <span class="h1 text-uppercase text-success bg-dark px-2">Badomm</span>
                <span class="h1 text-uppercase text-dark bg-success px-2 ml-n1">Shop</span>
            </a>
            
        </div>
        <div class="col-lg-6 col-6 text-right">
            <p class="m-0">Telephone Number:</p>
            <h5 class="m-0">{{ $appSetting->phone1 ?? 'phone' }}</h5>
        </div>
    </div>
</div>
 </header>
<div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="#" method="POST" action="{{ route('login') }}" class="sign-in-form">
            @csrf
          <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input id="email" placeholder="Email" type="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus >
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input id="password" type="password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
        </div>
          <input type="submit" value="Login" class="btnn " />
        </form>

        
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here ?</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
            ex ratione. Aliquid!
          </p>
          <a href="{{url('/register')}}" class="btn border p-2 text-light">Ro'yxatdan o'tish</a>
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

  
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">Get In Touch</h5>
                <p class="mb-4">No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et et dolor sed dolor. Rebum tempor no vero est magna amet no</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-white mr-3"></i>Namangan, O'zbekiston</p>
                <p class="mb-2"><i class="fa fa-envelope text-white mr-3"></i>Telegram: @Ssuleiymann</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-white mr-3"></i>{{ $appSetting->phone1 ?? 'phone' }}</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Quick Shop</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-secondary mb-2"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                            <a class="text-secondary mb-2"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                            <a class="text-secondary mb-2"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                            <a class="text-secondary mb-2"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-secondary"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">My Account</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-secondary mb-2"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                            <a class="text-secondary mb-2"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                            <a class="text-secondary mb-2"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                            <a class="text-secondary mb-2"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-secondary"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h6 class="text-secondary text-uppercase mt-4 mb-3">Follow Us</h6>
                        <div class="d-flex">
                            <a class="btn btn-success btn-square mr-2" href="#"><i class="fab fa-telegram"></i></a>
                            <a class="btn btn-success btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    <!-- Footer End -->

<a href="#" class="btn btn-success back-to-top"><i class="fa fa-angle-double-up"></i></a>

<!-- Back to Top -->

<br>  <br>  <br>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="assets/lib/easing/easing.min.js"></script>
<script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
<!-- Contact Javascript File -->
<script src="assets/mail/jqBootstrapValidation.min.js"></script>
<script src="assets/mail/contact.js"></script>
<script src="assets/js/main2.js"></script>
<script src="assets/js/shopcart2.js"></script>
<script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
<!-- Template Javascript -->
<script src="assets/js/main.js"></script>
</body>

</html>