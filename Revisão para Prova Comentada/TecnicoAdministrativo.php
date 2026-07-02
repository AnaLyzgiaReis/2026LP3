<?php 

require_once 'Funcionario.php';
// importa a classe Funcionario

// necessário porque essa classe herda dela

class TecnicoAdministrativo extends Funcionario
// cria classe TecnicoAdministrativo

// extends = herança

// essa classe recebe tudo que existe em Funcionario

// herda:

// matricula
// nome
// cpf
// salarioBase
// ativo
// cargaHoraria

{
    private string $setor;
    // setor onde trabalha

    // exemplo:
    // laboratorio
    // secretaria
    // financeiro

    private float $adicionalInsalubridade;
    // valor extra pago por trabalhar em ambiente de risco

    private string $nivel;
    // nível/cargo do técnico

    // exemplo:
    // junior
    // pleno
    // senior

    private string $turno;
    // horário de trabalho

    // exemplo:
    // diurno
    // noturno

    public function __construct(
    // constructor da classe

    // recebe atributos herdados + atributos próprios

        int $matricula,
        // herdado

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

        string $setor,
        // próprio da classe

        float $adicionalInsalubridade,
        // próprio

        string $nivel,
        // próprio

        string $turno
        // próprio
    ) {

        parent::__construct(
        // chama constructor da classe mãe

        // inicializa atributos herdados

            $matricula,
            // envia matrícula

            $nome,
            // envia nome

            $cpf,
            // envia cpf

            $salarioBase,
            // envia salário

            $ativo,
            // envia status ativo/inativo

            $cargaHoraria
            // envia carga horária
        );

        $this->setor = $setor;
        // salva setor no objeto

        $this->adicionalInsalubridade = $adicionalInsalubridade;
        // salva adicional

        $this->nivel = $nivel;
        // salva nível do técnico

        $this->turno = $turno;
        // salva turno de trabalho
    }

    public function getSetor(): string
    // getter

    {
        return $this->setor;
        // devolve setor
    }

    public function getAdicionalInsalubridade(): float
    // getter

    {
        return $this->adicionalInsalubridade;
        // devolve adicional
    }

    public function getNivel(): string
    // getter

    {
        return $this->nivel;
        // devolve nível
    }

    public function getTurno(): string
    // getter

    {
        return $this->turno;
        // devolve turno
    }

    public function setSetor(string $setor): void
    // setter

    {
        $this->setor = $setor;
        // altera setor
    }

    public function setAdicionalInsalubridade(float $adicionalInsalubridade): void
    // setter

    {
        $this->adicionalInsalubridade = $adicionalInsalubridade;
        // altera adicional
    }

    public function setNivel(string $nivel): void
    // setter

    {
        $this->nivel = $nivel;
        // altera nível
    }

    public function setTurno(string $turno): void
    // setter

    {
        $this->turno = $turno;
        // altera turno
    }

    public function calcularSalario(): float
    // método obrigatório porque foi abstrato na classe mãe

    {
        $salario = $this->getSalarioBase() + $this->adicionalInsalubridade;
        // calcula salário inicial

        // fórmula:

        // salario base + adicional de insalubridade

        // exemplo:

        // 2500 + 500 = 3000

        if (strtolower($this->turno) == "noturno") {
        // strtolower transforma texto em minúsculo

        // exemplo:

        // NOTURNO → noturno
        // Noturno → noturno

        // isso evita erro se escrever maiúsculo ou minúsculo

        // == faz comparação

        // verifica se turno é igual a "noturno"

            $salario += $this->getSalarioBase() * 0.20;
            // += significa somar e guardar

            // calcula 20% do salário base

            // exemplo:

            // 2500 × 0.20 = 500

            // soma no salário

            // 3000 + 500 = 3500
        }

        return $salario;
        // devolve salário final
    }

    public function verificarSituacao(): bool
    // método obrigatório herdado da classe abstrata

    {
        return $this->getAtivo();
        // getAtivo vem da classe Funcionario

        // se ativo = true retorna true
        // se ativo = false retorna false
    }

    public function calcularAdicional(): float
    // método específico dessa classe

    {
        return $this->adicionalInsalubridade;
        // apenas devolve o valor do adicional

        // exemplo:

        // return 500
    }

    public function gerarCracha(): string
    // método que gera código

    {
        return md5(
        // md5 é função nativa do PHP

        // cria um código criptografado (hash)

        $this->getMatricula() . $this->getNome() . $this->setor

        // junta essas informações usando concatenação

        // exemplo:

        // 202AnaLaboratorio

        // depois md5 transforma em algo tipo:

        // 4ac8d13f8bc32d1a...
        );
    }
}

?>