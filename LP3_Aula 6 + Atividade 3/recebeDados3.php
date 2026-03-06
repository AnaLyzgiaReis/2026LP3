<?php
$horas = $_POST['txtHoras'];
    if($horas <= 10){
$pontos = $horas * 2;}
    else if($horas <= 20){
$pontos = $horas * 5;}
    else{
$pontos = $horas * 10;}
$dinheiro = $pontos * 0.05;
echo "<h2>Programa vida saudavel (～￣▽￣)～</h2>";
echo "Pontos ganhados: $pontos <br>";
echo "Valor recebido: R$ " . number_format($dinheiro,2,",",".");
?>