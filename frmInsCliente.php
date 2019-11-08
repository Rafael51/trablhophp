<?php include_once("layout/header.php"); ?> <!-- layout inserir header  -->

<div class="col-md-10 offset-md-1">
    <h1>Cadastrar Novo Cliente</h1>
    <form method="POST" action="insCliente.php">
        <div class="form-group">
            <label for="lblDesc">Cliente</label>
            <input type="text" class="form-control" name="nome" placeholder="Nome do cliente" required>
        </div>
        <div class="form-group">
            <label for="lblPeso">CPF</label>
            <input type="text" maxlength="11" class="form-control" name="cpf" placeholder="Informe CPF do cliente" required>
        </div>
        <div class="form-group">
            <label for="lblVal">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Informe e-mail do cliente" required>
        </div>

        <input class="btn btn-success" type="submit" id="btGrv" name="btGrv" value="Gravar">
        <input class="btn btn-dark" type="reset" id="btLimpar" name="btLimpar" value="Limpar">
    </form>
    <br><br>
    <a href="lstCliente.php"><button class="btn btn-outline-secondary">Voltar</button></a>
</div>

<?php include_once("layout/footer.php"); ?> <!-- rodape -->