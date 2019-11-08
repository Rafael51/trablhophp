<?php include_once("layout/header.php"); ?> <!-- pagina inicial -->

<div class="col-md-12">
    <h1>Sistema Mercado</h1>
    <div class="card-group text-center">
        <div class="card bg-dark text-white">
            <img class="card-img-top" src="imgs/compras.png" height="280px">
            <div class="card-footer">
                <a href="lstCompra.php" class="text-light stretched-link text-decoration-none"><h4 class="card-title">Compras</h4></a>
            </div>
        </div>
        <div class="card bg-dark text-white">
            <img class="card-img-top" src="imgs/produtos.png" height="280px">
            <div class="card-footer">
            <a href="lstProd.php" class="text-light stretched-link text-decoration-none"><h4 class="card-title">Produtos</h4></a>
            </div>
        </div>
        <div class="card bg-dark text-white">
            <img class="card-img-top" src="imgs/clientes.png" height="280px">
            <div class="card-footer">
            <a href="lstCliente.php" class="text-light stretched-link text-decoration-none"><h4 class="card-title">Clientes</h4></a>
            </div>
        </div>
    </div>
</div>

<?php include_once("layout/footer.php"); ?>