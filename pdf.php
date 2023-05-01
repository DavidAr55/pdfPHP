<?php
    session_start();
    $carrito_actual = $_SESSION['carrito'];

    $html = '<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <style>
            .container-titulo {
                width: 100%;
                height: auto;

                padding: 50px 0;
                background: red;
            }

            .container-titulo h1 {
                color: white;
                font-family: Arial, Helvetica, sans-serif;
            }

            .container-general {

                display: grid;
            }
        </style>
    
        <title>Ticket</title>
    </head>
    <body>
        <nav class="container-titulo">
            <h1>Tiket de compra</h1>
        </nav>
    
        <div class="container-general">
            <p>Gracias por tu compra :)</p>'; 

    for($i = 0; $i < sizeof($carrito_actual); $i++) {
            
        $html .= "<p>Producto: ".$carrito_actual[$i]['podadora']."</p>";
        $html .= "<p>Descripcion: ".$carrito_actual[$i]['descripcion']."</p>";
        $html .= "<p>Precio: ".$carrito_actual[$i]['precio']."</p>";
        $html .= "<p>Imagen: <img src='imagenes/".$carrito_actual[$i]['imagen']."'></p>";
        $html .= "<hr>";
    }

    $html .= '</div>
    </body>
    </html>';
?>    
