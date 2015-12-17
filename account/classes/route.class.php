<?php
/**
 * Created by PhpStorm.
 * User: filipe_2
 * Date: 12/17/2015
 * Time: 12:13 PM
 */

class Route{

    private $uri;
    private $params;
    private $controller;
    private $method;

    public function __construct($uri){
        $this->uri = $uri;
    }

    private function compare($uri){
        $this->uri = $uri;
        $this->uri = trim($this->uri, "/");

        $this->params = explode(",",$this->uri);
        $this->params = array_shift($this->params);


        if(array_key_exists($this->uri, Config::get("valid_requests"))){
            #print_r(Config::get("valid_requests")[$this->uri]);
            if(array_key_exists('middleware', Config::get("valid_requests")[$this->uri])){
                echo "Tem Middleware";
            }
            $this->controller = Config::get("valid_requests")[$this->uri]['controller'];
            $this->method = Config::get("valid_requests")[$this->uri]['method'];
        }else{
            #print_r(Config::get("default_request")["not_found"]);
            $this->controller = Config::get("default_request")["not_found"]['controller'];
            $this->method = Config::get("default_request")["not_found"]['method'];
        }
    }

    public function get($uri){
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            $this->compare($uri);
            $object_controller = new $this->controller();
            $object_method = $this->method;

            $object_controller->$object_method();
        }
    }
}