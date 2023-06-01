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
</head>

<body>
    <header>
        @include('layouts.navbar')
        <div class="py-3 py-md-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="shadow bg-white p-3">
                            <h4>
                                <i class="fa fa-shopping-cart text-success"></i>Mening buyurtmalar ro'yxatim
                                <a href="{{ url('orders') }}" class="btn btn-danger btn-sm float-end">Orqaga</a>
                            </h4>
                            <hr>
    
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>Buyurtma tafsilotlari</h5>
                                        <hr>
    
                                        <h6>Buyurtma raqami: {{ $order->id }}</h6>
                                        <h6>Kuzatuv raqami: {{ $order->tracking_no }}</h6>
                                        <h6>Buyurtma vaqti: {{ $order->created_at->format('d-m-Y h:i A') }}</h6>
                                        <h6>To'lov usuli: {{ $order->payment_mode }}</h6>
                                        <h6 class="border p-2 text-success">
                                            Buyurtma haqidagi xabar: <span class="text-uppercase">{{ $order->status_message }}</span> 
                                        </h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Foydalanuvchi ma'lumotlari</h5>
                                        <hr>
        
                                        <h6>To'liq ismi: {{ $order->fullname }}</h6>
                                        <h6>Elektron pochtasi: {{ $order->email }}</h6>
                                        <h6>Telefon raqami: {{ $order->phone }}</h6>
                                        <h6>Manzili: {{ $order->address }}</h6>
                                        <h6>Pin code: {{ $order->pincode }}</h6>
                                    </div>
                                </div>
        
                                <br/>
                                <h5>Buyurtam qilingan mahsulotlar</h5>
                                <hr>
    
                                <div class="table-responsive">
                                    <table class="table table-bordered table-stripped">
                                        <thead>
                                            <tr>
                                                <th>Item ID</th>
                                                <th>Rasm</th>
                                                <th>Mahsulot</th>
                                                <th>Narxi</th>
                                                <th>Soni</th>
                                                <th>Umumiy</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $totalPrice = 0;
                                            @endphp
                                            @foreach ($order->orderItems as $orderItem)
                                                <tr>
                                                    <td width="10%">{{ $orderItem->id }}</td>
                                                    <td width="10%">
                                                        
                                                    @if ($orderItem->product->productImages)
                                                        <img src="{{ asset($orderItem->product->productImages[0]->image) }}" 
                                                        style="width: 50px; height: 50px" alt="">
                                                            @else
                                                                <img src="" style="width: 50px; height: 50px" alt="">                                                
                                                    @endif    
                                                    </td>
                                                    <td>
                                                        {{ $orderItem->product->name }}
                                                        @if ($orderItem->productColor)
                                                            @if ($orderItem->productColor->color)
                                                                <span>- Rangi: {{ $orderItem->productColor->color->name }}</span>
                                                            @endif
                                                        @endif
                                                    </td>
                                                    <td width="10%">{{ $orderItem->price }}</td>
                                                    <td width="10%">{{ $orderItem->quantity }}</td>
                                                    <td width="10%" class="fw-bold">${{ $orderItem->quantity * $orderItem->price }}</td>
                                                    @php
                                                        $totalPrice += $orderItem->quantity * $orderItem->price ;
                                                        $totalAllocation = $totalPrice*(($orderItem->product->allocation_percentage * $orderItem->quantity)/100);
                                                    @endphp
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <td colspan="5" class="fw-bold">Umumiy Summa:</td>
                                                <td colspan="1" class="fw-bold">
                                                    ${{ $totalPrice }}
                                                </td>
                                            </tr>
                                           
                                        </tbody>
                                    </table>
                                </div> 
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
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
