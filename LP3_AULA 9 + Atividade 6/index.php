<?php ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 9 - Atividade 6</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4>Cadastro - Maratona de Programação</h4>
                <form action="recebeDados1.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Nome Completo:</label>
                        <input name="txtNome">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email:</label>
                        <input name="txtEmail">
                    </div>
            
<div class="mb-3">
    <label class="form-label">Categoria de Participação</label>
    <select name="txtCategoria">
        <option value="inici">Iniciante</option>
        <option value="inter">Intermediário</option>
        <option value="avan">Avançado</option>
        </select>
     </div>
<div class="mb-3">
    <label class="form-label">Linguagem Principal</label>
<div class="form-check">
  <input class="form-check-input" type="radio" name="txtLinguagem" id="flexRadioDefault1">
  <label class="form-check-label" for="pyt"> Python </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="txtLinguagem" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="jav"> Java </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="txtLinguagem" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="php"> PHP </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="txtLinguagem" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="cm"> C++ </label>
</div>
</div>

<label class="form-label">Áreas de Interesse</label>
<div class="form-check">
                        <input class="form-check-input" type="checkbox" value="dw" id="id1" name="areas[]">
                        <label class="form-check-label" for="id1">
                            Desenvolvimento Web
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="ia" id="id2" name="areas[]">
                        <label class="form-check-label" for="id2">
                            Inteligência Artificial
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="bd" id="id3" name="areas[]">
                        <label class="form-check-label" for="id3">
                            Banco de Dados
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="si" id="id4" name="areas[]">
                        <label class="form-check-label" for="id4">
                            Segurança da Informação
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
                <h4>Sistema de Consulta - Linguagens de Programação</h4>
                <form method="GET" action="recebeDados2.php">
               <div class="mb-3">
                        <label class="form-label">Digite o Nome de uma Linguagem de Programação:</label>
                        <input name="txtLinguagemPro">
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>
