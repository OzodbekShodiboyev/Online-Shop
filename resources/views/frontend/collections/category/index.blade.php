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

    <!-- Libraries Stylesheet -->
    <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/css/navbar.css" rel="stylesheet"> 
    <link href="assets/css/kabinet.css" rel="stylesheet">
    <!--<link href="/css/profil.css" rel="stylesheet">-->
    <link href="assets/css/shopcart2.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <header>

        @include('layouts.navbar')
        <h2>All categories</h2>
        <div class="d-flex">
            
            @foreach ($categories as $categoryItem)
                
            <!-- <div class="row">
            <div class="col-sm-6">
            <div class="card" style="width: 18rem; margin: 1%">
            <a href="{{ url('/collections/'.$categoryItem->slug) }}">
                <img src="{{ asset("Uploads/Category/$categoryItem->image") }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$categoryItem->name}}</h5>
                </div>
            </a>
            </div>
            </div>
            </div> -->

            <a class="text-decoration-none text-center " href="{{ url('/collections/'.$categoryItem->slug) }}">
                    <div class="card m-3 float-left" style="width: 15.4rem; height:325px">
                        <img src="{{ asset("Uploads/Category/$categoryItem->image") }}" class="card-img-top"
                            width="230px" height="230px" alt="{{ $categoryItem->name }}">
                        <div class="card-body">
                            <h3 class="text-center text-decoration-none text-dark hover-text-dec-none" style="font-size:19  px">{{$categoryItem->name}}</h3>
                        </div>
                    </div>
                </a>
                
            @endforeach
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