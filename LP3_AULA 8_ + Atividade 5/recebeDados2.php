<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada Dinâmica</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<?php
if(!isset($_GET['num']) || $_GET['num'] == ""){
    echo "<div class='alert alert-info'>Digite um número na URL ou no formulário 💕</div>";
}else{
    $num = $_GET['num'];

    echo "<h3>Tabuada</h3>";

    echo "<table class='table table-striped table-hover'>";
    
    for($i = 1; $i <= 10; $i++){
        $resultado = $num * $i;
        echo "<tr><td>$num x $i = $resultado</td></tr>";
    }

    echo "</table>";
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>