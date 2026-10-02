<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
</head>
<body>
    <?php
    function dibujar_tabla(int $numero): void
    {
        ?>
        <table border="1">
            <thead>
                <th>n</th>
                <th>Producto</th>
            </thead>
            <tbody>
                <?php for ($i = 0; $i <= 10; $i++): ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $numero * $i ?></td>
                    </tr>
                <?php endfor ?>
            </tbody>
        </table>
        <?php
    }

    if (isset($_GET["numero"])):
        $numero = trim($_GET["numero"]);
        if (ctype_digit($numero)):
            if ($numero >= 0 && $numero <= 10):
                dibujar_tabla($numero);
            else:
                ?>
                <h3>Error: el número debe estar entre 0 y 10</h3>
                <?php
            endif;
        else:
            ?>
            <h3>Error: el número es incorrecto</h3>
            <?php
        endif;
    else:
        ?>
        <h3>Error: falta el parámetro número</h3>
        <?php
    endif
    ?>
</body>
</html>
