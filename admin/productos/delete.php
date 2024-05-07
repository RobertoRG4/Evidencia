<?php
require ('../private/init.php');

eliminar_producto($_GET['id']);

db_disconnect($db);

header("Location: index.php");
exit;