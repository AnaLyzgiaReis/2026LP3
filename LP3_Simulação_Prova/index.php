<?php
require_once 'Professor.php';
require_once 'TecnicoAdministrativo.php';

echo "PROFESSOR<br>";
$professor = new Professor(101, "Dênis", "000.000.000-00", 3000.00, true, 40, "Doutorado", 20, 50.00, true);

echo "Nome: " . $professor->getNome() . "<br>";

echo "Salario base: R$ " . number_format($professor->getSalarioBase(), 2, ",", ".") . "<br>";
echo "Salario final: R$ " . number_format($professor->calcularSalario(), 2, ",", ".") . "<br>";

echo "Situacao: ";
echo $professor->verificarSituacao() ? "ativo<br>" : "inativo<br>";

echo "Bonus: R$ " . number_format($professor->calcularBonus(), 2, ",", ".") . "<br>";

$professor->aplicarAumento(10);
echo "Salario base apos aumento: R$ " . number_format($professor->getSalarioBase(), 2, ",", ".") . "<br>";

echo "Relatorio:<br>";
echo $professor->gerarRelatorio() . "<br>";

echo "<br>";

echo "TECNICO ADMINISTRATIVO<br>";
$tecnico = new TecnicoAdministrativo(202, "Ana", "111.111.111-11", 2500.00, true, 40, "Laboratorio", 500.00, "Senior", "Noturno");

echo "Nome: " . $tecnico->getNome() . "<br>";

echo "Salario base: R$ " . number_format($tecnico->getSalarioBase(), 2, ",", ".") . "<br>";
echo "Salario final: R$ " . number_format($tecnico->calcularSalario(), 2, ",", ".") . "<br>";

echo "Situacao: ";
echo $tecnico->verificarSituacao() ? "ativo<br>" : "inativo<br>";

echo "Adicional: R$ " . number_format($tecnico->calcularAdicional(), 2, ",", ".") . "<br>";

$tecnico->aplicarAumento(15);
echo "Salario base apos aumento: R$ " . number_format($tecnico->getSalarioBase(), 2, ",", ".") . "<br>";

echo "Cracha gerado:";
echo $tecnico->gerarCracha() . "<br>";
?>