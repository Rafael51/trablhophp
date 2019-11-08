<?php
    $nome = trim($_POST['nome']);
    $cpf = trim($_POST['cpf']);
    $email = trim($_POST['email']);

    if (!empty($nome) && !empty($cpf) && !empty($email)) {
        include 'banco.php';
        $pdo = Banco::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = 'INSERT INTO clientes (nome, cpf, email) VALUES (?, ?, ?);';
        $qry = $pdo->prepare($sql);
        $qry->execute(array($nome, $cpf, $email));
        Banco::desconectar();
    }
    header("location: lstCliente.php");
?>