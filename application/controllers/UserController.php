<?php
/**
 * Created by PhpStorm.
 * User: SonChuoi
 * Date: 12/8/2014
 * Time: 3:07 PM
 */
class UserController extends Zend_Controller_Action{
    public function indexAction(){
        $muser=new Model_User;
        $adapter = new Zend_Paginator_Adapter_DbSelect($muser->listall());
        $paginator = new Zend_Paginator($adapter);
        $paginator->setItemCountPerPage(3);
        $paginator->setPageRange(3);
        $currentPage = $this->_request->getParam('page',1);
        $paginator->setCurrentPageNumber($currentPage);
        $this->view->data=$paginator;

        $form=new Form_User;
        $this->view->form=$form;
    }
}
