<?php
    // recuperar os valores passados por POST
    $id = trim($_GET['id']); // pega id compra
    
    if(!empty($id)) {
        include 'banco.php';
        $pdo = Banco::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM compras WHERE id=?";// sql sera executado para remover a compra com o ID passadoa acima
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        Banco::desconectar();
    }
    header("location:lstCompra.php"); // retorna lista de compra
?>