<?php
	include('parts/yamakoko_head.php');
	include('parts/yamakoko_header.php');
?>

	<style>
	*{
		margin:0px;
	}
	
	.loginTop_main
	{
		width: 100%;
		height: 615px;
		position:relative:
	}
	
	.loginTop_main > *:not(.loginTop_backFilter){
	z-index:2;
	position:relative;
	}
	
	.loginTop_backFilter
	{
		background-image: url('../pic/baclground.jpg');
		width:100%;
		height: 615px;
		position:absolute;
		-webkit-filter:blur(2px);
		z-index:1;
	}
	</style>

	<div class="loginTop_main">
	<div class="loginTop_backFilter">
	</div><!-- この下にbodyの内容を書く-->
	<p>hiiiiiiii</p>
	</div>

<?php
	include('parts/yamakoko_footer.php');
?>