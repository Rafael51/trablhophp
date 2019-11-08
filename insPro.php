<?php
    $desc = trim($_POST['txtDesc']);
    $peso = trim($_POST['numPeso']);
    $valor = trim($_POST['numVal']);

    if (!empty($desc) && !empty($peso) && !empty($valor)) {
        include 'banco.php';
        $pdo = Banco::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = 'INSERT INTO produtos (descricao, peso, valor) VALUES (?, ?, ?);';
        $qry = $pdo->prepare($sql);
        $qry->execute(array($desc, $peso, $valor));
        Banco::desconectar();
    }
    header("location: lstProd.php");
?>