<?php
$peso = $_POST['txtPeso'];
$altura = $_POST['txtAltura'];
$imc = $peso / ($altura * $altura);
echo "<h2>Resultado IMC (づ￣ 3￣)づ</h2>";
 echo "IMC: " . number_format($imc,2) . "<br>";
        if($imc < 18.5){
echo "Abaixo do peso"; }
        else if($imc >= 18.5 && $imc < 25){
echo "Peso ideal"; }
        else if($imc >= 25 && $imc < 30){
echo "Sobrepeso";}
        else if($imc >= 30 && $imc < 40){
echo "Obesidade"; }
        else{
echo "Obesidade mórbida";}
?>