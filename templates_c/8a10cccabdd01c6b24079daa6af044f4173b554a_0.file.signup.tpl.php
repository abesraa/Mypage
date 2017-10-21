<?php
/* Smarty version 3.1.30, created on 2017-10-17 21:42:28
  from "C:\xampp\htdocs\Mypage\templates\signup.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e65d24eb5228_90761952',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a10cccabdd01c6b24079daa6af044f4173b554a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mypage\\templates\\signup.tpl',
      1 => 1508269345,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e65d24eb5228_90761952 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>التسجيل</title>
    </head>
    <body>
        <h2>التسجيل</h2>
    <form  action="signup.php" method="post" >
        Email
            <input type="text" id="usremail" name="usremail0"/>
            </br>
            </br>
            Password
            <input type="password" id="usrpass" name="usrpass0"/>
            </br>
            </br>
            Username
            <input type="text" id="usrname" name="usrname0"/>
            </br>
            </br>
            <input type="submit" value="Sign Up" name = "signup" id='signup'/>
            </form>
    </body>
</html>
<?php }
}
