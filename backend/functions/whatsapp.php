<?php

$url_evolution = "https://evolutionapi.ourives.app";
$apikey = '3c720d5a956ba4965a24ff8e80a4c3a0';

function msgSistema($mensagem)
{

  global $apikey;
  global $url_evolution;

  // URL da API
  $url = $url_evolution . "/message/sendText/ourives_app";

  // Dados do cabeçalho (headers)
  $headers = array(
    "Content-Type: application/json",
    "apikey: $apikey"
  );

  // Dados do corpo da requisição (body)
  $evoApi = array(
    "number" => "5527981078568",
    "text" => $mensagem,
    "delay" => 1200
  );

  // Converte os dados em JSON
  $evoApi_json = json_encode($evoApi);

  // Inicializa a sessão cURL
  $ch = curl_init($url);

  // Define as opções da requisição
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
  curl_setopt($ch, CURLOPT_POSTFIELDS, $evoApi_json);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

  // Executa a requisição e obtém a resposta
  $response = curl_exec($ch);

  // Verifica por erros
  if (curl_errno($ch)) {
    //echo 'Erro na requisição cURL: ' . curl_error($ch);
    return false;
  } else {
    return true;
  }

  // Fecha a sessão cURL
  curl_close($ch);
}

function msgCadastro($whatsapp, $mensagem)
{
  global $apikey;
  global $url_evolution;

  // URL da API
  $url = $url_evolution . "/message/sendText/reset_sistemas";

  // Dados do cabeçalho (headers)
  $headers = array(
    "Content-Type: application/json",
    "apikey: $apikey"
  );

  // Dados do corpo da requisição (body)
  $evoApi = array(
    "number" => "55" . $whatsapp,
    "text" => $mensagem,
    "delay" => 4000
  );

  // Converte os dados em JSON
  $evoApi_json = json_encode($evoApi);

  // Inicializa a sessão cURL
  $ch = curl_init($url);

  // Define as opções da requisição
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
  curl_setopt($ch, CURLOPT_POSTFIELDS, $evoApi_json);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

  // Executa a requisição e obtém a resposta
  $response = curl_exec($ch);

  // Verifica por erros
  if (curl_errno($ch)) {
    echo 'Erro na requisição cURL: ' . curl_error($ch);
    return false;
  } else {
    return true;
  }

  // Fecha a sessão cURL
  curl_close($ch);
}

function mensagemSupervisor($whatsapp, $mensagem, $delay)
{
  global $apikey;
  global $url_evolution;

  // URL da API
  $url = $url_evolution . "/message/sendText/ourives_app";

  // Dados do cabeçalho (headers)
  $headers = array(
    "Content-Type: application/json",
    "apikey: $apikey"
  );

  // Dados do corpo da requisição (body)
  $evoApi = array(
    "number" => "55" . $whatsapp,
    "text" => $mensagem,
    "delay" => $delay
  );

  // Converte os dados em JSON
  $evoApi_json = json_encode($evoApi);

  // Inicializa a sessão cURL
  $ch = curl_init($url);

  // Define as opções da requisição
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
  curl_setopt($ch, CURLOPT_POSTFIELDS, $evoApi_json);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

  // Executa a requisição e obtém a resposta
  $response = curl_exec($ch);

  // Verifica por erros
  if (curl_errno($ch)) {
    echo 'Erro na requisição cURL: ' . curl_error($ch);
    return false;
  } else {
    return true;
  }

  // Fecha a sessão cURL
  curl_close($ch);
}

function enviarImagemSupervisor($whatsapp, $imagem, $extensao, $mensagem, $delay)
{
  global $apikey;
  global $url_evolution;

  // URL da API
  $url = $url_evolution . "/message/sendMedia/ourives_app";

  // Dados do cabeçalho (headers)
  $headers = array(
    "Content-Type: application/json",
    "apikey: $apikey"
  );

  // Dados do corpo da requisição (body)
  $evoApi = array(
    "number" => "55" . $whatsapp,
    "delay" => $delay,
    "mediatype" => "image",
    "mimetype" => "image/" . $extensao,
    "caption" => "" . $mensagem,
    "media" => $imagem /* url or base64 */
  );

  // Converte os dados em JSON
  $evoApi_json = json_encode($evoApi);

  // Inicializa a sessão cURL
  $ch = curl_init($url);

  // Define as opções da requisição
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
  curl_setopt($ch, CURLOPT_POSTFIELDS, $evoApi_json);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

  // Executa a requisição e obtém a resposta
  $response = curl_exec($ch);

  // Verifica por erros
  if (curl_errno($ch)) {
    echo 'Erro na requisição cURL: ' . curl_error($ch);
    return false;
  } else {
    return true;
  }

  // Fecha a sessão cURL
  curl_close($ch);
}

function enviarMensagemPedido($nome_instancia, $numero, $mensagem)
{
  global $apikey;
  global $url_evolution;

  // URL da API
  $url = $url_evolution . "/message/sendText/" . $nome_instancia;

  // Dados do cabeçalho (headers)
  $headers = array(
    "Content-Type: application/json",
    "apikey: $apikey"
  );

  // Dados do corpo da requisição (body)
  $evoApi = array(
    "number" => "55" . $numero,
    "text" => $mensagem,
    "delay" => 3000
  );

  // Converte os dados em JSON
  $evoApi_json = json_encode($evoApi);

  // Inicializa a sessão cURL
  $ch = curl_init($url);

  // Define as opções da requisição
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
  curl_setopt($ch, CURLOPT_POSTFIELDS, $evoApi_json);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

  // Executa a requisição e obtém a resposta
  $response = curl_exec($ch);

  // Verifica por erros
  if (curl_errno($ch)) {
    echo 'Erro na requisição cURL: ' . curl_error($ch);
    return false;
  } else {
    return true;
  }

  // Fecha a sessão cURL
  curl_close($ch);
}

function enviarTextoCampanha($nome_instancia, $numero, $mensagem, $delay)
{
  global $apikey;
  global $url_evolution;

  // URL da API
  $url = $url_evolution . "/message/sendText/" . $nome_instancia;

  // Dados do cabeçalho (headers)
  $headers = array(
    "Content-Type: application/json",
    "apikey: $apikey"
  );

  // Dados do corpo da requisição (body)
  $evoApi = array(
    "number" => "55" . $numero,
    "text" => $mensagem,
    "delay" => $delay
  );

  // Converte os dados em JSON
  $evoApi_json = json_encode($evoApi);

  // Inicializa a sessão cURL
  $ch = curl_init($url);

  // Define as opções da requisição
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
  curl_setopt($ch, CURLOPT_POSTFIELDS, $evoApi_json);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

  // Executa a requisição e obtém a resposta
  $response = curl_exec($ch);

  // Verifica por erros
  if (curl_errno($ch)) {
    echo 'Erro na requisição cURL: ' . curl_error($ch);
    return false;
  } else {
    return true;
  }

  // Fecha a sessão cURL
  curl_close($ch);
}

function enviarImagemCampanha($nome_instancia, $numero, $imagemBase64, $extensao, $mensagem, $delay)
{
  global $apikey;
  global $url_evolution;

  // URL da API
  $url = $url_evolution . "/message/sendMedia/" . $nome_instancia;

  // Dados do cabeçalho (headers)
  $headers = array(
    "Content-Type: application/json",
    "apikey: $apikey"
  );

  // Dados do corpo da requisição (body)
  $evoApi = array(
    "number" => "55" . $numero,
    "delay" => $delay,
    "mediatype" => "image",
    "mimetype" => "image/" . $extensao,
    "caption" => "" . $mensagem,
    "media" => $imagemBase64 /* url or base64 */
  );

  // Converte os dados em JSON
  $evoApi_json = json_encode($evoApi);

  // Inicializa a sessão cURL
  $ch = curl_init($url);

  // Define as opções da requisição
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
  curl_setopt($ch, CURLOPT_POSTFIELDS, $evoApi_json);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

  // Executa a requisição e obtém a resposta
  $response = curl_exec($ch);

  // Verifica por erros
  if (curl_errno($ch)) {
    echo 'Erro na requisição cURL: ' . curl_error($ch);
    return false;
  } else {
    return true;
  }

  // Fecha a sessão cURL
  curl_close($ch);
}

function criarInstancia($numero, $instancia)
{
  global $apikey;
  global $url_evolution;

  // URL da API
  $url = $url_evolution . "/instance/create";

  // Dados do cabeçalho (headers)
  $headers = array(
    "Content-Type: application/json",
    "apikey: $apikey"
  );

  // Dados do corpo da requisição (body)
  $evoApi = array(
    "instanceName" => $instancia,
    "number" => "55" . $numero,
    "qrcode" => true,
    "integration" => "WHATSAPP-BAILEYS"
  );

  // Converte os dados em JSON
  $evoApi_json = json_encode($evoApi);

  // Inicializa a sessão cURL
  $ch = curl_init($url);

  // Define as opções da requisição
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
  curl_setopt($ch, CURLOPT_POSTFIELDS, $evoApi_json);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

  // Executa a requisição e obtém a resposta
  $response = curl_exec($ch);

  // Verifica por erros
  if (curl_errno($ch)) {
    echo 'Erro na requisição cURL: ' . curl_error($ch);
    return false;
  } else {
    return true;
  }

  // Fecha a sessão cURL
  curl_close($ch);
}

function statusInstancia($instancia)
{
  global $apikey;
  global $url_evolution;

  $url = $url_evolution . "/instance/connectionState/" . $instancia;

  // Iniciar cURL
  $ch = curl_init($url);

  // Configurar cURL
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Retornar como string

  // Adicionar cabeçalhos de autenticação
  $headers = [
    "Content-Type: application/json",
    "apikey: $apikey"
  ];
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); // Configurar os cabeçalhos

  // Executar a requisição
  $response = curl_exec($ch);

  // Verificar se ocorreu um erro
  if ($response === false) {
    return 'Conectar'; // Retorna o erro como string
  }

  // Fechar cURL
  curl_close($ch);

  // Decodificar a resposta JSON
  $resultado = json_decode($response, true); // Retorna o resultado decodificado

  // Retornar apenas o estado da instância
  if (($resultado['instance']['state'] ?? null) == 'open') {
    return 'Online';
  } else if (($resultado['instance']['state'] ?? null) == 'close') {
    return 'Offline';
  } else if (($resultado['instance']['state'] ?? null) == 'connecting') {
    return 'Conectando';
  } else {
    return 'Conectar';
  }
}

function obterQrCode($instancia)
{
  global $apikey;
  global $url_evolution;

  $curl = curl_init();

  curl_setopt_array($curl, [
    CURLOPT_URL => $url_evolution . "/instance/connect/" . $instancia,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
      "apikey: $apikey"
    ],
  ]);

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

  if ($err) {
    return json_encode(['error' => "cURL Error #:" . $err]);
  } else {
    // Verifica se a resposta já é um JSON válido
    $decodedResponse = json_decode($response, true);
    if (json_last_error() === JSON_ERROR_NONE) {
      return $response;
    } else {
      // Se não for um JSON válido, cria uma resposta de erro
      return json_encode(['error' => 'Resposta inválida do servidor']);
    }
  }
}

function logoutInstancia($instancia)
{
  global $apikey;
  global $url_evolution;

  $curl = curl_init();

  curl_setopt_array($curl, [
    CURLOPT_URL => $url_evolution . "/instance/logout/" . $instancia,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "DELETE",
    CURLOPT_HTTPHEADER => [
      "apikey: $apikey"
    ],
  ]);

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    echo $response;
  }
}

function deletarInstancia($instancia)
{
  global $apikey;
  global $url_evolution;

  $curl = curl_init();

  curl_setopt_array($curl, [
    CURLOPT_URL => $url_evolution . "/instance/delete/" . $instancia,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "DELETE",
    CURLOPT_HTTPHEADER => [
      "apikey: $apikey"
    ],
  ]);

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    echo $response;
  }
}
