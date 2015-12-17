<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)).DS."account");
define('VIEW_PATH', ROOT.DS."views");

# Getting the urls for the MVC
$url = $_SERVER["REQUEST_URI"];
$method = $_SERVER["REQUEST_METHOD"];

# including the required filesystem
require_once(ROOT.DS."config".DS."init.php");

Config::set("a","b");

//Config::set("teste","returned string");
//echo Config::get("teste");
