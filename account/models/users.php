<?php
/**
 * Created by PhpStorm.
 * User: filipe_2
 * Date: 12/17/2015
 * Time: 9:48 AM
 */

class Users extends Model{

    protected $fillable= ['name','email','created_at','updated_at','remember_token','password'];

}