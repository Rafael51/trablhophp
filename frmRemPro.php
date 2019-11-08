<?php include_once("layout/header.php"); ?>

<?php
$id = trim($_GET['id']); // recebe o parâmetro por GET
include 'banco.php'; // acessa a classe de conexão de banco de dados

$pdo = Banco::conectar();

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT * FROM produtos WHERE id=?";
$q = $pdo->prepare($sql);
$q->execute(array($id));
$data = $q->fetch(PDO::FETCH_ASSOC);

$desc = $data['descricao'];
$peso = $data['peso'];
$valor = $data['valor'];

Banco::desconectar();
?>

<div class="col-md-10 offset-md-1">
    <h1>Remover Produto - <?= $desc ?></h1>
    <form id="frmEdtPro" name="frmEdtPro" method="POST" action="remPro.php">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <div class="form-group">
                <label for="lblDesc">Descrição</label>
                <input type="text" class="form-control" id="txtDesc" name="txtDesc" placeholder="Nome do produto" value="<?php echo $desc ?>" disabled>
            </div>
            <div class="form-group">
                <label for="lblPeso">Peso</label>
                <input type="number" step="0.01" class="form-control" id="numPeso" name="numPeso" placeholder="Informe o peso do produto" value="<?php echo $peso ?>" disabled>
            </div>
            <div class="form-group">
                <label for="lblVal">Valor</label>
                <input type="number" step="0.01" class="form-control" id="numVal" name="numVal" placeholder="Informe o valor do produto" value="<?php echo $valor ?>" disabled>
            </div>
        </fieldset>
        <input class="btn btn-danger" type="submit" id="btGrv" name="btGrv" value="Remover">
        <input class="btn btn-dark" type="reset" id="btLimpar" name="btLimpar" value="Limpar">
    </form>
    <br>
    <a href="lstProd.php"><button class="btn btn-outline-secondary">Voltar</button></a>
</div>

<?php include_once("layout/footer.php"); ?>