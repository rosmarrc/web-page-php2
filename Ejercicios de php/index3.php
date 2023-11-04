<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Círculos Aleatorios</title>
    <style>
        table {
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
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
    <h1>Círculos Aleatorios en una Fila de Tabla</h1>
    <table>
        <tr id="circleRow">
            <!-- Aquí se generarán los círculos aleatorios -->
        </tr>
    </table>
    <script src="script3.js"></script>
</body>
</html>
