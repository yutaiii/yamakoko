<?php
	session_start();
	session_destroy();
	 include('parts/yamakoko_head.php');
	if(isset($_SESSION['username']))
	{
	include('parts/yamakoko_header.php');

?>
	<div class="logout_main">
		
		<div class="logout_message">
			<p class="logout_messageP">See you soon!</p>
			<center><a href="yamakoko_home.php"><input class="logout_backButton"type="button" value="Back to home"></a></center>
		</div>
		
	</div>

<?php
	include('parts/yamakoko_footer.php');
	}
	else
	{
		echo '<script type="text/javascript"> window.location = "yamakoko_home.php" </script>';
	}
?>