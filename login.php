<?php

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        $preenchaEmail = "Preencha seu e-mail."; //Conferindo se o campo e-mail está em branco.
    } else if(strlen($_POST['senha']) == 0) {
        $preenchaSenha = "Preencha sua senha."; //Conferindo se o campo senha está em branco.
    } else {
        
        //Variaveis que serão preenchidas pelo usuário
        $email = $mysqli->real_escape_string($_POST['email']); //Limpando o campo email para evitar códigos indevidos
        $senha = $mysqli->real_escape_string($_POST['senha']); //Limpando o campo senha para evitar códigos indevidos

        //Pesquisa SQL que será executada para encontrar o usuário
        $sql_code = "SELECT * 
        FROM usr_clientes
        WHERE email = '$email' AND ativo = '1' LIMIT 1";
        
        //Executando a pesquisa SQL no banco de dados
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " - $mysqli->error);

        //Verificando se a quantidade de usuários encontrados é igual a 1
        $quantidade = $sql_query->num_rows;
        if($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();
            if(password_verify($senha, $usuario['senha'])) {

                if(!isset($_SESSION)) {
                    session_start();
                }

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];

                header("Location: painelcliente.php");

            } else {
                $mensagemErroLogin = "Senha incorreta";
            }
        } else {
            $mensagemErroLogin = "Usuário não encontrado";
        }
    }

}
?>