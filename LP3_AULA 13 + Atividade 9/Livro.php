<?php
class Livro {
public string $titulo;
public string $autor;
public int $quantidadePagina;
public int $quantidadeExemplares;

public function emprestarLivro() {
    if($this->quantidadeExemplares > 0) {
        $this->quantidadeExemplares = $this->quantidadeExemplares - 1;
    }
}
public function devolverLivro() {
    $this->quantidadeExemplares = $this->quantidadeExemplares + 1;
}
public function verificarDisponibilidade() {
    if($this->quantidadeExemplares > 0) {
        echo "Livro Disponivel <br>";
    } else {
        echo "Livro Indisponivel <br>";
    }
}
public function alterarQuantidadePaginas($novaQuantidade) {
    $this->quantidadePagina = $novaQuantidade;
}
public function exibirInformacoes() {
    echo "Título do Livro: " .  $this->titulo . "<br>";
    echo "Autor: " .  $this->autor . "<br>";
    echo "Quantidade de Páginas: " .  $this->quantidadePagina . "<br>";
    echo "Quantidade de Exemplares Disponiveis: " .  $this->quantidadeExemplares . "<br>";
}
public function compararPaginas($outroLivro) {

    if($this->quantidadePagina > $outroLivro->quantidadePagina) {
        echo $this->titulo . " possui mais páginas <br>";
    }

    else if($this->quantidadePagina < $outroLivro->quantidadePagina) {
        echo $outroLivro->titulo . " possui mais páginas <br>";
    }

    else {
        echo "Os livros possuem a mesma quantidade de páginas <br>";
    }
}
}
?>