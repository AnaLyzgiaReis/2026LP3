<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP3 - Atividade 4</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>LP3 - Atividade 4</h1>
    <h3>Ana Lygia, 3° Informática</h3>

<div class="row mt-4">
<div class="col-4">

<h4>Questão 1 - Aprovação Escolar</h4>
    <form action="recebeDados1.php" method="POST">
    <div class="mb-3">
        <label class="form-label">Nota 1</label>
        <input name="txtNota1" step="0.01">
    </div>
    <div class="mb-3">
        <label class="form-label">Nota 2</label>
        <input name="txtNota2" step="0.01">
    </div>
    <div class="mb-3">
        <label class="form-label">Nota 3</label>
        <input name="txtNota3" step="0.01">
    </div>
    <div class="mb-3">
        <label class="form-label">Frequência</label>
        <input name="txtFreq" step="0.01">
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
        <div class="col-4">

<h4>Questão 2 - Calculadora de Tarifas de Energia Elétrica</h4>
    <form action="recebeDados2.php" method="POST">
<div class="mb-3">
    <label class="form-label">kwh Consumidos no Mês</label>
    <input name="txtKwh">
</div>
    <div class="mb-3">
    <label class="form-label">Instalação do Imóvel</label>
    <select name="txtImovel">
        <option value="residencial">Residencial</option>
        <option value="comercial">Comercial</option>
        <option value="industrial">Industrial</option>
        </select>
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
    <div class="col-4">

<h4>Questão 3 - Descontos para E-commerce</h4>
     <form action="recebeDados3.php" method="POST">
<div class="mb-3">
    <label class="form-label">Valor Total da Compra</label>
    <input name="txtCompra">
</div>
    <div class="mb-3">
    <label class="form-label">Categoria do Cliente</label>
    <select name="txtCliente">
        <option value="comum">Cliente Comum</option>
        <option value="vip">Cliente VIP</option>
        <option value="premium">Cliente Premium</option>
        </select>
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
    <div class="col-4">

</div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>