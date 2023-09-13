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
            font-family: "Comic Sans MS";
        }
    </style>
</head>

<body>


    <div class="container mt-4">
        <div class="card p-3">
            <div class="text-center">
                <h2 class="text-center mt-2 fw-bold" id="sar">
                    <center>TopEsExpress</center>
                </h2>
                <center>
                    <span>Invoice Id: #{{ $order->id }}</span> <br>
                    <span>Date: {{ date('d / m / Y') }}</span> <br>
                    <span class="">Address: {{$order->address}}</span> <br>
                </center>
            </div>

            <table class="border-none" style="border:none">
                <thead class="border-none ">

                    <th class="fw-border" colspan="2" style="text-align: left"><b><br>User Details
                            <hr>
                        </b>
                    </th>
                </thead>
                <tbody>
                    <tr>
                        <td style="text-align: left">Full Name:</td>
                        <td class="float-end" style="text-align: right">{{ $order->fullname }}</td>
                    </tr>
                    <tr>
                        <td style="text-align: left">Email:</td>
                        <td class="float-end" style="text-align: right">{{ $order->email }}</td>
                    </tr>
                    <tr>
                        <td style="text-align: left">Phone:</td>
                        <td class="float-end" style="text-align: right">{{ $order->phone }}</td>
                    </tr>
                    <tr>
                        <td style="text-align: left">Address:</td>
                        <td class="float-end" style="text-align: right">{{ $order->address }}</td>
                    </tr>
                    <tr>
                        <td style="text-align: left">Pin code:</td>
                        <td class="float-end" style="text-align: right">{{ $order->pincode }}</td>
                    </tr>
                </tbody>
                <thead class="border-none">
                    <th colspan="2" style="text-align: left"><b>
                        <br>
                            Order Details
                            <hr>
                        </b>

                    </th>

                </thead>

                <tbody class="border-none float-left">
                    <tr>

                        <td style="text-align: left">Order Id:</td>
                        <td class="float-end" style="text-align: right">{{ $order->id }}</td>
                    </tr>
                    <tr>
                        <td style="text-align: left"> Tracking Id/No.:</td>
                        <td class="float-end" style="text-align: right">{{ $order->tracking_no }}</td>
                    </tr>
                    <tr>
                        <td style="text-align: left">Ordered Date:</td>
                        <td class="float-end" style="text-align: right">{{ $order->created_at->format('d-m-Y H:i:s') }}
                        </td>
                    </tr>

                    <tr>
                        <td style="text-align: left">Payment Mode:</td>
                        <td class="float-end" style="text-align: right">{{ $order->payment_mode }}</td>
                    </tr>
                </tbody>
                <thead class="border-none">
                    <th colspan="2" style="text-align: left">
                        <b>
                            <br>
                            Order Items
                            <hr>
                        </b>
                    </th>

                </thead>
                @php
                    $totalPrice = 0;
                    $totalAllocation = 0; // Initialize outside the loop
                    $totalRevenue = 0;
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
                            <td class="float-end" style="text-align: right">{{ $orderItem->quantity }}x
                                {{ $orderItem->price }} =
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
                    <th colspan="2" style="text-align: left"><b>
                        <br>
                            Total amount
                            <hr>
                        </b>
                    </th>

                </thead>
                <tbody>
                    <tr>
                        <td>Total Allocation Amount:</td>
                        <td class="float-end" style="text-align: right">
                            {{ $totalAllocation }} <span>UZS</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Total Revenue Amount:</td>
                        <td class="float-end" style="text-align: right">
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
                            <h3 class="fw-bold"><b>Total Amount:</b></h3>
                        </td>
                        <td>
                            <h3 class="fw-bold float-end" style="text-align: right">{{ $totalPrice }}
                                <span>UZS</span></h3>
                        </td>
                    </tr>

                </tbody>

            </table>
        </div>
    </div>

</body>

</html>