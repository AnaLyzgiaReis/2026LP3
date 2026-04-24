<?php

require_once "Funcionarios.php";
$f1 = new Funcionario();
$f1->codigo = 1;
$f1->nome = "Harry";
$f1->salario = 20000;
$f1->cargaHorariaMensal = 180;
$f2 = new Funcionario();
$f2->codigo = 2;
$f2->nome = "Ron";
$f2->salario = 5000;
$f2->cargaHorariaMensal = 180;
$f3 = new Funcionario();
$f3->codigo = 3;
$f3->nome = "Hermione";
$f3->salario = 5000;
$f3->cargaHorariaMensal = 150;

echo "Dados Pessoa 1 <br>";
$f1->exibirDados();
echo "Salário por Hora Trabalhada: " . $f1->calcularSalarioHora() . "<br>";
echo "Salário Aumentado: " . $f1->aumentarSalario(40) . "<br>";
echo "Dados Pessoa 1 - Atualizados<br>";
$f1->exibirDados();

echo "<br> Dados Pessoa 2 <br>";
$f2->exibirDados();
echo "Salário por Hora Trabalhada: " . $f2->calcularSalarioHora() . "<br>";
echo "Salário Aumentado: " . $f2->aumentarSalario(20) . "<br>";
echo "Dados Pessoa 2 - Atualizados<br>";
$f2->exibirDados();

echo "<br> Dados Pessoa 3 <br>";
$f3->exibirDados();
echo "Salário por Hora Trabalhada: " . $f3->calcularSalarioHora() . "<br>";
echo "Salário Aumentado: " . $f3->aumentarSalario(20) . "<br>";
echo "Dados Pessoa 3 - Atualizados<br>";
$f3->exibirDados();

?>