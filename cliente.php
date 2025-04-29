<?php include 'head.php';?>
    <link rel="stylesheet" href="css/cliente.css">
    <?php include 'conexao.php';?>
    <?php include 'login.php';?>
</head>
<body>
    <?php include 'header.php'; ?>
    <main>
        <div class="login">
            <h2>Acesse sua conta</h2>
            <form action="" method="POST">
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
                <?php if (isset($preenchaEmail)): ?>
                    <p><?php echo $preenchaEmail; ?></p>
                <?php endif; ?>
                <?php if (isset($preenchaSenha)): ?>
                    <p><?php echo $preenchaSenha; ?></p>
                <?php endif; ?>
            </form>
        </div>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
