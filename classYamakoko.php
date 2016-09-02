<?php
	
	
	class contact 
	{
		
		function send_contact($name,$email,$comment)
		{	
			$server = 'localhost';
			$username = 'root';
			$password = '';
			$database = 'yamakoko';
	
			$con = mysqli_connect($server, $username, $password);
	
			$db = mysqli_select_db($con, $database);
			
			$query = "insert into contactus values('', '".$name."', '".$email."', '".$comment."')";
			
			$result = mysqli_query($con, $query);
			
			if($result)
			{
				return true;
			}
			else
			{
				return false;
			}
			
			
		}
	}
	
	class signup
	{
		
		function signup_sendInfo($name, $email, $spassword)
		{	
			$server = 'localhost';
			$username = 'root';
			$password = '';
			$database = 'yamakoko';
	
			$con = mysqli_connect($server, $username, $password);
	
			$db = mysqli_select_db($con, $database);
			
			$query = "insert into userinfo values('', '".$name."', '".$email."', '".$spassword."', 'cus')";
			
			$result = mysqli_query($con, $query);
			
			if($result)
			{
				return true;
			}
			else
			{
				return false;
			}
			
		}
		
	}
	
	
?>