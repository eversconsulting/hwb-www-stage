<!DOCTYPE html>
<?php
	$id = $_GET['id'];
	switch ($id) {
		case 'pro':
			$title = "PRO BAT | ";
			$desc = "This is the description for this item fill this area with whatever you want";
			$price = "$999";
			$models = array("024", "110", "141", "243", "271");
			break;
		case 'game':
			$title = "GAME BAT | ";
			$desc = "This is the description for this item fill this area with whatever you want";
			$price = "$999";
			$models = array("024", "110", "141", "243", "271");
			break;
		case 'youth':
			$title = "YOUTH BAT | ";
			$desc = "This is the description for this item fill this area with whatever you want";
			$price = "$999";
			$models = array();
			break;
		case 'fungo':
			$title = "FUNGO BAT | ";
			$desc = "This is the description for this item fill this area with whatever you want";
			$price = "$999";
			$models = array();
			break;
		case 'promo':
			$title = "PROMO BAT | ";
			$desc = "This is the description for this item fill this area with whatever you want";
			$price = "$999";
			$models = array();
			break;
		
		default:
			# code...
			break;
	}
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
			<li>News</li>
			<li>Contact</li>
			<a href="cart.php"><li id="cartShow">Cart ( )</li></a>
		</ul>

		<div class="navbar-icons">
			<div class="nav-icon"></div>
			<div class="nav-icon"></div>
			<div class="nav-icon"></div>
			<div class="nav-icon"></div>
			<div class="nav-icon"></div>
		</div>
		<div class="hamburger"></div>
	</div>
	<div class="navbar-spacer"></div>
	<div class="slide-menu">


	</div>

	
	<div class="section" id="customize-sec" style="background-color: #2F4F4F;">
		<div class="display-bat">
			<div class="cart-col">
				<div class="bat-image"></div>
				<div class="button disable" id="cb">Customize</div>
			</div>
			<div class="cart-col">
				<div class="col-inner">
					<div class="cart-row">
						<div class="bat-title"><?php echo $title; ?></div>
						<div class="bat-price"><?php echo $price; ?></div>
					</div>
					<div class="bat-desc"><?php echo $desc; ?></div>

					<div class="bat-details">
						<div class="details-title">Models</div>
						<ul class="details-list">
							<?php
								foreach ($models as $value) {
									echo "<li id=$value>$value</li>";
								}
							?>
						</ul>
					</div>
				</div>
			</div>
		</div>
			
		
			
			
				
		<!-- <div class="button disable noselect" id="add">Add to Cart</div> -->
		
		

	</div>
	<div class="customize-bat">
		<div class="customize-inner">
			<div style="height: 200px; width: 100%;"></div>
			<div class="customize-image"></div>
			<div class="options-cont">
				
					<div class="cart-row">
						<div class="color-title">Handle:</div>
						<div class="color-cont">
							<div class="color"></div>
							<div class="color"></div>
							<div class="color"></div>
							<div class="color"></div>
							<div class="color"></div>
						</div>
					</div>

					<div class="cart-row">
						<div class="color-title">Barrel:</div>
							<div class="color-cont">
								<div class="color"></div>
								<div class="color"></div>
								<div class="color"></div>
								<div class="color"></div>
								<div class="color"></div>
							</div>
						</div>
				
					<div class="cart-row">
						<div class="color-title">Wood Type:</div>
						<div id="woodList" class="color-cont">
							
						</div>
					</div>
					
					
					
					<div class="cart-row">
						<div class="color-title">Logo & Engraving:</div>
							<div class="color-cont">
								<div class="color"></div>
								<div class="color"></div>
								<div class="color"></div>
								<div class="color"></div>
								<div class="color"></div>
							</div>
						</div>
					
				<div class="cart-row">
						<div class="color-title">Bat Length:</div>
						<div id="colorList" class="color-cont">
						
							
						</div>
					</div>
				
				<div class="cart-row">
						<div class="color-title">Bat Weight:</div>
						<div id="weightList" class="color-cont">
							
							
						</div>
					</div>
				
				
			</div>
		</div>


	</div>
</body>
</html>