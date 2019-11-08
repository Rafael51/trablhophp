<?php
include 'banco.php';
$pdo = Banco::conectar();

$sql = 'SELECT * FROM clientes ORDER BY id';
$listaClientes = $pdo->query($sql); // pega todos os registros de clientes 

$sql = 'SELECT * FROM produtos ORDER BY descricao';
$listaProdutos = $pdo->query($sql); //pega todos registros de produtos

$pdo = Banco::desconectar();
?>
<?php include_once("layout/header.php"); ?>

<div class="col-md-10 offset-md-1">
    <h1>Realizar Nova Compra</h1>
    <form method="POST" action="insCompra.php">
        <div class="form-group">
            <label for="inputCliente">Cliente</label>
            <select id="inputCliente" name="cliente" class="form-control">
                <option selected>Escolher...</option>
                <?php
                foreach ($listaClientes as $row) { // gera um option com todos os clientes cadatrados
                    echo "<option name='" . $row['id'] . "' value='" . $row['id'] . "'>" . $row['nome'] . "</option>";
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="lblDesc">Produtos Comprados</label>
            <div class="form-check">
                <?php foreach ($listaProdutos as $produto) { ?> <!-- gera caixas (check box) com todos os produtos cadastrados para que o usuario possa cadastrar -->
                    <input class="form-check-input" type="checkbox" name="produtos[]" value="<?= $produto['id']?>" id="prod<?= $produto['id']?>"> 
                    <label class="form-check-label" for="prod<?= $produto['id']?>">
                        <?= $produto['descricao'] ?>
                    </label>
                    <br>
                <?php } ?>
            </div>
        </div>

        <input class="btn btn-success" type="submit" id="btGrv" name="btGrv" value="Gravar">
        <input class="btn btn-dark" type="reset" id="btLimpar" name="btLimpar" value="Limpar">
    </form>
    <br><br>
    <a href="lstCompra.php"><button class="btn btn-outline-secondary">Voltar</button></a>
</div>

<?php include_once("layout/footer.php"); ?>