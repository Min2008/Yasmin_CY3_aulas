<?php
include('./conexoes/conection.php');

// INICIA UMA SESSÃO
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $produto = $_POST['produto'];
    $id = $_SESSION['id_user'];
    $quantidade = $_POST['quantidade'];

    $sql = "INSERT INTO produtos (id, nome_produto, id_user, quantidade) VALUES (NULL,'$produto', '$id', '$quantidade')";

    if ($mysqli->query($sql) == TRUE) {

        header('Location: painel.php');

    } else {

        echo "Cadastro do produto está incorreto, faça novamento!";
    }
}
?>