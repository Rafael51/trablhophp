<?php include_once("layout/header.php"); ?>

<div class="col-md-12">
    <h1>Produtos</h1>
    <a class="btn btn-primary mb-1" href="frmInsProd.php" role="button">Adicionar Produto</a> <!-- add produto -->
    <table class="table table-secondary text-center"> <!-- cria taela listar produto -->
        <thead class="bg-dark text-white">
            <tr>
                <th>ID</th>
                <th>Descrição</th>
                <th>Peso</th>
                <th>Valor</th>
                <th>OPERAÇÕES</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include 'banco.php';
                $pdo = Banco::conectar();
                $sql = 'SELECT * FROM produtos ORDER BY id'; // busca no banco de dados todos os produtos cadastrados 
                $lista = $pdo->query($sql);
                $pdo = Banco::desconectar();
                foreach ($lista as $row) { // for ppara listar os produtos
            ?>
            <tr>
                <th scope="row"><?php echo $row['id'] ?></th>
                <td><?php echo $row['descricao'] ?></td>
                <td><?php echo $row['peso'] ?></td>
                <td><?php echo $row['valor'] ?></td>
                <td>
                <button type="button" class="btn btn-info btn-sm" onclick="javascript:location.href='frmEdtPro.php?id='+<?php echo $row['id'] ?>">Editar</button> <!--edtar ptoduto -->
                <button type="button" class="btn btn-danger btn-sm" onclick="javascript:location.href='frmRemPro.php?id='+<?php echo $row['id'] ?>">Excluir</button> <!--excluir produto -->
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include_once("layout/footer.php"); ?>