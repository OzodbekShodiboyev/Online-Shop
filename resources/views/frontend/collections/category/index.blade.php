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
        <div class="container">
            <h2>All categories</h2>
            <div class="col-md-12">
                <div class="row">
                    @forelse ($categories as $categoryItem)
                    <a class="text-decoration-none text-center " href="{{ url('/collections/'.$categoryItem->slug) }}">
                        <div class="col-md-4 mb-4">
                            <div class="card product-card">
                                <div class="product-card-img">
                                            <img src="{{ asset("Uploads/Category/$categoryItem->image") }}"
                                                alt="{{ $categoryItem->name }}" class="product-img">
                                </div>
                                <div class="card-body">
                                    <h5 class="product-name">
                                        <a href="{{ url('/collections/'.$categoryItem->slug) }}">
                                            {{ $categoryItem->name }}
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </a>
                    @empty
                        <div class="col-md-12">
                            <div class="p-2">
                                <h4 class="text-center">No Products for {{ $category->name }}</h4>
                            </div>
                        </div>
                    @endforelse
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