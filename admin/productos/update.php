<?php
require ('../private/init.php');

actualizar_producto($_POST['id'], $_POST['nombre']);
db_disconnect($db);

header("Location: show.php?id=" . $_POST['id']);
exit;