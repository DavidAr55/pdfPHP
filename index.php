<?php
session_start();

//Iniciamos el carrito
if (isset($_SESSION['carrito'])) {
    $carrito_actual = $_SESSION['carrito'];
    $_SESSION['carrito'] = $carrito_actual;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <title>Ejemplo de generar PDFs</title>
</head>

<body>
    <h1 class="centrar-titulo">Tienda de podadoras</h1>

    <p class="link"><a href="verCarrito.php">Ver carrito</a> <a href="deleteCarrito.php">Vaciar carrito</a></p>
    <div class="grid-container">
        <div class="product">
            <img src="imagenes/product1.jpg" alt="Product 1">
            <h3>Podadora 1</h3>
            <p>Poda bien vergas</p>
            <p>$1000 MX</p>

            <form action="carrito.php" method="POST">
                <input type="hidden" name="podadora" value="Podadora 1">
                <input type="hidden" name="descripcion" value="Poda bien vergas">
                <input type="hidden" name="precio" value="1000">
                <input type="hidden" name="imagen" value="product1.jpg">

                <button>Añadir al carrito</button>
            </form>
        </div>
        <div class="product">
            <img src="imagenes/product2.jpg" alt="Product 2">
            <h3>Podadora 2</h3>
            <p>Es barata pero duradera</p>
            <p>$2000 MX</p>

            <form action="carrito.php" method="POST">
                <input type="hidden" name="podadora" value="Podadora 2">
                <input type="hidden" name="descripcion" value="Es barata pero duradera">
                <input type="hidden" name="precio" value="2000">
                <input type="hidden" name="imagen" value="product2.jpg">

                <button>Añadir al carrito</button>
            </form>
        </div>
        <div class="product">
            <img src="imagenes/product3.jpg" alt="Product 3">
            <h3>Podadora 3</h3>
            <p>Parecera rudimentaria pero es eficiente</p>
            <p>$1200 MX</p>

            <form action="carrito.php" method="POST">
                <input type="hidden" name="podadora" value="Podadora 3">
                <input type="hidden" name="descripcion" value="Parecera rudimentaria pero es eficiente">
                <input type="hidden" name="precio" value="1200">
                <input type="hidden" name="imagen" value="product3.jpg">

                <button>Añadir al carrito</button>
            </form>
        </div>
        <div class="product">
            <img src="imagenes/product4.jpg" alt="Product 4">
            <h3>Podadora 4</h3>
            <p>Una clasica podadora para todos los dias</p>
            <p>$1600 MX</p>

            <form action="carrito.php" method="POST">
                <input type="hidden" name="podadora" value="Podadora 4">
                <input type="hidden" name="descripcion" value="Una clasica podadora para todos los dias">
                <input type="hidden" name="precio" value="1600">
                <input type="hidden" name="imagen" value="product4.jpg">

                <button>Añadir al carrito</button>
            </form>
        </div>
        <div class="product">
            <img src="imagenes/product5.jpg" alt="Product 5">
            <h3>Podadora 5</h3>
            <p>Azul como el cielo, esta podadora te ayudara todas tus mañanas</p>
            <p>$1500 MX</p>

            <form action="carrito.php" method="POST">
                <input type="hidden" name="podadora" value="Podadora 5">
                <input type="hidden" name="descripcion" value="Azul como el cielo, esta podadora te ayudara todas tus mañanas">
                <input type="hidden" name="precio" value="1500">
                <input type="hidden" name="imagen" value="product5.jpg">

                <button>Añadir al carrito</button>
            </form>
        </div>
        <div class="product">
            <img src="imagenes/product6.jpg" alt="Product 6">
            <h3>Podadora 6</h3>
            <p>Hasta para podarte los pelos de las piernas</p>
            <p>$1000 MX</p>

            <form action="carrito.php" method="POST">
                <input type="hidden" name="podadora" value="Podadora 6">
                <input type="hidden" name="descripcion" value="Hasta para podarte los pelos de las piernas">
                <input type="hidden" name="precio" value="1000">
                <input type="hidden" name="imagen" value="product6.jpg">

                <button>Añadir al carrito</button>
            </form>
        </div>
        <div class="product">
            <img src="imagenes/product7.jpg" alt="Product 7">
            <h3>Podadora 7</h3>
            <p>Podadora de una sola mano</p>
            <p>$900 MX</p>

            <form action="carrito.php" method="POST">
                <input type="hidden" name="podadora" value="Podadora 7">
                <input type="hidden" name="descripcion" value="Podadora de una sola mano">
                <input type="hidden" name="precio" value="900">
                <input type="hidden" name="imagen" value="product7.jpg">

                <button>Añadir al carrito</button>
            </form>
        </div>
        <div class="product">
            <img src="imagenes/product8.jpg" alt="Product 8">
            <h3>Podadora 8</h3>
            <p>Podadora profecional</p>
            <p>$4500 MX</p>

            <form action="carrito.php" method="POST">
                <input type="hidden" name="podadora" value="Podadora 8">
                <input type="hidden" name="descripcion" value="Podadora profecional">
                <input type="hidden" name="precio" value="4500">
                <input type="hidden" name="imagen" value="product8.jpg">

                <button>Añadir al carrito</button>
            </form>
        </div>
    </div>
</body>

</html>