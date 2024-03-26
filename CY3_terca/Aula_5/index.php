<?php
    include('../conexoes\conexao.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Aula 5</title>
</head>
<body>
    <table>
        <tr>
            <th>Nome</th>
            <th>Sobrenome</th>
        </tr>   
        <?php
        $sql = "SELECT nome, sobrenome FROM pessoas";
        $resultado = $mysqli->query($sql);
        
        // Verifica se tem mais que zero linhas
        if($resultado->num_rows > 0)
        {
            // Mostrar os valores
            while ($row = $resultado->fetch_assoc())
            {
                $nome = $row["nome"]; // array é como se fosse uma lista!
                $sobrenome = $row["sobrenome"]; 
                
                echo "<tr> <td>" . $nome . "</td> <td> " . $sobrenome . "</td> </tr>";
            }
        }
        $mysqli->close();
        ?>
        </table>
</body>
</html>