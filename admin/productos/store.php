<?php
require ('../private/init.php');

$nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
$precio = isset($_POST['precio']) ? floatval($_POST['precio']) : 0;
$talla = isset($_POST['talla']) ? trim($_POST['talla']) : '';
$color = isset($_POST['color']) ? trim($_POST['color']) : '';
$imagen = isset($_POST['imagen']) ? trim($_POST['imagen']) : '';

if (empty($nombre) || $precio <= 0) {
    die("Error: El nombre y el precio son obligatorios, y el precio debe ser mayor que 0.");
}

if (empty($talla)) {
    die("Error: La talla es obligatoria.");
}

$talla_query = "SELECT id FROM tallas WHERE talla = ?";
$stmt_talla = mysqli_prepare($db, $talla_query);
mysqli_stmt_bind_param($stmt_talla, 's', $talla);
mysqli_stmt_execute($stmt_talla);
$talla_result = mysqli_stmt_get_result($stmt_talla);

if (mysqli_num_rows($talla_result) == 0) {
    $insert_talla = "INSERT INTO tallas (talla) VALUES (?)";
    $stmt_insert_talla = mysqli_prepare($db, $insert_talla);
    mysqli_stmt_bind_param($stmt_insert_talla, 's', $talla);
    mysqli_stmt_execute($stmt_insert_talla);
    if (!mysqli_stmt_execute($stmt_insert_talla)) {
        die("Error al insertar la talla: " . mysqli_stmt_error($stmt_insert_talla));
    }
    $talla_id = mysqli_insert_id($db);
    mysqli_stmt_close($stmt_insert_talla);
} else {
    $talla_id = mysqli_fetch_assoc($talla_result)['id'];
}

mysqli_stmt_close($stmt_talla);

$color_query = "SELECT id FROM colores WHERE color = ?";
$stmt_color = mysqli_prepare($db, $color_query);
mysqli_stmt_bind_param($stmt_color, 's', $color);
mysqli_stmt_execute($stmt_color);
$color_result = mysqli_stmt_get_result($stmt_color);

if (mysqli_num_rows($color_result) == 0) {
    $insert_color = "INSERT INTO colores (color) VALUES (?)";
    $stmt_insert_color = mysqli_prepare($db, $insert_color);
    mysqli_stmt_bind_param($stmt_insert_color, 's', $color);
    if (!mysqli_stmt_execute($stmt_insert_color)) {
        die("Error al insertar el color: " . mysqli_stmt_error($stmt_insert_color));
    }
    $color_id = mysqli_insert_id($db);
    mysqli_stmt_close($stmt_insert_color);
} else {
    $color_id = mysqli_fetch_assoc($color_result)['id'];
}

mysqli_stmt_close($stmt_color);
$insert_producto = "INSERT INTO productos (nombre, talla_id, color_id, precio) 
                    VALUES (?, ?, ?, ?)";
$stmt_producto = mysqli_prepare($db, $insert_producto);
mysqli_stmt_bind_param($stmt_producto, 'siid', $nombre, $talla_id, $color_id, $precio);
if (!mysqli_stmt_execute($stmt_producto)) {
    die("Error al insertar el producto: " . mysqli_stmt_error($stmt_producto));
}
$producto_id = mysqli_insert_id($db);

mysqli_stmt_close($stmt_producto);

$insert_imagen = "INSERT INTO imagenes (producto_id, url) 
                  VALUES (?, ?)";
$stmt_imagen = mysqli_prepare($db, $insert_imagen);
mysqli_stmt_bind_param($stmt_imagen, 'is', $producto_id, $imagen);

if (!mysqli_stmt_execute($stmt_imagen)) {
    die("Error al insertar imagen: " . mysqli_stmt_error($stmt_imagen));
}

mysqli_stmt_close($stmt_imagen);

db_disconnect($db);
header("Location: index.php");
exit;
