<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Energia Elétrica</title>
</head>
<body>
<?php
$kwh = $_POST['txtKwh'];
$imov = $_POST['txtImovel'];
$total = 0;

if($imov == "residencial" ){
    if($kwh <= 500){
$total = $kwh * 0.40;
    } else {
$total = $kwh * 0.65;
    }
}

if($imov == "comercial" ){
    if($kwh <= 1000){
$total = $kwh * 0.55;
    } else {
$total = $kwh * 0.60;
    }
}

if($imov == "industrial" ){
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