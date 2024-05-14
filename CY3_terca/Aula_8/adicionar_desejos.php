<?php
include('./conexoes/conection.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $produto = $_POST['produto'];
    $img = $_POST['img'];
    $quantidade = $_POST['quantidade'];

    $sql = "INSERT INTO produtos (nome_produto, imagem, quantidade) VALUES (NULL,'$produto', '$img', '$quantidade')";

    if ($mysqli->query($sql) == TRUE) {

        header("Location: painel.php");

    } else {

        echo "Cadastro do produto está incorreto, faça novamento!";
    }
    $mysqli->close();
}
