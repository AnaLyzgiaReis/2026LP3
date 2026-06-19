<?php

abstract class Conta
{
    public int $numero;
    public string $titular;
    public int $agencia;
    public float $saldo;
    public string $dataAbertura;
    public int $status;

    public function depositar(float $valor)
    {
        if ($valor > 0) {
            $this->saldo = $this->saldo + $valor;
        } else {
            echo "Erro: Valor negativo ou zero";
        }
    }

    public function sacar(float $valor)
    {
        if ($valor > 0 && $this->saldo >= $valor) {
            $this->saldo = $this->saldo - $valor;
        } else {
            echo "Erro: Valor igual a zero ou maior que o saldo.";
        }
    }

    public function transferir(float $valor, Conta $destino)
    {

        if (!empty($destino) && $destino->status == true) {

            if ($valor > 0 && $this->saldo >= $valor) {
                $this->saldo = $this->saldo - $valor;
                $destino->saldo += $valor;
                return true;
            } else {
                echo "Erro: Valor igual a zero ou maior que o saldo.";
            }
        } else {
            echo "Erro: Conta nao existe ou conta inativa";
        }
        return false;
    }

    public function fecharConta() {
        if ($this->saldo == 0){
            $this->status = false;
        }else{
            echo "Erro: A conta possui saldo.";
        }
    }

    public function consultarSaldo() {
        return $this->saldo;
    }

    public abstract function imprimir();
}
