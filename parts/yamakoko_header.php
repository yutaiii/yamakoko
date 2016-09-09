<body>
	
		<div class="home_header">
		
			<div class="header_logo">
				<a href="yamakoko_home.php"><img class="home_logolayout" src="pic/logo.png"></a>
			</div>
		
			<nav id="header_nav">
				<ul>
					<li><a href="#">About us</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="#">Photo Gallery</a></li>
					<li id="header_nanzan_alpine"><a href="nanzanalpineclub.php">Nanzan Alpine Club</a></li>
					<?php if(isset($_SESSION['username']))
					{
						echo '<li><a href="yamakoko_product.php">Product</a></li>';
					}
					?>
					<?php if(isset($_SESSION['username']))
					{
						echo '<li><a href="yamakoko_logout.php">Log out</a></li>';
					}
					?>
				</ul>
			</nav>
		</div>