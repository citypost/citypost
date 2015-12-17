<?php
/**
 * Created by PhpStorm.
 * User: filipe_2
 * Date: 12/17/2015
 * Time: 2:47 PM
 */
use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent {

    protected $table;
    protected $database;

    public function __construct(){

    }


}