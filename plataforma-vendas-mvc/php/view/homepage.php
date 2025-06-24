<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>

    <!-- reset de estilização browser -->
    <link rel="stylesheet" type="text/css" href="./../../css/container-layout/reset.css">

    <!-- estilização do cabeçalho -->
    <link rel="stylesheet" type="text/css" href="./../../css/container-layout/cabecalho.css">
    <!-- estilização do carrosel -->
    <link rel="stylesheet" type="text/css" href="./../../css/componentes/carrossel.css">
</head>

<body>
    <!-- cabeçalho -->
     <?php
     include '../view/cabecalho.php';
     ?>

    <main class="container-principal">
        <div class="carrossel">
            <div class="slides">
                <img src="./../../src\images\destaques\pastilha.jfif" alt="Pastilha de freio gol 1996">
                <img src="./../../src\images\destaques\mocinetica.jfif" alt="Mocinética">
                <img src="./../../src\images\destaques\parabrisa.jfif" alt="Parabrisa Pálio 2003">
                <img src="./../../src\images\destaques\gol.jfif" alt="Bico injetor">

            </div>
            <button class="prev" onclick="mudarSlide(-1)"></button>
            <button class="text" onclick="mudarSlide(-1)"></button>
        </div>

    </main>
    <!-- rodapé -->
     <script src="./../../js/carrossel.js"></script>
</body>
</html>