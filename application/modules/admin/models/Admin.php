<?php
/**
 * Created by PhpStorm.
 * User: SonChuoi
 * Date: 12/25/2014
 * Time: 5:18 PM
 */
class Model_Admin extends Zend_Db_Table_Abstract{
    protected $_name = "register";
    protected $_primary = "id";
    public function listall(){
        $query=$this->select();
        $query->from($this->_name,array('id','name','age'));
        return $query;
    }
}