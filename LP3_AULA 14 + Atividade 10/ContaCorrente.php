<?php
require_once "ContaBancaria.php";
class ContaCorrente extends ContaBancaria {
    public float $limiteChequeEspecial;
    public float $taxaManutencaoMensal;
    public float $valorFaturaCartao;
    public string $cartaoCreditoVencimento;

    public function sacar(float $valor): void {
        if ($valor <= 0) {
            throw new Exception("O valor do saque deve ser maior que zero");
        }

        if ($valor > ($this->saldo + $this->limiteChequeEspecial)) {
            throw new Exception("Limite insuficiente");
        }

        $this->saldo -= $valor;
    }
    public function cobrarTaxaMensal(): void {
        $this->saldo -= $this->taxaManutencaoMensal;
    }

    public function solicitarAumentoLimite(float $valor): void {
        if ($valor <= 0) {
            throw new Exception("Valor invalido");
        }

        if ($valor <= ($this->limiteChequeEspecial * 0.3)) {
            $this->limiteChequeEspecial += $valor;
        }
    }

    public function pagarFaturaCartao(): void {
        $dataAtual = date("Y-m-d");

        if ($dataAtual >= $this->cartaoCreditoVencimento) {
            $this->saldo -= $this->valorFaturaCartao;
        }}}
?>