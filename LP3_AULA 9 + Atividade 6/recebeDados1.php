<?php ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 6 - 1</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
   <?php

echo "<h1>Seja Vindo à Maratona de Programação!</h1>";
    $nome = $_POST['txtNome'];
    $email = $_POST['txtEmail'];
    $categoria = $_POST['txtCategoria'];
    $linguagem = $_POST['txtLinguagem'];
    $areas = $_POST['areas'];
    
    echo "<h3>Nome: $nome </h3>";
    echo "<h3>Email: $nome </h3>";

if($categoria == "inici" ){
echo "<h2>Categoria de Participação: Iniciante</h2>";
}
if($categoria == "inter" ){
echo "<h2>Categoria de Participação: Intermediário</h2>";
}
if($categoria == "avan" ){
echo "<h2>Categoria de Participação: Avançado</h2>";
}
if($linguagem == "pyt" ){
echo "<h2>Linguagem Principal: Python</h2>";
}
if($linguagem == "jav" ){
echo "<h2>Linguagem Principal: Java</h2>";
}
if($linguagem == "php" ){
echo "<h2>Linguagem Principal: PHP</h2>";
}
if($linguagem == "cm" ){
echo "<h2>Linguagem Principal: C++</h2>";
}
echo "<h2>Áreas de Interesse:</h2>";
    for ($i = 0; $i < count($areas); $i++) {
        if ($areas[$i] == "dw") {
echo "<h3><li> Desenvolvimento Web </li></h3>";
        }
        if ($areas[$i] == "ia") {
echo "<h3><li> Inteligência Artificial </li></h3>";
        }
        if ($areas[$i] == "bd") {
echo "<h3><li>  Banco de Dados </li></h3>";
        }
        if ($areas[$i] == "si") {
echo "<h3><li> Segurança da Informação </li></h3>";
        }
 }

    ?>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>
