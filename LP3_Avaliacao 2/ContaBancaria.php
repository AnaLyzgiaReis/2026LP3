<?php
class ContaBancaria
{
    public int $numeroConta;
    public string $nomeTitular;
    public float $saldo;
    public float $limiteDiario;
    public float $limiteUtilizado;

    public function depositar($valor)
    {
        $this->saldo = $this->saldo + $valor;
    }

    public function sacar($valor)
    {
        $this->saldo = $this->saldo - $valor;
    }

    public function consultarSaldo()
    {
        echo "Saldo: " .  $this->saldo . "<br>";
        echo "Limite de Saque Diário Atualizado: " .  $this->limiteDiario . "<br>";
    }

    public function alterarLimite($novoLimite)
    {
        $this->limiteDiario = $this->limiteDiario + $novoLimite;
    }

    public function exibirDados()
    {
        echo "Número da Conta: " .  $this->numeroConta . "<br>";
        echo "Nome do Titular: " .  $this->nomeTitular . "<br>";
        echo "Saldo: " .  $this->saldo . "<br>";
        echo "Limite de Saque Diário: " .  $this->limiteDiario . "<br>";
        echo "Limite Diário de Saque Utilizado: " .  $this->limiteUtilizado . "<br>";
    }
}
