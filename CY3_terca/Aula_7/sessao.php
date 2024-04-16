<?php 
 // INICIAR UM SESSÃO 
session_start();





 // VERIFICAR SE O USUÁRIO JÁ ESTÁ LOGADO 
if (isset($_SESSION['user']))
{
    $nome_usuario = $_SESSION['user'];

} else {

    if(isset($_POST['user'])) 
    {
        $nome_usuario = $_POST['user'];
        // SIMULA VERIFICAÇÃO NO BD
        if(!empty($nome_usuario))
        {
            $_SESSION['user'] = $nome_usuario;
            echo 'Login bem-sucedido!! Bem vindo' . $nome_usuario;

        } else {

            echo 'Por favor, insira um nome de usuário';
            
        }
    }
}

?>