<!doctype html> <!-- pargina para login  -->
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

<body class="text-center" style="height: 100%; !important;display: -ms-flexbox;
                                 display: flex;
                                 -ms-flex-align: center;
                                 align-items: center;
                                 padding-top: 10%;
                                 background-color: #f5f5f5;">
    <div class="jumbotron bg-dark border border-secondary text-white mx-auto">
        <form class="form-signin" action="login.php" method="POST">
            <h1>Sistema Mercado</h1>
            <hr class="bg-secondary">
            <label for="inputEmail" class="sr-only">E-mail</label>
            <input type="email" name="email" class="form-control" placeholder="E-mail" autocomplete="off" required autofocus>
            
            <label for="inputPassword" class="sr-only">Senha</label>
            <input type="password" name="password" class="form-control" placeholder="Senha" autocomplete="off" required>

            <button class="btn btn-primary btn-block mt-2" type="submit">Entrar</button>
            <a class="btn btn-link text-light" href="cadastrar.php" role="button">Cadastrar-se</a>
        </form>
    </div>
</body>

</html>