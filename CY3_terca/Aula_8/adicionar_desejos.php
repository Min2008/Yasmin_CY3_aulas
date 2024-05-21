<?php
include('./conexoes/conection.php');

// INICIA UMA SESSÃO
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $produto = $_POST['produto'];
    $id = $_SESSION['id_user'];
    $quantidade = $_POST['quantidade'];
    $img = $_POST['img'];

    $sql = "INSERT INTO produtos (nome_produto, id_user, quantidade, img) VALUES ('$produto', '$id', '$quantidade', '$img')";

    if ($mysqli->query($sql) == TRUE) {

        header('Location: painel.php');

    } else {

        echo "Cadastro do produto está incorreto, faça novamento!";
    }
}
?>