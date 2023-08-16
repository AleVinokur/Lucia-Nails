$(document).ready(function () {
    const products = [{
        name: 'Producto 1',
        price: 19.99,
        image: baseUrl + '/img/producto1.jpg'
    },
    {
        name: 'Producto 2',
        price: 29.99,
        image: baseUrl + '/img/producto2.webp'
    },
    {
        name: 'Producto 3',
        price: 29.99,
        image: baseUrl + '/img/producto3.jfif'
    },
    {
        name: 'Producto 4',
        price: 29.99,
        image: baseUrl + '/img/producto4.jfif'
    },
    {
        name: 'Producto 5',
        price: 29.99,
        image: baseUrl + '/img/producto5.jpg'
    },
    {
        name: 'Producto 6',
        price: 29.99,
        image: baseUrl + '/img/producto6.jpg'
    },

    ];

    const productCatalog = $("#productCatalog");
    products.forEach((product, index) => {
        const card = `
            <div class="producto col-md-4 mb-4 mt-5">
                <img src="${product.image}" class="card-img-top" alt="${product.name}">
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

    $(".plusBtn").click(function () {
        const index = $(this).data("index");
        const quantityInput = $(this).siblings(".quantity");
        const quantity = parseInt(quantityInput.val());
        quantityInput.val(quantity + 1);
    });

    $(".minusBtn").click(function () {
        const index = $(this).data("index");
        const quantityInput = $(this).siblings(".quantity");
        const quantity = parseInt(quantityInput.val());
        if (quantity > 1) {
            quantityInput.val(quantity - 1);
        }
    });

    $(".addToCartBtn").click(function() {
        const index = $(this).data("index");
        $.ajax({
            url: "{{ route('cart.add') }}",
            type: "POST",
            data: { index: index },
            success: function(response) {
                console.log(response.message);
            }
        });
    });


});
