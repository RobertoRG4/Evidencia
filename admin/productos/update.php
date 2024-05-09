<?php
require ('../private/init.php');

actualizar_nombre_precio($_POST['id'], $_POST['nombre'], $_POST['precio']);
actualizar_talla($_POST['id'], $_POST['talla']);
actualizar_color($_POST['id'], $_POST['color']);
actualizar_imagen($_POST['id'], $_POST['imagen']);
db_disconnect($db);

header("Location: show.php?id=" . $_POST['id']);
exit;