<?php

function connect()
{
    // Trocar essas variáveis pelas variáveis do seu banco de dados
    $host = "localhost:3307"; // O padrão é "localhost:3306", lembre-se de fazer essa troca
    $user = "root";
    $pass = "root";
    $db = "sistema_clientes";

    $link = mysqli_connect($host, $user, $pass, $db);

    if (!$link) {
        die("Erro de Conexão");
    }

    return $link;
}
