<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
</head>
<body>
    <?php
    require 'auxiliar.php';

    $errores = [];
    $numero = obtener_numero($errores);
    comprobar_numero($numero, $errores);
    comprobar_rango($numero, $errores);

    if (empty($errores)) {
        dibujar_tabla($numero);
    } else {
        mostrar_errores($errores);
    }
    ?>
</body>
</html>
