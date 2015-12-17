<?php
/**
 * Created by PhpStorm.
 * User: filipe_2
 * Date: 12/17/2015
 * Time: 2:55 PM
 */

class User extends Controller{

    public function index(){

        $title = "Bem vindo á area de cliente";
        $description = "É o único operador postal capaz de.";

        $this->scope['title'] = $title;
        $this->scope['message'] = $description;

        $view = new View('account', $this->scope);
        $view->render();
    }

    public function login(){

    }

    public function register(){

    }

}