<?php

class OkController extends Zend_Controller_Action
{
    
    public function init()
    {
       
    }
    
    public function okAction()
    {
        $this->_helper->viewRenderer->setViewSuffix('phtml');
        $userService=new App_UserService();
       $userService->SetFB();
       
        
    }
}

?>
