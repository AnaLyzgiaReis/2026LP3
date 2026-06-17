<?php
require_once "Produto.php";

class ProdutoFisico extends Produto {
    public float $peso;
    public string $dimensoesCxLxA;
    public float $custoFreteFixo;
    public string $transportadoraParceira;

    public function calcularPrecoVenda(){
        $taxaArmazenamento = $this->precoBase * 0.05;
        $precoFinal = $this->precoBase + $this->custoFreteFixo + $taxaArmazenamento;
        return $precoFinal;
    }

    public function verificarDisponibilidade(){
        if($this->quantidadeEstoque > 0 && $this->isAtivo == true){
        return true;
        } return false;
    }

    public function calcularVolumeCubico(){
        $dimensoes = explode("x", $this->dimensoesCxLxA);
        $comprimento = $dimensoes[0];
        $largura = $dimensoes[1];
        $altura = $dimensoes[2];
        $volume = $comprimento * $largura * $altura;
        return $volume;
    }

    public function estimarPrazoEntrega($cepDestino){
        if(substr($cepDestino, 0, 1) == "3"){
            return 3;
        } else if(substr($cepDestino, 0, 1) == "1"){
            return 5;
        } else {
            return 7;
        } } }
?>