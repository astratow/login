<?php

//start session / load configs
session_start();
include('includes/config.php');
include('includes/db.php');
//form defaults
$error['alert']='';
$error['user']='';
$error['pass']='';
$input['user']='';
$input['pass']='';

if(isset($_POST['submit'])){
	//process form
}else{
	include('views/v_login.php');
}
?>
