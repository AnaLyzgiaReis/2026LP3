<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>LP3 - Atividade 3</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">

    <h1>LP3 - Atividade 3 ( •̀ ω •́ )</h1>
    <h3>Ana Lygia, 3° Informática</h3>

<div class="row mt-4">
<div class="col-4">

<h4>Questão 1</h4>
<form action="recebeDados1.php" method="POST">
<div class="mb-3">
<label class="form-label">Peso (kg)</label>
<input type="number" step="0.01" class="form-control" name="txtPeso">
</div>
<div class="mb-3">
<label class="form-label">Altura (m)</label>
<input type="number" step="0.01" class="form-control" name="txtAltura">
</div>
<button type="submit" class="btn btn-info">Calcular</button>
</form>
</div>
<div class="col-4">

<h4>Questão 2</h4>
<form action="recebeDados2.php" method="POST">
<div class="mb-3">
<label class="form-label">Tipo de carro</label>
<select class="form-control" name="txtCarro">
<option value="popular">Popular</option>
<option value="luxo">Luxo</option>
</select>
</div>
<div class="mb-3">
<label class="form-label">Dias de aluguel</label>
<input type="number" class="form-control" name="txtDias">
</div>
<div class="mb-3">
<label class="form-label">Km percorridos</label>
<input type="number" class="form-control" name="txtKm">
</div>
<button type="submit" class="btn btn-info">Calcular</button>
</form>
</div>
<div class="col-4">

<h4>Questão 3</h4>
<form action="recebeDados3.php" method="POST">
<div class="mb-3">
<label class="form-label">Horas de atividade no mês</label>
<input type="number" class="form-control" name="txtHoras">
</div>
<button type="submit" class="btn btn-info">Calcular</button>

</form>
</div>
</div>
</div>
</body>
</html>