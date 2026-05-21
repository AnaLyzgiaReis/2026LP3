<?php

include_once "ContaBancaria.php";

$c1 = new ContaBancaria();

$c1->numConta = 45;
$c1->nomeTitular = "Denis";
$c1->saldo = 5000;
$c1->limiteDiario = 1200;
$c1->limiteUsado = 0;

$c1->depositar(500);
$c1->consultarSaldo();
$c1->alterarLimite(800);
$c1->exibirDados();

$c2 = new ContaBancaria();

$c2->numConta = 400;
$c2->nomeTitular = "Metaleiro";
$c2->saldo = 70000;
$c2->limiteDiario = 3000;
$c2->limiteUsado = 2700;

$c2->depositar(340);
$c2->consultarSaldo();
$c2->exibirDados();
$c1->sacar(1000);
$c1->sacar(400);
$c1->exibirDados();
$c1->transferir(200,$c2);
$c1->exibirDados();
$c2->exibirDados();