<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <header>
            <h1>Informações</h1>
        </header>
        <?php
            // var_dump - tipo um print // cria uma variavel sempre com cifão!
            $email = $_POST["email"];
            $senha = $_POST["pass"];
            const NOME = 'Nome: Yasmin';
    
    
            echo "<p> O seu Email é $email  e a sua Senha é $senha</p>" . NOME;
    
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para Formulário</a></p>
    </main>
</body>
</html>