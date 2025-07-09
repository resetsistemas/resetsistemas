<?php
include __DIR__ . '/../head.php';

$texto = 'set';
?>
<link rel="stylesheet" href="css/styles.css?v=<?php echo filemtime('css/styles.css'); ?>">
<link rel="stylesheet" href="css/inicio.css?v=<?php echo filemtime('css/inicio.css'); ?>">
</head>

<body>
  <main>
    <?php include __DIR__ . '/../header.php'; ?>
    <div class="maquinadeescrever">
      <p>Re</p>
      <div class="palavras">
        <p><?php echo $texto; ?></p>
      </div>
      <script src="scripts/maquinadeescrever.js?v=<?php echo filemtime('scripts/maquinadeescrever.js'); ?>"></script>
    </div>
    <div class="dobra-1">
      <div class="dobra-10">
      <h1>Quem é a Reset Sistemas?</h1>
      </div>
      <div class="dobra-11">
      p.
      </div>
    </div>
    <?php include __DIR__ . '/../footer.php'; ?>
  </main>
</body>

</html>