<?php 

class ContaBancaria {
    public int $numConta;
    public string $nomeTitular;
    public float $saldo;
    public float $limiteDiario;
    public float $limiteUsado;

    public function depositar(float $valor) {
        $this->saldo += $valor;
    }
    public function sacar(float $valor) {
        if($valor > 0 && $valor <= $this->saldo && $valor <= ($this->limiteDiario - $this->limiteUsado)) {
            $this->saldo -= $valor;
            $this->limiteUsado += $valor;
        } else {
            echo "Ocorreu um problema!";
        }
    }
    public function transferir(float $valor, ContaBancaria $contaDestino) {
        if($valor > 0 && $valor <= $this->saldo && $valor <= ($this->limiteDiario - $this->limiteUsado)) {
            $this->saldo -= $valor;
            $this->limiteUsado += $valor;
            $contaDestino->saldo += $valor;
        } else {
            echo "Ocorreu um problema!";
        }
    }
    public function consultarSaldo() {
        echo "Saldo: $this->saldo <br>";
    }
    public function alterarLimite(float $novoLimite) {
        $this->limiteDiario = $novoLimite;
    }
    public function exibirDados() {
        echo "Número Conta: $this->numConta <br>";
        echo "Nome Titular: $this->nomeTitular <br>";
        echo "Saldo: $this->saldo <br>";
        echo "Limite Diário: $this->limiteDiario <br>";
        echo "Limite Utilizado: $this->limiteUsado <br><br>";
    }
}


?>