<?php
/**
 * Created by PhpStorm.
 * User: filipe_2
 * Date: 12/17/2015
 * Time: 9:49 AM
 */
class security{

    public function get($var){
        if(isset($_GET[$var])){
            return htmlentities($_GET[$var]);
        }
    }
}
