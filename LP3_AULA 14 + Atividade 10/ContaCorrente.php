<?php
require_once "ContaBancaria.php";

class ContaCorrente extends ContaBancaria {
    public float $limiteChequeEspecial;
    public float $taxaManutencaoMensal;
    public string $cartaoCreditoVencimento;
    public float $valorCartaoCredito;

    public function sacar(float $valor){
        if($valor > 0){
            if($valor <= ($this->saldo + $this->limiteChequeEspecial)){
                $this->saldo = $this->saldo - $valor;
                return true;
} else {
                echo "Limite insuficiente!";
                return false;
            }
        } else {
            echo "Valor inválido!";
            return false;
        }
    }

    public function cobrarTaxaMensal(){
        $this->saldo = $this->saldo - $this->taxaManutencaoMensal;
    }

    public function solicitarAumentoLimite(float $valor){
        if($valor > 0){
            $limitePermitido = $this->limiteChequeEspecial * 0.30;
            if($valor <= $limitePermitido){
                $this->limiteChequeEspecial =
                    $this->limiteChequeEspecial + $valor;
                echo "Aumento aprovado.";
            } else {
                echo "Aumento negado.";
}
 } else {
            echo "Valor inválido.";
        }
    }

    public function pagarFaturaCartao(){
        $diaAtual = date("d");
        if($diaAtual >= $this->cartaoCreditoVencimento){
            $this->saldo =
                $this->saldo - $this->valorCartaoCredito;
            echo "Fatura paga.";
        } else {
            echo "Ainda não venceu.";
        }
    }
}
?>