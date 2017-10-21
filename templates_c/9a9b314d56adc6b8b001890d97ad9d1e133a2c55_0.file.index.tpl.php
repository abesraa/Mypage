<?php
/* Smarty version 3.1.30, created on 2017-10-21 16:11:25
  from "C:\xampp\htdocs\Mypage\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59eb558d502ec9_90821596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a9b314d56adc6b8b001890d97ad9d1e133a2c55' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mypage\\templates\\index.tpl',
      1 => 1508595080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59eb558d502ec9_90821596 (Smarty_Internal_Template $_smarty_tpl) {
?>

<html>
<head>
    <!-- add the jQuery script -->
    <?php echo '<script'; ?>
 type="text/javascript" src="Configration/Config/jqwidgets-ver5.3.2/scripts/jquery-1.11.0.min.js"><?php echo '</script'; ?>
>	
    <!-- add the jQWidgets framework -->
    <?php echo '<script'; ?>
 type="text/javascript" src="Configration/Config/jqwidgets-ver5.3.2/jqwidgets/jqxcore.js"><?php echo '</script'; ?>
>
    <!-- add one or more widgets -->
    <?php echo '<script'; ?>
 type="text/javascript" src="Configration/Config/jqwidgets-ver5.3.2/jqwidgets/jqxbuttons.js"><?php echo '</script'; ?>
>
    <!-- add the jQWidgets base styles and one of the theme stylesheets -->
    <link rel="stylesheet" href="Configration/Config/jqwidgets-ver5.3.2/jqwidgets/styles/jqx.base.css" type="text/css" />
    <link rel="stylesheet" href="Configration/Config/jqwidgets-ver5.3.2/jqwidgets/styles/jqx.shinyblack.css" type="text/css" />
    <?php echo '<script'; ?>
 type="text/javascript" src="Configration/Config/jqwidgets-ver5.3.2/jqwidgets/jqxinput.js"><?php echo '</script'; ?>
> 
        <?php echo '<script'; ?>
 type="text/javascript" src="Configration/jscripts/index.js"><?php echo '</script'; ?>
>
</head>
    <body>
    <center>
   <form id="testform" action="index.php" method="post" >
            <input type="text" id="usremail" name="usremail0"/>
            </br>
            </br>
            <input type="password" id="usrpass" name="usrpass0"/>
            </br>
            </br>
            <input type="submit" value="Login"  name = "login" id='login'/> 
            <input type="submit" value="New Member" name = "register" id='register'/>
            </form>
    </center>
    </body>
</html><?php }
}
