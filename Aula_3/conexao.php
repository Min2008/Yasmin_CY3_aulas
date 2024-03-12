<?php 
    $servidor = 'localhost';
    $banco_de_dados = 'login';
    $usuario = 'root';
    $senha = '';

    $mysqli = new mysqli($servidor, $usuario, $senha, $banco_de_dados);

    if ($mysqli -> error){
        die('Falha ao conectar com o banco de dados' . $mysqli -> error);
    }


?>