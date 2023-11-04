<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartas Aleatorias</title>
    <style>
        .card {
            text-align: center;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <?php
        $carta1 = rand(1, 10);
        $carta2 = rand(1, 10);
        $carta3 = rand(1, 10);
        
        $maxValue = max($carta1, $carta2, $carta3);
    ?>
    <div class="card">
        Carta 1: <?php echo $carta1; ?>
    </div>
    <div class="card">
        Carta 2: <?php echo $carta2; ?>
    </div>
    <div class="card">
        Carta 3: <?php echo $carta3; ?>
    </div>
    <div class="card">
        El valor más alto es: <?php echo $maxValue; ?>
    </div>
</body>
</html>
