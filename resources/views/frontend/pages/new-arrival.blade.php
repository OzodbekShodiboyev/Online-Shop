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
    @livewireStyles
    <title>New Arrival</title>
</head>
<body>
    <header>
        <!-- Navbar -->
        @include('layouts.navbar')

        <div class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4>New Arrivals</h4>
                        <div class="underline mb-4"></div>
                    </div>
                    <div class="col-12">
                        <div id="trendingCarousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                @php
                                    $totalProducts = count($trendingProducts);
                                    $numColumns = 4;
                                    $numRows = ceil($totalProducts / $numColumns);
                                @endphp
                                @for ($i = 0; $i < $numRows; $i++)
                                    <li data-target="#trendingCarousel" data-slide-to="{{ $i }}"
                                        class="{{ $i === 0 ? 'active' : '' }}"></li>
                                @endfor
                            </ol>
                            <div class="carousel-inner">
                                @php $counter = 0; @endphp
                                @for ($row = 0; $row < $numRows; $row++)
                                    <div class="carousel-item{{ $row === 0 ? ' active' : '' }}">
                                        <div class="row">
                                            @for ($col = 0; $col < $numColumns; $col++)
                                                @php
                                                    $index = ($row * $numColumns + $col) % $totalProducts;
                                                    $productItem = $trendingProducts[$index];
                                                @endphp
                                                <div class="col-md-3">
                                                    <div class="card">
                                                        <div class="card-img-top">
                                                            <label class="stock bg-success">New</label>
                                                            @if ($productItem->productImages->count() > 0)
                                                                <a href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}">
                                                                    <img src="{{ asset($productItem->productImages[0]->image) }}"
                                                                        alt="{{ $productItem->name }}" class="product-image" width="250px">
                                                                </a>
                                                            @endif
                                                        </div>
                                                        <div class="card-body">
                                                            <p class="card-text">{{ $productItem->brand }}</p>
                                                            <h5 class="card-title">
                                                                <a href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}">
                                                                    {{ $productItem->name }}
                                                                </a>
                                                            </h5>
                                                            <div class="d-flex justify-content-between">
                                                                <span class="selling-price">
                                                                    ${{ number_format($productItem->selling_price) }}
                                                                </span>
                                                                <span class="original-price">
                                                                    ${{ number_format($productItem->original_price) }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endfor
                                        </div>
                                    </div>
                                @endfor
                            </div>
                            
                        </div>
                        
                    </div>
                    <a class="carousel-control-prev" href="#trendingCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#trendingCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        
    </header>

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