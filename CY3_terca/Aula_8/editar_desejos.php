<?php
include('../conexoes/conexao.php');

if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $sql = "SELECT nome_produto, quantidade FROM produtos WHERE id='$id'";
    $total = $mysqli->query($sql);

    if($total->num_rows > 0) 
    {
        $modificacao = $total->fetch_array();
        $nome = $modificacao['nome_produto'];
        $quantidade = $modificacao['quantidade'];
        // $img = $modificacao['img'];
    }
    else {
        echo 'Produto não encontrado!';
    }
} 

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];

    $sql = "UPDATE produtos SET nome_produto='$nome', quantidade='$quantidade' WHERE id='$id'";

    if($mysqli->query($sql) === TRUE)
    {
        header("Location: painel.php");
        exit();
    }
    else {
        echo "Erro ao atualizar, sou um fracasso ç.ç" . $mysqli->error;
    }
}

$mysqli->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/form.css">
    <title>Editar Desejo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h1>Editar Desejo</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div>
                <label for="nome">Nome do Produto</label>
                <input type="text" name="nome" id="nome" value="<?php echo $nome; ?>" required> 
            </div>
            <div>
                <label for="quantidade">Quantidade do Produto</label>
                <input type="number" name="quantidade" id="quantidade" value="<?php echo $quantidade; ?>" required>
            </div>
            <div>
                <button type="submit">Atualizar</button>
            </div>
        </form>
    </div>
</body>
</html>