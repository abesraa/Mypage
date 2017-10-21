<?php

include('Configration/Config/smarty/libs/Smarty.class.php');
require 'User.php';
$smarty = new Smarty;

if (!empty($_POST['usremail0']) && !empty($_POST['usrpass0']) && !empty($_POST['usrname0']))
{
    $email= $_POST['usremail0'];
    $password=$_POST['usrpass0'];
    $username= $_POST['usrname0'];
    $user = new User($email,$password);
    $email_valid=  $user-> check_email_valid($email);
    if($email_valid) {
        $email_Notexist =$user ->check_email_exist($email);
        if ($email_Notexist)
        {
         $result = $user -> register($email,$password,$username);
            if ($result)
            {
             echo '<script> alert ("successful registration ") </script>';
              session_start();
              $_SESSION['user']=$result;
              header("location: main.php");
            }
            
        } else {
            }echo '<script> alert ("Email registered Before ") </script>';
        }
 else {
     echo '<script> alert ("email is not wirte in righ way ") </script> ';
        }
} 

$smarty->display('register.tpl');