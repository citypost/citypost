<?php
/**
 * Created by PhpStorm.
 * User: filipe_2
 * Date: 12/17/2015
 * Time: 9:54 AM
 */

Config::set("website","http://localhost");

// Db Connection
Config::set("driver","mysql");
Config::set("host","localhost");
Config::set("database","citypost");
Config::set("username","pihh");
Config::set("password","");
Config::set("charset","utf8");
Config::set("collation","utf8_unicode_ci");
Config::set("prefix","");

// Routes válidas e métodos a serem chamados
Config::set("valid_requests" , array(
    "account" =>  array(
        "controller" => "user",
        "method"    =>  "index",
        "middleware"=>  array("auth")
    ),
    "account/login"    =>  array(
        "controller"    => "auth",
        "method"        => "login"
    ),
    "account/register" =>  array(
        "controller"    =>  "auth",
        "method"        =>  "register"
    ),
    "account/modeltest" =>  array(
        "controller"    =>  "user",
        "method"        =>  "modeltest"
    ),
));

Config::set("default_request",array(
    "not_found"  =>  array(
        "controller"    =>  "notfound",
        "method"        =>  "index"
    )
));