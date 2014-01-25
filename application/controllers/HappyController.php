<?php

class HappyController extends Zend_Controller_Action
{

    public function init()
    {
        
    }

    public function happyAction()
    {
        $userService=new App_UserService();
       $result=(array)$userService->IsheHappy();
       //print_r($result);die;
       
       $this->view->result=$result;
       
    }
	
	

}

?>