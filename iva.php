<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php

$compra_total = 100.00; // Puedes cambiar este valor para probar con diferentes montos

// Calcular IVA (15%)
$iva = $compra_total * 0.15;

// Calcular descuento según la tabla
$descuento = 0;

// Tabla de descuentos
if ($compra_total >= 0 && $compra_total < 50) {
    $descuento = 0; // Sin descuento
} elseif ($compra_total >= 50 && $compra_total < 100) {
    $descuento = $compra_total * 0.05; // 5% de descuento
} elseif ($compra_total >= 100 && $compra_total < 200) {
    $descuento = $compra_total * 0.10; // 10% de descuento
} else {
    $descuento = $compra_total * 0.15; // 15% de descuento
}

// Calcular total a pagar
$total_a_pagar = $compra_total + $iva - $descuento;

// Imprimir resultados
echo "Compra Total: $" . number_format($compra_total, 2) . "<br>";
echo "IVA (15%): $" . number_format($iva, 2) . "<br>";
echo "Descuento: $" . number_format($descuento, 2) . "<br>";
echo "Total a Pagar: $" . number_format($total_a_pagar, 2) . "<br>";
?>
</body>
</html>