<?php
/**
 * Created by PhpStorm.
 * User: filipe_2
 * Date: 12/17/2015
 * Time: 2:55 PM
 */

class UserController extends Controller{


    public function index(){

        $title = "Bem vindo á area de cliente";
        $description = "É o único operador postal capaz de.";

        $this->scope['title'] = $title;
        $this->scope['message'] = $description;
        $this->scope['scripts'] = array('citypost');
        $this->scope['users'] = Users::all()->toArray();

        $view = new View('account', $this->scope);
        $view->render();
    }

    public function login(){

    }

    public function register(){

    }

    public function modeltest(){
        $xxx = array(
            "a" =>  "aaa",
            "b" =>  "BBB"
        );

        $xxx = $this->rest($xxx);

        echo Users::all();


    }

}