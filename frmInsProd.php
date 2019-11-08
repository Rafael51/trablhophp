<?php include_once("layout/header.php"); ?> <!-- inserrir produto -->

<div class="col-md-10 offset-md-1">
    <h1>Cadastrar Novo Produto</h1>
    <form method="POST" action="insPro.php">
        <div class="form-group">
            <label for="lblDesc">Descrição</label>
            <input type="text" class="form-control" id="txtDesc" name="txtDesc" placeholder="Nome do produto" required >
        </div>
        <div class="form-group">
            <label for="lblPeso">Peso</label>
            <input type="number" step="0.01" class="form-control" id="numPeso" name="numPeso" placeholder="Informe o peso do produto" required>
        </div>
        <div class="form-group">
            <label for="lblVal">Valor</label>
            <input type="number" step="0.01" class="form-control" id="numVal" name="numVal" placeholder="Informe o valor do produto" required>
        </div>

        <input class="btn btn-success" type="submit" id="btGrv" name="btGrv" value="Gravar">
        <input class="btn btn-dark" type="reset" id="btLimpar" name="btLimpar" value="Limpar">
    </form>
    <br><br>
    <a href="lstProd.php"><button class="btn btn-outline-secondary">Voltar</button></a>
</div>

<?php include_once("layout/footer.php"); ?>