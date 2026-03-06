<?php
$carro = $_POST['txtCarro'];
$dias = $_POST['txtDias'];
$km = $_POST['txtKm'];
$total = 0;
if($carro == "popular"){
$total = $dias * 90;
if($km <= 100){
$total += $km * 0.20;
}
else{
$total += $km * 0.10;
}}
else{
$total = $dias * 150;
if($km <= 200){
$total += $km * 0.30;
}
else{
$total += $km * 0.25;
}
}
echo "<h2>Total a pagar ┗( T﹏T )┛</h2>";
echo "R$ " . number_format($total,2,",",".");

?>