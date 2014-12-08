<?php
/**
 * Created by PhpStorm.
 * User: SonChuoi
 * Date: 12/8/2014
 * Time: 3:04 PM
 */
class Model_User extends Zend_Db_Table_Abstract{
    protected $_name = "user";
    protected $_primary = "id";
    public function install(){
        return $this->fetchall()->toArray();
    }
}