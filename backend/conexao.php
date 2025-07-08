<?php
include_once __DIR__ . "/link-padrao.php";

// Acesso ao Banco de dados Ourives.app
$host = "localhost";
$usuario = "root";
$senha = "";
$database = "resetsistemas";

$conn = new mysqli($host, $usuario, $senha, $database);

if ($conn ->error) {
    die("Falha ao conectar ao banco de dados: " . $conn->error);
}

$conn->set_charset("utf8mb4");

function usuarioToken($cod_usuario)
{
    global $conn;

    $sql = "SELECT token FROM usuarios WHERE cod = {$cod_usuario}";
    $resultado = $conn->query($sql)->fetch_assoc()['token'];

    return $resultado;
}

function usuarioAtivo($cod_usuario)
{
    global $conn;

    $sql = "SELECT ativo FROM usuarios WHERE cod = {$cod_usuario}";
    $resultado = $conn->query($sql)->fetch_assoc()['ativo'];

    return $resultado;
}

?>