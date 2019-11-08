<?php include_once("layout/header.php"); ?>

<div class="col-md-12">
    <h1>Compras Realizadas</h1>
    <a class="btn btn-primary mb-1" href="frmInsCompra.php" role="button">Nova Compra</a> <!--button add nova comppra -->
    <table class="table table-secondary text-center"> <!--cria tabela compra -->
        <thead class="bg-dark text-white"> 
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Produtos</th>
                <th>OPERAÇÕES</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'banco.php';
            $pdo = Banco::conectar();
            // fazer uma busca no banco relacionando tabela cliente
            $sql = 'SELECT compras.id, cliente_id, clientes.nome FROM compras INNER JOIN clientes ON clientes.id = compras.cliente_id ORDER BY compras.id';
            $lista = $pdo->query($sql);
            $pdo = Banco::desconectar();
            foreach ($lista as $row) { // for listar cada copra realizada 
                ?>
                <tr>
                    <th class="align-middle" scope="row"><?php echo $row['id'] ?></th>
                    <td class="align-middle" ><?php echo $row['nome'] ?></td>
                    <td class="align-middle" >
                        <?php 
                            $pdo = Banco::conectar();
                            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            // faz uma busca no banco pegando a lista de produtos presente nas respectiva compra
                            $sql2 = "SELECT produto_id, produtos.descricao FROM itens INNER JOIN produtos ON produtos.id = itens.produto_id WHERE itens.compra_id = ". $row['id'] ."";
                            $listaProd = $pdo->query($sql2);

                            foreach ($listaProd as $prod) { // lista os produtos, itens comprados
                                echo $prod['descricao'] . "<br>";
                            }

                            $pdo = Banco::desconectar();
                        ?>
                    </td>
                    <td class="align-middle" >
                        <button type="button" class="btn btn-danger btn-sm" onclick="javascript:location.href='remCompra.php?id='+<?php echo $row['id'] ?>">Excluir</button> <!-- excluir compra -->
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include_once("layout/footer.php"); ?>