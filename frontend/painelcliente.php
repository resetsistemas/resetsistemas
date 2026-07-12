<?php include 'head.php';?>
    <script src="scripts/painelcliente.js"></script>
    <link rel="stylesheet" href="css/painelcliente.css">
    <?php include 'protect.php';?>
    <?php include 'conexao.php';?>
    <?php include 'dadosempresa.php'; ?>
</head>
<body>
    <?php include 'header.php'; ?>
    <main>
        <div class="boasvindas">
            <p> Seja bem-vindo(a),</p><?php echo $usuario_nome;?>.
        </div>
        <div class="abas">
            <button id="tab1Btn" class="tablinks" onclick="openTab(event, 'tab1')">
                <h2>Empresa</h2>
            </button>
            <button class="tablinks" onclick="openTab(event, 'tab2')">
                <h2>Boletos</h2>
            </button>
            <button class="tablinks" onclick="openTab(event, 'tab3')">
                <h2>Notas Fiscais</h2>
            </button>
        </div>
        <div class="painel">
            <div id="tab1" class="tabcontent">
                <h2>Dados da empresa</h2>
                <div class="nome">
                    <p><b>Nome da empresa:</b> <?php echo $razaosocial;?></p>
                </div>
                <div class="nomefantasia">
                    <p><b>Nome fantasia:</b> <?php echo $nomefantasia;?></p>
                </div>
                <div class="cnpj">
                    <p><b>CNPJ:</b> <?php echo $cnpj_formatado;?></p>
                </div>
                <div class="inscricaoestadual">
                    <p><b>Inscrição Estadual:</b> <?php echo $ie;?></p>
                </div>
                <div class="endereco">
                    <p><b>Endereço:</b> <?php echo $endereco_formatado;?></p>
                </div>
                <div class="datacontrato">
                    <p><b>Cliente desde:</b> <?php echo $datacontrato_formatado;?></p>
                </div>
                <h2>Detalhes do Sistema</h2>
                <div class="usuarios">
                    <p><b>Quantidade de usuários:</b> <?php echo $qtdusuarios;?></p>
                </div>
                <div class="hospedagem">
                    <p><b>Hospedagem:</b> <?php echo $hospedagem;?></p>
                </div>
                <div class="hospedagem">
                    <p><b>Mensalidade:</b> <?php echo $mensalidade_formatada;?></p>
                </div>
                <div class="cnpj_adicional">
                    <table>
                        <tbody>
                            <?php if (isset($nenhumCnpj)): ?>
                                <p><b>CNPJs adicionais:</b> <?php echo $nenhumCnpj; ?></p>
                            <?php else: ?>
                                <p class="titulo_modulo_cnpj"><b>CNPJs adicionais:</b>
                                <?php foreach ($cnpjs as $cnpj): ?>
                                    <tr class="tabela_cnpjs_adicionais">
                                        <td><p>• <?= htmlspecialchars($cnpj['nomefantasia']); ?> - <?= htmlspecialchars(preg_replace('/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/', '$1.$2.$3/$4-$5', $cnpj['cnpj'])); ?>.</p></td>
                                    </tr>
                                <?php endforeach; ?>
                                </p>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <div class="modulos">
                    <table>
                        <tbody>
                            <?php if (isset($nenhumModulo)): ?>
                                <p><b>Módulos adicionais:</b> <?php echo $nenhumModulo; ?></p>
                            <?php else: ?>
                                <p class="titulo_modulo_cnpj"><b>Módulos adicionais:</b>
                                <?php foreach ($modulos as $modulo): ?>
                                    <tr class="tabela_modulos_adicionais">
                                        <td><p>• <?= htmlspecialchars($modulo['nome']); ?></p></td>
                                    </tr>
                                <?php endforeach; ?>
                                </p>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="tab2" class="tabcontent">
                <table>
                    <thead>
                        <tr>
                            <th>Vencimento</th>
                            <th class="valorboleto">Valor</th>
                            <th>Status</th>
                            <th class="linkboleto">Link</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($boletos as $boleto): ?>
                            <tr class="tabela_boletos">
                                <td><?= htmlspecialchars($boleto['dia']); ?>/<?= htmlspecialchars($boleto['mes']); ?>/<?= htmlspecialchars($boleto['ano']); ?></td>
                                <td>R$<?= htmlspecialchars(number_format($boleto['valor'], 2, ',', '.')); ?></td>
                                <td><?= htmlspecialchars($boleto['status']); ?></td>
                                <td><a href="<?= htmlspecialchars($boleto['link_boleto']); ?>" targe="_blank">
                                    <img src="image/pdf.svg" alt="Ver boleto" style="width: 24px; height: 24px;"></a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php if (isset($mensagemErroBoleto)): ?>
                    <p><?php echo $mensagemErroBoleto; ?></p>
                <?php endif; ?>
            </div>
            <div id="tab3" class="tabcontent">
                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th class="valornota">Valor</th>
                            <th>Link</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($notas as $nota): ?>
                            <tr class="tabela_notas">
                                <td><?= htmlspecialchars($nota['dia']); ?>/<?= htmlspecialchars($nota['mes']); ?>/<?= htmlspecialchars($nota['ano']); ?></td>
                                <td>R$<?= htmlspecialchars(number_format($nota['valor_nota'], 2, ',', '.')); ?></td>
                                <td><a href="<?= htmlspecialchars($nota['link_nota']); ?>" targe="_blank">
                                    <img src="image/pdf.svg" alt="Ver boleto" style="width: 20px; height: 20px;"></a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php if (isset($mensagemErroNota)): ?>
                    <p><?php echo $mensagemErroNota; ?></p>
                <?php endif; ?>
            </div>
        </div>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>