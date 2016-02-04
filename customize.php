<!DOCTYPE html>
<?php
$id = $_GET['id'];
?>
<html> 
<head>
	<title>Homewood Bat</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="script.js"></script>
	<script type="text/javascript" src="customize.js"></script>
</head>
<body>
	<div class="navbar">
		<div class="logo"></div>
		
		<ul class="navbar-items">
			<a href="index.php"><li>Home</li></a>
			<li>Shop</li>
			<li>About</li>
			<a href="cart.php"><li id="cartShow">Cart ( )</li></a>
		</ul>
		<div class="hamburger"></div>
	</div>
	<div class="navbar-spacer"></div>
	<div class="slide-menu">

	</div>

	
	<div class="section" id="customize-sec" style="background-color: #2F4F4F;">
		<div class="spacer"></div>
		<div class="shop-item-container">

			<div class="shop-image"></div>
			
			<?php 
				if($id == 1){
					echo "<div class='button noselect' id='customize'>Customize</div>";				
				}


			?>
			
			<div class="customize-area">
				<div class="color-area">
					<div class="color-picker">
						<div class="color-label">Handle Color:</div>
						<ul class="colors">
							<li class="color" id="hR"></li>
							<li class="color" id="hB"></li>
							<li class="color" id="hG"></li>
						</ul>
					</div>
					<div class="color-picker">
						<div class="color-label">Bat Color:</div>
						<ul class="colors">
							<li class="color" id="bR"></li>
							<li class="color" id="bB"></li>
							<li class="color" id="bG"></li>
						</ul>
					</div>
				</div>

				<div class="select-container">
					<div class="select-title">Handle:</div>
					<select  id="handleSelect">
						<option value="" selected="selected" disabled>Color</option>
						<option value="blue">Blue</option>
						<option value="red">Red</option>
						<option value="green">Green</option>
					</select>
				</div>
				<div class="select-container">
					<div class="select-title">Bat:</div>
					<select id="batSelect">
						<option value="" selected="selected" disabled>Color</option>
						<option value="blue">Blue</option>
						<option value="red">Red</option>
						<option value="green">Green</option>
					</select>
				</div>
				
					<div class="button disable noselect" id="add">Add to Cart</div>
			</div>

			<div class="shop-desc"> loream ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			</div>


			

			


			



		</div>

	</div>
</body>
</html>