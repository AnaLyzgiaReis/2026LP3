<?php ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação 1</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
   <?php
    $figura = $_GET['txtFigura'];

    if (!isset($_GET['txtFigura']) || $_GET['txtFigura'] == "") {
        echo "<div class='alert alert-danger'>Digite um nome para realizar a pesquisa!</div>";
    } else {
        $figura = $_GET['txtFigura'];

        echo "<div class='alert alert-success'>Você pesquisou por: $figura. Exibindo resultados encontrados...</div>";
        echo "<div class='alert alert-info'>
        (づ￣ 3￣)づ
        </div>";
    }
    ?>
        </div>
    </div>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
