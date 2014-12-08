<?php
/**
 * Created by PhpStorm.
 * User: SonChuoi
 * Date: 12/6/2014
 * Time: 10:28 AM
 */
    class IndexController extends Zend_Controller_Action{
         public function indexAction(){
         $data = array(
              'title' => 'Zend Framework',
              'author'=> 'Kenny',
              'date'  => '20-11-2009',
              'website'=> 'www.QHOnline.Info'
            );
         $this->view->info = $data;
        }
        function demoAction(){
            $this->view->hello="Hello Zend Framework - QHOnline.Info";
        }
        function testAction(){
            $baseurl=$this->_request->getbaseurl();
            $this->view->doctype();
            $this->view->headtitle("cuchuoi - Chapter 3: Zend Framework");
            $this->view->headMeta()->appendName("keyword","Zend Framework,Codeigniter,PHP Framework");
            $this->view->headMeta()->offsetSetName("1","description","test Zend");
            $this->view->headLink()->appendStylesheet($baseurl."/public/css/style.css");
            $this->view->headscript()->appendFile($baseurl."/public/js/js.js","text/javascript");
//            $this->view->headscript()->offsetSetFile("1",$baseurl."/public/js/test2.js","text/javascrip");
        }
    }
?>