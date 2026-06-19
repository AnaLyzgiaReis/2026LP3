<?php

class Cachorro {
    public string $nome;
    public string $raca;
    public string $cor;
    public string $sexo;
    public string $porte;
    public float $peso;
    public string $dataNascimento;

    public function latir() {
        echo "Auuuuuuuuuuuuuuu! <br>";
    }

    public function correr() {
        echo "Runnnnn! <br>";
    }

    public function dormir() {
        echo $this->nome . " está dormindo! <br>";
    }

}
?>