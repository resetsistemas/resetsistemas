<?php 

    $usuario_id = $_SESSION['id'];
    $usuario_nome = $_SESSION['nome'];

    //Criei uma variável $sql_code para armazenar "os termos de consulta SQL". Aqui não é propriamente a consulta no bd.
    $sql_code = "SELECT cli.id,
    cli.razaosocial,
    cli.nomefantasia,
    cli.cnpj,
    cli.inscricaoestadual,
    cli.cidade,
    cli.estado,
    cli.endereco,
    cli.numero,
    cli.bairro,
    cli.datacontrato,
    sis.qtdusuarios,
    sis.hospedagem,
    sis.mensalidade
    FROM clientes cli
    LEFT JOIN usr_clientes usr on (usr.idempresa = cli.id)
    LEFT JOIN sistema_clientes sis on (sis.idempresa = cli.id)
    WHERE usr.id = $usuario_id";

    //Aqui eu criei uma variavel que irá armazenar os resultados da consulta, executando portanto a variável $sql_code.
    $sql_query = $mysqli->query($sql_code);

    // Aqui vou colocar cada um dos resultados dentro da $sql_query dentro de variaveis próprias, para facilitar a alocação.
    if ($sql_query->num_rows > 0) {
        while ($row = $sql_query->fetch_assoc()) {
            $empresa_id = $row["id"];
            $razaosocial = $row["razaosocial"];
            $nomefantasia = $row["nomefantasia"];
            $cnpj = $row["cnpj"];
            $ie = $row["inscricaoestadual"];
            $cidade = $row["cidade"];
            $estado = $row["estado"];
            $endereco = $row["endereco"];
            $numero = $row["numero"];
            $bairro = $row["bairro"];
            $datacontrato = $row["datacontrato"];
            $qtdusuarios = $row["qtdusuarios"];
            $hospedagem = $row["hospedagem"];
            $mensalidade = $row["mensalidade"];
        }
    } else {
        $mensagemErroEmpresa = "Nenhum dado foi encontrado.";
    }
    
    //Tratando a variável $cnpj para ficar formatado com o formato de CNPJ
    $cnpj_formatado = substr($cnpj, 0, 2) . '.' . substr($cnpj, 2, 3) . '.' . substr($cnpj, 5, 3) . '/' . substr($cnpj, 8, 4) . '-' . substr($cnpj, 12, 2);

    //Tratando as variaveis para ficar no formato de endereço padrão
    $endereco_formatado = "$endereco, $numero - $bairro, $cidade / $estado";

    //Tratando a variável $data para sair do formato 2021-01-10 para ficar 10/01/2021
    $timestamp = strtotime($datacontrato);
    $datacontrato_formatado = date("d/m/Y", $timestamp);

    //Tratando a variável $mensalidade para ficar no formato de moeda
    $mensalidade_formatada = 'R$ ' . number_format($mensalidade, 2, ',', '.');

    //Armazenando em uma variável os comandos SQL de busca de boletos no banco de dados
    $sql_boletos = "SELECT bol.ano,
    bol.mes,
    bol.dia,
    bol.valor,
    bol.status,
    bol.link_boleto
    FROM boletos_clientes bol
    LEFT JOIN clientes cli on (cli.id = bol.idempresa)
    LEFT JOIN usr_clientes usr on (usr.idempresa = cli.id)
    WHERE usr.id = $usuario_id";

    // Executando a consulta
    $sql_query_boletos = $mysqli->query($sql_boletos);

    // Verificando os resultados da consulta
    $boletos = [];
    if ($sql_query_boletos->num_rows > 0) {
        while ($row = $sql_query_boletos->fetch_assoc()) {
            $boletos[] = $row;
        }
    } else {
        $mensagemErroBoleto = "Nenhum boleto foi encontrado.";
    }

    //Armazenando em uma variável os comandos SQL de busca de notas fiscais no banco de dados
    $sql_notas = "SELECT nf.ano,
    nf.mes,
    nf.dia,
    nf.valor_nota,
    nf.link_nota
    FROM nf_clientes nf
    LEFT JOIN clientes cli on (cli.id = nf.idempresa)
    LEFT JOIN usr_clientes usr on (usr.idempresa = cli.id)
    WHERE usr.id = $usuario_id";

    // Executando a pesquisa
    $sql_query_notas = $mysqli->query($sql_notas);

    // Verificando os resultados da consulta
    $notas = [];
    if ($sql_query_notas->num_rows > 0) {
        while ($row = $sql_query_notas->fetch_assoc()) {
            $notas[] = $row;
        }
    } else {
        $mensagemErroNota = "Nenhuma nota fiscal foi encontrada.";
    }

    //SQL da pesquisa de CNPJs Adicionais da empresa
    $sql_cnpjs = "SELECT cnpj.nomefantasia,
    cnpj.cnpj
    FROM cnpj_adicionais cnpj
    LEFT JOIN clientes cli on (cli.id = cnpj.idempresa)
    LEFT JOIN usr_clientes usr on (usr.idempresa = cli.id)
    WHERE usr.id = $usuario_id";

    // Executando a pesquisa
    $sql_query_cnpjs = $mysqli->query($sql_cnpjs);

    // Verificando os resultados da consulta
    $cnpjs = [];
    if ($sql_query_cnpjs->num_rows > 0) {
        while ($row = $sql_query_cnpjs->fetch_assoc()) {
            $cnpjs[] = $row;
        }
    } else {
        $nenhumCnpj = "Nenhum";
    }

    //SQL da pesquisa de Módulos Adicionais da empresa
    $sql_modulos = "SELECT md.nome
    FROM modulos md
    LEFT JOIN modulos_adicionais moad on (moad.idmodulo = md.id)
    LEFT JOIN clientes cli on (cli.id = moad.idempresa)
    LEFT JOIN usr_clientes usr on (usr.idempresa = cli.id)
    WHERE usr.id = $usuario_id";

    // Executando a pesquisa
    $sql_query_modulos = $mysqli->query($sql_modulos);

    // Verificando os resultados da consulta
    $modulos = [];
    if ($sql_query_modulos->num_rows > 0) {
        while ($row = $sql_query_modulos->fetch_assoc()) {
            $modulos[] = $row;
        }
    } else {
        $nenhumModulo = "Nenhum";
    }
?>