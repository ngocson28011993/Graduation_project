<?php
/**
 * Created by PhpStorm.
 * User: SonChuoi
 * Date: 11/27/2014
 * Time: 9:43 AM
 */
defined('APPLICATION_PATH',
        realpath(dirname(__FILE__) . '/../application'));
defined('APPLICATION_ENV', 'production');

set_include_path(dirname(dirname(__FILE__)) . '/../library');

require_once 'Zend/Application.php' ;
$application = new Zend_Application(
    APPLICATION_ENV,
    APPLICATION_PATH . '/configs/application.ini'
);
$application->bootstrap()->run();