<?php ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação 1</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4>Inscrição para Evento Geek</h4>
                <form action="respQ1.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Nome Completo:</label>
                        <input name="txtNome">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email:</label>
                        <input name="txtEmail">
                    </div>
            
<div class="mb-3">
    <label class="form-label">Perfil do Participante:</label>
    <select name="txtPerfil">
        <option value="estu">Estudante</option>
        <option value="prof">Professor</option>
        <option value="comp">Competidor</option>
        </select>
     </div>
<div class="mb-3">
    <label class="form-label">Tamanho da Camisa do Evento:</label>
    <select name="txtCamisa">
        <option value="cp">P</option>
        <option value="cm">M</option>
        <option value="cg">G</option>
        <option value="cgg">GG</option>
        </select>
</div>
<label class="form-label">Workshops de Interesse:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="dl" id="id1" name="workshops[]">
                        <label class="form-check-label" for="id1">
                            Desenvolvimento com Laravel
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="eb" id="id2" name="workshops[]">
                        <label class="form-check-label" for="id2">
                            Estilização com Bootstrap
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="ljs" id="id2" name="workshops[]">
                        <label class="form-check-label" for="id3">
                            Lógica com JavaScript
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="hc" id="id2" name="workshops[]">
                        <label class="form-check-label" for="id4">
                            História da Computação
                        </label>
                    </div>
                    

                    <style>
                        .btn-primary {
                            background-color: #ff87af;
                            border-color: #ff6598;
                        }
                    </style>
                    <button type="submit" class="btn btn-primary">Inscreverse</button>
                    <button type="reset" class="btn btn-primary">Limpar</button>
                </form>
            </div>


            <div class="col-md-4">
                <h4>Sistema de Busca de Personalidades Históricas</h4>
                <form method="GET" action="respQ2.php">
               <div class="mb-3">
                        <label class="form-label">Digite o Nome de uma Figura Importante da Área Tecnológica:</label>
                        <input name="txtFigura">
                </div>

                    <button type="submit" class="btn btn-primary">Pesquisar</button>
                     <button type="reset" class="btn btn-primary">Limpar</button>
                </form>
            </div>
            <div class="col-4">

            </div>
        </div>
        </div>
    </div>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
