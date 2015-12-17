<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));
define('VIEW_PATH', ROOT.DS."views");

# Getting the urls for the MVC
$url = $_SERVER["REQUEST_URI"];
$method = $_SERVER["REQUEST_METHOD"];

# including the required filesystem
require_once(ROOT.DS."account".DS."config".DS."init.php");

echo ROOT;