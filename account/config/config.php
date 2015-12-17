<?php
/**
 * Created by PhpStorm.
 * User: filipe_2
 * Date: 12/17/2015
 * Time: 9:54 AM
 */

Config::set("website","http://localhost");

// Routes válidas e métodos a serem chamados
Config::set("valid_requests" , array(
    "account" =>  array(
        "controller" => "user",
        "method"    =>  "index",
        "middleware"=>  "auth"
    ),
    "account/login"    =>  array(
        "controller"    => "auth",
        "method"        => "login"
    ),
    "account/register" =>  array(
        "controller"    =>  "auth",
        "method"        =>  "register"
    ),
));

Config::set("default_request",array(
    "not_found"  =>  array(
        "controller"    =>  "notfound",
        "method"        =>  "index"
    )
));