<?php
	include('parts/yamakoko_head.php');
	include('parts/yamakoko_header.php');
?>

	<div class="signup_main">
	
		<div class="signup_messege">
			<h1 class="signup_messegeH1">Let's sign up your account!</h1>
		</div>
	
		<div class="signup_resister"> 
			
			<div class="signup_resisterMain">
				
				<div class="signup_resisterLeft">
					
					<div class="sighup_resisterRowLeft">
						<p class="sighup_resisterRowLeftP">Username</p>
						<span id="signup_signupUsername" class="signup_showError"></span>
					</div>
					
					<div class="sighup_resisterRowLeft">
						<p class="sighup_resisterRowLeftP">Email Address</p>
						<span id="signup_signupEmail" class="signup_showError"></span>
					</div>
					
					<div class="sighup_resisterRowLeft">
						<p class="sighup_resisterRowLeftP">Password</p>
						<span id="signup_signupPassword" class="signup_showError"></span>
					</div>
					
					<div class="sighup_resisterRowLeft">
						<p class="sighup_resisterRowLeftP">Confirm Password</p>
						<span id="signup_signupConfirmP" class="signup_showError"></span>
					</div>
					
				</div>
				
				<div class="signup_resisterRight">
					
					<div class="sighup_resisterRowRight">
						<input id="signup_username" class="sighup_resisterRowRightInput" type="text" placeholder="Username">
					</div>
					
					<div class="sighup_resisterRowRight">
						<input id="signup_email" class="sighup_resisterRowRightInput" type="text" placeholder="Email Address">
					</div>
					
					<div class="sighup_resisterRowRight">
						<input id="signup_password" class="sighup_resisterRowRightInput" type="password" placeholder="Password">
					</div>
					
					<div class="sighup_resisterRowRight">
						<input id="signup_cPassword" class="sighup_resisterRowRightInput" type="password" placeholder="Confirm Password">
					</div>
					
				</div>
				
			</div>
			
		</div>
		
		<div>
			<center><input id="signup_signupButton" class="signup_signupButton" type="button" value="Sign up"></center>
		</div>
	
	</div>

<?php
	include('parts/yamakoko_footer.php');
?>