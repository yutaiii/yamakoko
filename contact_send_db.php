<!-- maindiv をajax で取り替えるだけなので、includeは必要なし -->

	<?php
	
		
			$name = $_POST['cname'];
			$email = $_POST['cemail'];
			$comment = $_POST['ccomment'];
			
			//$obj = new contact();
			//$obj -> send_contact();
		
		?>
	
	<div class="csdb_main">
	
		<div class="csdb_confirmDiv">
			<h2 class="csdb_confirmDivH2">Are you sure you send this? Check again.</h2>
		</div>
		
		<div class="csdb_contactUs">
		
			<div class="csdb_contactForm">
			
				<div class="csdb_contactFormLeft">
				
					<div class="csdb_contacLeftRowS">
						<p class="csdb_contactCategoryNameS">Name</p>
						<span id="csdb_showNameError" class="csdb_showErrorLayout"></span>
					</div>
				
					<div class="csdb_contacLeftRowS">
						<p class="csdb_contactCategoryNameS">Email Address</p>
						<span id="csdb_showEmailError" class="csdb_showErrorLayout"></span>
					</div>
					
					<div class="csdb_contacLeftRowB">
						<p class="csdb_contactCategoryNameB">Comments</p>
						<span id="csdb_showCommentError" class="csdb_showErrorLayout"></span>
					</div>
				
				</div>
				
				<div class="csdb_divForBorder">  <!--  borderの代わりのdiv -->
				</div>
			
				<div class="csdb_contactFormRight">
					
			
						<div class="csdb_contactRightRowS">
							<?php
								echo '<input id="csdb_contactName"  class="csdb_contactInputText" type="text" placeholder="Name" value="'.$name.'">';
							?>
							
						</div>
						
						<div class="csdb_contactRightRowS">
							<?php
								echo '<input id="csdb_contactEmail" class="csdb_contactInputText" type="text" placeholder="Email" value="'.$email.'">';
							?>
							
						</div>
						
						<div class="csdb_contactRightRowR">
							<textarea id="csdb_contactTextArea" class="csdb_contactTextArea" rows="9" cols="61" ><?php echo $comment; ?></textarea>
						</div>
					
						
				</div>
			
			</div>
			
			<div class="csdb_contactSubmitButton">
				<center><input id="csdb_contactSubmitButton" class="csdb_contactSubmitButtonLayout" type="button" value="Submit">
						<input class="csdb_contactBackButtonLayout" type="button" value="back">
				</center>
			</div>
			
		
		</div>
		
	
	<div>

