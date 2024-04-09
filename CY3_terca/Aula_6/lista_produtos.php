<?php
include('../conexoes/conexao.php');

$sql = 'SELECT * FROM produtos';
$resultado = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h1> Estoque</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Valor</th>
                <th>Quantidade</th>
                <th>Ações</th>
            </tr>
            <?php 
            if ($resultado->num_rows > 0)
            {
                while($rows = $resultado->fetch_assoc())
                {
                    echo '<tr>';
                    echo '<td>'. $rows['id'] . '</td>';
                    echo '<td>'. $rows['nome'] . '</td>';
                    echo '<td>'. $rows['valor'] . '</td>';
                    echo '<td>'. $rows['quantidade'] . '</td>';
                    echo '<td> <a href= "editar_produtos.php?id='. $rows['id'] . '">Editar</a> | <a href= "deletar_produto.php?id='. $rows['id'] . '">Deletar</a>';
                    echo '</tr>';
                }
            }
            else {
                echo '<tr><td coldspan= "4"> Nenhum produto encontrado </td></tr>';
            }
            ?>
        </table>
    </div>
</body>
</html>

<?php 
$mysqli->close();
?>