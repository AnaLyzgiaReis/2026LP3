<?php
require_once "ContaBancaria.php";
class ContaPoupanca extends ContaBancaria {
    public float $taxaRendimentoMensal;
    public int $diaAniversario;

    public function creditarRendimento(): void {
        $diaAtual = date("d");

        if ($diaAtual == $this->diaAniversario) {
            $rendimento = $this->saldo * $this->taxaRendimentoMensal;
            $this->saldo += $rendimento;
        }
    }

    public function preverProximoRendimento(): float {
        return $this->saldo * $this->taxaRendimentoMensal;
}}
?>