
<?php //remover cliente
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
    <h1>Remover Cliente - <?= $nome ?></h1>
    <form method="POST" action="remCliente.php">
    <input type="hidden" class="form-control" name="id" value="<?php echo $id ?>">
        <div class="form-group">
            <label for="lblDesc">Cliente</label>
            <input type="text" class="form-control" name="nome" placeholder="Nome do cliente" value="<?php echo $nome ?>" disabled>
        </div>
        <div class="form-group">
            <label for="lblPeso">CPF</label>
            <input type="text" maxlength="11" class="form-control" name="cpf" placeholder="Informe CPF do cliente" value="<?php echo $cpf ?>" disabled>
        </div>
        <div class="form-group">
            <label for="lblVal">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Informe e-mail do cliente" value="<?php echo $email ?>" disabled>
        </div>

        <input class="btn btn-danger" type="submit" id="btGrv" name="btGrv" value="Remover">
        <input class="btn btn-dark" type="reset" id="btLimpar" name="btLimpar" value="Limpar">
    </form>
    <br><br>
    <a href="lstCliente.php"><button class="btn btn-outline-secondary">Voltar</button></a><!--volta para o lista de clientes  -->
</div>

<?php include_once("layout/footer.php"); ?>