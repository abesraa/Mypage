<?php
/* Smarty version 3.1.30, created on 2017-10-17 10:32:23
  from "C:\xampp\htdocs\user\templates\register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e5c0171e39d2_60788519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4a2fc5ef199431cc021fb3f731c99833eda8138' => 
    array (
      0 => 'C:\\xampp\\htdocs\\user\\templates\\register.tpl',
      1 => 1508228373,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e5c0171e39d2_60788519 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
 <h1>التسجيل</h1>
 <form  method="POST">
   
           اسم الدخول  
             <input type="text" id="name" name="name"   />
            <br/>
             <br/>
            البريد الالكتروني</td>  
            <input type="email" id="email" name="email"   />
              <br/>
               <br/>
         
           كلمة المرور</td>  
              <input type="password" id="pass" name="pass" />
              <br/>
         <br/>
              
            <input type="submit" name="submit" value="تسجيل"/>
             
</form>

</body>
</html><?php }
}
