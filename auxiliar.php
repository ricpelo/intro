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

/**
 * Obtiene el número de la URL, lo limpia y lo devuelve.
 *
 * Si no existe el parámetro adecuado, añade un mensaje
 * al array de errores.
 */
function obtener_numero(array &$errores): ?string
{
    $numero = null;

    if (!isset($_GET["numero"])) {
        $errores[] = "Error: falta el parámetro número";
    } else {
        $numero = trim($_GET["numero"]);
    }

    return $numero;
}

/**
 * Comprueba si el número es válido.
 *
 * Si el número no es válido, añade un mensaje al array de errores.
 */
function comprobar_numero(?string $numero, array &$errores): void
{
    if (isset($numero) && !ctype_digit($numero)) {
        $errores[] = "Error: el número es incorrecto";
    }
}

/**
 * Comprueba si el número está dentro de los límites adecuados.
 *
 * Un número está dentro de los límites si está comprendido entre 0 y 10.
 * Si no se encuentra dentro de ese rango, añade un mensaje al array
 * de errores.
 */
function comprobar_rango(?string $numero, array &$errores)
{
    if (empty($errores) && !($numero >= 0 && $numero <= 10)) {
        $errores[] = "Error: el número debe estar entre 0 y 10";
    }
}

function mostrar_errores(array $errores): void
{
    foreach ($errores as $error) {
        mostrar_error($error);
    }
}

function mostrar_error(string $error): void
{
    ?>
    <h3><?= $error ?></h3>
    <?php
}
