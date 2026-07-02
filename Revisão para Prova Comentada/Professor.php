<?php 

/* Se uma classe tiver mais métodos, coloca no molde de Professor (Geralmente o primeiro bloco) */

require_once 'Funcionario.php';
// importa o arquivo Funcionario.php

// isso é necessário porque Professor HERDA de Funcionario
// sem importar, o PHP não saberia o que é Funcionario

class Professor extends Funcionario
// cria a classe Professor

// extends = herança

// significa:

// Professor vai receber tudo que existe em Funcionario

// herda:

// matrícula
// nome
// cpf
// salarioBase
// ativo
// cargaHoraria

{
    private string $titulacao;
    // atributo próprio do professor
    // guarda formação acadêmica

    // exemplo:
    // doutorado
    // mestrado

    private int $horasAula;
    // quantidade de horas de aula dadas

    private float $valorHoraAula;
    // quanto ganha por cada hora aula

    private bool $coordenador;
    // true = é coordenador
    // false = não é coordenador

    public function __construct(
    // constructor da classe Professor

    // recebe atributos herdados + atributos próprios

        int $matricula,
        // herdado de Funcionario

        string $nome,
        // herdado

        string $cpf,
        // herdado

        float $salarioBase,
        // herdado

        bool $ativo,
        // herdado

        int $cargaHoraria,
        // herdado

        string $titulacao,
        // próprio da classe Professor

        int $horasAula,
        // próprio

        float $valorHoraAula,
        // próprio

        bool $coordenador
        // próprio
    ) {

        parent::__construct(
        // parent = classe mãe

        // chama o constructor da classe Funcionario

        // serve para inicializar atributos herdados

            $matricula,
            // envia matrícula para classe mãe

            $nome,
            // envia nome

            $cpf,
            // envia cpf

            $salarioBase,
            // envia salário

            $ativo,
            // envia status

            $cargaHoraria
            // envia carga horária
        );

        $this->titulacao = $titulacao;
        // salva titulação dentro do objeto

        $this->horasAula = $horasAula;
        // salva quantidade de horas aula

        $this->valorHoraAula = $valorHoraAula;
        // salva valor por hora

        $this->coordenador = $coordenador;
        // salva se é coordenador ou não
    }

    public function getTitulacao(): string
    // getter

    {
        return $this->titulacao;
        // devolve titulação
    }

    public function getHorasAula(): int
    // getter

    {
        return $this->horasAula;
        // devolve horas aula
    }

    public function getValorHoraAula(): float
    // getter

    {
        return $this->valorHoraAula;
        // devolve valor por hora
    }

    public function getCoordenador(): bool
    // getter

    {
        return $this->coordenador;
        // devolve true ou false
    }

    public function setTitulacao(string $titulacao): void
    // setter

    {
        $this->titulacao = $titulacao;
        // altera titulação
    }

    public function setHorasAula(int $horasAula): void
    // setter

    {
        $this->horasAula = $horasAula;
        // altera horas aula
    }

    public function setValorHoraAula(float $valorHoraAula): void
    // setter

    {
        $this->valorHoraAula = $valorHoraAula;
        // altera valor por hora
    }

    public function setCoordenador(bool $coordenador): void
    // setter

    {
        $this->coordenador = $coordenador;
        // altera se é coordenador ou não
    }

    public function calcularSalario(): float
    // método obrigatório porque foi abstrato na classe mãe

    {
        $salario = $this->getSalarioBase() + ($this->horasAula * $this->valorHoraAula);

        // calcula salário inicial

        // fórmula:

        // salário base + (horas aula × valor hora)

        // exemplo:

        // 3000 + (20 × 50)

        // 3000 + 1000

        // = 4000

        if ($this->coordenador) {
        // verifica se coordenador é true

            $salario += 1500;
            // += significa:

            // salario = salario + 1500

            // acrescenta bônus fixo de coordenador
        }

        return $salario;
        // devolve resultado final
    }

    public function verificarSituacao(): bool
    // outro método obrigatório herdado da classe abstrata

    {
        return $this->getAtivo();

        // getAtivo() vem da classe Funcionario

        // se ativo = true → retorna true

        // se ativo = false → retorna false
    }

    public function calcularBonus(): float
    // método específico do Professor

    {
        if ($this->titulacao == "doutorado") {
        // == significa comparação

        // verifica se texto é igual a "doutorado"

            return 2000;
            // se for doutorado devolve 2000
        }

        if ($this->titulacao == "mestrado") {
        // se não for doutorado, verifica mestrado

            return 1000;
            // devolve 1000
        }

        return 500;
        // se não entrar em nenhuma condição acima
        // devolve 500

        // funciona como "senão"
    }

    public function gerarRelatorio(): string
    // método que cria texto com informações

    {
        return "Matricula: " . $this->getMatricula()

        // concatena texto com matrícula

        . "<br>Nome: " . $this->getNome()

        // concatena com nome

        . "<br>Titulacao: " . $this->titulacao

        // concatena com titulação

        . "<br>Salario: R$ "

        . number_format($this->calcularSalario(), 2, ",", ".");

        // chama calcularSalario()

        // number_format formata o número

        // resultado final fica algo tipo:

        // Matricula: 101
        // Nome: Denis
        // Titulacao: Doutorado
        // Salario: 5.500,00
    }
}

?>