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
    <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/css/navbar.css" rel="stylesheet"> 
    <link href="assets/css/kabinet.css" rel="stylesheet">
    <!--<link href="/css/profil.css" rel="stylesheet">-->
    <link href="assets/css/shopcart2.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    
  <br><br><br><br><br><br><br><br><br>
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
                    <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">UZ</button>
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
            <a class="btn d-flex align-items-center justify-content-between bg-success w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categories</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                <div class="navbar-nav w-100">
                    <a href="{{ url('/collections') }}" class="nav-item nav-link">Barcha kategoriyalar</a>
                    @foreach ($categories as $category)
                     <a href="/shop.html" class="nav-item nav-link">{{$category->name}}</a>
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
                <button type="button" class="navbar-toggler bg-success" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="{{ url('/') }}" class="nav-item nav-link active text-white">Home</a>
                        <a href="shop.html" class="nav-item nav-link text-white">Shop</a>
                        <a href="detail.html" class="nav-item nav-link text-white">Shop Detail</a>
                    </div>
                    <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                        <i class=" btn px-0 ml-3 bx bx-shopping-bag text-white" id="cart-icon"></i>
                        <span class="badge border border-secondary rounded-circle bg-danger text-white mr-4" id="cart-icon-span" style="padding-bottom: 2px; margin-left: -12%;">0</span>
                       
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/') }}" class="dashboard-link text-light text-decoration-none">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="login-link text-light text-decoration-none">
                                <span class="fas fa-user fa-lg text-white"></span>
                                Log in
                            </a>
                            @endauth
                        @endif
                    </div>
                </div>
            </nav>
            
        </div>
        <div class="col-lg-9 bg-white" style="background-color:#6C757D;" >
        <div class=" align-items-center bg-white d-block d-lg-none">
            <nav class="navbar navbar-expand-lg bg-white navbar-white py-1 py-lg-0 px-0">           
                    <div class="col-lg-3 col-10 text-left">
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
                <a class="header_navbar_collapse_nav_item_link active text-dark" href="{{ url('/') }}"><span
                        class="fas fa-home fa-lg"></span>
                    <p></p></a>
            </div>
        </li>

        <li class="header_navbar_collapse_nav_item">
            <div class="header_navbar_collapse_nav_item_pad">
                <a class="header_navbar_collapse_nav_item_link " href="/about.html">
                    <span class="far fa-file-alt fa-lg text-dark"></span>
                    <p></p></a>
            </div>
        </li>

        <li class="header_navbar_collapse_nav_item">
            <div class="header_navbar_collapse_nav_item_pad">
                <a class="header_navbar_collapse_nav_item_link text-dark" href="/cart.html"> <span
                        class="fas fa-shopping-cart fa-lg" aria-hidden="true"></span>
                    <p></p></a>
            </div>
        </li>

        <li class="header_navbar_collapse_nav_item">
            <div class="header_navbar_collapse_nav_item_pad">
                <a class="header_navbar_collapse_nav_item_link text-dark" target="_blank" href="https://t.me/Ssuleiymann"> 
                    <span class="fas fa-phone fa-lg" aria-hidden="true"></span>
                    <p></p></a>
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
 </header>
    


    <!-- Carousel Start -->
    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach ($slider as $key=>$sliderItem)
                        
                        <li data-target="#header-carousel" data-slide-to="{{($sliderItem->id-1)}}" ></li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner">
                        @foreach ($slider as $key=>$sliderItem)
                        <div class="carousel-item position-relative {{$key==0 ? 'active': ''}}" style="height: 430px;">
                            @if($sliderItem->image)
                            <img class="position-absolute w-100 h-100" src="{{asset("$sliderItem->image")}}" style="object-fit: cover;">
                            @endif
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h3 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">{{$sliderItem->title}}</h3>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">{{$sliderItem->description}}</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">BUY Now</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="img/offer-1.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">chegirma 20%</h6>
                        <h3 class="text-white mb-3">Maxsus Chegirmalar</h3>
                    </div>
                </div>
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="img/offer-2.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">chegirma 20%</h6>
                        <h3 class="text-white mb-3">Maxsus Chegirmalar</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-success m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Har qanday Mahsulot</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-success m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Tez yetkazib berish!</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-success m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">1-5 kun oralig'ida</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-success m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">24/7 Markaz</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->


    <!-- Categories Start -->
    <div class="container-fluid pt-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Categories</span></h2>
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/cat-1.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Category Name</h6>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/cat-2.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Category Name</h6>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/cat-3.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Category Name</h6>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/cat-4.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Category Name</h6>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/cat-4.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Category Name</h6>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/cat-3.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Category Name</h6>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/cat-2.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Category Name</h6>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/cat-1.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Category Name</h6>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/cat-2.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Category Name</h6>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/cat-1.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Category Name</h6>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/cat-4.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Category Name</h6>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/cat-3.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Category Name</h6>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Categories End -->


    <!-- Products Start -->
    
    
 
     <section class="shop container">
        <h2 class="section-title">Shop Products</h2>
        <div class="shop-content">
            <!--BOX 1-->
            <div class="product-box">
                <a href="/detail.html">
                <img src="/imgg/product1.jpg" alt="" class="product-img">
            </a>
                <h2 class="product-title">AEROR SHIRT</h2>
                <span class="price">$225</span>
                <i class="bx bx-shopping-bag add-cart"></i>
            </div>
             <!--BOX 2-->
             <div class="product-box">
                <img src="/imgg/product2.jpg" alt=""  class="product-img">
                <h2 class="product-title">Earbuds</h2>
                <span class="price">$25</span>
                <i class="bx bx-shopping-bag add-cart"></i>
            </div>
             <!--BOX 3-->
             <div class="product-box">
                <img src="/imgg/product3.jpg" alt="" class="product-img">
                <h2 class="product-title">AREADY SHIRT</h2>
                <span class="price">$105</span>
                <i class="bx bx-shopping-bag add-cart"></i>
            </div>
             <!--BOX 4-->
             <div class="product-box">
                <img src="/imgg/product4.jpg" alt="" class="product-img">
                <h2 class="product-title"> SHIRT</h2>
                <span class="price">$100</span>
                <i class="bx bx-shopping-bag add-cart"></i>
            </div>
             <!--BOX 5-->
             <div class="product-box">
                <img src="/imgg/product5.jpg" alt="" class="product-img">
                <h2 class="product-title">AEROREADY SHI</h2>
                <span class="price">$200</span>
                <i class="bx bx-shopping-bag add-cart"></i>
            </div>
             <!--BOX 6-->
             <div class="product-box">
                <img src="/imgg/product6.jpg" alt="" class="product-img">
                <h2 class="product-title">AERORE SHRT</h2>
                <span class="price">$325</span>
                <i class="bx bx-shopping-bag add-cart"></i>
            </div>
             <!--BOX 7-->
             <div class="product-box">
                <img src="/imgg/product7.jpg" alt="" class="product-img">
                <h2 class="product-title">AERODY SHT</h2>
                <span class="price">$50</span>
                <i class="bx bx-shopping-bag add-cart"></i>
            </div>
             <!--BOX 8-->
             <div class="product-box">
                <img src="/imgg/product8.jpg" alt="" class="product-img">
                <h2 class="product-title">AEADY SHRT</h2>
                <span class="price">$255</span>
                <i class="bx bx-shopping-bag add-cart"></i>
            </div>
        </div>
     </section>
    <!-- Products End -->


    <!-- Offer Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="row px-xl-5">
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="img/offer-1.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">chegirma 20%</h6>
                        <h3 class="text-white mb-3">Maxsus Chefirmalar</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="img/offer-2.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">chegirma 20%</h6>
                        <h3 class="text-white mb-3">Maxsus Chefirmalar</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->


    <!-- Products Start -->
    <section class="shop container">
        <h2 class="section-title">Shop Products</h2>
        <div class="shop-content">
            <!--BOX 1-->
            <div class="product-box">
                <img src="/imgg/product1.jpg" alt="" class="product-img">
                <h2 class="product-title">AEROR SHIRT</h2>
                <span class="price">$225</span>
                <i class="bx bx-shopping-bag add-cart"></i>
            </div>
             <!--BOX 2-->
             <div class="product-box">
                <img src="/imgg/product2.jpg" alt="" class="product-img">
                <h2 class="product-title">Earbuds</h2>
                <span class="price">$25</span>
                <i class="bx bx-shopping-bag add-cart"></i>
            </div>
             <!--BOX 3-->
             <div class="product-box">
                <img src="/imgg/product3.jpg" alt="" class="product-img">
                <h2 class="product-title">AREADY SHIRT</h2>
                <span class="price">$105</span>
                <i class="bx bx-shopping-bag add-cart"></i>
            </div>
             <!--BOX 4-->
             <div class="product-box">
                <img src="/imgg/product4.jpg" alt="" class="product-img">
                <h2 class="product-title"> SHIRT</h2>
                <span class="price">$100</span>
                <i class="bx bx-shopping-bag add-cart"></i>
            </div>
             <!--BOX 5-->
             <div class="product-box">
                <img src="/imgg/product5.jpg" alt="" class="product-img">
                <h2 class="product-title">AEROREADY SHI</h2>
                <span class="price">$200</span>
                <i class="bx bx-shopping-bag add-cart"></i>
            </div>
             <!--BOX 6-->
             <div class="product-box">
                <img src="/imgg/product6.jpg" alt="" class="product-img">
                <h2 class="product-title">AERORE SHRT</h2>
                <span class="price">$325</span>
                <i class="bx bx-shopping-bag add-cart"></i>
            </div>
             <!--BOX 7-->
             <div class="product-box">
                <img src="/imgg/product7.jpg" alt="" class="product-img">
                <h2 class="product-title">AERODY SHT</h2>
                <span class="price">$50</span>
                <i class="bx bx-shopping-bag add-cart"></i>
            </div>
             <!--BOX 8-->
             <div class="product-box">
                <img src="/imgg/product8.jpg" alt="" class="product-img">
                <h2 class="product-title">AEADY SHRT</h2>
                <span class="price">$255</span>
                <i class="bx bx-shopping-bag add-cart"></i>
            </div>
        </div>
     </section>
    
    <!-- Products End -->


   

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">Get In Touch</h5>
                <p class="mb-4">No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et et dolor sed dolor. Rebum tempor no vero est magna amet no</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-white mr-3"></i>Namangan, O'zbekiston</p>
                <p class="mb-2"><i class="fa fa-envelope text-white mr-3"></i>Telegram: @Ssuleiymann</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-white mr-3"></i>+998 99-315-30-90</p>
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
    <script src="assets/js/shopcart2.js"></script>

    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>
</body>

</html>