<?php
class ContaBancaria {
    public int $numero;
    public string $nomeTitular;
    public string $agencia;
    public float $saldo;
    public string $dataAbertura;
    public int $status;

    public function depositar(float $valor){

        if($valor > 0){
            $this->saldo = $this->saldo + $valor;
        } else {
            echo "Valor inválido para depósito!";
        } }

    public function sacar(float $valor){
        if($valor > 0){
            if($valor <= $this->saldo){
                $this->saldo = $this->saldo - $valor;
                return true;
            } else {
                echo "Saldo insuficiente.";
                return false;
            }
        } else {
            echo "Valor inválido.";
            return false;
        }
    }

    public function transferir(float $valor, ContaBancaria $destino){
        if($destino != null && $destino->status == 1 && $valor > 0){
            if($this->sacar($valor)){
                $destino->depositar($valor);
                return true;
            }
 }
        echo "Transferência não realizada.";
        return false;
    }
    
    public function consultarSaldo(){
        return $this->saldo;
    }

    public function fecharConta(){
        if($this->saldo == 0){
            $this->status = 0;
            echo "Conta encerrada.";
        } else {
            if($this->saldo > 0){
                echo "Retire o saldo restante antes de fechar.";
            } else {
                echo "Quite sua dívida antes de fechar.";
            }       }    }
}
?>