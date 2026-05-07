<?php

require_once "veiculo.php";

$v1 = new Veiculo();
$v1->marca = "Toyota";
$v1->modelo = "Vermelho";
$v1->ano = 2000;
$v1->quantidadeCombustivel = 80;
$v1->consumoMedio = 15;

$v2 = new Veiculo();
$v2->marca = "Chevrolet";
$v2->modelo = "Preto";
$v2->ano = 2020;
$v2->quantidadeCombustivel = 100;
$v2->consumoMedio = 10;

$v3 = new Veiculo();
$v3->marca = "Ferrari";
$v3->modelo = "Rosa";
$v3->ano = 2026;
$v3->quantidadeCombustivel = 120;
$v3->consumoMedio = 5;

echo "Veiculo 1 <br>";
$v1->exibirInformacoes();
$v1->abastecer(20);
echo "Quantidade de Combustível Atual: " . $v1->quantidadeCombustivel . "<br>";
echo "Quilômetros que o Veículo Consegue Percorrer: " . $v1->calcularAutonomia() . "<br>";

echo "<br> Veiculo 2 <br>";
$v2->exibirInformacoes();
$v2->abastecer(10);
echo "Quantidade de Combustível Atual: " . $v2->quantidadeCombustivel . "<br>";
echo "Quilômetros que o Veículo Consegue Percorrer: " . $v2->calcularAutonomia() . "<br>";

echo "<br> Veiculo 3 <br>";
$v3->exibirInformacoes();
$v3->abastecer(30); 
echo "Quantidade de Combustível Atual: " . $v3->quantidadeCombustivel . "<br>";
echo "Quilômetros que o Veículo Consegue Percorrer: " . $v3->calcularAutonomia() . "<br>";
?>