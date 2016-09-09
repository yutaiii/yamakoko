<?php
	session_start();
	include('parts/yamakoko_head.php');
	// if(isset($_SESSION['username']))
	// {
	include('parts/yamakoko_header.php');
?>

	<div class="pDetail_main">
		
		<div class="pDtail_mainLeft">
			<div class="pDetail_leftImg">
				<img class="pDetail_pic" src="pic/yamakoko_zac.jpg" >
				<div class="pDetail_adv">
				here adv will come
				</div>
			</div>
			
			<div class="pDetail_detail">
				<p class="pDetail_title">Title</p>
				<p class="pDetail_rate">4</p>
				<hr class="pDetail_hr">
				<p class="pDetail_price">price : $2000</p>
				<p class="pDetail_details">aaa</br>aaa</br>aaa</br>aaa</br>aaa</p>
			</div>
			
		</div>
		
		<div class="pDtail_mainRight">
			<div class="pDetail_cartDiv">
				<div class="pDetail_amount">
					<label>Amount: </label>
					<select class="pDetail_quantity">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						<option>10</option>
					</select>
				</div>
				
				<div class="pDetail_cartBtnDiv">
					<span><img class="pDetail_cartLogo" src="pic/cartLogoWhite.png"><span><input class="pDetail_cartBtn" type="button" value="Go to cart">
				</div>
				
				<input class="pDetail_wishListBtn" type="button" value="Add this in wish list">
				
				
			</div>
		</div>
		
	</div>

<?php
	include('parts/yamakoko_footer.php');
	// }
	// else
	// {
		// echo '<script type="text/javascript"> window.location = "yamakoko_home.php" </script>';
	// }
?>