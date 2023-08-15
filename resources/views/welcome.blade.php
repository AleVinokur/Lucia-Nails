<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nombre del Emprendimiento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

    <style>
        .img-logo {
            width: 8rem;
            height: 5rem;
        }

        .navbar {
            background: rgb(198, 196, 237);
            background: linear-gradient(90deg, rgba(198, 196, 237, 1) 0%, rgba(223, 223, 232, 1) 32%, rgba(144, 209, 223, 1) 80%, rgba(185, 217, 223, 1) 100%);

        }

        .carousel-item img {
            width: 50%;

        }

        #carouselExample {
            width: 60%;
            margin: 0 auto;
            margin-top: 20px;
        }
    </style>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg ">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img class="img-logo" src="{{ asset('img/logo.png') }}" alt="Logo">
            </a>

            <!-- Carrito -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">
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



    <script src="ruta/de/tu/bootstrap.min.js"></script>
    <script src="ruta/de/tu/fontawesome.min.js"></script>
</body>

</html>
