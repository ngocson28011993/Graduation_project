<?php
/**
 * Created by PhpStorm.
 * User: SonChuoi
 * Date: 12/8/2014
 * Time: 11:12 AM
 */
class ErrorController extends Zend_Controller_Action{
    public function ErrorAction(){
        $errors = $this->_getParam('error_handler');

        switch ($errors->type) {
            case Zend_Controller_Plugin_ErrorHandler::EXCEPTION_NO_ROUTE:
            case Zend_Controller_Plugin_ErrorHandler::EXCEPTION_NO_CONTROLLER:
            case Zend_Controller_Plugin_ErrorHandler::EXCEPTION_NO_ACTION:

                $this->getResponse()->setHttpResponseCode(404);
                $this->view->message = 'Page not found';
                break;
            default:
                // application error
                $this->getResponse()->setHttpResponseCode(500);
                $this->view->message = 'Application error';
                break;
        }

        $this->view->exception = $errors->exception;
        $this->view->request   = $errors->request;
    }
}
