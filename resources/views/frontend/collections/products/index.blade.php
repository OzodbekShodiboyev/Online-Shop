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
            @include('layouts.navbar')
            <div class="py-3 py-md-5 bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="mb-4">Our Products</h4>
                        </div>
            
                        <livewire:frontend.product.index :category="$category" />
                        <div class="col-md-9 d-grid mb-4">
                            @forelse ($products as $productItem)
                                    <div class="card m-2" style="width: 18rem;">
                                        <div class="product-card-img">
                                            @if ($productItem->quantity > 0)
                                                <button class="btn btn-sm bg-success text-light">In Stock</button>
                                            @else
                                                <button class="btn btn-sm bg-danger text-light">Out of Stock</button>
                                            @endif
                                            @if ($productItem->productImages->count() > 0)
                                                <a
                                                    href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}">
                                                    <img src="{{ asset($productItem->productImages[0]->image) }}"
                                                        alt="{{ $productItem->name }}" width="100px" height="200px">
                                                </a>
                                            @endif
                                        </div>
                                        <div class="card-body">
                                            <p class="product-brand">{{ $productItem->brand }}</p>
                                            <h5 class="product-name">
                                                <a
                                                    href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}">
                                                    {{ $productItem->name }}
                                                </a>
                                            </h5>
                                            <div>
                                                <span class="selling-price">{{ $productItem->selling_price }}</span>
                                                <span class="original-price">{{ $productItem->original_price }}</span>
                                            </div>
                                        </div>
                                    </div>
                            @empty
                                <div class="col-md-12">
                                    <div class="p-2">
                                        <h4>No Products for {{ $category->name }}</h4>
                                    </div>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
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
