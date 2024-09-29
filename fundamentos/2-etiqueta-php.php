<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>etiquetas php</title>
</head>

<body>
    <h1>etiquetas php - formas de imprimir mensajes con php</h1>

    <ul>
        <li>
            Funci&oacute;n <code><?php echo 'echo'; ?></code>: Es la forma más básica de imprimir texto en la salida.
        </li>

        <li>
            Funci&oacute;n <code><?php print 'print'; ?></code> o <code><?php print('print()'); ?></code>: es similar a <code>echo</code>, se utiliza para imprimir texto.
        </li>

        <li>
            Forma abreviada: <?= 'a partir de la version php 5.4'; ?>
        </li>

        <li>
            Etiquetas HTML dentro de PHP: puedes combinar PHP con etiquetas HTML para crear estructuras más complejas, por ejemplo: <?= '2<sup>10</sup>'; ?>
        </li>

        <li>
            <!-- habilitamos etiquetas php para escribir codigo php -->
            <?php
            $nombre = 'Martz';
            $apellido = 'Dev';
            ?>
            Variables: puedes insertar el valor de una variable dentro de una cadena (interpolaci&oacute;n),
            <br>
            concatenando variables <?= $nombre . " " . $apellido ?> o directamente <?= "$nombre $apellido"; ?>
        </li>

        <li>
            <!-- habilitamos etiquetas php para escribir codigo php -->
            <?php
            $lenguaje_programacion = 'php';
            $id_version_php = PHP_VERSION_ID;
            $informacion = sprintf('lenguaje de programacion %s e id de version de php: %d', $lenguaje_programacion, $id_version_php);
            ?>
            Funciones de formato: Funciones como <code>printf</code> y <code>sprintf</code> te permiten formatear la salida de una manera más precisa (control sobre la salida)
            <br>
            usando la funci&oacute;n <code>printf</code>: <?= printf('lenguaje de programacion %s e id de la version %d', $lenguaje_programacion, $id_version_php); ?>
            <br>
            Usando la funci&oacute;n <code>sprintf</code>: <?= $informacion; ?>
        </li>

        <li>
            <?php
            /**
             * genera un titulo HTML de nivel dos   
             * @param string $etiqueta <p>contenido HTML a mostrar</p>
             * @return string <p>retorna el contenido HTML con el titulo de nivel 2</p>
             */
            function generarTituloNivelDos(?string $etiqueta = 'defecto'): string
            {
                return "<h2>$etiqueta</h2>";
            }
            ?>
            Funciones para generar HTML: Puedes utilizar funciones para generar tablas, formularios, listas y otras estructuras HTML: <?= generarTituloNivelDos() ?>
        </li>
    </ul>
</body>

</html>