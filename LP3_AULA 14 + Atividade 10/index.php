<?php
require_once "ContaCorrente.php";
require_once "ContaPoupanca.php";

$cc1 = new ContaCorrente();
$cc1->numero = 6767;
$cc1->nomeTitular = "Ana";
$cc1->agencia = "Banco Ana Linda";
$cc1->saldo = 500;
$cc1->dataAbertura = "21/01/2009";
$cc1->status = 1;
$cc1->limiteChequeEspecial = 300;
$cc1->taxaManutencaoMensal = 25;
$cc1->cartaoCreditoVencimento = "10";
$cc1->valorCartaoCredito = 100;

$cp1 = new ContaPoupanca();
$cp1->numero = 4242;
$cp1->nomeTitular = "Karina";
$cp1->agencia = "Banco Informática";
$cp1->saldo = 500;
$cp1->dataAbertura = "20/05/2020";
$cp1->status = 1;
$cp1->diaAniversario = 20;
$cp1->taxaRendimentoMensal = 0.01;
$cp1->diasSemMovimentacao = 5;

echo "<pre>";
print_r($cc1);
print_r($cp1);
?>