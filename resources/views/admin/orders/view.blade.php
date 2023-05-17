<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    @livewireStyles
</head>


<body id="page-top">
    <div id="wrapper">
        @include('admin.layouts.sidebar')
        <div class="py-3 col-md-10">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="shadow bg-white p-3">
                            <h4>
                                <i class="fa fa-shopping-cart text-success"></i> My Order Details
                                <a href="{{ url('admin/orders') }}" class="btn btn-danger btn-sm float-end">Back</a>
                                <a href="{{ url('admin/invoice/'.$order->id.'/generate') }}" class="btn btn-primary btn-sm float-end">Download Invoice</a>
                                <a href="{{ url('admin/invoice/'.$order->id) }}" target="_blank" class="btn btn-warning btn-sm float-end">View Invoice</a>
                            </h4>
                            <hr>
    
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>Order Details</h5>
                                        <hr>
    
                                        <h6>Order Id: {{ $order->id }}</h6>
                                        <h6>Tracking Id/No.: {{ $order->tracking_no }}</h6>
                                        <h6>Ordered Date: {{ $order->created_at->format('d-m-Y h:i A') }}</h6>
                                        <h6>Payment Mode: {{ $order->payment_mode }}</h6>
                                        <h6 class="border p-2 text-success">
                                            Order Status Message: <span class="text-uppercase">{{ $order->status_message }}</span> 
                                        </h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>User Details</h5>
                                        <hr>
        
                                        <h6>Fullname: {{ $order->fullname }}</h6>
                                        <h6>Email Id: {{ $order->email }}</h6>
                                        <h6>Phone: {{ $order->phone }}</h6>
                                        <h6>Address: {{ $order->address }}</h6>
                                        <h6>Pin code: {{ $order->pincode }}</h6>
                                    </div>
                                </div>
        
                                <br/>
                                <h5>Order Items</h5>
                                <hr>
    
                                <div class="table-responsive">
                                    <table class="table table-bordered table-stripped">
                                        <thead>
                                            <tr>
                                                <th>Item ID</th>
                                                <th>Image</th>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Total</th>
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
                                                                <span>- Color: {{ $orderItem->productColor->color->name }}</span>
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
                                                <td colspan="5" class="fw-bold">Total Amount:</td>
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
                <div class="card border mt-3">
                    <div class="card-body">
                        <h4>Order Process (Order Status Updates)</h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-5">
                                <form action="{{ url('admin/orders/'.$order->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
    
                                    <label style="margin-bottom: 5px;">Update Your Order Status</label>
                                    <div class="input-group">
                                        <select name="order_status" class="form-select">
                                            <option value="in Progress" {{ Request::get('status') == 'in progress' ? 'selected':'' }}>In Progress</option>
                                            <option value="completed" {{ Request::get('status') == 'completed' ? 'selected':'' }}>Completed</option>
                                            <option value="pending" {{ Request::get('status') == 'pending' ? 'selected':'' }}>Pending</option>
                                            <option value="cancelled" {{ Request::get('status') == 'cancelled' ? 'selected':''}}>Cancelled</option>
                                            <option value="out-for-delivery" {{ Request::get('status') == 'out-for-delivery' ? 'selected':'' }}>Out for delivery</option>
                                        </select>
    
                                        <button type="submit" class="btn btn-primary text-white">Update</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <br/>
                                <h4 class="mt-3" >Current Order Status: <span class="text-uppercase">{{ $order->status_message }} </span></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
