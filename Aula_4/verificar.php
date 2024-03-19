<?php
include('conexao.php');

echo "oi";

if (isset($_POST['nome']) || 
    isset($_POST['sobrenome']) ||
    isset($_POST['email']) ||
    isset($_POST['fone']) ||
    isset($_POST['senha']) ||
    isset($_POST['tipo']) ||
    isset($_POST['logradouro']) ||
    isset($_POST['numero']))
    {
        // subir informação!
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $fone = $_POST['fone'];
        $senha = $_POST['senha'];
        $tipo = $_POST['tipo'];
        $logradouro = $_POST['logradouro'];
        $numero = $_POST['numero'];

        $sql_query = "INSERT INTO cadastro_clientes ('nome', 'sobrenome', 
        'email', 'fone', 'senha', 'tipo', 'logradouro', 'numero')
        VALUES ($nome, $sobrenome, $email,  $fone, $senha, $tipo, 
        $logradouro, $numero)
        ";

        $enviar = $mysqli->query($sql_query);
    }
?>