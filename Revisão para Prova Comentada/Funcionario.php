<?php 

/* Classe pai:
no topo
recebendo as setas
geralmente maior
normalmente abstrata */

abstract class Funcionario
// abstract = classe abstrata
// significa que NÃO pode criar objeto diretamente dela
// serve como modelo para outras classes herdarem

// exemplo:
// errado → new Funcionario()
// correto → new Professor()

{
    private int $matricula;
    // private = atributo privado
    // só pode ser acessado dentro da própria classe
    // int = só aceita números inteiros

    private string $nome;
    // atributo que guarda nome
    // string = texto

    private string $cpf;
    // guarda CPF do funcionário

    private float $salarioBase;
    // float = números com casas decimais
    // exemplo: 2500.50

    private bool $ativo;
    // bool = booleano
    // só aceita true ou false
    // indica se funcionário está ativo ou não

    private int $cargaHoraria;
    // quantidade de horas de trabalho

    public function __construct(
    // constructor = executa automaticamente quando cria objeto
    // usado para inicializar valores

        int $matricula,
        // recebe matrícula como inteiro

        string $nome,
        // recebe nome

        string $cpf,
        // recebe cpf

        float $salarioBase,
        // recebe salário

        bool $ativo,
        // recebe true ou false

        int $cargaHoraria
        // recebe horas de trabalho

// int -> inteiro (10)
// float -> decimal (10.5)
// string -> texto ("Ana")
// bool -> true/false
// void -> nao retorna nada
// return -> devolve valor

    ) {
        $this->matricula = $matricula;
        // $this = referência ao objeto atual
        // pega valor recebido e salva no atributo da classe

        $this->nome = $nome;
        // salva nome recebido

        $this->cpf = $cpf;
        // salva cpf recebido

        $this->salarioBase = $salarioBase;
        // salva salário recebido

        $this->ativo = $ativo;
        // salva status ativo/inativo

        $this->cargaHoraria = $cargaHoraria;
        // salva carga horária
    }

    public function getMatricula(): int
    // getter = pega valor do atributo
    // : int significa que retorna inteiro

    {
        return $this->matricula;
        // return devolve valor para quem chamou
    }

    public function getNome(): string
    // retorna nome

    {
        return $this->nome;
        // devolve nome armazenado
    }

    public function getCpf(): string
    // retorna cpf

    {
        return $this->cpf;
        // devolve cpf
    }

    public function getSalarioBase(): float
    // retorna salário base

    {
        return $this->salarioBase;
        // devolve salário
    }

    public function getAtivo(): bool
    // retorna true ou false

    {
        return $this->ativo;
        // devolve status do funcionário
    }

    public function getCargaHoraria(): int
    // retorna carga horária

    {
        return $this->cargaHoraria;
        // devolve horas trabalhadas
    }

    public function setMatricula(int $matricula): void
    // setter = altera valor
    // void = não retorna nada

    {
        $this->matricula = $matricula;
        // altera matrícula antiga pela nova
    }

    public function setNome(string $nome): void
    // altera nome

    {
        $this->nome = $nome;
        // substitui nome
    }

    public function setCpf(string $cpf): void
    // altera cpf

    {
        $this->cpf = $cpf;
        // substitui cpf
    }

    public function setSalarioBase(float $salarioBase): void
    // altera salário

    {
        $this->salarioBase = $salarioBase;
        // atualiza salário
    }

    public function setAtivo(bool $ativo): void
    // altera status

    {
        $this->ativo = $ativo;
        // muda entre true e false
    }

    public function setCargaHoraria(int $cargaHoraria): void
    // altera horas trabalhadas

    {
        $this->cargaHoraria = $cargaHoraria;
        // atualiza carga horária
    }

    public function admitir(): void
    // método para admitir funcionário

    {
        if (!$this->ativo) {
        // if = condição

        // ! significa negação

        // se ativo for false
        // então !false vira true
        // entra no bloco

        $this->ativo = true;
        // muda status para ativo
        }
    }

    public function demitir(): void
    // método para demitir funcionário

    {
        $this->ativo = false;
        // independente do estado anterior
        // deixa funcionário inativo
    }

    public function aplicarAumento(float $percentual): void
    // método recebe porcentagem de aumento

    {
        if ($percentual > 0 && $percentual <= 40) {
        // condição:

        // > 0 → precisa ser maior que zero

        // && significa E

        // <= 40 → no máximo 40%

        // as duas condições precisam ser verdadeiras

        $aumento = $this->salarioBase * ($percentual / 100);
        // calcula valor do aumento

        // exemplo:

        // salário = 2000

        // percentual = 10

        // 10 / 100 = 0.10

        // 2000 × 0.10 = 200

        $this->salarioBase += $aumento;
        // += significa somar e guardar

        // mesma coisa que:

        // $this->salarioBase = $this->salarioBase + $aumento

        // exemplo:

        // 2000 + 200 = 2200
        }
    }

    abstract public function calcularSalario(): float;
    // método abstrato

    // classe filha é obrigada a criar esse método

    // : float = deve retornar número decimal

    // aqui não tem código
    // porque cada filho calcula salário diferente

    abstract public function verificarSituacao(): bool;
    // também obrigatório nas classes filhas

    // cada filho precisa implementar

    // retorna true ou false
}

?>