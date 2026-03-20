<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Pedidos</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<?php
$nome = $_POST['txtNome'];
$adicionais = $_POST['adicionais'] ?? [];
$total = 20;
echo "<h3>Cliente: $nome </h3>";
echo "<h2>Valor Original da Compra:</h2>";
echo "R$ $total <br><br>";

for($i = 0; $i < count($adicionais); $i++){
    if($adicionais[$i] == "bacon"){
        $total += 3;
    }
    if($adicionais[$i] == "chedder"){
        $total += 2.5;
    }
    if($adicionais[$i] == "cebola"){
        $total += 2;
    }
    if($adicionais[$i] == "burguer"){
        $total += 5;
    }
}
echo "<h2>Valor a Ser Pago:</h2>";
echo "R$ $total <br><br>";
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>