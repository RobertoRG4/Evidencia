<?php
function todo_de_tabla($tabla)
{
    global $db;
    $sql = "SELECT * FROM $tabla";
    return mysqli_query($db, $sql);
}

function get_talla($database, $id)
{
    global $db;
    $sql = "SELECT * FROM $database WHERE id = $id";
    return mysqli_query($db, $sql);
}
function get_color($database, $id)
{
    global $db;
    $sql = "SELECT * FROM $database WHERE id = '$id'";
    return mysqli_query($db, $sql);
}
function producto_por_id($id)
{
    global $db;
    $sql = "SELECT * FROM productos WHERE id = '$id'";
    return mysqli_query($db, $sql);
}
function get_imagen_producto($producto_id)
{
    global $db;
    $sql = "SELECT url FROM imagenes WHERE producto_id = '$producto_id' LIMIT 1";
    $result = mysqli_query($db, $sql);
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row['url'];
    }
    return null;
}
function actualizar_producto($id, $nuevo_nombre)
{
    global $db;
    $sql = "UPDATE productos SET nombre = '$nuevo_nombre' WHERE id = '$id'";
    return mysqli_query($db, $sql);
}
function eliminar_producto($id)
{
    global $db;

    // Usar una consulta preparada para prevenir inyección SQL
    $sql = "DELETE FROM productos WHERE id = ?";

    // Preparar la consulta
    if ($stmt = mysqli_prepare($db, $sql)) {
        // Vincular el parámetro
        mysqli_stmt_bind_param($stmt, 'i', $id);

        // Ejecutar la consulta
        $resultado = mysqli_stmt_execute($stmt);

        // Cerrar la declaración
        mysqli_stmt_close($stmt);

        // Devolver el resultado de la ejecución
        return $resultado;
    } else {
        // Si falla la preparación, devolver false
        return false;
    }
}
