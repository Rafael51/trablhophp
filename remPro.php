<?php
    // recuperar os valores passados por POST
    $id = trim($_POST['id']); // remove produto
    
    if(!empty($id)) {
        include 'banco.php';
        $pdo = Banco::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM produtos WHERE id=?";// sql sera executado para remover oproduto com o ID passadoa acima
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        Banco::desconectar();
    }
    header("location:lstProd.php"); // retorna lista produto
?>