<?php
require_once "ContaBancaria.php";

$c1 = new ContaBancaria();
$c1->numeroConta = 11111;
$c1->nomeTitular = "Misty";
$c1->saldo = 20000;
$c1->limiteDiario = 1000;
$c1->limiteUtilizado = 500;

$c2 = new ContaBancaria();
$c2->numeroConta = 22222;
$c2->nomeTitular = "Ana";
$c2->saldo = 50000;
$c2->limiteDiario = 5000;
$c2->limiteUtilizado = 2000;

$c3 = new ContaBancaria();
$c3->numeroConta = 33333;
$c3->nomeTitular = "Denis";
$c3->saldo = 100000;
$c3->limiteDiario = 10000;
$c3->limiteUtilizado = 5000;

echo "Dados das Contas <br>";
echo "<br>Conta Bancária 1 <br>";
$c1->exibirDados();
$c1->depositar(10000);
$c1->sacar(500);
$c1->alterarLimite(1000);

echo "<br>Conta Bancária 2 <br>";
$c2->exibirDados();
$c2->depositar(30000);
$c2->sacar(2000);
$c2->alterarLimite(10000);

echo "<br>Conta Bancária 3 <br>";
$c3->exibirDados();
$c3->depositar(100000);
$c3->sacar(5000);
$c3->alterarLimite(20000);


echo "<br> <br>Dados das Contas Atualizadas <br>";
echo "<br> Conta Bancária 1 <br>";
$c1->consultarSaldo();
echo "<br> Conta Bancária 2 <br>";
$c2->consultarSaldo();
echo "<br> Conta Bancária 3 <br>";
$c3->consultarSaldo();
