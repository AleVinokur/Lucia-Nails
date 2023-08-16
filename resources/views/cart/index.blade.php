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
                    <a class="nav-link" href="#">
                        <img src="{{ asset('img/carrito.png') }}" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Resto de tu HTML y encabezado -->

    <table class="table">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cart as $product)
                <tr>
                    <td>{{ $product['name'] }}</td>
                    <td>${{ $product['price'] }}</td>
                    <td>1</td>
                    <td>${{ $product['price'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-right">
        <h3>Total: ${{ $total }}</h3>
        <button class="btn btn-primary">Realizar Pago</button>
    </div>

</body>

</html>
