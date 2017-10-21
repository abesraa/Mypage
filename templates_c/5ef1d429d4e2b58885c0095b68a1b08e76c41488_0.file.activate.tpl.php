<?php
/* Smarty version 3.1.30, created on 2017-10-17 09:18:22
  from "C:\xampp\htdocs\user\templates\activate.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e5aebe8014c3_51340628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ef1d429d4e2b58885c0095b68a1b08e76c41488' => 
    array (
      0 => 'C:\\xampp\\htdocs\\user\\templates\\activate.tpl',
      1 => 1508224668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e5aebe8014c3_51340628 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Activate Account</title>
</head>
<body>

 <form  method="POST">
 
     أدخل كود التفعيل  <br/>
          <input type="text" id="active" name="active"  />
             
          <input type="submit" value ="تفعيل" name="submit"/>
          <input type="hidden" name="id" value ="<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
" />
              
        </form>
        
         تم ارسال ايميل لتفعيل حسابك   
      
</body>
</html><?php }
}
