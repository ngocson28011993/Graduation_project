<?php
/**
 * Created by PhpStorm.
 * User: SonChuoi
 * Date: 12/6/2014
 * Time: 10:35 AM
 */
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap{
    protected function _initAutoload(){
        $autoloader = new Zend_Application_Module_Autoloader(array(
            'namespace' => '',
            'basePath' => dirname(__FILE__),
        ));
        return $autoloader;
    }
}
