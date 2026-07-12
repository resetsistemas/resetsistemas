<?php include 'head.php'; ?>
<link rel="stylesheet" href="css/cliente.css">
<?php include 'conexao.php'; ?>
<?php
if (isset($_POST['email'])) {

    $nome = $_POST['nome'];
    $idempresa = $_POST['idempresa'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $mysqli->query("INSERT INTO usr_clientes (nome, idempresa, email, senha, ativo) VALUES ('$nome','$idempresa','$email','$senha','1')");
}
?>
</head>

<body>
    <?php include 'header.php'; ?>
    <main>
        <div class="login">
            <h2>Cadastro de usuário</h2>
            <form action="" method="POST">
                <p>
                    <label>Nome</label>
                    <input type="text" name="nome" placeholder="Digite seu nome">
                </p>
                <p>
                    <label>ID Empresa</label>
                    <input type="number" name="idempresa" placeholder="Digite o ID de sua empresa">
                </p>
                <p>
                    <label>E-mail</label>
                    <input type="text" name="email" placeholder="Digite aqui seu email">
                </p>
                <p>
                    <label>Senha</label>
                    <input type="password" name="senha" placeholder="Digite aqui sua senha">
                </p>
                <div class="botao">
                    <button type="submit">Entrar</button>
                </div>
                <?php if (isset($mensagemErroLogin)): ?>
                    <p><?php echo $mensagemErroLogin; ?></p>
                <?php endif; ?>
            </form>
        </div>
    </main>
    <?php include 'footer.php'; ?>
</body>

</html>