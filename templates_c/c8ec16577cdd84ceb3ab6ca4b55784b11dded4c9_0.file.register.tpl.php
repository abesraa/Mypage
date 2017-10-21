<?php
/* Smarty version 3.1.30, created on 2017-10-21 16:09:13
  from "C:\xampp\htdocs\Mypage\templates\register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59eb55095e0392_64289974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8ec16577cdd84ceb3ab6ca4b55784b11dded4c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mypage\\templates\\register.tpl',
      1 => 1508594949,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59eb55095e0392_64289974 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Register</title>
 <meta charset="UTF-8">
        <?php echo '<script'; ?>
 type="text/javascript" src="Configration/Config/jqwidgets-ver5.3.2/scripts/jquery-1.11.0.min.js"><?php echo '</script'; ?>
>	
        <!-- add the jQWidgets framework -->
        <?php echo '<script'; ?>
 type="text/javascript" src="Configration/Config/jqwidgets-ver5.3.2/jqwidgets/jqxcore.js"><?php echo '</script'; ?>
>
        <!-- add one or more widgets -->
        <?php echo '<script'; ?>
 type="text/javascript" src="Configration/Config/jqwidgets-ver5.3.2/jqwidgets/jqxexpander.js"><?php echo '</script'; ?>
> 
        <?php echo '<script'; ?>
 type="text/javascript" src="Configration/Config/jqwidgets-ver5.3.2/jqwidgets/jqxvalidator.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="Configration/Config/jqwidgets-ver5.3.2/jqwidgets/jqxbuttons.js"><?php echo '</script'; ?>
>
        <!-- add the jQWidgets base styles and one of the theme stylesheets -->
        <link rel="stylesheet" href="Configration/Config/jqwidgets-ver5.3.2/jqwidgets/styles/jqx.base.css" type="text/css" />
        <link rel="stylesheet" href="Configration/Config/jqwidgets-ver5.3.2/jqwidgets/styles/jqx.darkblue.css" type="text/css" />
        <?php echo '<script'; ?>
 type="text/javascript" src="Configration/Config/jqwidgets-ver5.3.2/jqwidgets/jqxinput.js"><?php echo '</script'; ?>
> 
        <?php echo '<script'; ?>
 type="text/javascript" src="Configration/jscripts/register.js"><?php echo '</script'; ?>
>
    </head>
    <body>
    <center> 
        <h2>Registration</h2>
  
    <form id="testform"  action="register.php" method="post" >
        
            <input type="text" id="usremail" name="usremail0"/>
            </br>
            </br>
            </br>
            </br>
            
            <input type="password" id="usrpass" name="usrpass0"/>
            </br>
            </br>
            </br>
            </br>
            
            <input type="text" id="usrname" name="usrname0"/>
            </br>
            </br>
            </br>
            <input type="submit" value="Register" name = "register" id='register'/>
            </form>
    </center>
    </body>
</html>
<?php }
}
