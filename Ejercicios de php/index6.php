<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Aleatorio</title>
    <style>
        .random-number {
            text-align: center;
            font-size: 36px;
            border: 2px solid black;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 0 auto;
            line-height: 100px;
        }
    </style>
</head>
<body>
    <div class="random-number">
        <?php
            $numeroAleatorio = rand(1, 6);
            echo $numeroAleatorio;
        ?>
    </div>
</body>
</html>
