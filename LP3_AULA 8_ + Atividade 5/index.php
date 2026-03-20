<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP3 - Atividade 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>LP3 - Atividade 5</h1>
        <h3>Ana Lygia, 3° Informática</h3>
        <div class="row">
            <div class="col-md-4">
                <h4>Questão 1 - Sistema de Pedidos</h4>
                <h6>Bem-vindo a nossa lanchonete! Nosso sanduíche tem um custo fixo de R$ 20,00. Gostaria de adicionais?</h6>
                <form action="recebeDados1.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Seu nome:</label>
                        <input name="txtNome">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="bacon" id="id1" name="adicionais[]">
                        <label class="form-check-label" for="id1">
                            Bacon
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="chedder" id="id2" name="adicionais[]">
                        <label class="form-check-label" for="id2">
                            Cheddar Cremoso
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="cebola" id="id2" name="adicionais[]">
                        <label class="form-check-label" for="id2">
                            Cebola Caramelizada
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="burguer" id="id2" name="adicionais[]">
                        <label class="form-check-label" for="id2">
                            Hambúrguer Extra
                        </label>
                    </div>

                    <style>
                        .btn-primary {
                            background-color: #ff87af;
                            border-color: #ff6598;
                        }
                    </style>
                    <button type="submit" class="btn btn-primary">Calcular</button>
                </form>
            </div>
            <div class="col-md-4">

                <h4>Questão 2 - Gerador de Tabuada Dinâmica</h4>
                <form method="GET" action="recebeDados2.php">
                    <div class="mb-3">
                        <label>Digite um número:</label>
                        <input name="num" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Gerar Tabuada</button>
                </form>
            </div>
            <div class="col-4">

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>