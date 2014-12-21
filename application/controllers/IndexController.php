<?php
/**
 * Created by PhpStorm.
 * User: SonChuoi
 * Date: 12/6/2014
 * Time: 10:28 AM
 */
    class IndexController extends Zend_Controller_Action{
         public function indexAction(){
             $baseurl=$this->_request->getbaseurl();
             $this->view->doctype();
             $this->view->headtitle("Home");
             $this->view->headMeta()->appendName("keyword","Project");
             $this->view->headMeta()->offsetSetName("1","description","test Zend");
             $this->view->headLink()->appendStylesheet($baseurl."/public/plugins/bootstrap-3.2.0-dist/css/bootstrap.min.css");
             $this->view->headLink()->appendStylesheet($baseurl."/public/plugins/bootstrap-3.2.0-dist/css/bootstrap.theme.min.css");
             $this->view->headLink()->appendStylesheet($baseurl."/public/plugins/font-awesome/css/font-awesome.min.css");
             $this->view->headLink()->appendStylesheet($baseurl."/public/css/style.css");

             $this->view->headscript()->appendFile($baseurl."/public/js/main.js","text/javascript");
             $this->view->headscript()->offsetSetFile("1", $baseurl."/public/plugins/jquery-1.11.1.min.js","text/javascript");
             $this->view->headscript()->offsetSetFile("1", $baseurl."/public/plugins/bootstrap-3.2.0-dist/js/bootstrap.js","text/javascript");
        }
    }
?>