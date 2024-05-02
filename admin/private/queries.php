<?php
function todo_de_tabla($tabla)
{
    global $db;
    $sql = "SELECT * FROM $tabla ORDER BY id DESC";
    return mysqli_query($db, $sql);
}


function tenis_categoria($tenis)
{
    global $db;
    $sql = "INSERT INTO Tenis (nombre) VALUES ('$tenis')";
    return mysqli_query($db, $sql);
}

function tenis_por_id($id)
{
    global $db;
    $sql = "SELECT * FROM Tenis WHERE id=$id";
    return mysqli_query($db, $sql);
}


function actualizar_tenis($id, $tenis_nombre)
{
    global $db;
    $sql = "UPDATE Tenis SET nombre='$tenis_nombre' WHERE id=$id";
    return mysqli_query($db, $sql);
}


function eliminar_tenis($id)
{
    global $db;
    $sql = "DELETE FROM Tenis WHERE id=$id";
    return mysqli_query($db, $sql);
}
