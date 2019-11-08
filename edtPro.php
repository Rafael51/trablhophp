<?php
    // recuperar os valores passados por POST (produto)
    $id = trim($_POST['id']);
    $desc = trim($_POST['txtDesc']);
    $peso = trim($_POST['numPeso']);
    $valor = trim($_POST['numVal']);
 
    if(!empty($desc) && !empty($peso) && !empty($valor)) {
        include 'banco.php';
        $pdo = Banco::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE produtos SET descricao=?, peso=?, valor=? WHERE id=?";
        $q = $pdo->prepare($sql);
        $q->execute(array($desc, $peso, $valor, $id));
        Banco::desconectar();
    }
    header("location:lstProd.php");
?>