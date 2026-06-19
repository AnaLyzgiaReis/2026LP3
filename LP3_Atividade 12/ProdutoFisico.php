<?php
require_once "Produto.php";
class ProdutoFisico extends Produto {
    public float $peso;
    public string $dimensoesCxLxA;
    public float $custoFreteFixo;
    public string $transportadoraParceira;

    public function calcularPrecoVenda(){
    $taxa = $this->getPrecoBase() * 0.05;
    $precoFinal = $this->getPrecoBase() + $this->custoFreteFixo + $taxa;
    return $precoFinal;
    }
    public function verificarDisponibilidade(){
    if($this->getQuantidadeEstoque() > 0 && $this->getIsAtivo() == true){
    return true;
    }
    return false;
    }
    public function calcularVolumeCubico(){
    $dimensoes = explode("x", $this->dimensoesCxLxA);
    $volume = $dimensoes[0] * $dimensoes[1] * $dimensoes[2];
    return $volume;
    }
    public function estimarPrazoEntrega($cep){
    if(substr($cep,0,1) == "3"){
    return 3;
    } else {
    return 5;
        } } }
?>