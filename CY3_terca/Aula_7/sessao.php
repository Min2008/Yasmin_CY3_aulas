<?php 
 // INICIAR UM SESSÃO 
session_start();

 // VERIFICAR SE O USUÁRIO JÁ ESTÁ LOGADO 
if (isset($_SESSION['user']))
{
    $nome_usuario = $_SESSION['user'];
    header('Location: painel.php');

} else {

    if(isset($_POST['user']) && isset($_POST['password'])) 
    {
        $nome_usuario = $_POST['user'];
        $senha_usuario = $_POST['password'];
        // SIMULA VERIFICAÇÃO NO BD
        if(!empty($nome_usuario) && !empty($senha_usuario))
        {
            $_SESSION['user'] = $nome_usuario;
            header("Location: painel.php");

        } else {

            header("Location: index.php");
            
        }
    }
}

?>