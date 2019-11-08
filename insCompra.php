<?php
$cliente = $_POST['cliente'];
$produtos = $_POST['produtos'];

if (!empty($cliente) && !empty($produtos)) {
    include 'banco.php';
    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql1 = 'INSERT INTO compras (cliente_id) VALUES (?);';
    $qry = $pdo->prepare($sql1);
    $qry->execute(array($cliente));
    $compraId = $pdo->lastInsertId();

    foreach ($produtos as $produto) {
        $sql2 = 'INSERT INTO itens (compra_id, produto_id) VALUES (?, ?);';
        $qry = $pdo->prepare($sql2);
        $qry->execute(array($compraId, $produto));
    }
}

header("location: lstCompra.php");
