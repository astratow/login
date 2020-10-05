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
	if($_POST['username']==''||$_POST['password']==''){
		//both fields need to be filled in
		if($_POST['username']==''){$error['user']='required!';}
		if($_POST['password']==''){$error['pass']='required!';}
		$error['alert']	='Please fill in required fields!';
		
		$input['user']=$_POST['username'];
		$input['pass']=$_POST['password'];
		include('views/v_login.php');
	}else{
		$input['user']=htmlentities($_POST['username'], ENT_QUOTES);
		$input['pass']=htmlentities($_POST['password'], ENT_QUOTES);
		
		//create query
		$pass=md5($input['pass'] . $config['salt']);
		if($stmt=$mysqli->prepare("SELECT * FROM members WHERE username=? AND password=?")){
			$pass=md5($input['pass'] . $config['salt']);
			$stmt->bind_param("ss", $input['user'], $pass);
			$stmt->execute();
			$stmt->store_result();
			
			if($stmt->num_rows>0){
				//set session variable
				$_SESSION['username']=$input['user'];
				
				header("Location: member.php");
			}else{
				//username/password incorrect
				$error['alert'] = "Username or password incorrect";
			}
		}else{
			echo "ERROR: Could not prepare MySQLi statement.";
		}
			
	}	
}else{
	include('views/v_login.php');
}
?>
