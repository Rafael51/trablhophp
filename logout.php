<?php
    session_start(); 

    unset($_SESSION['user']);// encerrar sessao 

    header("location: index.php"); // redireciona para ppagina de login
?>