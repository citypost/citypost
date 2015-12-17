<?php
/**
 * Created by PhpStorm.
 * User: filipe_2
 * Date: 12/17/2015
 * Time: 2:55 PM
 */

class Notfound extends Controller{

    private $scope = array();
    private $title = "Página inexistente";


    public function index(){

        $message = "O url que escolheu não existe, por favor tente mais tarde";
        array_push($this->scope,$this->title);
        array_push($this->scope,$message);


        print_r($this->scope);
    }

}