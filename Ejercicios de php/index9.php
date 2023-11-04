<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tirada de Dados</title>
    <style>
        .result {
            text-align: center;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <?php
        $dado1 = rand(1, 6);
        $dado2 = rand(1, 6);
        
        $resultado = "";

        if ($dado1 == $dado2) {
            $resultado = "¡Pareja! Ambos dados tienen el mismo valor: $dado1";
        } else {
            $resultado = "El mayor valor obtenido es: " . max($dado1, $dado2);
        }
    ?>
    <div class="result">
        Tirada de Dados:<br>
        Dado 1: <?php echo $dado1; ?><br>
        Dado 2: <?php echo $dado2; ?><br>
        <?php echo $resultado; ?>
    </div>
</body>
</html>
