<?php
/**
 * Created by PhpStorm.
 * User: SonChuoi
 * Date: 11/28/2014
 * Time: 1:33 PM
 */
    class UserController extends Zend_Controller_Action {
        public function IndexAction(){
            $muser = new Model_User;
            $paginator = Zend_paginator::factory($muser->listall());
            $paginator->setItemCountPerPage(3);
            $paginator->setPageRange(3);
            $currentPage = $this->_request->getParam('page',1);
            $paginator->setCurrentPageNumber($currentPage);
            $this->view->data=$paginator;
        }
    }