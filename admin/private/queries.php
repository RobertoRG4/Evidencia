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
function actualizar_nombre_precio($id, $nuevo_nombre, $nuevo_precio)
{
    global $db;
    $sql = "
    UPDATE productos SET nombre = '$nuevo_nombre', precio = $nuevo_precio WHERE id = $id;";
    return mysqli_query($db, $sql);
}
function actualizar_talla($id, $nueva_talla)
{
    global $db;
    $sql = "
    UPDATE tallas SET talla = '$nueva_talla' WHERE id = $id;";
    return mysqli_query($db, $sql);
}
function actualizar_color($id, $nuevo_color)
{
    global $db;
    $sql = "
    UPDATE colores SET color = '$nuevo_color' WHERE id = $id;";
    return mysqli_query($db, $sql);
}

function actualizar_imagen($id, $nueva_imagen)
{
    global $db;
    $sql = "
    UPDATE imagenes SET url = '$nueva_imagen' WHERE producto_id = $id;";
    return mysqli_query($db, $sql);
}
function eliminar_producto($id)
{
    global $db;

    if (!is_numeric($id)) {
        throw new InvalidArgumentException("El ID debe ser un número válido.");
    }

    $id = (int) $id;

    $sql_delete_imagenes = "DELETE FROM imagenes WHERE producto_id = $id";
    if (!mysqli_query($db, $sql_delete_imagenes)) {
        throw new Exception("Error al eliminar imágenes: " . mysqli_error($db));
    }
    $sql_delete_producto = "DELETE FROM productos WHERE id = $id";
    if (!mysqli_query($db, $sql_delete_producto)) {
        throw new Exception("Error al eliminar producto: " . mysqli_error($db));
    }

    return true;
}
function nuevo_producto($nombre, $precio, $talla, $color, $imagen, $id)
{
    global $db;
    $sql = "
    INSERT INTO productos(nombre,precio) VALUES ('$nombre',$precio);
    INSERT INTO tallas(talla)Values('$talla');
    Insert Into imagenes(producto_id,url) VALUES($id,'$imagen');";
    return mysqli_query($db, $sql);

}



///////////////////////////////////////////////////////////////////////////////////////////////
function get_titulo($id)
{
    global $db;
    $sql = "SELECT * FROM titulos WHERE id = $id";
    return mysqli_query($db, $sql);
}

function get_texto($id)
{
    global $db;
    $sql = "SELECT * FROM textos WHERE titulo_id = $id";
    return mysqli_query($db, $sql);
}

function actualizar_titulo($id, $nuevo_titulo)
{
    global $db;
    $sql = "UPDATE titulos SET titulo = '$nuevo_titulo' WHERE id = $id";
    return mysqli_query($db, $sql);
}

function actualizar_texto($id, $nuevo_texto)
{
    global $db;
    $sql = "UPDATE textos SET texto = '$nuevo_texto' WHERE id = $id";
    return mysqli_query($db, $sql);
}
function get_titulos_y_textos()
{
    global $db;
    $sql = "SELECT titulos.id, titulos.titulo, textos.texto 
            FROM titulos 
            LEFT JOIN textos ON titulos.id = textos.titulo_id";
    return mysqli_query($db, $sql);
}

