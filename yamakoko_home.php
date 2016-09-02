<?php
	include('parts/yamakoko_head.php');
	include('parts/yamakoko_header.php');
?>
		
		<div class="home_main-container">
			
			<div class="home_mainLeft">
				<div class="home_leftContent">
					<h1>Yamakoko -</br> provides you all </br> information of mountains!</h1>
				</div>
			</div>
			
			<div class="home_mainRight">
				
				<div class="home_rightLogin">
					
					<div class="home_loginRow">
						<h3>LOGIN</h3>
					</div>
					
					<div class="home_loginRowInput home_loginRowMargin">
						<h4 class="home_loginRowInputText">Username</h4><span id="home_errorMessageUsername" class="home_errorMessage"></span>
						<input id="home_loginUsername"class="home_loginRowInputLayout" type="text" placeholder="Username">
					</div>
					
					<div class="home_loginRowInput home_loginRowMargin2">
						<h4 class="home_loginRowInputText">Password</h4><span id="home_errorMessagePassword" class="home_errorMessage"></span>
						<input id="home_loginPassword" class="home_loginRowInputLayout" type="password" placeholder="Password">
					</div>
					
					<div class="home_loginRowInput home_loginRowMargin2">
						<input id="home_loginBtn" class="home_loginButton" type="submit" value="Log in">
					</div>
					
					<hr class="home_loginHr">
					
					<div class="home_loginRowInputCreateA home_loginRowMargin3">
						<h4>Do you have your account?</h4>
					</div>
					
					<div class="home_loginRowInputCreateA">
						<a href="yamakoko_signup.php"><input class="home_loginButtonCreateA" type="Button" value="Create an account"></a>
					</div>
					
					
				</div>
				
			</div>
			
		</div>
		
<?php
	include('parts/yamakoko_footer.php');
?>