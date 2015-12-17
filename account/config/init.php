<?php
/**
 * Created by PhpStorm.
 * User: filipe_2
 * Date: 12/17/2015
 * Time: 9:48 AM
 */

function __autoload($class_name){

    $app_path = ROOT.DS.'classes'.DS.strtolower($class_name).'.class.php';
    $controllers_path = ROOT.DS.'controllers'.DS.strtolower($class_name).'.controller.php';
    $models_path = ROOT.DS.'models'.DS.strtolower($class_name).'.model.php';

    if(file_exists($app_path)){
        include_once($app_path);
    }elseif(file_exists($controllers_path)){
        include_once($controllers_path);
    }elseif(file_exists($models_path)){
        include_once($models_path);
    }else{
        throw new Exception("Não foi possível incluir a class $class_name");
    }
}