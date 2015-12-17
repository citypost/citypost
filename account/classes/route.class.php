<?php
/**
 * Created by PhpStorm.
 * User: filipe_2
 * Date: 12/17/2015
 * Time: 12:13 PM
 */

class Route{

    private $uri;

    public function __construct($uri){
        $this->uri = $uri;
    }

    private function compare($uri){
        $this->uri = $uri;

        $this->uri = trim($this->uri, "/");

        if(array_key_exists($this->uri, Config::get("valid_requests"))){
            print_r(Config::get("valid_requests")[$this->uri]);
        }else{
            print_r(Config::get("default_request")["not_found"]);
        }

    }

    public function get($uri){
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            $this->compare($uri);
        }
    }
}