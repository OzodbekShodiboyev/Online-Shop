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

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/kabinet.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('assets/exzoom/jquery.exzoom.css') }}" rel="stylesheet">
    @livewireStyles
</head>

<body>
    <header>
        @include('layouts.navbar')
    </header>



    <!-- Slider Start -->
    <div class="container-fluid mb-3">
        <div class="row px-xl-5 ">
            <div class="col-lg-8">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel"
                    data-interval="3000">
                    <ol class="carousel-indicators">
                        @foreach ($slider as $key => $sliderItem)
                            <li data-target="#header-carousel" data-slide-to="{{ $key }}"
                                {{ $key == 0 ? 'class=active' : '' }}></li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner">
                        @foreach ($slider as $key => $sliderItem)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" style="height: 430px;">
                                @if ($sliderItem->image)
                                    <img class="d-block w-100" src="{{ asset($sliderItem->image) }}" alt="Slide Image">
                                @endif
                                <div
                                    class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <div class="p-3" style="max-width: 700px;">
                                        <h3 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">
                                            {{ $sliderItem->title }}</h3>
                                        <p class="mx-md-5 px-5 animate__animated animate__bounceIn">
                                            {{ $sliderItem->description }}</p>
                                        <a class="btn py-2 px-4 mt-3 btn-outline-light" id="buybtn"
                                            href="{{ url('/collections') }}">BUY Now</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                @foreach ($slider as $key => $sliderItem)
                    @if ($key < 2)
                        <!-- Add this condition to limit the loop to two iterations -->
                        <div class="product-offer mb-30" style="height: 200px;">
                            <img class="img-fluid" src="{{ asset("$sliderItem->image") }}" alt="">
                            <div class="offer-text">
                                <h6 class="text-white text-center">{{ $sliderItem->description }}</h6>
                                <h3 class="text-white mb-3">{{ $sliderItem->title }}</h3>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

        </div>
    </div>
    <!-- Slider End -->


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

    {{-- Trending Products --}}
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Trending Products</h4>
                    <div class="underline mb-4"></div>
                </div>
                @if ($trendingProducts)
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme">
                            @foreach ($trendingProducts as $productItem)
                                <div class="item">
                                    <div class="product-card shadow">
                                        <div class="product-card-img">
                                            <label class="stock bg-success">New</label>
                                            @if ($productItem->productImages->count() > 0)
                                                <a
                                                    href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}">
                                                    <img src="{{ asset($productItem->productImages[0]->image) }}"
                                                        alt="{{ $productItem->name }}" class="product-image">
                                                </a>
                                            @endif
                                        </div>
                                        <div class="product-card-body">
                                            <p class="product-brand">{{ $productItem->brand }}</p>
                                            <h5 class="product-name">
                                                <a
                                                    href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}">
                                                    {{ $productItem->name }}
                                                </a>
                                            </h5>
                                            <div>
                                                <span class="selling-price">$
                                                    {{ number_format($productItem->selling_price) }}</span>
                                                <span class="original-price">$
                                                    {{ number_format($productItem->original_price) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @else
                    <div class="col-md-12">
                        <div class="p-2">
                            <h5>No Products Available</h5>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    {{-- New Arrivals --}}
    <div class="py-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>New Arrivals
                        <a href="{{ url('new-arrivals') }}" class="btn btn-sm text-white bg-success float-end">Yana</a>
                    </h4>
                    <div class="underline mb-4"></div>
                </div>
                @if ($newArrivalsProducts)
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme four-carousel">
                            @foreach ($newArrivalsProducts as $productItem)
                                <div class="item">
                                    <div class="product-card shadow">
                                        <div class="product-card-img">
                                            <label class="stock bg-success">New</label>

                                            @if ($productItem->productImages->count() > 0)
                                                <a
                                                    href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}">
                                                    <img src="{{ asset($productItem->productImages[0]->image) }}"
                                                        alt="{{ $productItem->name }}" class="product-image">
                                                </a>
                                            @endif

                                        </div>
                                        <div class="product-card-body">
                                            <p class="product-brand">{{ $productItem->brand }}</p>
                                            <h5 class="product-name">
                                                <a
                                                    href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}">
                                                    {{ $productItem->name }}
                                                </a>
                                            </h5>
                                            <div>
                                                <span class="selling-price">$
                                                    {{ number_format($productItem->selling_price) }}</span>
                                                <span class="original-price">$
                                                    {{ number_format($productItem->original_price) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @else
                    <div class="col-md-12">
                        <div class="p-2">
                            <h5>No New Arrivals Available</h5>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Featured Products
                        <a href="{{ url('featured-products') }}" class="btn btn-sm text-white bg-success float-end">Yana</a>
                    </h4>
                    <div class="underline mb-4"></div>
                </div>
                @if ($featuredProducts)
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme four-carousel">
                            @foreach ($featuredProducts as $productItem)
                                <div class="item">
                                    <div class="product-card shadow">
                                        <div class="product-card-img">
                                            <label class="stock bg-success">New</label>

                                            @if ($productItem->productImages->count() > 0)
                                                <a
                                                    href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}">
                                                    <img src="{{ asset($productItem->productImages[0]->image) }}"
                                                        alt="{{ $productItem->name }}" class="product-image">
                                                </a>
                                            @endif

                                        </div>
                                        <div class="product-card-body">
                                            <p class="product-brand">{{ $productItem->brand }}</p>
                                            <h5 class="product-name">
                                                <a
                                                    href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}">
                                                    {{ $productItem->name }}
                                                </a>
                                            </h5>
                                            <div>
                                                <span class="selling-price">$
                                                    {{ number_format($productItem->selling_price) }}</span>
                                                <span class="original-price">$
                                                    {{ number_format($productItem->original_price) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @else
                    <div class="col-md-12">
                        <div class="p-2">
                            <h5>No Featured Products Available</h5>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>


    <!-- Products End -->




    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5" id="footer">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">Get In Touch</h5>
                <p class="mb-4">No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et et dolor sed
                    dolor. Rebum tempor no vero est magna amet no</p>
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
                    <div class="col-md-4">
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
                        <h6 class="text-secondary text-center mt-4 mb-3">Follow Us</h6>
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


        <!-- Footer End -->


        <a href="#" class="btn btn-success back-to-top"><i class="fa fa-angle-double-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('assets/lib/easing/easing.min.js') }}"></script>
        <script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <!-- Contact Javascript File -->
        <script src="{{asset('assets/mail/jqBootstrapValidation.min.js') }}"></script>
        <script src="{{asset('assets/mail/contact.js') }}"></script>
        <script src="{{asset('assets/js/shopcart2.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('assets/js/main.js') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script>
            $(document).ready(function() {
                $(".owl-carousel").owlCarousel({
                    items: 2, // Show one item per slide on mobile devices
                    loop: true,
                    nav: true,
                    dots: false,
                    margin: 15,
                    navText: [
                        "<i class='fas fa-chevron-left'></i>",
                        "<i class='fas fa-chevron-right'></i>"
                    ],
                    responsive: {
                        768: {
                            items: 4 // Show four items per slide on laptops
                        }
                    }
                });
            });
        </script>
</body>

</html>
</body>

</html>
