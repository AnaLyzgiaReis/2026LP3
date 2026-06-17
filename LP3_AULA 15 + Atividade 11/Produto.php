<?php
abstract class Produto {
    public int $codigo;
    public string $nome;
    public string $descricao;
    public float $precoBase;
    public int $quantidadeEstoque;
    public bool $isAtivo;

    public function adicionarEstoque(int $quantidade){
        if($quantidade > 0){
            $this->quantidadeEstoque = $this->quantidadeEstoque + $quantidade;
        if($this->quantidadeEstoque > 0){
                $this->isAtivo = true;
            }
        } else {
            echo "Quantidade invalida";
        } }

    public function baixarEstoque(int $quantidade){
        if($quantidade > 0){
            if($quantidade <= $this->quantidadeEstoque){
            $this->quantidadeEstoque = $this->quantidadeEstoque - $quantidade;
                if($this->quantidadeEstoque == 0){
                $this->isAtivo = false;
                }
            } else {
                echo "Estoque insuficiente";
            }
        } else {
            echo "Quantidade invalida";
        } }

    public function aplicarDesconto(float $percentual){
        if($percentual >= 0 && $percentual <= 90){
            $desconto = $this->precoBase * ($percentual / 100);
            $this->precoBase = $this->precoBase - $desconto;
        } else {
            echo "Percentual invalido";
        } }

    abstract public function calcularPrecoVenda();
    abstract public function verificarDisponibilidade();
}
?>