<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Invoice #{{ $order->id }}</title>



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <link href="https://fonts.googleapis.com/css2?family=Saira+Semi+Condensed:wght@400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Saira+Semi+Condensed:wght@900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Economica:ital,wght@1,700&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: 'Saira Semi Condensed', sans-serif;
        }
    </style>
</head>

<body>


    <div class="container mt-4">
        <div class="card p-3">
            <div class="text-center">
                <h2 class="text-center mt-2 fw-bold" id="sar">BADOMM SHOP</h2>
                <span>Invoice Id: #{{ $order->id }}</span> <br>
                <span>Date: {{ date('d / m / Y') }}</span> <br>
                <span class="">Address: Manila City</span> <br>
            </div>

            <table class=" border-none" style="border:none">
                <thead class="border-none ">
                    <hr>
                    <th class="fw-border" colspan="2"><b>User Details</b>
                    </th>
                </thead>
                <tbody>
                    <tr>
                        <td>Full Name:</td>
                        <td class="float-end">{{ $order->fullname }}</td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td class="float-end">{{ $order->email }}</td>
                    </tr>
                    <tr>
                        <td>Phone:</td>
                        <td class="float-end">+{{ $order->phone }}</td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td class="float-end">{{ $order->address }}</td>
                    </tr>
                    <tr>
                        <td>Pin code:</td>
                        <td class="float-end">{{ $order->pincode }}</td>
                    </tr>
                </tbody>
                <thead class="border-none">
                    <th colspan="2"><b>
                            <hr>
                            Order Details
                        </b>

                    </th>

                </thead>

                <tbody class="border-none float-left">
                    <tr>

                        <td>Order Id:</td>
                        <td class="float-end">{{ $order->id }}</td>
                    </tr>
                    <tr>
                        <td>Tracking Id/No.:</td>
                        <td class="float-end">{{ $order->tracking_no }}</td>
                    </tr>
                    <tr>
                        <td>Ordered Date:</td>
                        <td class="float-end">{{ $order->created_at->format('d-m-Y H:i:s') }}</td>
                    </tr>

                    <tr>
                        <td>Payment Mode:</td>
                        <td class="float-end">{{ $order->payment_mode }}</td>
                    </tr>
                </tbody>
                <thead class="border-none">
                    <th colspan="2">
                        <b>
                            <hr>
                            Order Items
                        </b>
                    </th>

                </thead>
                @php
                    $totalPrice = 0;
                @endphp
                <tbody>
                    @foreach ($order->orderItems as $orderItem)
                        <tr>
                            <td>
                                - {{ $orderItem->product->name }}
                                @if ($orderItem->productColor)
                                    @if ($orderItem->productColor->color)
                                        <span> - {{ $orderItem->productColor->color->name }}</span>
                                    @endif
                                @endif
                            </td>
                            <td class="float-end">{{ $orderItem->quantity }}x {{ $orderItem->price }} =
                                {{ $orderItem->quantity * $orderItem->price }} <span>UZS</span></td>
                            </td>
                            @php
                                $totalPrice += $orderItem->quantity * $orderItem->price;
                                $totalAllocation = $totalPrice * (($orderItem->product->allocation_percentage * $orderItem->quantity) / 100);
                                $totalRevenue = $totalPrice - $totalPrice * (($orderItem->product->allocation_percentage * $orderItem->quantity) / 100);
                            @endphp
                        </tr>
                    @endforeach
                </tbody>
                <thead class="border-none">
                    <th colspan="2" class=""><b>
                            <hr>
                            Total amount
                        </b>
                    </th>

                </thead>
                <tbody>
                    <tr>
                        <td>Total Allocation Amount:</td>
                        <td class="float-end">
                            {{ $totalAllocation }} <span>UZS</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Total Revenue Amount:</td>
                        <td class="float-end">
                            {{ $totalRevenue }} <span>UZS</span>
                        </td>
                    </tr>


                </tbody>
                <thead class="border-none">
                    <th colspan="2">
                        <hr>
                    </th>

                </thead>
                <tbody class="fw-bold">
                    <tr>
                        <td>
                            <h5 class="fw-bold">Total Amount:</h5>
                        </td>
                        <td>
                            <h5 class="fw-bold float-end">{{ $totalPrice }} <span>UZS</span></h5>
                        </td>
                    </tr>

                </tbody>

            </table>
        </div>
    </div>

</body>

</html>
