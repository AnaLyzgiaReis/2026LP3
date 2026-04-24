<?php

class Funcionario {

public int $codigo;
public string $nome;
public float $salario;
public float $cargaHorariaMensal;

public function calcularSalarioHora() {
    return ($this->salario / $this->cargaHorariaMensal);
}

public function aumentarSalario($percentual) {
    $this->salario = $this->salario + ($this->salario * $percentual / 100);
}

public function exibirDados() {
    echo "Código:" .  $this->codigo . "<br>";
    echo "Nome:" .  $this->nome . "<br>";
    echo "Salário:" .  $this->salario . "<br>";
    echo "Carga Horária Mensal:" .  $this->cargaHorariaMensal . "<br>";

}

}

?>