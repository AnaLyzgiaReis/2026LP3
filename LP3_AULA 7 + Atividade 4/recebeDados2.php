<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Energia Elétrica</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>