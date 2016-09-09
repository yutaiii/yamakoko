<?php
	session_start();
	include('parts/yamakoko_head.php');
	// if(isset($_SESSION['username']))
	// {
	include('parts/yamakoko_header.php');
?>

	
	<div class="product_main">
		<div class="product_produce">
			<h1 class="product_produceMessage">Yamakoko provides</br> you all what you want</h1>
		</div>
		
		<div class="product_forSale">
			<p class="product_forSaleMessage">Products for sale !(MAX 60% OFF)</p>
		</div>
		
		<div class="product_productBigBox">
		
			
			<?php
				include('classYamakoko.php');
				$obj = new prodect();
				$result = $obj -> prodect_sale();
				while($show = mysqli_fetch_array($result))
				{
					echo '<div class="product_productBox">';
						echo '<img class="prodect_productPic" src="'.$show['p_url'].'" iid="'.$show['id'].'" >';
						echo '<div class="product_productDetail">';
							echo '<p class="product_productDetailRow">'.$show['p_name'].'<p>';
							echo '<p class="product_productDetailRow">￥'.$show['p_price'].'<p>';
						echo '</div>';
					echo '</div>';
				}
			?>
			
			
			
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