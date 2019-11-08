<?php
    // recuperar os valores passados por POST
    $id = trim($_POST['id']); // pega o ID do cliente a ser removido
    
    if(!empty($id)) {
        include 'banco.php';
        $pdo = Banco::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM clientes WHERE id=?"; // sql sera executado para remover o cliente com o ID passadoa acima
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        Banco::desconectar();
    }
    header("location:lstCliente.php"); // retorna lista cliente
?>