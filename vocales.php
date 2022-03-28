<?php
if (!isset($_POST["cadena"])) {
    exit("No hay cadena");

}
$cadena = $_POST["cadena"];
$transformada = "";
$vocales = 0;
for ($i = 0; $i < strlen($cadena); $i++) {
    $letra = $cadena[$i];
    # Convertir a minúscula para comprobación más simple
    $letraMinuscula = strtolower($letra);
    # Saber si es vocal. Para ello comprobamos si la letra está en el arreglo de vocales
    if (in_array($letraMinuscula, ["a", "e", "i", "o", "u"])) {
        # En caso de que sí, entonces  en lugar de agregar el caracter, agregamos un ¿
        $transformada .= "$";
        # Y aumentamos el contador
        $vocales++;
    } else {
        # En caso de que no, agregamos el carácter normalmente
        $transformada .= $cadena[$i];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar y contar vocales</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    echo "<strong>Cadena original a transformar: </strong><br>" . $cadena;
    echo "<br><strong>Cadena final transformada: </strong><br>" . $transformada;
    ?>
    <p> La cantidad de caracteres que posee es: <?php echo strlen($cadena); ?></p>
</body>

</html>