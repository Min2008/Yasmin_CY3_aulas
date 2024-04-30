<?php
include ('../conexoes/conexao.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") 
{
    $desejo = $_POST['desejo'];
    $img = $_POST['img'];
    $quantidade = $_POST['quantidade'];

    $sql = "INSERT INTO lista desejos (desejo, imagem, quantidade) VALUES (NULL,'$desejo', '$img', '$quantidade')";

    if($mysqli->query($sql) === TRUE)
    {
        
    }
}

?>


