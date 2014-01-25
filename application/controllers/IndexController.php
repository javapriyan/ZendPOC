<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        
    }

    public function indexAction()
    {
        $rq=$this->_request;
       $story= $rq->getPost('fbstory');
        if($story)
        {
            
            $userService=new App_UserService();
            $userService->SetFBStory($story);
            
        }
        
    }
	
	

}

?>