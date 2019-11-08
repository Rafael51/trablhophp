<?php
session_start(); // inicia sessao
if (!isset($_SESSION['user'])) // verifica se usuario esta logado
  header("location: index.php"); // caso nao, retorna index
?>

<!doctype html>
<html lang="pt-br">

<head> 
  <title>Sistema Mercado</title>

  <meta charset="utf-8">

  <!-- inicio bostrap -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
<!-- inicio menu-->
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1e6b61">
    <a class="navbar-brand font-weight-bold" href="#">Sistema Mercado</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lstProd.php">Produtos </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lstCliente.php">Clientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lstCompra.php">Compras</a>
        </li>

      </ul>
      <a class="btn btn-outline-light" href="logout.php" role="button">Sair</a>
    </div>
  </nav> <!-- fim menu -->

  <div class="container mt-4"> <!--bostrap, onde o conteudo deixa na pagina  -->
    <div class="row"> <!-- cria linha bostrap -->