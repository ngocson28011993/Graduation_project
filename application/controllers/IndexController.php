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
             $this->view->headLink()->appendStylesheet($baseurl."/public/css/product.less");
             $this->view->headLink()->appendStylesheet($baseurl."/public/css/style.css");

             $this->view->headscript()->appendFile($baseurl."/public/js/main.js","text/javascript");
        }
    }
?>