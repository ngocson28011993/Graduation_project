<?php
/**
 * Created by PhpStorm.
 * User: SonChuoi
 * Date: 11/26/2014
 * Time: 2:12 PM
 */
    class Bootstrap extends Zend_Application_Boostrap_Boostrap {
        protected function _initDatabase(){
            $db = $this->getPluginResource('db')->getDbAdapter();
            Zend_Registry::set('db',$db);
        }
    }