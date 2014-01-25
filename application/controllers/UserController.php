<?php

class UserController extends Zend_Controller_Action
{
    protected $name;

    public function indexAction ()
	 {
		
	 }
	 

    public function userAction()
    {
    	$this->_helper->viewRenderer->setViewSuffix('phtml');
        $userService=new App_UserService();
       $name=$userService->NewUserNewTestUser();
       
        
		$this->view->name=$name['cname'];
                $this->view->status=$name['initfb'];
                
                
               
       // $msg='Hello Karthikeyan, Welcome';
       //$this->getResponse()->setHttpResponseCode(200);
		
		
    }


}

?>