<?php
// FAZ CONEXÃO COM O BD 
include('./conexoes/conection.php');

// INICIA UMA SESSÃO
session_start();

// VERIFICAR SE O USUÁRIO JÁ ESTÁ LOGADO
if (isset($_SESSION['email']))
{
    $email_name = $_SESSION['email'];
    header('Location: painel.php');
}
else
{
    if( isset($_POST['email']) || isset($_POST['pass']) )
    {
        $index_name_email = $_POST['email'];
        $index_pass_email = $_POST['pass'];

        // QUERY PARA TRAZER O USUÁRIO E SENHA CORRETOS
        $sql_code = "SELECT * FROM users WHERE user = '$index_name_email' AND password = '$index_pass_email'";

        // EXECUTANDO QUERY
        $sql_query = $mysqli->query($sql_code);

        // PEGANDO QUANTIDADE DE LINHAS DE RESPOSTA DO BD
        $quantidade_linhas = $sql_query->num_rows;
        // VERIFICA SE TEM APENAS UMA LINHA
        if ($quantidade_linhas == 1)
        {
            $_SESSION['email'] = $nome_usuario;
            header('Location: painel.php');
            // $response = $sql_query->fetch_assoc();
            // $id = $response['id'];
            // $email = $response['email'];
            // $pass = $response['pass'];
        }
        else
        {
            header('Location: index.php?$nome_usuario');
        }
    }
}
?>
