<?php
	session_start();
	include('classYamakoko.php');
	
	$name_signin = $_POST['inusername'];
	$pass_signin = $_POST['inpassword'];
	
	$obj = new signin();
	$result = $obj -> sigin_check($name_signin, $pass_signin);  //check if user has correct username and password
	
	if($result == true)
	{
		echo 'yamakoko_loginTop.php';
		$obj = new signin();
		$result = $obj -> signin_session($name_signin, $pass_signin);  //after signin cheching, get id and username and password and usertype, put it in session
		$_SESSION['username'] = $result['username'];
		$_SESSION['id'] = $result['id'];
		$_SESSION['password'] = $result['password'];
		$_SESSION['usertype'] = $result['usertype'];
	}

?>