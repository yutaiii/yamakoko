<?php
/*controlerとしてはたらくページ*/

	include('classYamakoko.php');
	
	$name = $_POST['names'];
	$email = $_POST['emails'];
	$comment = $_POST['comments'];
	
	$obj_contact = new contact(); // includeされたファイルのfunctionを呼んでいる
	$result = $obj_contact->send_contact($name,$email,$comment);
	
	if($result == true)
	{
		echo "Thanks For Contact";
	}
	else
	{
		echo "Try Again";
	}
?>