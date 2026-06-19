<?php
require_once "ProdutoFisico.php";
require_once "ProdutoDigital.php";
$pf1 = new ProdutoFisico();
$pf1->setCodigo(1);
$pf1->setNome("Notebook");
$pf1->setDescricao("Gamer");
$pf1->setPrecoBase(3000);
$pf1->setQuantidadeEstoque(10);
$pf1->setIsAtivo(true);
$pf1->peso = 2.5;
$pf1->dimensoesCxLxA = "40x30x10";
$pf1->custoFreteFixo = 20;
$pf1->transportadoraParceira = "Correios";

$pd1 = new ProdutoDigital();
$pd1->setCodigo(2);
$pd1->setNome("Curso PHP");
$pd1->setDescricao("Curso Online");
$pd1->setPrecoBase(100);
$pd1->setQuantidadeEstoque(0);
$pd1->setIsAtivo(true);
$pd1->tamanhoArquivoMB = 500;
$pd1->formatoArquivo = "MP";
$pd1->limiteDownloadsPermitidos = 5;
$pd1->linkServidorNuvem = "ServidorPHP";

echo "<pre>";
echo "Preco Produto Fisico: ";
echo $pf1->calcularPrecoVenda();
echo "<br>";
echo "Preco Produto Digital: ";
echo $pd1->calcularPrecoVenda();
echo "<br>";
print_r($pf1);
print_r($pd1);
echo "</pre>";
?>