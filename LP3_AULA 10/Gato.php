<?php

class Gato {
public string $nome;
public float $dataNascimento;
public string $genero;
public string $raca;
public string $corOlhos;
public string $corPelagem;
public string $porte;
public float $peso;

public function miar() {
    echo $this->nome . " está miando. <br>";
}
public function comer() {
    echo $this->nome . " está comendo. <br>";
}
public function ronronar() {
    echo $this->nome . " está ronronando. <br>";
}
public function dormir() {
    echo $this->nome . " está dormindo. <br>";
}
public function reproduzir() {
    echo $this->nome . " está reproduzindo. <br>";
}
public function defecar() {
    echo $this->nome . " está defecando. <br>";
}
public function brincar() {
    echo $this->nome . " está brincando. <br>";
}

}
  
?>