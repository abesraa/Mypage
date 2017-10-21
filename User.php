<?php

class User {
    
    var $Name;
    var $password;
    var $Email;
    Var $ID;
    
    function __construct($usremail,$usrpass) 
            {
        
   require_once  'connect.php';
    $this->Email=$usremail; 
    $this->Password=$usrpass;
    } 
    
    function login($email,$password)
    {
      $isconnected = R::testConnection();  
        if ($isconnected)
        {
          $q= 'SELECT * FROM user where email ="'.$email.'"';
            $user = R::getRow($q);
            
            if($user)   
            {
             if ($user['password']== $password)
             {
               $this-> ID =$user['id'];
             $this-> Name =$user['name'];
             
                return $this-> ID;
                
            }else return false;
            
            }else return false;
            
        
        
    }else
    {
        echo "problem in connection";
    }
    }
    
    
   function check_email_valid($email)
   {
      if(filter_var($email,FILTER_VALIDATE_EMAIL)) 
      {
       
       return true;
          
   }
   else
       return false;
   }
   
   function check_email_exist($email)
   
  {
    $isConnected = R::testConnection();
    if($isConnected)
    {
        
            $allemails= R::getAll( 'SELECT email FROM user' );
            for($i=0;$i<count($allemails);$i++)
            {
                if($email===$allemails[$i]['email'])
                {
 
                   return false;
                }
            }  
            if(!empty($email))
                return true;
            else 
                return false;
        }
    else 
    {
        echo '<script>alert("There are problem with db connection!")</script>';
        return false;
    }
}
    
  function register($email,$password,$username)  
  {
     $isConnected = R::testConnection();
    if($isConnected) 
        
    {
            $newuser= R::dispense('user');
            $newuser->name =$username;
            $newuser->password =$password;
            $newuser->email =$email;
            $this->ID= R::store($newuser);
            if ($this->ID)
                return $this->ID;
            else return false;
         
  }else{
          echo '<script> alert ("There is error in connection ") </script> ';
          return false;
      }
    
    
    
      
}
}

