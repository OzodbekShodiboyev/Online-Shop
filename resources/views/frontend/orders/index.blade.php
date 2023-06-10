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
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <title>{{ config('app.name', 'BadommShop') }}</title>
    @livewireStyles
</head>

<body>
    @include('layouts.navbar')
    <div style="min-height: 380px;">
        <h4 class="mb-4 mt-5 text-center">
            @lang('public.order')
        </h4>
        <hr>
        <div class="container-xxl table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <th>@lang('public.my_order_id')</th>
                    <th>@lang('public.kuzatuv')</th>
                    <th>@lang('public.name_order')</th>
                    <th>@lang('public.payment')</th>
                    <th>@lang('public.order_time')</th>
                    <th>@lang('public.order_status')</th>
                    <th>@lang('public.again')</th>
                </thead>
                <tbody>
                    @forelse ($orders as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->tracking_no }}</td>
                            <td>{{ $item->fullname }}</td>
                            <td>{{ $item->payment_mode }}</td>
                            <td>@lang('public.no_time')</td>
                            <td>
                                @if ($item->status_message == 'cancelled')
                                    @lang('public.cancelled')
                                @endif
                            </td>
                            <td>
                                <a href="{{ url('orders/' . $item->id) }}"
                                    class="btn btn-primary btn-sm">@lang('public.again')</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">@lang('public.no_order')</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <div>
                {{ $orders->links() }}
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
    <script>
        window.addEventListener('message', event => {
            alertify.set('notifier', 'position', 'top-right');
            alertify.notify(event.detail.text, event.detail.type);
        });
    </script>
    @livewireScripts
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
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
