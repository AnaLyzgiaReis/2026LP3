<?php

require_once "Gato.php";

$g1 = new Gato();
$g1->nome = "Misty";
$g1->peso = 3;

$g2 = new Gato();
$g2->nome = "Max";
$g2->peso = 9;

echo "<pre>";
print_r($g1);
print_r($g2);

$g1->dormir ();
$g2->comer ();

?>