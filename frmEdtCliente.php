
<?php // editar cliente
    $id = trim($_GET['id']); // recebe o parâmetro por GET
    include 'banco.php'; // acessa a classe de conexão de banco de dados

    $pdo = Banco::conectar();

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM clientes WHERE id=?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);

    $nome = $data['nome'];
    $cpf = $data['cpf'];
    $email = $data['email'];

    Banco::desconectar();
?>

<?php include_once("layout/header.php"); ?>

<div class="col-md-10 offset-md-1">
    <h1>Editar Cliente - <?= $nome ?></h1>
    <form method="POST" action="edtCliente.php">
    <input type="hidden" class="form-control" name="id" value="<?php echo $id ?>">
        <div class="form-group">
            <label for="lblDesc">Cliente</label>
            <input type="text" class="form-control" name="nome" placeholder="Nome do cliente" value="<?php echo $nome ?>" required>
        </div>
        <div class="form-group">
            <label for="lblPeso">CPF</label>
            <input type="text" maxlength="11" class="form-control" name="cpf" placeholder="Informe CPF do cliente" value="<?php echo $cpf ?>" required>
        </div>
        <div class="form-group">
            <label for="lblVal">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Informe e-mail do cliente" value="<?php echo $email ?>" required>
        </div>

        <input class="btn btn-success" type="submit" id="btGrv" name="btGrv" value="Gravar">
        <input class="btn btn-dark" type="reset" id="btLimpar" name="btLimpar" value="Limpar">
    </form>
    <br><br>
    <a href="lstCliente.php"><button class="btn btn-outline-secondary">Voltar</button></a>
</div>

<?php include_once("layout/footer.php"); ?>