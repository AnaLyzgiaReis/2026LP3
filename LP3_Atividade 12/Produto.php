<?php
abstract class Produto {
    private int $codigo;
    private string $nome;
    private string $descricao;
    private float $precoBase;
    private int $quantidadeEstoque;
    private bool $isAtivo;

    public function setCodigo($codigo){
    $this->codigo = $codigo;
    }
    public function getCodigo(){
    return $this->codigo;
    }
    public function setNome($nome){
    $this->nome = $nome;
    }
    public function getNome(){
    return $this->nome;
    }
    public function setDescricao($descricao){
    $this->descricao = $descricao;
    }
    public function getDescricao(){
    return $this->descricao;
    }
    public function setPrecoBase($precoBase){
    $this->precoBase = $precoBase;
    }
    public function getPrecoBase(){
    return $this->precoBase;
    }
    public function setQuantidadeEstoque($quantidadeEstoque){
    $this->quantidadeEstoque = $quantidadeEstoque;
    }
    public function getQuantidadeEstoque(){
    return $this->quantidadeEstoque;
    }
    public function setIsAtivo($isAtivo){
    $this->isAtivo = $isAtivo;
    }
    public function getIsAtivo(){
    return $this->isAtivo;
    }

    public function adicionarEstoque($quantidade){
        if($quantidade > 0){
        $this->quantidadeEstoque = $this->quantidadeEstoque + $quantidade;
        $this->isAtivo = true;
        } else {
        echo "Quantidade ivalida";
        }
    }
    public function baixarEstoque($quantidade){
        if($quantidade > 0){
        $this->quantidadeEstoque = $this->quantidadeEstoque - $quantidade;
        if($this->quantidadeEstoque <= 0){
        $this->isAtivo = false;
            }
        } else {
            echo "Quantidade ivalida";
        }
    }
    public function aplicarDesconto($percentual){
    $desconto = $this->precoBase * ($percentual / 100);
    $this->precoBase = $this->precoBase - $desconto;
    }
    abstract public function calcularPrecoVenda();
    abstract public function verificarDisponibilidade();
}
?>