<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)).DS."account");
define('VIEW_PATH', ROOT.DS."views");

# Getting the urls for the MVC
$url = $_SERVER["REQUEST_URI"];

# including the required filesystem
require_once(ROOT.DS."config".DS."init.php");
require_once(ROOT.DS.'config'.DS.'config.php');

Config::set("a","b");
$router = new Route($url);

echo "<pre>";
print_r($router->get($url));
echo "<hr>";

include_once(VIEW_PATH.DS."index.php");

