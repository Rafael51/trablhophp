<?php
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);

    $senha = md5($senha);

    if (!empty($nome) && !empty($email) && !empty($senha)) {
        include 'banco.php';
        $pdo = Banco::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = 'INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?);';
        $qry = $pdo->prepare($sql);
        $qry->execute(array($nome, $email, $senha));
        Banco::desconectar();
    }
    header("location: index.php");
?>