<link rel="stylesheet" href="css/header.css">
<div class="cabecalho">
    <header>
        <h1 class="title"><a href="/resetsistemas">Reset Sistemas</a></h1>
        <button class="menu-toggle" aria-label="Toggle menu">&#9776;</button>
        <ul class="menu">
            <a href="agendamento.php"><li>Agendamento</li></a>
            <?php if(!isset($_SESSION['id'])): ?>
            <a href="cliente.php"><li>Cliente</li></a>
            <?php else: ?>
            <a href="painelcliente.php"><li>Painel do Cliente</li></a>
            <a href="logout.php"><li>Sair</li></a>
            <?php endif; ?>
        </ul>
        <script src="scripts/header.js"></script>
    </header>
</div>