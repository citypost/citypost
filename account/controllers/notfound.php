<?php
/**
 * Created by PhpStorm.
 * User: filipe_2
 * Date: 12/17/2015
 * Time: 2:55 PM
 */

class NotfoundController extends Controller{

    public function index(){

        $title = "Ooops!!";
        $description = "A página que procura não existe!";
        $warning = ' Os termos e condições para postais estão a ser reestruturados. Para mais informações a respeito, por favor entre em contacto connosco através de nossa página de contactos no menu principal ou clique <a href="contacto.html">aqui</a>';

        $this->scope['title'] = $title;
        $this->scope['message'] = $description;
        $this->scope['warning'] = $warning;
        $this->scope['scripts'] = array('citypost');

        $view = new View('notfound', $this->scope);
        $view->render();
    }

}