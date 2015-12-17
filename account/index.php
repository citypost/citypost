<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)).DS."account");
define('VIEW_PATH', ROOT.DS."views");

# Getting the urls for the MVC
$url = $_SERVER["REQUEST_URI"];

# including the required filesystem
require_once(ROOT.DS."config".DS."init.php");
require_once(ROOT.DS.'config'.DS.'config.php');
require_once(VIEW_PATH.DS.'head.php');
#require_once(VIEW_PATH.DS."index.php");
$router = new Route($url);
$router->get($url);
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

<script>
    $(document).ready(function () {
        console.log("ajax");
        $.ajax({
            url: "http://localhost/account/ajax.php",
            type: "POST",
            success: function (data) {
                console.log("data: " + data);
            }
        });
    });
</script>