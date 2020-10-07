<?php
//start session
session_start();
session_destroy();

//display view
include("view/v_loggedout.php");
?>