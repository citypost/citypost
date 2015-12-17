<?php
/**
 * Created by PhpStorm.
 * User: filipe_2
 * Date: 12/17/2015
 * Time: 7:05 PM
 */

class Middleware{


    public static function run($name){
        $name = $name;
        $function = $name.'Middleware';
        $path = ROOT.DS."middleware".DS.$name.".middleware.php";

        if(file_exists($path)){
            include_once($path);
            if (function_exists($function)) {
                $function();
            }else{
                echo "No middleware found";
            }
        }

    }
}