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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-ezgZDJ0kSOi1T+M2kz7P8WqL7pqR0ZQOeXta8zfl6iPhNIyXsl5F0bG7/4jOoG3K" crossorigin="anonymous">


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



       <!-- Carousel Start -->
       <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-8 mt-4">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach ($slider as $key => $sliderItem)
                            <li data-target="#header-carousel" data-slide-to="{{ $key }}" {{ $key == 0 ? 'class=active' : '' }}></li>
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
                                        href="{{ url('/collections') }}">@lang('public.buy')</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-4">
                @foreach ($slider as $key => $sliderItem)
                    @if ($key < 2)
                        <!-- Add this condition to limit the loop to two iterations -->
                        <div class="product-offer" style="height: 200px; margin-bottom: 30px">
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
    <!-- Carousel End -->


    
    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-success m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0"> @lang('public.any_product') </h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-success m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0"> @lang('public.fast_del') </h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-success m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0"> @lang('public.delivery') </h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-success m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0"> @lang('public.call_centre') </h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->


     <!-- Categories Start -->
     <div class="container-fluid pt-5">
        <h4 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3"> @lang('public.all_category') </span> 
            <a href="{{ url('collections') }}" class="btn btn-sm text-white bg-success float-end ">@lang('public.again')</a></h2>
        <div class="row px-xl-5 pb-3">

            @forelse ($categories->take(12) as $categoryItem)
                @php
                    $category_count = $categoryItem->products()->count();
                @endphp
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <a class="text-decoration-none" href="{{ url('/collections/' . $categoryItem->slug) }}">
                        <div class="cat-item d-flex align-items-center mb-4">
                            <div class="overflow-hidden" style="width: 100px; height: 100px;">
                                <img class="img-fluid" src="{{ asset("Uploads/Category/$categoryItem->image") }}" alt="">
                            </div>
                            <div class="flex-fill pl-3">
                                <h6>{{ $categoryItem->name }}</h6>
                                @if ($category_count > 0)
                                    <small class="text-body">{{ $category_count }} @lang('public.products'){{ trans_choice('public.lar', $category_count) }}</small>
                                @else
                                    <small class="text-body">{{ $category_count }} @lang('public.products')</small>
                                @endif
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <div class="col-md-12">
                    <div class="p-2">
                        <h4 class="text-center">{{ $categoryItem->name }} @lang('no')</h4>
                    </div>
                </div>
            @endforelse

        </div>
    </div>
    <!-- Categories End -->


     <!-- Products Start -->
     <div class="container-fluid pt-5 pb-3">
        <h2 class=" position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3"> @lang('public.pop_prod')  </span></h2> 
        <div class="row px-xl-5">

            @if ($trendingProducts)
            @php $count = 0; @endphp
            @foreach ($trendingProducts as $productItem)
                @if ($count < 12)
                    <div class="col-lg-2 col-md-4 col-sm-6 pb-1" style="">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <label class="stock bg-success m-2 p-1 text-white rounded" style="font-size: 12px">@lang('public.new')</label>
                                @if ($productItem->productImages->count() > 0)
                                    <img class="img-fluid w-100" src="{{ asset($productItem->productImages[0]->image) }}" alt="" >
                                @endif
                                <div class="product-action">
                                    <a class="btn btn-outline-dark btn-square" href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}"><i class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}"> {{ $productItem->name }} </a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5> {{ number_format($productItem->selling_price) }} UZS</h5><h6 class="text-muted ml-2"><del>{{ number_format($productItem->original_price) }} UZS</del></h6>
                                </div>
                                <div class="d-flex align-items-center justify-content-center mb-1">
                                    <!-- Add any additional code here -->
                                </div>
                            </div>
                        </div>
                    </div>
                    @php $count++; @endphp
                @else
                    @break
                @endif
            @endforeach
            
        @else
            <div class="col-md-12">
                <div class="p-2">
                    <h5>@lang('public.no_prod')</h5>
                </div>
            </div>
        @endif

        </div>
    </div>
    <!-- Products End -->


        <!-- Offer Start -->
        <div class="container-fluid pt-5 pb-3">
            <div class="row px-xl-5">
                @foreach ($slider as $key => $sliderItem)
                @if ($key < 2)
                    <div class="col-md-6 mt-1">
                        <div class="product-offer mb-30" style="height: 300px;">
                            <img class="img-fluid" src="{{ asset("$sliderItem->image") }}" alt="">
                            <div class="offer-text">
                                <h6 class="text-white text-uppercase">{{ $sliderItem->description }}</h6>
                                <h3 class="text-white mb-3">{{ $sliderItem->title }}</h3>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
            </div>
        </div>
        <!-- Offer End -->


        <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        @if ($newArrivalsProducts)
        <div class="col-md-12">
            <h4 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">@lang('public.new_prod')</span><a href="{{ url('new-arrivals') }}"
                class="btn btn-sm text-white bg-success float-end">@lang('public.again')</a></h4>
            <div class="underline mb-4"></div>
        </div>

        <div class="row px-xl-5">

            @foreach ($newArrivalsProducts->take(12) as $productItem)
            <div class="col-lg-2 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <label class="stock bg-success m-2 p-1 text-white rounded" style="font-size: 12px">@lang('public.new')</label>
                        @if ($productItem->productImages->count() > 0)
                            <a
                                href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}">
                                <img class="img-fluid w-100" src="{{ asset($productItem->productImages[0]->image) }}" alt="{{ $productItem->name }}">
                            </a>
                        @endif
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}"><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}">{{ $productItem->name }}</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5> {{ number_format($productItem->selling_price) }} UZS</h5><h6 class="text-muted ml-2"><del> {{ number_format($productItem->original_price) }} UZS</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    @else
        <div class="col-md-12">
            <div class="p-2">
                <h5>@lang('public.no_prod')</h5>
            </div>
        </div>
    @endif
    </div>
    <!-- Products End -->

    <div id="#footer">
        @include('layouts.footer')

    </div>

@livewireScripts

    <!-- JavaScript Libraries -->
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
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
</body>

</html>







    {{-- <header>
        @include('layouts.navbar')
    </header> --}}



    <!-- Slider Start -->
    {{-- <div class="container-fluid mb-3">
        <div class="row px-xl-5 ">
            <div class="col-lg-8">
                <div id="header-carousel" class="carousel slide carousel-fade mb-3 mb-lg-0" data-ride="carousel"
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
                                            href="{{ url('/collections') }}">@lang('public.buy')</a>
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
                        <div class="product-offer" style="height: 200px; margin-bottom: 30px">
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
    </div> --}}
    <!-- Slider End -->


    <!-- Featured Start -->
    {{-- <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-success m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">@lang('public.any_product')</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-success m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">@lang('public.fast_del')</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-success m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">@lang('public.delivery')</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-success m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">@lang('public.call_centre')</h5>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Featured End -->

    {{-- <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>@lang('public.pop_prod')</h4>
                    <div class="underline mb-4"></div>
                </div>
                @if ($trendingProducts)
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme">
                            @foreach ($trendingProducts as $productItem)
                                <div class="item">
                                    <div class="product-card shadow">
                                        <div class="product-card-img">
                                            <label class="stock bg-success">@lang('public.new')</label>
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
                                                <span class="selling-price">
                                                    {{ number_format($productItem->selling_price) }} UZS</span>
                                                <span class="original-price">
                                                    {{ number_format($productItem->original_price) }} UZS</span>
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
                            <h5>@lang('public.no_prod')</h5>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div> --}}

    {{-- <div class="py-5 bg-white">
        <div class="container">
            <div class="row">
                @if ($newArrivalsProducts)
                    <div class="col-md-12">
                        <h4>@lang('public.new_prod')
                            <a href="{{ url('new-arrivals') }}"
                                class="btn btn-sm text-white bg-success float-end">@lang('public.again')</a>
                        </h4>
                        <div class="underline mb-4"></div>
                    </div>

                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme four-carousel">
                            @foreach ($newArrivalsProducts as $productItem)
                                <div class="item">
                                    <div class="product-card shadow">
                                        <div class="product-card-img">
                                            <label class="stock bg-success">@lang('public.new')</label>

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
                                                <span class="selling-price">
                                                    {{ number_format($productItem->selling_price) }} UZS</span>
                                                <span class="original-price">
                                                    {{ number_format($productItem->original_price) }} UZS</span>
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
                            <h5>@lang('public.no_prod')</h5>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div> --}}
{{-- 
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>@lang('public.sorted_prod')
                        <a href="{{ url('featured-products') }}"
                            class="btn btn-sm text-white bg-success float-end">@lang('public.again')</a>
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
                                                <span class="selling-price">
                                                    {{ number_format($productItem->selling_price) }} UZS</span>
                                                <span class="original-price">
                                                    {{ number_format($productItem->original_price) }} UZS</span>
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
                            <h5>@lang('public.no_prod')</h5>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div> --}}


    <!-- Products End -->




    <!-- Footer Start -->
    {{-- @include('layouts.footer') --}}

    <!-- Footer End -->