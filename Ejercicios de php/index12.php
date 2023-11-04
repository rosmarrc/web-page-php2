<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tirada de Dado en Idioma Aleatorio</title>
    <style>
        .result {
            text-align: center;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <?php
        $idiomas = array("Inglés", "Español", "Francés", "Alemán", "Italiano");
        $idiomaAleatorio = $idiomas[array_rand($idiomas)];
        $numeroAleatorio = rand(1, 6);
    ?>
    <div class="result">
        Tirada de Dado en <?php echo $idiomaAleatorio; ?>:<br>
        Resultado: <?php echo $numeroAleatorio; ?>
    </div>
</body>
</html>
