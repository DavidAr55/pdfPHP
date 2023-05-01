<?php
    session_start();

	if(isset($_SESSION['carrito']))  {

		$carrito_actual = $_SESSION['carrito'];

        for($i = 0; $i < sizeof($carrito_actual); $i++) {
            
            echo "Podadora: ".$carrito_actual[$i]['podadora']."<br>";
            echo "Descripcion: ".$carrito_actual[$i]['descripcion']."<br>";
            echo "Precio: ".$carrito_actual[$i]['precio']."<br>";
            echo "<hr>";
        }

        echo "<a href='pagar.pdf.php'>Generar tiket</a>";
    }

    else {
        
        echo "El carrito está vacio";
    }


