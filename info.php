<?php
// Capturar los datos enviados por POST
$producto1 = $_POST['producto1'];
$precio1   = (float)$_POST['precio1'];

$producto2 = $_POST['producto2'];
$precio2   = (float)$_POST['precio2'];

$producto3 = $_POST['producto3'];
$precio3   = (float)$_POST['precio3'];

// Suma de precios
$suma = $precio1 + $precio2 + $precio3;

// Descuento del 16%
$descuento = $suma * 0.16;

// Total a pagar
$total = $suma - $descuento;
?>
