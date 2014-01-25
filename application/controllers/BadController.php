<?php

class BadController extends Zend_Controller_Action
{
    
    public function init()
    {
       
    }
    
    public function badAction()
    {
      
         $userService=new App_UserService();
       $userService->SetFBN();
        
        
    }
}

?>
