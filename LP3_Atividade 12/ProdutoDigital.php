<?php
require_once "Produto.php";
class ProdutoDigital extends Produto {
    public float $tamanhoArquivoMB;
    public string $formatoArquivo;
    public int $limiteDownloadsPermitidos;
    public string $linkServidorNuvem;

    public function calcularPrecoVenda(){
    $precoFinal = $this->getPrecoBase() + 2;
    return $precoFinal;
    }
    public function verificarDisponibilidade(){
    if($this->getIsAtivo() == true && $this->linkServidorNuvem != ""){
    return true;
    }
    return false;
    }
    public function gerarLinkExclusivo($usuario){
    $link = $this->linkServidorNuvem . "/" . $usuario;
    return $link;
    }
    public function revogarAcesso($usuario){
    echo "Acesso revogado para: " . $usuario;
    } }
?>