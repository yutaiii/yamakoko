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
	
	class signin
	{
		function sigin_check($name, $pass)
		{
			$server = 'localhost';
			$username = 'root';
			$password = '';
			$database = 'yamakoko';
	
			$con = mysqli_connect($server, $username, $password);
	
			$db = mysqli_select_db($con, $database);
			
			$query = "select * from userinfo where username = '".$name."' and password = '".$pass."'";
			
			$result = mysqli_query($con, $query);
			
			$num = mysqli_num_rows($result);
			
			if($num > 0)
			{
				return true;
			}
			else
			{
				return false;
			}
			
		}
		
		function signin_session($name, $pass)
		{
			$server = 'localhost';
			$username = 'root';
			$password = '';
			$database = 'yamakoko';
	
			$con = mysqli_connect($server, $username, $password);
	
			$db = mysqli_select_db($con, $database);
			
			$query = "select * from userinfo where username = '".$name."' and password = '".$pass."'";
			
			$result = mysqli_query($con, $query);
			
			$arr = mysqli_fetch_array($result);
			return $arr;
			
			
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
	
	class prodect
	{
		
		function prodect_sale()
		{
			$server = 'localhost';
			$username = 'root';
			$password = '';
			$database = 'yamakoko';
	
			$con = mysqli_connect($server, $username, $password);
	
			$db = mysqli_select_db($con, $database);
			
			$query = "select * from p_sale";
			
			$result = mysqli_query($con, $query);
			return $result;
		}
		
	}
	
	
?>