<?php ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">

                <?php

                $nome = $_POST['txtNome'];
                $email = $_POST['txtEmail'];
                $categoria = $_POST['txtCategoria'];
                $linguagem = $_POST['txtLinguagem'];

                echo "<div class='card'>";
                echo "<div class='card-body'>";

                echo "<h3 class='card-title'>Confirmação de Inscrição ( •̀ ω •́ )✧</h3>";
                echo "<p>Seja bem-vindo(a), $nome!</p>";
                echo "<p><strong>E-mail:</strong> $email</p>";

                if ($categoria == "inici") {
                    echo "<p><strong>Categoria:</strong> Iniciante</p>";
                }
                if ($categoria == "inter") {
                    echo "<p><strong>Categoria:</strong> Intermediário</p>";
                }
                if ($categoria == "avan") {
                    echo "<p><strong>Categoria:</strong> Avançado</p>";
                }

                if ($linguagem == "pyt") {
                    echo "<p><strong>Linguagem Principal:</strong> Python</p>";
                }
                if ($linguagem == "jav") {
                    echo "<p><strong>Linguagem Principal:</strong> Java</p>";
                }
                if ($linguagem == "php") {
                    echo "<p><strong>Linguagem Principal:</strong> PHP</p>";
                }
                if ($linguagem == "cm") {
                    echo "<p><strong>Linguagem Principal:</strong> C++</p>";
                }

                echo "<strong>Áreas de Interesse:</strong>";

                if (isset($_POST['areas'])) {
                    $areas = $_POST['areas'];

                    echo "<ul>";

                    foreach ($areas as $valor) {

                        if ($valor == "dw") {
                            echo "<li>Desenvolvimento Web</li>";
                        }

                        if ($valor == "ia") {
                            echo "<li>Inteligência Artificial</li>";
                        }

                        if ($valor == "bd") {
                            echo "<li>Banco de Dados</li>";
                        }

                        if ($valor == "si") {
                            echo "<li>Segurança da Informação</li>";
                        }
                    }

                    echo "</ul>";
                } else {
                    echo "<p>Nenhuma área selecionada.</p>";
                }

                echo "</div>";
                echo "</div>";

                ?>

            </div>
        </div>
    </div>

</body>

</html>