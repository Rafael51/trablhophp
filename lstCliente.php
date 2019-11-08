<?php include_once("layout/header.php"); ?>

<div class="col-md-12">
    <h1>Clientes</h1>
    <a class="btn btn-primary mb-1" href="frmInsCliente.php" role="button">Adicionar Cliente</a> <!-- botao add cliente -->
    <table class="table table-secondary text-center"> <!-- cria tabela para listar cliente --> 
        <thead class="bg-dark text-white"> <!-- titulo tabela -->
            <tr>
                <th>ID</th> 
                <th>Nome</th>
                <th>CPF</th>
                <th>E-mail</th>
                <th>OPERAÇÕES</th>
            </tr>
        </thead>
        <tbody> <!--corpo tabela -->
            <?php
                include 'banco.php';
                $pdo = Banco::conectar();
                $sql = 'SELECT * FROM clientes ORDER BY id'; // busca todos os clientes cadastrados
                $lista = $pdo->query($sql);
                $pdo = Banco::desconectar();
                foreach ($lista as $row) { // cria for para mostrar cada cliente
            ?>
            <tr>
                <th scope="row"><?php echo $row['id'] ?></th>
                <td><?php echo $row['nome'] ?></td>
                <td><?php echo $row['cpf'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td>
                <button type="button" class="btn btn-info btn-sm" onclick="javascript:location.href='frmEdtCliente.php?id='+<?php echo $row['id'] ?>">Editar</button> <!-- editar cliente -->
                <button type="button" class="btn btn-danger btn-sm" onclick="javascript:location.href='frmRemCliente.php?id='+<?php echo $row['id'] ?>">Excluir</button> <!--botao excluir cliente -->
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include_once("layout/footer.php"); ?>