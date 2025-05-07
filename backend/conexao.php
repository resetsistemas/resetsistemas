<?php

// Acesso ao Banco de dados Ourives.app
$host = 'localhost';
$usuario = 'u943257566_maxed';
$senha = 'nDvD7H/97#Avn#PjH|9p';
$database = 'u943257566_resetsistemas';

$conexaoDb = new mysqli($host, $usuario, $senha, $database);

if ($conexaoDb ->error) {
    die("Falha ao conectar ao banco de dados: " . $conexaoDb->error);
}

$conexaoDb->set_charset("utf8mb4");

function usuarioToken($cod_usuario)
{
    global $conexaoDb;

    $sql = "SELECT token FROM usuarios WHERE cod = {$cod_usuario}";
    $resultado = $conexaoDb->query($sql)->fetch_assoc()['token'];

    return $resultado;
}

function usuarioAtivo($cod_usuario)
{
    global $conexaoDb;

    $sql = "SELECT ativo FROM usuarios WHERE cod = {$cod_usuario}";
    $resultado = $conexaoDb->query($sql)->fetch_assoc()['ativo'];

    return $resultado;
}

?>