<?php
require_once "Livro.php";

$l1 = new Livro();
$l1->titulo = "Harry Potter";
$l1->autor = "JK";
$l1->quantidadePagina = 800;
$l1->quantidadeExemplares = 10000;

$l2 = new Livro();
$l2->titulo = "Quem é Você Alaska?";
$l2->autor = "Um Britanico aí";
$l2->quantidadePagina = 500;
$l2->quantidadeExemplares = 5000;

$l3 = new Livro();
$l3->titulo = "A Hora da Estrela";
$l3->autor = "Clarice Lispector";
$l3->quantidadePagina = 700;
$l3->quantidadeExemplares = 3000;


echo "Livro 1 <br>";
$l1->exibirInformacoes();
$l1->emprestarLivro();
$l1->devolverLivro();
$l1->verificarDisponibilidade();

echo "<br> Livro 2 <br>";
$l2->exibirInformacoes();
$l2->emprestarLivro();
$l2->alterarQuantidadePaginas(600);
$l2->verificarDisponibilidade();

echo "<br> Livro 3 <br>";
$l3->exibirInformacoes();
$l3->devolverLivro();
$l3->verificarDisponibilidade();

echo "<br> Comparação <br>";
$l1->compararPaginas($l2);

echo "<br> Informações Atualizadas <br>";
echo "<br> Livro 1 <br>";
$l1->exibirInformacoes();
echo "<br> Livro 2 <br>";
$l2->exibirInformacoes();
echo "<br> Livro 3 <br>";
$l3->exibirInformacoes();
?>