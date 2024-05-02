<?php
define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("SHARED_PATH", PROJECT_PATH . "/shared/");

require_once ('database.php');
require_once ('queries.php');

$db = db_connect();