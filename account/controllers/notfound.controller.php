<?php
/**
 * Created by PhpStorm.
 * User: filipe_2
 * Date: 12/17/2015
 * Time: 2:55 PM
 */

class Notfound extends Controller{



    public function index(){

        $title = "Ooops!";
        $message = "O url que escolheu não existe, por favor tente mais tarde";
        array_push($this->scope,$title);
        array_push($this->scope,$message);

        $view = new View('notfound', $this->scope);
        $view->render();
    }

}