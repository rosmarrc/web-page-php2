<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cara de Dado Aleatoria</title>
    <style>
        .dice-face {
            display: block;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <img class="dice-face" src="dado<?php echo rand(1, 6); ?>.png" alt="Cara de Dado Aleatoria">
</body>
</html>
