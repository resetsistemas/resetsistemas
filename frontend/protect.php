<?php
if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION["id"])) {
    die("É necessário fazer Login. <a href=\"cliente.php\"><p>Entrar</p></a>");
}
?>