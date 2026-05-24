<?php
require_once "ContaBancaria.php";

class ContaPoupanca extends ContaBancaria {
    public int $diaAniversario;
    public float $taxaRendimentoMensal;
    public int $diasSemMovimentacao;

    public function creditarRendimento(){
        $diaAtual = date("d");
        if($diaAtual == $this->diaAniversario){
            $rendimento = $this->saldo * $this->taxaRendimentoMensal;
            $this->saldo = $this->saldo + $rendimento;
            echo "Rendimento creditado.";
        } else {
            echo "Não é o dia do rendimento.";
        }
    }
    
    public function preverProximoRendimento(){
        $valor =  $this->saldo * $this->taxaRendimentoMensal;
        return $valor;
    }
}
?>