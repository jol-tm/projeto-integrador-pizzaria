<?php
    session_start();
    include_once "../classes/cliente.php";
    include_once '../classes/conn.php';

    $conn = new Conn();
    $cliente = new Cliente($conn->conectar());

    if ($cliente->signUp($_POST['nome'], $_POST['email'], $_POST['tel'], $_POST['pass'], $_POST['adress'])) {
        $conn = new Conn();
        $cliente = new Cliente($conn->conectar());
        if ($cliente->login($_POST['email'], $_POST['pass'])) {
            header('Location: ../index.php');
        }
    } else {
        $_SESSION['cadastro'] = "Erro ao cadastrar! Tente utilizar outro email.";
        header('Location: ../index.php');
    }
?>