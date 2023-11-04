<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tirada de Dados Aleatoria</title>
    <style>
        .result {
            text-align: center;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <?php
        $numDados = rand(1, 10);
        $totalPuntos = 0;
        
        for ($i = 0; $i < $numDados; $i++) {
            $dado = rand(1, 6);
            $totalPuntos += $dado;
        }
    ?>
    <div class="result">
        Tirada de Dados Aleatoria:<br>
        Número de Dados: <?php echo $numDados; ?><br>
        Total de Puntos: <?php echo $totalPuntos; ?>
    </div>
</body>
</html>
