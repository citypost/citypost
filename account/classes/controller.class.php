<?php
/**
 * Created by PhpStorm.
 * User: filipe_2
 * Date: 12/17/2015
 * Time: 2:47 PM
 */

class Controller{

    protected $scope = array();

    public function __construct(){
        $this->scope["message"]="";
        $this->scope["title"]="";
        $this->scope["scripts"]= array();
    }

    protected function rest($array){
        return json_encode($array);
    }
}