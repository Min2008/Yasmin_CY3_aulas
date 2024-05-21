<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/index.css">
    <title>Lista de Desejos</title>
</head>

<body>
    <h1> Login </h1>
    <form action="verificar.php" method="post">
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" required>
        </div>
        <div>
            <label for="pass">Senha</label>
            <input type="password" name="pass" id="pass" required>
        </div>
        <button type="submit">Entrar</button>
        <button type="reset">Limpar</button>
    </form>
</body>

</html>