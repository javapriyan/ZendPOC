<?php

class RepController extends Zend_Controller_Action
{

 

    public function repAction()
    {
    	$this->_helper->viewRenderer->setViewSuffix('phtml');
       // $msg='Hello Karthikeyan, Welcome';
       //$this->getResponse()->setHttpResponseCode(200);
		$this->view->message='i have called';
		
    }


}

