<?php
// start session
session_start();
include("includes/config.php");

//check if user is logged in
if(!isset($_SESSION['username'])){
	header("Location: login.php");
}
//display view
include("views/v_members.php");
?>