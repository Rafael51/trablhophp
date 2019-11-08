<!doctype html> <!-- formulario cadastro -->
<html lang="pt-br">

<head>
    <title>Sistema Mercado</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<!-- Centralizar -->
<body style="height: 100%; !important;display: -ms-flexbox; 
                                 display: flex;
                                 -ms-flex-align: center;
                                 align-items: center;
                                 padding-top: 5%;
                                 background-color: #f5f5f5;">
    <div class="col-md-6 mx-auto">
        <div class="jumbotron bg-dark border border-secondary text-white">
            <h1 class="text-center">Cadastrar Usuário</h1>
            <hr class="bg-secondary">
            <form action="insUsuario.php" method="POST">
                <div class="form-group">
                    <label for="lblDesc">Nome</label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome do usuário" autocomplete="off" required> <!--required define campo como obrigatorio   -->
                </div>
                <div class="form-group">
                    <label for="lblPeso">E-mail</label>
                    <input type="email" class="form-control" name="email" placeholder="Informe o e-mail" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label for="lblVal">Senha</label>
                    <input type="password" class="form-control" name="senha" placeholder="Informe a senha" autocomplete="off" required>
                </div>

                <input class="btn btn-success" type="submit" value="Gravar"> <!-- button cadastrar usuario -->
                <input class="btn btn-light" type="reset" value="Limpar"> 
            </form>
        </div>
    </div>
</body>

</html>