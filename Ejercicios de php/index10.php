<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Círculos Aleatorios en Tabla</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            width: 30px;
            height: 30px;
        }
        .circle {
            width: 100%;
            height: 100%;
            background-color: black;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <?php
                $numCirculos = rand(1, 10);
                for ($i = 0; $i < $numCirculos; $i++) {
                    echo '<td class="circle"></td>';
                }
            ?>
        </tr>
    </table>
</body>
</html>
