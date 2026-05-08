<?php

class Veiculo {

public string $marca;
public string $modelo;
public int $ano;
public float $quantidadeCombustivel;
public float $consumoMedio;

public function abastecer($litros) {
    $this->quantidadeCombustivel = $this->quantidadeCombustivel + $litros;
}

public function calcularAutonomia() {
    return $this->quantidadeCombustivel * $this->consumoMedio;
}

public function exibirInformacoes() {
    echo "Marca: " .  $this->marca . "<br>";
    echo "Modelo: " .  $this->modelo . "<br>";
    echo "Ano: " .  $this->ano . "<br>";
    echo "Quantidade de Combustível: " .  $this->quantidadeCombustivel . "<br>";
    echo "Consumo Médio: " .  $this->consumoMedio . "<br>";
}

}

?>
