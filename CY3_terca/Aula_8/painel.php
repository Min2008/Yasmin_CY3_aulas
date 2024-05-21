<?php 
include('./conexoes/conection.php');
session_start();

$email = $_SESSION['email'];
$sql = "SELECT * FROM produtos";
$total = $mysqli->query($sql);
if (empty($total)) 
{
    header('Location: form_add.php');

} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    <h1>
        Lista de Desejos
    </h1>
    
    <main id="painel">
        
    </main>

    <p>
        <a href="logout.php">Sair</a>
    </p>
</body>
</html>
