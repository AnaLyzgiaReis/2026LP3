<?php ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 6 - 2</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
   <?php
    $figura = $_GET['txtLinguagemPro'];

    if (!isset($_GET['txtLinguagemPro']) || $_GET['txtLinguagemPro'] == "") {
        echo "<div class='alert alert-danger'>Digite uma Linguagem de Programação para realizar a pesquisa!</div>";
    } else {
        $figura = $_GET['txtLinguagemPro'];

        echo "<div class='alert alert-success'>Você pesquisou por: $figura. Exibindo resultados encontrados...</div>";

    }
    ?>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>
