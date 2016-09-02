<?php

	include('classYamakoko.php');
	
	$sname = $_POST['sname'];
	$semail = $_POST['semail'];
	$spassword = $_POST['spassword'];
	
	
	$obj = new signup();
	$result = $obj -> signup_sendInfo($sname, $semail, $spassword);
		
	if($result == true)
	{
		
	}

?>
	<div class="signupThanks_main">
	
		<div class="signupThanks_imageContainer">
		
			<div class="signupThanks_imageControler">
				<img class="signupThanksImage" src="pic/signupThanksImg.png">
			</div>
			
			<div class="signupThanks_massege">	
				<h1 class="signupThanks_massegeFont">Thank you <?php echo $sname ?> for signing up!</h1>
			</div>
			
			<div>
				<a href="yamakoko_home.php"><center><input class="signupThanks_backButton"type="button" value="Back to home"></center></a>
			</div>
		
		</div>
	
	</div>
