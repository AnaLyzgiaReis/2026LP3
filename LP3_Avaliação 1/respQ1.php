<?php ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
   <?php

echo "<h1>Bem Vindo!</h1>";
    $nome = $_POST['txtNome'];
    $email = $_POST['txtEmail'];
    $perfil = $_POST['txtPerfil'];
    $camisa = $_POST['txtCamisa'];
    $workshops = $_POST['workshops'];
    

    $adicionais = $_POST['adicionais'] ?? [];
    $total = 20;
    echo "<h3>Nome: $nome </h3>";
    echo "<h3>Email: $nome </h3>";

if($perfil == "estu" ){
echo "<h2>Perfil do Participante: Estudante</h2>";
}
if($perfil == "prof" ){
echo "<h2>Perfil do Participante: Professor</h2>";
}
if($perfil == "comp" ){
echo "<h2>Perfil do Participante: Competidor</h2>";
}
if($camisa == "cp" ){
echo "<h2>Perfil do Participante: Camisa P</h2>";
}
if($camisa == "cm" ){
echo "<h2>Perfil do Participante: Camisa M</h2>";
}
if($camisa == "cg" ){
echo "<h2>Perfil do Participante: Camisa G</h2>";
}
if($camisa == "cgg" ){
echo "<h2>Perfil do Participante: Camisa GG</h2>";
}
echo "<h2>Workshops de Interesse:</h2>";
    for ($i = 0; $i < count($workshops); $i++) {
        if ($workshops[$i] == "dl") {
echo "<h3><li> Desenvolvimento com Laravel </li></h3>";
        }
        if ($workshops[$i] == "eb") {
echo "<h3><li> Estilização com Bootstrap </li></h3>";
        }
        if ($workshops[$i] == "ljs") {
echo "<h3><li> Lógica com JavaScript </li></h3>";
        }
        if ($workshops[$i] == "hc") {
echo "<h3><li> História da Computação </li></h3>";
        }
 }
    ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>
