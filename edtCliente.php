<?php
    // recuperar os valores passados por POST
    //trim = remove espacos que usuario digito (editar)
    $id = trim($_POST['id']);
    $nome = trim($_POST['nome']);
    $cpf = trim($_POST['cpf']);
    $email = trim($_POST['email']);
 
    if(!empty($nome) && !empty($cpf) && !empty($email)) { //verifica se os dados passados sao diferentes de vazio
        include 'banco.php';
        $pdo = Banco::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "UPDATE clientes SET nome=?, cpf=?, email=? WHERE id=?"; // realiza o update no banco
        $q = $pdo->prepare($sql);
        $q->execute(array($nome, $cpf, $email, $id));// passa variaves para consulta sql
        Banco::desconectar();///desconect banco
    }
    header("location:lstCliente.php"); // retorna registrar cliente
?>