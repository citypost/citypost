<?php
/**
 * Created by PhpStorm.
 * User: filipe_2
 * Date: 12/17/2015
 * Time: 3:50 PM
 */

class View{
    protected $scope;
    protected $path;

    public function __construct($path, $data = array()){

        $this->path = VIEW_PATH."/".$path."/index.php";
        $this->scope = $data;

    }

    public function render(){

        ob_start();
        include(VIEW_PATH.DS."index.php");
        $content = ob_get_contents();
        ob_end_clean();

        echo $content;
    }
}