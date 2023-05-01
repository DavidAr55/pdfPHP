<?php
    session_start();

	if(isset($_SESSION['carrito'])) 
		$carrito_actual = $_SESSION['carrito'];

    $podadora = $_POST['podadora'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $imagen = $_POST['imagen'];

    //echo $podadora."<br>".$descripcion."<br>".$precio;

    $carrito_actual[] = array("podadora" => $podadora,
                              "descripcion" => $descripcion,
                              "precio" => $precio,
                              "imagen" => $imagen);

    /*echo "podadora: ".$carrito_actual['podadora']."<br>";
    echo "descripcion: ".$carrito_actual['precio']."<br>";
    echo "precio: ".$carrito_actual['precio']."<br>";*/

	$_SESSION['carrito'] = $carrito_actual;

	header("Location:".$_SERVER['HTTP_REFERER']);