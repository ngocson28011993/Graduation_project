<?php
/**
 * Created by PhpStorm.
 * User: SonChuoi
 * Date: 11/26/2014
 * Time: 10:00 AM
 */
?>
<?php
    defined('APPLICATION_PATH')
        || define ('APPLICATION_PATH',
            realpath(dirname(__FILE__).'/..application'));
    defined('APPLICATION_ENV')
        || define('APPLICATION_ANV',
        (getenv('APPLICATION_ENV') ? getnv('APPLICATION_ENV')
                                    :'production'));
    set_include_path(implode(PATH_SEPARATOR, array(
        dirnaame(dirname(__FILE__)) .'/library',
        get_include_path(),
    )));
    require_once 'Zend/Application.php';
    $application = new Zend_Application(
        APPLICATION_ENV,
        APLICATION_PATH. '/configs/application.ini'
    );
    $application->bootstrap()->run();
?>