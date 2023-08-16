<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Love Potion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg ">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img class="img-logo" src="{{ asset('img/logo.png') }}" alt="Logo">
            </a>

            <!-- Carrito -->
            <ul class="navbar-nav ml-auto carrito">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cart.index') }}">
                        <img src="{{ asset('img/carrito.png') }}" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/portada1.jpg') }}" class="d-block w-100" alt="Producto 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/portada2.jpg') }}" class="d-block w-100" alt="Producto 2">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container mt-4 d-flex flex-wrap" id="productCatalog">
        <div>
            <!-- Los productos se generarán aquí automáticamente -->
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/fontawesome.js') }}"></script>
    <script>
        const baseUrl = "{{ url('/') }}";
    </script>
    <script src="{{ asset('js/products.js') }}"></script>

</body>

</html>
