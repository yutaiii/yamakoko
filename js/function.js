/* home.php のｊｓここから*/
	$(document).ready(function(){
		
		$('#header_nanzan_alpine').mouseover(function(){
			
			$('.home_main-container').css('background-image','url(../pic/IMG_7990.jpg)'); 
			$('.home_leftContent').css('color','red');
			
		});
		
		$('#header_nanzan_alpine').mouseout(function(){
			
			$('.home_main-container').css("background-image", "url(../pic/yamakoko_pic_main.jpg)");
			$('.home_leftContent').css('color','black');
			
		});
		
		$('#home_loginBtn').click(function(){
			
			var usernamev = $('#home_loginUsername').val();
			var passwordv = $('#home_loginPassword').val();
			
			var userlength = usernamev.length;
			var passlength = passwordv.length;
			
			if(userlength < 4)
			{
				$('#home_errorMessageUsername').text("＊At least more than 4 letters.");
				return false;
			}
			else
			{
				$('#home_errorMessageUsername').empty();;
			}
			
			if(passlength < 4)
			{
				$('#home_errorMessagePassword').text("＊At least more than 4 letters.");
				return false;
			}
			else
			{
				$('#home_errorMessagePassword').empty();;
			}
			
			
			signin(usernamev, passwordv);
			
		});
		
		
	});

/* home.php のｊｓここまで*/

/* nalpine.phpのjsここから*/

	$(document).ready(function(){
		
		$('.nalpine_smallImageCSS').mouseover(function(){
			
			$('.nalpine_BigImgCss').attr('src', $(this).attr('src'));
			var picname = $(this).attr('name');
			
			if(picname == 'tatepic')
			{
				$('.nalpine_bigImageContainer').css('width','30%');
				$('.nalpine_bigImageContainer').css('margin-left','35%');
			}
			
			else if(picname == 'tatepic50')
			{
				$('.nalpine_bigImageContainer').css('width','50%');
				$('.nalpine_bigImageContainer').css('margin-left','25%');
			}
			
			else
			{
				$('.nalpine_bigImageContainer').css('width','60%');
				$('.nalpine_bigImageContainer').css('margin-left','20%');
			}
			
		});
		
		/*$('.nalpine_memberGallerySmall').mouseover(function(){
			
			$(this).animate('{background-color : green}','slow');
			
		});*/
		
		$('#nalpine_contactSubmitButton').click(function(){
			
			var cname = $('#nalpine_contactName').val();
			var nameLength = cname.length;
			
			var cemail = $('#nalpine_contactEmail').val();
			var emailLength = cemail.length;
			
			var ccomment = $('#nalpine_contactTextArea').val();
			var comLength = ccomment.length;
			
			
			if(nameLength < 4)
			{
				$('#nalpine_showNameError').text("Name shold be more than 4 letters!");
				return false;
			}
			else
			{
				$('#nalpine_showNameError').empty();
			}
			
			
			if(emailLength < 4)
			{
				$('#nalpine_showEmailError').text("Email shold be more than 4 letters!");
				return false;
			}
			else
			{
				$('#nalpine_showEmailError').empty();
			}
			

			if(comLength < 1)
			{
				$('#nalpine_showCommentError').text("Plese write a comment!");
				return false;
			}
			else
			{
				$('#nalpine_showCommentError').empty();
			}
			
			contect_send(cname, cemail, ccomment);
			
		});
		
		/* nalpine.phpのjsここまで*/
		
		/* signin.phpのcssここから */
		
		$('#signup_signupButton').click(function(){
			
			var sname = $('#signup_username').val();
			var nameLength = sname.length;
			
			var semail = $('#signup_email').val();
			var emailLength = semail.length;
			
			var spassword = $('#signup_password').val();
			var passLength = spassword.length;
			
			var cPassword = $('#signup_cPassword').val();
			var cPassLength = cPassword.length;
			
			
			if(nameLength < 4)
			{
				$('#signup_signupUsername').text("Username shold be more than 4 letters!");
				return false;
			}
			else
			{
				$('#signup_signupUsername').empty();
			}
			
			
			if(emailLength < 4)
			{
				$('#signup_signupEmail').text("Email should be more than 4 letters!");
				return false;
			}
			else
			{
				$('#signup_signupEmail').empty();
			}
			
			if(passLength < 4)
			{
				$('#signup_signupPassword').text("Password should be more than 4 letters!");
				return false;
			}
			else
			{
				$('#signup_signupPassword').empty();
			}
			
			if(cPassLength < 4)
			{
				$('#signup_signupConfirmP').text("Confirm Password should be more than 4 letters!");
				return false;
			}
			else
			{
				$('#signup_signupConfirmP').empty();
			}
			
			if(spassword != cPassword)
			{
				$('#signup_signupPassword').text("Password and Confirm Password should be same!");
				$('#signup_signupConfirmP').text("Password and Confirm Password should be same!");
				return false;
			}
			else
			{
				$('#signup_signupPassword').empty();
				$('#signup_signupConfirmP').empty();
			}
			
			signup(sname, semail, spassword);
			
		});
		
		/* signin.phpのcssここまで */

		/* contact_send_db.phpのjsここから*/
		
		$(document).on('click','#csdb_contactSubmitButton',function(){
		
			var cname = $('#csdb_contactName').val();
			var nameLength = cname.length;
			
			var cemail = $('#csdb_contactEmail').val();
			var emailLength = cemail.length;
			
			var ccomment = $('#csdb_contactTextArea').val();
			var comLength = ccomment.length;
			
			if(nameLength < 4)
			{
				$('#csdb_showNameError').text("Name shold be more than 4 letters!");
				return false;
			}
			else
			{
				$('#csdb_showNameError').empty();
			}
			
			
			if(emailLength < 4)
			{
				$('#csdb_showEmailError').text("Email shold be more than 4 letters!");
				return false;
			}
			else
			{
				$('#csdb_showEmailError').empty();
			}
			

			if(comLength < 1)
			{
				$('#csdb_showCommentError').text("Plese write a comment!");
				return false;
			}
			else
			{
				$('#csdb_showCommentError').empty();
			}	
			
			insert_contact(cname, cemail, ccomment);
			
		});
		
		/* product.phpのjsここから*/
		$('.prodect_productPic').click(function(){
			
			var iid = $(this).attr('iid');
			product_id(iid);
			
		});
		
	});
	
	
	
	/*signinのajax*/
	function signin(inusername, inpassword)
	{
		$.ajax({
			type : "POST",
			url : "signinControler.php",
			data : {inusername : inusername, inpassword : inpassword},
			dataType : "text",
			beforeSend : function()
			{
				$('#home_loginBtn').attr('value', 'processing');
			},
			success : function(response)
			{
				if(response == 'yamakoko_loginTop.php')
				{
				//alert(response);
				 window.location.href = response;
				}
				else
				{
					$('#home_errorMessageUsername').text('Username or Password is wrong. Try Again.');
				}
			}
			
		});
	}
	
	function signup(sname, semail, spassword)
	{
		$.ajax({
			type : "POST",
			url : "yamakoko_signupTnanks.php",
			data : {sname : sname, semail : semail, spassword : spassword},
			dataType : "text",
			beforeSend : function()
			{
				$('#signup_signupButton').attr('value', 'processing');
			},
			success : function(response)
			{
				$('.signup_main').html(response);
			}
		});
	}
	
	function contect_send(cname, cemail, ccomment)
	{
		$.ajax({
			
			type : "POST",
			url : "contact_send_db.php",
			data : {cname : cname, cemail : cemail, ccomment : ccomment},
			dataType : "text",
			beforeSend : function ()
			{
				$('#nalpine_contactSubmitButton').attr('value', 'processing');
			},
			success : function(response)
			{
				$('.nalpine_main').html(response);
			}
		});
		
	}

	
	function insert_contact(names, emails, comments)
	{
		$.ajax({
			
			type : "POST",
			url : "contactThanks.php",
			data : {names : names, emails : emails, comments : comments},
			dataType : "text",
			beforeSend : function()
			{
				$('#csdb_contactSubmitButton').attr('value', 'processing');
			},
			success : function(response)
			{
				$('#csdb_contactSubmitButton').attr('value', 'success');
				$('.csdb_main').html(response);
			}
		});
	}
	
	// function product_id(iid)
	// {
		// $.ajax({
			// type : "POST",
			// url : "",
			// data : {iid : iid},
			// dataType : "test",
			// success : function(response)
			// {
				
			// }
		// });
	// }
	



