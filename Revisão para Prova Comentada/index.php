<?php 

require_once 'Professor.php'; 
// importa o arquivo Professor.php para poder usar essa classe
// require_once garante que ele só será carregado uma vez, evitando erro

require_once 'TecnicoAdministrativo.php'; 
// importa o arquivo da outra classe para usar no código
// sem isso o PHP não reconheceria a classe

echo "PROFESSOR<br>"; 
// echo exibe algo na tela
// <br> faz quebra de linha no navegador (igual um Enter no HTML)

$professor = new Professor(101, "Dênis", "000.000.000-00", 3000.00, true, 40, "Doutorado", 20, 50.00, true);
// cria um OBJETO chamado professor a partir da classe Professor
// new = criar objeto

// ordem dos valores precisa seguir exatamente a ordem do constructor:

// 101 → matrícula
// "Dênis" → nome
// "000.000.000-00" → cpf
// 3000.00 → salário base
// true → funcionário está ativo
// 40 → carga horária
// "Doutorado" → titulação
// 20 → horas de aula
// 50.00 → valor pago por hora aula
// true → é coordenador

echo "Nome: " . $professor->getNome() . "<br>";
// mostra "Nome: " na tela

// ponto (.) = concatenação
// concatenação = juntar textos/valores

// -> significa acessar algo dentro do objeto

// getNome() chama o método getNome da classe Professor
// esse método retorna o nome armazenado no objeto

// <br> quebra linha

echo "Salario base: R$ " . number_format($professor->getSalarioBase(), 2, ",", ".") . "<br>";
// mostra o salário base

// getSalarioBase() pega o salário armazenado

// number_format() formata números

// parâmetros:
// valor
// 2 = duas casas decimais
// "," = separador decimal brasileiro
// "." = separador de milhar

// exemplo:
// 3000.5 vira 3.000,50

echo "Salario final: R$ " . number_format($professor->calcularSalario(), 2, ",", ".") . "<br>";
// chama o método calcularSalario()

// ele não pega valor armazenado
// ele FAZ uma conta e devolve resultado

// nesse caso:

// salarioBase + (horasAula × valorHoraAula)

// se for coordenador soma mais 1500

// depois o number_format formata o resultado

echo "Situacao: ";
// apenas escreve a palavra Situação na tela

echo $professor->verificarSituacao() ? "ativo<br>" : "inativo<br>";
// operador ternário

// estrutura:

// condição ? valor_se_verdadeiro : valor_se_falso

// verificarSituacao() retorna true ou false

// se retornar true → mostra ativo
// se retornar false → mostra inativo

// equivalente a escrever:

// if (condição) {
//    echo "ativo";
// } else {
//    echo "inativo";
// }

echo "Bonus: R$ " . number_format($professor->calcularBonus(), 2, ",", ".") . "<br>";
// chama calcularBonus()

// o método verifica titulação:

// doutorado = 2000
// mestrado = 1000
// qualquer outro = 500

// depois mostra valor formatado

$professor->aplicarAumento(10);
// chama método aplicarAumento()

// 10 significa 10%

// esse método vai:

// verificar se percentual > 0
// verificar se percentual <= 40

// se estiver válido:

// calcular aumento
// adicionar no salário base

// exemplo:

// 3000 + 10%
// 3000 + 300 = 3300

echo "Salario base apos aumento: R$ " . number_format($professor->getSalarioBase(), 2, ",", ".") . "<br>";
// mostra salário base atualizado

// importante:

// aqui NÃO usa calcularSalario()

// usa getSalarioBase()

// porque queremos ver o valor guardado após o aumento

echo "Relatorio:<br>";
// título

echo $professor->gerarRelatorio() . "<br>";
// chama método gerarRelatorio()

// esse método retorna uma string pronta contendo:

// matrícula
// nome
// titulação
// salário calculado

echo "<br>";
// linha em branco para separar visualmente

echo "TECNICO ADMINISTRATIVO<br>";
// começa seção do técnico

$tecnico = new TecnicoAdministrativo(202, "Ana", "111.111.111-11", 2500.00, true, 40, "Laboratorio", 500.00, "Senior", "Noturno");
// cria objeto técnico usando classe TecnicoAdministrativo

// parâmetros:

// 202 → matrícula
// Ana → nome
// cpf
// salário base
// ativo
// carga horária
// setor
// adicional insalubridade
// nível
// turno

echo "Nome: " . $tecnico->getNome() . "<br>";
// pega nome usando método herdado da classe Funcionario

// mesmo não estando em TecnicoAdministrativo
// ele herda da classe mãe

echo "Salario base: R$ " . number_format($tecnico->getSalarioBase(), 2, ",", ".") . "<br>";
// pega salário base normal

echo "Salario final: R$ " . number_format($tecnico->calcularSalario(), 2, ",", ".") . "<br>";
// chama método calcularSalario do técnico

// regra:

// salarioBase + adicionalInsalubridade

// se turno for noturno:

// acrescenta mais 20% do salário base

echo "Situacao: ";
// escreve texto

echo $tecnico->verificarSituacao() ? "ativo<br>" : "inativo<br>";
// mesma lógica do professor

// se true = ativo
// se false = inativo

echo "Adicional: R$ " . number_format($tecnico->calcularAdicional(), 2, ",", ".") . "<br>";
// chama calcularAdicional()

// esse método apenas devolve o valor do adicional de insalubridade

// nesse caso:

// return 500

$tecnico->aplicarAumento(15);
// aplica aumento de 15%

// método herdado da classe Funcionario

// recalcula salário base

echo "Salario base apos aumento: R$ " . number_format($tecnico->getSalarioBase(), 2, ",", ".") . "<br>";
// mostra salário base depois do aumento

echo "Cracha gerado:";
// apenas imprime texto

echo $tecnico->gerarCracha() . "<br>";
// chama gerarCracha()

// esse método usa md5()

// md5 cria um código criptografado/hash

// ele junta:

// matrícula
// nome
// setor

// exemplo:

// 202AnaLaboratorio

// vira algo tipo:

// 3fa4bd82a9...

?>
