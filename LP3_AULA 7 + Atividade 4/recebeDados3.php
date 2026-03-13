<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<?php
$compra = $_POST['txtCompra'];
$cliente = $_POST['txtCliente'];

$desconto = 0;
$total = $compra;
$frete = false;

if($cliente == "comum"){
    if($compra > 500){
        $desconto = $compra * 0.05;
        $total = $compra - $desconto;
    }
    if($compra > 1000){
        $frete = true;
    }
}
    if($cliente == "vip"){
    $desconto = $compra * 0.10;
    $total = $compra - $desconto;

    if($compra > 1000){
        $frete = true;
    }
}
    if($cliente == "premium"){
    $desconto = $compra * 0.15;
    $total = $compra - $desconto;
    $frete = true;
}

echo "<h2>Valor Original da Compra:</h2>";
echo "R$ $compra <br><br>";
echo "<h2>Valor do Desconto:</h2>";
echo "R$ $desconto <br><br>";
echo "<h2>Valor Final a Pagar:</h2>";
echo "R$ $total <br><br>";

if($frete == true){
    echo '<span class="badge bg-success">Frete Grátis</span>';
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>