<?php
	session_start();
	include('parts/yamakoko_head.php');
	if(isset($_SESSION['username']))
	{
	include('parts/yamakoko_header.php');
?>

	
	<div class="loginTop_main">
		Thank you for sign up!
	</div>
	

<?php
	include('parts/yamakoko_footer.php');
	}
	else
	{
		echo '<script type="text/javascript"> window.location = "yamakoko_home.php" </script>';
	}
?>
	