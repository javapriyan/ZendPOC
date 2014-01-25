<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of App_UserService
 *
 * @author selvakumaran
 */
class App_UserService extends Zend_Db_Table_Abstract {

    public $db;
    protected $users;
    


    function __construct() {
        
        $options=array(
            'host'      =>  'localhost',
            'username'  =>  'postgres',
            'password'  =>  'mom',
            'dbname'    =>  'practo'
            
        );
        
       $this->db=Zend_Db::factory('PDO_PGSQL',$options);
       Zend_Db_Table_Abstract::setDefaultAdapter($this->db);
       $this->users=new models_DbConn();
       }

       public function NewUserNewTestUser()
       {
           
          /* $select= 'SELECT cname FROM testdb WHERE cid = 200';
          $stmt = $this->users->_fetch();
        return $stmt['cname'];*/
           $select= 'cid = 1';
 
           $ans=$this->users->fetchRow($select);
           return $ans;
           
           
       }
       
       //If customer is Happy
       
       public function SetFB()
       {
           
          
           $select= 'cid = 1';
           $val=array('initfb'=>TRUE);
           $happy=array('happy'=>TRUE);
 
           $this->users->update($val,$select);
           $this->users->update($happy,$select);
           
           
       }
       
       //if customer is not happy
       
       public function SetFBN()
       {
           
          
           $select= 'cid = 1';
           $val=array('initfb'=>TRUE);
           $happy=array('happy'=> 'false');
           $this->users->update($happy,$select);
           $this->users->update($val,$select);
           
           
       }
       
       public function IsheHappy()
       {
          $select = $this->db->select()
                  ->from(array("testdb"), array('cid', 'happy'));
          $result = $this->db->fetchPairs($select);
          //$this->users->select('cid','happy');
          //$data=array();
         // $result=$this->users->fetchAll();
          
          /*foreach($result as $row) {
              $data_push($row['cid'].'=>'.$row['happy']);
              echo "Customer " . $row['cid'] . PHP_EOL . 'is';
              if($row['happy']) echo 'Happy'; else 'Unhappy'.PHP_EOL;
              
          }*/
          
              
           return $result;
       }
       
       
       
       
       public function SetFBStory($story)
       {
           
          
          $select= 'cid = 1';
           $val=array('feedback'=>$story);
            $this->users->update($val,$select);
           $vals=array('initfb'=>TRUE);
            $this->users->update($vals,$select);
       }
}

?>
