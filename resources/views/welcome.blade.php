<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nombre del Emprendimiento</title>
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

    <div class="container mt-4 d-flex flex-wrap" id="productCatalog">
        <div>
            <!-- Los productos se generarán aquí automáticamente -->
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/fontawesome.js') }}"></script>

    <script>
        $(document).ready(function() {
            const products = [{
                    name: 'Producto 1',
                    price: 19.99,
                    image: 'img/producto1.jpg'
                },
                {
                    name: 'Producto 2',
                    price: 29.99,
                    image: 'img/producto2.webp'
                },
                {
                    name: 'Producto 3',
                    price: 29.99,
                    image: 'img/producto3.jfif'
                },
                {
                    name: 'Producto 4',
                    price: 29.99,
                    image: 'img/producto4.jfif'
                },
                {
                    name: 'Producto 5',
                    price: 29.99,
                    image: 'img/producto5.jpg'
                },
                {
                    name: 'Producto 6',
                    price: 29.99,
                    image: 'img/producto6.jpg'
                },

            ];

            const productCatalog = $("#productCatalog");
            products.forEach((product, index) => {
                const card = `
        <div class="producto col-md-4 mb-4 mt-5">
            <img src="{{ asset('${product.image}') }}" class="card-img-top" alt="${product.name}">
            <div class="card-body d-flex flex-column align-items-center text-center">
                <p class="card-price">$${product.price}</p>
                <h5 class="card-title">${product.name}</h5>
                <div class="input-group mb-3">
                    <button class="btn btn-outline-secondary addToCartBtn" data-index="${index}">Agregar al Carrito</button>
                </div>
            </div>
        </div>
    `;

                productCatalog.append(card);
            });

            $(".plusBtn").click(function() {
                const index = $(this).data("index");
                const quantityInput = $(this).siblings(".quantity");
                const quantity = parseInt(quantityInput.val());
                quantityInput.val(quantity + 1);
            });

            $(".minusBtn").click(function() {
                const index = $(this).data("index");
                const quantityInput = $(this).siblings(".quantity");
                const quantity = parseInt(quantityInput.val());
                if (quantity > 1) {
                    quantityInput.val(quantity - 1);
                }
            });
        });
    </script>
</body>

</html>
