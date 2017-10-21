<?php
require 'User.php';

class userTest extends \PHPUnit_Framework_TestCase
{
    
   public function tes_tlogin() 
   {
    $user = new User(NULL,NULL);   
       $email="abc@def.com";
       $password="321321";
       //correct login
       $result = $user->login($email, $password);
       $userid = $this->ID;
       $this->assertEquals($userid,$result);
       
       //invalid email
       
       $result= $user->login("abcc@def.com",$password);
       $this->assertEquals(false,$result);
       
       //invalid pass
       
       $result= $user->login($email,"1234");
       $this->assertEquals(false,$result);
       
        $result= $user->login(NULL,NULL);
       $this->assertEquals(false,$result);
         
   }
   
   function test_check_email_valid()
   {
         //correct info
    $user =new User(NULL,NULL);
    $email="esraa--1410@gmail.com";
    
    $result=$user->check_email_valid($email);
    $this->assertEquals(TRUE,$result);
    
    //invalid email
     $result=$user->check_email_valid("esraa--1410gmail.com");
    $this->assertEquals(false,$result);
    $result=$user->check_email_valid("esraa--1410@");
    $this->assertEquals(false,$result);
    
    //no email
    $result=$user->check_email_valid(NULL);
    $this->assertEquals(false,$result);
       
   }
   
    function test_check_email_exist()
   
    {
     $email ="esraa--1410@hotmail.com";
     $user=new User(NULL,NULL);
     $result=$user->check_email_exist($email);
     //email not exist(correct info)
     $this->assertEquals(TRUE,$result);
     
     //email exist (invalid info)
     $result=$user->check_email_exist($email);
        $this->assertEquals(FALSE,$result);
        
        //no email
        $result=$user->check_email_exist(NULL);
        $this->assertEquals(FALSE,$result);
    }
   
   function test_register()
   {
      $email="abc@def.com";
      $password="321321";
      $username="esraa";
      $user = new User(NULL,NULL);
      //correct info
      $result = $user->register($email, $password, $username);
      $regresult= R::getRow( 'SELECT * FROM user where email="'.$email.'"' );
      $userid = $regresult['id'];
      $this->assertEquals($userid,$result);
      
      //no email
      $result = $user->register(NULL, $password, $username);
         $this->assertEquals(FALSE,$result);
         
         //no password
      $result = $user->register($email, NULL, $username);
         $this->assertEquals(FALSE,$result);
         
          //no username
      $result = $user->register($email, $password, NULL);
         $this->assertEquals(FALSE,$result);
         
          //no info
      $result = $user->register(NULL, NULL, NULL);
         $this->assertEquals(FALSE,$result);
         
          //same email
      $result = $user->register($email, $password, $username);
         $this->assertEquals(FALSE,$result);
   }
   
  
    
}

