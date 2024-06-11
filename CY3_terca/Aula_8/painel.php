<?php 
include('./conexoes/conection.php');
session_start();

$email = $_SESSION['email'];
$sql = "SELECT * FROM produtos";
$total = $mysqli->query($sql);

if ($total->num_rows<=0) 
{
    header('Location: form_add.php');

} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/painel.css">
    <title>Painel</title>
</head>
<body>
    <div>
        <h1>
            Lista de Desejos
        </h1>
        <div>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Quantidade</th>
                    <th>Ações</th>
                </tr>
    
                <?php
                if ($total->num_rows > 0)
                {
                    while($rows = $total->fetch_assoc())
                    {
                        echo '<tr>';
                        echo '<td>'. $rows['id'] . '</td>';
                        echo '<td>'. $rows['nome_produto'] . '</td>';
                        echo '<td>'. $rows['quantidade'] . '</td>';
                        // echo '<td>'. $rows['imagem'] . '</td>';
                        echo '<td> <a href= "editar_desejos.php?id='. $rows['id'] . '">Editar</a> | <a href= "deletar_desejos.php?id='. $rows['id'] . '">Deletar</a>';
                        echo '</tr>';
                    }
                }
                else {
                    echo '<tr><td coldspan= "4"> Nenhum produto encontrado </td></tr>';
                }
                
                ?>
            </table>
            <p class="logout">
                <a href="logout.php">Sair</a>
            </p>
            <p class="adicionar">
                <a href="form_add.php">Adicionar</a>
            </p>
        </div>
    </div>
</body>
</html>

<?php 
$mysqli->close();
?>