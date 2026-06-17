<?php
require_once "Produto.php";

class ProdutoDigital extends Produto {
    public float $tamanhoArquivoMB;
    public string $formatoArquivo;
    public int $limiteDownloadsPermitidos;
    public string $linkServidorNuvem;

    public function calcularPrecoVenda(){
        $precoFinal = $this->precoBase + 2;
        return $precoFinal;
    }

    public function verificarDisponibilidade(){
        if($this->isAtivo == true &&
           $this->linkServidorNuvem != ""){
            return true;
        } return false;
    }

    public function gerarLinkExclusivo($idUsuario){
        $token = md5($idUsuario);
        $link =
        $this->linkServidorNuvem . "?token=" . $token;
        return $link;
    }

    public function revogarAcesso($idUsuario){
        echo "Acesso revogado para: " . $idUsuario;
    } }
?>