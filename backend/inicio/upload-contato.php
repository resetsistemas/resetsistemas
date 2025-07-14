<?php
date_default_timezone_set('America/Sao_Paulo');

include __DIR__ . "/../conexao.php";
include __DIR__ . "/../functions/formats.php";
include __DIR__ . "/../functions/whatsapp.php";

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

  $sql = "INSERT INTO contatos (nome, empresa, email, whatsapp, mensagem) VALUES (?, ?, ?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sssss", $nome, $empresa, $email, $whatsapp, $mensagem);
  if ($stmt->execute()) {
    $response['success'] = true;
    $response['message'] = "Mensagem enviada com sucesso.<br>Em breve entraremos em contato!";
    $response['redirect'] = "{$link_padrao}";

    $mensagens = [
      "Olá {$nome}, tudo bom?",
      "Que bom que você entrou em contato em nome da {$empresa}.",
      "Vamos conversar sobre as necessidades de sua empresa.",
      "Quando podemos marcar para eu te ligar?"
    ];

    foreach ($mensagens as $mensagem) {
      msgCadastro($whatsapp, $mensagem);
      sleep(1); // espera 1 segundo antes de enviar a próxima
    }
  } else {
    $response['message'] = "Não foi possível enviar sua mensagem";
  }
}
echo json_encode($response);
