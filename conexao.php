<?php

$usuario = 'resetadmin';
$senha = 'Al5G8Z3E2SPqFSvR';
$database = 'resetsistemas';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if ($mysqli ->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}

?>