<?php ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 9 - Atividade 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <div class="row">

            <div class="col-md-6">
                <h4>Cadastro - Maratona de Programação</h4>

                <form action="recebeDados1.php" method="POST">

                    <div class="mb-3">
                        <label class="form-label">Nome Completo:</label>
                        <input type="text" name="txtNome" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">E-mail:</label>
                        <input type="text" name="txtEmail" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Categoria de Participação:</label>
                        <select name="txtCategoria" class="form-select">
                            <option value="inici">Iniciante</option>
                            <option value="inter">Intermediário</option>
                            <option value="avan">Avançado</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Linguagem Principal:</label>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="txtLinguagem" value="pyt">
                            <label class="form-check-label">Python</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="txtLinguagem" value="jav">
                            <label class="form-check-label">Java</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="txtLinguagem" value="php">
                            <label class="form-check-label">PHP</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="txtLinguagem" value="cm">
                            <label class="form-check-label">C++</label>
                        </div>
                    </div>

                    <label class="form-label">Áreas de Interesse:</label>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="dw" name="areas[]">
                        <label class="form-check-label">Desenvolvimento Web</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="ia" name="areas[]">
                        <label class="form-check-label">Inteligência Artificial</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="bd" name="areas[]">
                        <label class="form-check-label">Banco de Dados</label>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="si" name="areas[]">
                        <label class="form-check-label">Segurança da Informação</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Inscrever-se</button>
                    <button type="reset" class="btn btn-primary">Limpar</button>
                    <style>
                        .btn-primary {
                            background-color: #ff87af;
                            border-color: #ff6598;
                        }
                    </style>

                </form>
            </div>

            <div class="col-md-6">
                <h4>Sistema de Consulta - Linguagens</h4>

                <form action="recebeDados2.php" method="GET">

                    <div class="mb-3">
                        <label class="form-label">Digite o nome de uma linguagem de programação:</label>
                        <input type="text" name="txtLinguagemPro" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Buscar</button>
                    <button type="reset" class="btn btn-primary">Limpar</button>
                    <style>
                        .btn-primary {
                            background-color: #ff87af;
                            border-color: #ff6598;
                        }
                    </style>
                </form>
            </div>

        </div>
    </div>
</body>

</html>