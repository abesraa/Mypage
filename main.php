<?php
include('Configration/Config/smarty/libs/Smarty.class.php');
require 'User.php';

$smarty = new Smarty;
session_start();


$smarty->display('main.tpl');
