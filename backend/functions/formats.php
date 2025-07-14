<?php

function removerAcentos($string)
{
  $acentos = array(
    'Á',
    'À',
    'Â',
    'Ã',
    'Ä',
    'É',
    'È',
    'Ê',
    'Ë',
    'Í',
    'Ì',
    'Î',
    'Ï',
    'Ó',
    'Ò',
    'Ô',
    'Õ',
    'Ö',
    'Ú',
    'Ù',
    'Û',
    'Ü',
    'Ç',
    'á',
    'à',
    'â',
    'ã',
    'ä',
    'é',
    'è',
    'ê',
    'ë',
    'í',
    'ì',
    'î',
    'ï',
    'ó',
    'ò',
    'ô',
    'õ',
    'ö',
    'ú',
    'ù',
    'û',
    'ü',
    'ç'
  );

  $semAcentos = array(
    'A',
    'A',
    'A',
    'A',
    'A',
    'E',
    'E',
    'E',
    'E',
    'I',
    'I',
    'I',
    'I',
    'O',
    'O',
    'O',
    'O',
    'O',
    'U',
    'U',
    'U',
    'U',
    'C',
    'a',
    'a',
    'a',
    'a',
    'a',
    'e',
    'e',
    'e',
    'e',
    'i',
    'i',
    'i',
    'i',
    'o',
    'o',
    'o',
    'o',
    'o',
    'u',
    'u',
    'u',
    'u',
    'c'
  );

  return str_replace($acentos, $semAcentos, $string);
}

function formatarNumeroTelefone($number)
{
  // Remove todos os caracteres que não são dígitos
  $number = isset($number) ? preg_replace('/\D/', '', $number) : '';

  // Verifica se o número tem 11 dígitos (DDD + 9 dígitos)
  if (strlen($number) == 11) {
    return '(' . substr($number, 0, 2) . ') ' . substr($number, 2, 5) . '-' . substr($number, 7);
  }

  // Verifica se o número tem 10 dígitos (DDD + 8 dígitos)
  if (strlen($number) == 10) {
    return '(' . substr($number, 0, 2) . ') ' . substr($number, 2, 4) . '-' . substr($number, 6);
  }

  // Retorna o número original caso tenha um formato diferente
  return $number;
}

function removerCaracteresTelefone($numero)
{
  $numero_formatado = preg_replace('/[^0-9]/', '', $numero);

  return $numero_formatado;
}

function formatarData($data_hora_bruta)
{
  if ($data_hora_bruta == '' || $data_hora_bruta == null) {
    return '';
  } else {
    $timestamp = strtotime($data_hora_bruta);
    $data_formatada = date("d/m/Y", $timestamp);
    return $data_formatada;
  }
}

function formatarDataHora($data_hora_bruta)
{
  $timestamp = strtotime($data_hora_bruta);
  $data_formatada = date("d/m/Y", $timestamp);
  $hora_formatada = date("H:i", $timestamp);
  return $data_formatada . " " . $hora_formatada;
}

function formatarMoeda($valor)
{
  if ($valor == '' || $valor == null) {
    return '';
  } else {
    $number = number_format(trim($valor), 2, ',', '.');
    $number = 'R$ ' . $number;
    return $number;
  }
}

function formatarCpfCnpj($numero)
{
  // Remove qualquer caractere não numérico
  $numero = preg_replace('/\D/', '', $numero);

  // Verifica se o número tem 11 dígitos (CPF)
  if (strlen($numero) === 11) {
    return preg_replace('/(\d{3})(\d{3})(\d{3})(\d{2})/', '$1.$2.$3-$4', $numero);
  }
  // Verifica se o número tem 14 dígitos (CNPJ)
  elseif (strlen($numero) === 14) {
    return preg_replace('/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/', '$1.$2.$3/$4-$5', $numero);
  }

  // Caso não seja nem CPF (11) nem CNPJ (14), retorna o número original
  return $numero;
}
?>