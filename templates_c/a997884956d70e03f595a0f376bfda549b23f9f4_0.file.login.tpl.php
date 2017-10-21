<?php
/* Smarty version 3.1.30, created on 2017-10-17 09:56:03
  from "C:\xampp\htdocs\user\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e5b79315dd46_79696379',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a997884956d70e03f595a0f376bfda549b23f9f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\user\\templates\\login.tpl',
      1 => 1508226811,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e5b79315dd46_79696379 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
    
<form method="POST">
       
            <h5>البريد الالكتروني</h5>  
             <input type="email" id ="email" name="email"/>
            
             <h5> كلمة المرور</h5>  
              <input type="password" id="pass" name="pass"/>
             
               <br/><br/>
            <input type="submit" name="submit" value="دحول"/>
        </form>
</body>
</html><?php }
}
