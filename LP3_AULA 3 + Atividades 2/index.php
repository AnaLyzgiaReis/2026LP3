<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP3 AULA 4 - AnaLy</title>
</head>
<body>
<h1>LP3 AULA 4 + Atividades - AnaLy (❁´◡`❁)</h1>
<h3>Questão 1</h3>
<?php 
    for($i = -10; $i < 11; $i++){
        echo "$i <br>";
     }
?>

<h3>Questão 2</h3>
<?php 
    $soma = 0;
for($i = 1; $i < 501; $i++){
        if($i % 2 != 0 & $i % 3 ==0){
            $soma += $i; }
} echo "A soma dos números ímpares múltiplos de três, de 1 até 500: $soma <br>"; ?>
    
<h3>Questão 3</h3>
<?php 
    for($i = 100; $i > -1; $i-=10){
        echo "$i <br>";
     }
     echo "Acabou!"
?>

<h3>Questão 4</h3>
<?php for($i = 99; $i > -1; $i-=2){?>
<?php if($i %5 == 0 && $i % 2 == 1){
    echo "[$i]";
} else{?>
    <li> <?= $i; ?></li> 
<?php } }?>


<h3>Questão 5</h3>
<?php 
    for($i = 150; $i > -1; $i-=5){
        echo "$i <br>";
     }
?>

<h3>Questão 6</h3>
<?php 
    $i = 150;
    while($i > -1){
    echo "$i <br>";
    $i-=5;
     }
?>


</body>
</html>