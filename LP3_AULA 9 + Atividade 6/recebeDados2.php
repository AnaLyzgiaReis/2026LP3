<?php ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Linguagens</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">

                <?php

                if (!isset($_GET['txtLinguagemPro']) || $_GET['txtLinguagemPro'] == "") {

                    echo "<div class='alert alert-warning'>
    Informe uma linguagem para realizar a busca. (╬▔皿▔)╯
    </div>";
                } else {

                    $pesquisa = $_GET['txtLinguagemPro'];

                    echo "<div class='alert alert-success'>
    (∩^o^)⊃━☆ Você pesquisou por: $pesquisa.
    </div>";

                    $linguagens = array("Python", "JavaScript", "PHP", "Java");

                    if (in_array($pesquisa, $linguagens)) {

                        echo "<div class='alert alert-success'>
        Linguagem encontrada na base de dados! (●'◡'●)
        </div>";
                    } else {

                        echo "<div class='alert alert-danger'>
        Linguagem não encontrada. ≧ ﹏ ≦
        </div>";
                    }
                }

                ?>

            </div>
        </div>
    </div>

</body>

</html>