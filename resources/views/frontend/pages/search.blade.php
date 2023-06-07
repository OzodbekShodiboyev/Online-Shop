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
    <title>@lang('public.search')</title>
</head>

<body>
    <header>
        <!-- Navbar -->
        @include('layouts.navbar')

        <div class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <h4>@lang('public.search_result')</h4>
                        <div class="underline mb-4"></div>
                    </div>

                    @forelse ($searchProducts as $item)
                        <div class="col-md-10">
                            <div class="product-card">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="product-card-img">
                                            @if ($item->productImages->count() > 0)
                                                <a
                                                    href="{{ url('/collections/' . $item->category->slug . '/' . $item->slug) }}">
                                                    <img src="{{ asset($item->productImages[0]->image) }}"
                                                        alt="{{ $item->name }}" class="product-image">
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="product-card-body">
                                            @if ($item->category)
                                                <p class="product-brand">{{ $item->category->name }}</p>
                                                <h5 class="product-name">
                                                    <a
                                                        href="{{ url('/collections/' . $item->category->slug . '/' . $item->slug) }}">
                                                        {{ $item->name }}
                                                    </a>
                                                </h5>
                                                <p style="height: 45px; overflow: hidden">
                                                    <b>Tavsif</b> {{ $item->description }}
                                                </p>
                                            @elseif ($item instanceof App\Models\Brand)
                                                <p class="product-brand">{{ $item->name }}</p>
                                            @endif
                                            <div>
                                                <span
                                                    class="selling-price">${{ number_format($item->selling_price) }}</span>
                                                <span
                                                    class="original-price">${{ number_format($item->original_price) }}</span>
                                            </div>
                                            <a href="{{ url('/collections/' . $item->category->slug . '/' . $item->slug) }}"
                                                class="btn btn-outline-primary">Ko'rish</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-md-12 p-2">
                            <h5>@lang('public.no_prod')</h5>
                        </div>
                    @endforelse


                    <div class="text-center d-flex justify-content-center align-items-center">
                        {{ $searchProducts->appends(request()->input())->links() }}
                    </div>

                </div>
            </div>
        </div>


    </header>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <!-- Contact Javascript File -->
    <script src="{{asset('assets/mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{asset('assets/mail/contact.js')}}"></script>
    <script src="{{asset('assets/js/shopcart2.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>
