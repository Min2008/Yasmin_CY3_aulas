<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/form.css">
    <title>Formulário Produtos</title>
</head>
<body>
    <div>
        <h1>Seus Desejos</h1>
        <form action="adicionar_desejos.php" method="post">
            <div>
                <label for="produto">Nome</label>
                <input type="text" name="produto" id="produto">
            </div>
            <div>
                <label for="quantidade">Quantidade</label>
                <input type="number" name="quantidade" id="quantidade">
            </div>
            <div>
                <button type="submit">Adicionar</button>
                <button type="reset">Limpar</button>
            </div>
        </form>
    </div>
</body>
</html>


