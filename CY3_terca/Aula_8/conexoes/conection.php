<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';

$mysqli = new mysqli($servidor, $usuario, $senha);

if ($mysqli->error) {
    die('Falha ao conectar com o banco de dados' . $mysqli->error . "\n");
}

// verificar se a BD existe

$banco_de_dados_existe = $mysqli->select_db('test');

if (!$banco_de_dados_existe) {
    $criar_bd_sql = 'CREATE DATABASE test';
    if ($mysqli->query($criar_bd_sql) === TRUE) {
        echo 'Banco criado com sucesso' . "\n";
    } else {
        echo 'Erro ao criar !!!' . $mysqli->error . "\n";
    }
}

// conectar ao banco test
$mysqli->select_db('test');

// verificar se existe a tabela users
$tabela_users_existe = $mysqli->query("SHOW TABLES LIKE 'users'")->num_rows > 0;

// criar a tabela users
if (!$tabela_users_existe) {
    $criar_tabelas_users = "CREATE TABLE users(id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, user VARCHAR(50) NOT NULL, password VARCHAR(20) NOT NULL)";
    if ($mysqli->query($criar_tabelas_users) === TRUE) {
        echo 'Tabela usuario criada';
    } else {
        echo 'Erro ao criar a tabela users' . $mysqli->error . "\n";
    }
}

$tabela_produtos_existe = $mysqli->query('SHOW TABLES LIKE "produtos"')->num_rows > 0;
if (!$tabela_produtos_existe) {
    $criar_tabela_produtos = "CREATE TABLE produtos (id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY, nome_produto VARCHAR(50) NOT NULL, id_user INT(11), UNSIGNED NOT NULL, FOREIGN KEY(id_user) REFERENCES usuario(id))";

    if ($mysqli->query($criar_tabela_produtos) === TRUE) {
        echo 'Tabela produtos criada';
    } else {
        echo 'Erro ao criar a tabela produtos' . $mysqli->error . "\n";
    }
}
// fechar conexão
$mysqli->close();
