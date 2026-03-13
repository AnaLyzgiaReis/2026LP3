<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprovação Escolar</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<?php
$not1 = $_POST['txtNota1'];
$not2 = $_POST['txtNota2'];
$not3 = $_POST['txtNota3'];
$freq = $_POST['txtFreq'];
$media = ($not1 + $not2 + $not3) / 3 ;

echo "<h2>Sistema de Aprovação Escolar - Resultado</h2>";
        if($freq < 75){
echo "<div class='alert alert-info' role='alert'>Reprovado por Faltas ಠ_ಠ</div>";
}
        elseif($freq >= 75 && $media > 7){
echo "<div class='alert alert-success' role='alert'>Aprovado! (∩^o^)⊃━☆</div>";
}
        elseif($freq >= 75 && $media > 4 && $media < 6.9){
echo "<div class='alert alert-warning' role='alert'>Recuperação （︶^︶）</div>";
}
      elseif($freq >= 75 && $media < 4){
echo "<div class='alert alert-danger' role='alert'>Reprovado por Nota ಠ╭╮ಠ</div>";
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>