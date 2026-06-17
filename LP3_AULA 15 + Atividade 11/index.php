<?php
require_once "ProdutoFisico.php";
require_once "ProdutoDigital.php";

$pf1 = new ProdutoFisico();
$pf1->codigo = 1;
$pf1->nome = "Notebook";
$pf1->descricao = "Gamer";
$pf1->precoBase = 3500;
$pf1->quantidadeEstoque = 10;
$pf1->isAtivo = true;
$pf1->peso = 2.5;
$pf1->dimensoesCxLxA = "40x30x10";
$pf1->custoFreteFixo = 30;
$pf1->transportadoraParceira = "Correios";

$pd1 = new ProdutoDigital();
$pd1->codigo = 2;
$pd1->nome = "Curso PHP";
$pd1->descricao = "Curso Completo";
$pd1->precoBase = 100;
$pd1->quantidadeEstoque = 0;
$pd1->isAtivo = true;
$pd1->tamanhoArquivoMB = 500;
$pd1->formatoArquivo = "MP";
$pd1->limiteDownloadsPermitidos = 5;
$pd1->linkServidorNuvem = "servidor.com";

echo "<pre>";

print_r($pf1);
echo "Preço venda fisico: " . $pf1->calcularPrecoVenda() . "<br>";

print_r($pd1);
echo "Preço venda digital: " . $pd1->calcularPrecoVenda() . "<br>";

echo "</pre>";
?>