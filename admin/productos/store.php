<?php
require ('../private/init.php');

$nombre = mysqli_real_escape_string($db, $_POST['nombre']);
$precio = floatval($_POST['precio']); // Convertir a float para precio
$talla = mysqli_real_escape_string($db, $_POST['talla']);
$color = mysqli_real_escape_string($db, $_POST['color']);
$imagen = mysqli_real_escape_string($db, $_POST['imagen']);

$talla_result = mysqli_query($db, "SELECT * FROM tallas WHERE talla = '$talla'");
$color_result = mysqli_query($db, "SELECT * FROM colores WHERE color = '$color'");

$talla_id = null;
$color_id = null;

if (mysqli_num_rows($talla_result) == 0) {
    mysqli_query($db, "INSERT INTO tallas (talla) VALUES ('$talla')");
    $talla_id = mysqli_insert_id($db); // Obtener el ID insertado
} else {
    $talla_id = mysqli_fetch_assoc($talla_result)['id']; // Obtener el ID existente
}

if (mysqli_num_rows($color_result) == 0) {
    mysqli_query($db, "INSERT INTO colores (color) VALUES ('$color')");
    $color_id = mysqli_insert_id($db);
} else {
    $color_id = mysqli_fetch_assoc($color_result)['id'];
}

$sql = "INSERT INTO productos (nombre, talla_id, color_id, precio) 
        VALUES ('$nombre', '$talla_id', '$color_id', '$precio')";
if (!mysqli_query($db, $sql)) {
    die("Error al insertar producto: " . mysqli_error($db));
}
$producto_id = mysqli_insert_id($db);

$sql_imagen = "INSERT INTO imagenes (producto_id, url) 
               VALUES ('$producto_id', '$imagen')";
if (!mysqli_query($db, $sql_imagen)) {
    die("Error al insertar imagen: " . mysqli_error($db));
}

header("Location: index.php");
exit;
