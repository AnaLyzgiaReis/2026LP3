<?php
class ContaBancaria {
public int $numero;
public string $nomeTitular;
public float $saldo;
public bool $statusAtivo = true;

    public function depositar(float $valor): void {
        if ($valor <= 0) {
            throw new Exception("O valor do deposito deve ser maior que zero");
        }

        $this->saldo += $valor;
    }

    public function sacar(float $valor): void {
        if ($valor <= 0) {
            throw new Exception("O valor do saque deve ser maior que zero");
        }

        if ($this->saldo < $valor) {
            throw new Exception("Saldo insuficiente");
        }

        $this->saldo -= $valor;
    }
    public function transferir(float $valor, ContaBancaria $destino): bool {
        if ($valor <= 0) {
            throw new Exception("O valor da transferencia deve ser maior que zero");
        }

        if ($destino == null || $destino->statusAtivo == false) {
            throw new Exception("Conta invalida");
        }

        try {
            $this->sacar($valor);
            $destino->depositar($valor);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function consultarSaldo(): float {
        return $this->saldo;
    }

    public function fecharConta(): void {
        if ($this->saldo != 0) {
            throw new Exception("A conta so pode ser fechada com saldo zerado");
        }

        $this->statusAtivo = false;
}}
?>