<?php
    $email = $_POST['email'];
    $pwd = $_POST['password'];

    $pwd = md5($pwd);// gera senha critografada 

    include 'banco.php'; // verifica banco de dados

    $pdo = Banco::conectar();

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM usuarios WHERE email=?";
    $q = $pdo->prepare($sql);
    $q->execute(array($email));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    
    $password = $data['senha'];
    
    Banco::desconectar();

    if ($pwd==$password) { // se sessao for igual a do banco
        session_start(); // inicia sessao 
        $_SESSION['user']=$email;
        header("location: home.php"); // redireciona para a home
    } else {
        header("location: index.php"); // senao volta para a pagina de login
    }

?>