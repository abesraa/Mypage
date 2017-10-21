<?php
include('Configration/Config/smarty/libs/Smarty.class.php');
require 'User.php';
$smarty = new Smarty;

session_start();
if (isset($_SESSION['user'])){
    session_destroy();
    
}
if (isset($_POST['login']))
{
    if (!empty ($_POST['usremail0']) && !empty ($_POST['usrpass0'] ))
    {
       $email= $_POST['usremail0'];     
          $password=  $_POST['usrpass0'];
            
         $user = new User ($email,$password);
         $result = $user-> login($email,$password);
          if ($result) 
          {   
              $_SESSION['user']=$result;
          header("Location:main.php");
         
          }  
                
    } else{   echo '<script>alert("Invalid user")</script>';}   
} 

  if (isset($_POST['register'])) 
  {
 header("Location:register.php");
  }
   
  $smarty->display('index.tpl');