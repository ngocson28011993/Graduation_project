<?php
/**
 * Created by PhpStorm.
 * User: SonChuoi
 * Date: 11/28/2014
 * Time: 11:39 AM
 */
    class Model_User extends Zend_Db_Table_Abstract {
        protected $_name = "name";
        protected $_primary = 'id';

        public function listall(){
            return $this->fetchAll()->toArray();
        }
    }