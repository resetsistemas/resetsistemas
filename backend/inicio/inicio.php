<?php $texto = 'set'; ?>
<?php include __DIR__ . '/../head.php'; ?>
<link rel="stylesheet" href="css/index.css?v=<?php echo filemtime('css/index.css'); ?>">
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
    <?php include 'footer.php'; ?>
  </main>
</body>

</html>