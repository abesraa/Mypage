<!DOCTYPE html>
<html lang="en">
<head>
    <title> Register</title>
 <meta charset="UTF-8">
        <script type="text/javascript" src="Configration/Config/jqwidgets-ver5.3.2/scripts/jquery-1.11.0.min.js"></script>	
        <!-- add the jQWidgets framework -->
        <script type="text/javascript" src="Configration/Config/jqwidgets-ver5.3.2/jqwidgets/jqxcore.js"></script>
        <!-- add one or more widgets -->
        <script type="text/javascript" src="Configration/Config/jqwidgets-ver5.3.2/jqwidgets/jqxexpander.js"></script> 
        <script type="text/javascript" src="Configration/Config/jqwidgets-ver5.3.2/jqwidgets/jqxvalidator.js"></script>
        <script type="text/javascript" src="Configration/Config/jqwidgets-ver5.3.2/jqwidgets/jqxbuttons.js"></script>
        <!-- add the jQWidgets base styles and one of the theme stylesheets -->
        <link rel="stylesheet" href="Configration/Config/jqwidgets-ver5.3.2/jqwidgets/styles/jqx.base.css" type="text/css" />
        <link rel="stylesheet" href="Configration/Config/jqwidgets-ver5.3.2/jqwidgets/styles/jqx.darkblue.css" type="text/css" />
        <script type="text/javascript" src="Configration/Config/jqwidgets-ver5.3.2/jqwidgets/jqxinput.js"></script> 
        <script type="text/javascript" src="Configration/jscripts/register.js"></script>
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
