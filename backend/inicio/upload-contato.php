<?php
date_default_timezone_set('America/Sao_Paulo');

include __DIR__ . "/../conexao.php";
include __DIR__ . "/../functions/formats.php";

header('Content-Type: application/json');
$response['success'] = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nome = isset($_POST['nome']) ? trim($_POST['nome']) : null;
  if ($nome == null || $nome == '') {
    $response['message'] = 'Nome não informado';
    echo json_encode($response);
    exit;
  }

  $empresa = isset($_POST['empresa']) ? trim($_POST['empresa']) : null;
  if ($empresa == null || $empresa == '') {
    $response['message'] = 'Empresa não informada';
    echo json_encode($response);
    exit;
  }

  $email = isset($_POST['email']) ? trim($_POST['email']) : null;
  if ($email == null || $email == '') {
    $response['message'] = 'Email não informado';
    echo json_encode($response);
    exit;
  }

  $whatsapp = isset($_POST['whatsapp']) ? trim($_POST['whatsapp']) : null;
  if ($whatsapp == null || $whatsapp == '') {
    $response['message'] = 'Whatsapp não informado';
    echo json_encode($response);
    exit;
  }
  $whatsapp = removerCaracteresTelefone($whatsapp);

  $mensagem = isset($_POST['mensagem']) ? trim($_POST['mensagem']) : null;
  if ($mensagem == null || $mensagem == '') {
    $response['message'] = 'Escreva uma mensagem';
    echo json_encode($response);
    exit;
  }

}
echo json_encode($response);
