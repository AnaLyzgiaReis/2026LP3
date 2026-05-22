<?php

require_once "ContaCorrente.php";
require_once "ContaPoupanca.php";

$cc1 = new ContaCorrente();
$cc1->numero = 123;
$cc1->nomeTitular = "Ana";
$cc1->saldo = 500;
$cc1->limiteChequeEspecial = 200;
$cc1->taxaManutencaoMensal = 20;
$cc1->valorFaturaCartao = 100;
$cc1->cartaoCreditoVencimento = "2026-05-20";

$cp1 = new ContaPoupanca();
$cp1->numero = 321;
$cp1->nomeTitular = "Karina";
$cp1->saldo = 200;
$cp1->taxaRendimentoMensal = 0.01;
$cp1->diaAniversario = 20;

try {
    $cc1->depositar(100);
    $cc1->sacar(200);
    $cc1->cobrarTaxaMensal();
    $cc1->solicitarAumentoLimite(50);
    $cc1->pagarFaturaCartao();

    $cp1->creditarRendimento();

    $cc1->transferir(100, $cp1);

} catch (Exception $e) {
    echo $e->getMessage();
}
echo "<pre>";
print_r($cc1);
print_r($cp1);
echo "Saldo Conta Corrente: " . $cc1->consultarSaldo() . "<br>";
echo "Proximo rendimento poupanca: " . $cp1->preverProximoRendimento();
?>