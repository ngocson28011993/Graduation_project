<?php
/**
 * Created by PhpStorm.
 * User: SonChuoi
 * Date: 12/8/2014
 * Time: 3:07 PM
 */
class UserController extends Zend_Controller_Action{
    public function indexAction(){
        $muser=new Model_User;
        echo "<pre>";
        print_r($muser->listall());
        echo "</pre>";
    }
}