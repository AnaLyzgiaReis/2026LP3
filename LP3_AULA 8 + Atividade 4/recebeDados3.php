<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
</head>
<body>
<?php
$compra = $_POST['txtCompra'];
$cliente = $_POST['txtCliente'];
$total = 0;

if($cliente == "comum" ){
    if($kwh <= 500){
$total = $kwh * 0.40;
    } else {
$total = $kwh * 0.65;
    }
}

if($cliente == "vip" ){
    if($kwh <= 1000){
$total = $kwh * 0.55;
    } else {
$total = $kwh * 0.60;
    }
}

if($cliente == "premium" ){
    if($kwh <= 500){
$total = $kwh * 0.55;
    } else {
$total = $kwh * 0.60;
    }
}

echo "<h2>Valor a Ser Pago:</h2>";
echo "R$ $total";
?>
</body>
</html>