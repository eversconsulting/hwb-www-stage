<!DOCTYPE html>
<?php
	$id = $_GET['id'];
	switch ($id) {
		case 'pro':
			$title = "PRO BAT | ";
			//$desc = "This is the description for this item fill this area with whatever you want";
			$price = "$999";
			$models = array("024", "110", "141", "243", "271");
			$desc = array("024" => "Medium / large barrel diameter, Medium / long barrel, thin handle, flared knob", "110" => "Medium barrel diameter, long barrel, thick handle, regular knob", "141" => "Medium barrel diameter, long barrel, thin handle, regular knob", "243" => "Large barrel diameter, long barrel , medium handle, regular knob", "271" => "Medium barrel diameter, Tapered barrel, medium handle, flared knob");

			break;
		case 'game':
			$title = "GAME BAT | ";
			$desc = "This is the description for this item fill this area with whatever you want";
			$price = "$999";
			$models = array("024", "110", "141", "243", "271");
			$desc = array("Medium / large barrel diameter, Medium / long barrel, thin handle, flared knob", "Medium barrel diameter, long barrel, thick handle, regular knob", "Medium barrel diameter, long barrel, thin handle, regular knob", "Large barrel diameter, long barrel , medium handle, regular knob", "Medium barrel diameter, Tapered barrel, medium handle, flared knob");

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
			<a href="index.php"><li id="home">HOME</li></a>
		</ul>
		<div class="ham-contain">
			<div class="hamburger">
				<div id="ham1" class="hamburger-line"></div>
				<div id="ham2" class="hamburger-line"></div>
				<div id="ham3" class="hamburger-line"></div>
			</div>
			<div class="cart">
				<div class="notify">2</div>
				<img class="cart-icon" src="assets/cart.png">
			</div>
		</div>

		

		<div class="navbar-icons">
			<a href="https://www.instagram.com/homewoodbat/"><div id="instagram" class="nav-icon"></div></a>
			<div id="facebook" class="nav-icon"></div>
			<div id="twitter" class="nav-icon"></div>
		</div>

		<div id="desk-cart" class="cart">
			<div class="notify">2</div>
			<img class="cart-icon" src="assets/cart.png">
		</div>

		

	</div>
	<div class="navbar-spacer"></div>
	<div class="slide-menu">
		<div id="mhome" class="slide-option">HOME</div>
		<div id="mshop" class="slide-option">SHOP</div>
		<div id="mnews" class="slide-option">NEWS</div>
		<div id="mcontact" class="slide-option">CONTACT</div>
		<div id="mabout" class="slide-option">ABOUT</div>
		


	</div>

	
	<div class="section" id="customize-sec">
		<div id="desktop-custom">
			<div class="display-bat">
				<div class="cart-col">
					<div class="bat-image"></div>
					<div class="button disable" id="cb">Customize</div>
				</div>
				<div class="cart-col">
					<div class="col-inner">
						<div id="row-spec" class="cart-row">
							<div class="bat-title"><?php echo $title; ?></div>
							<div class="bat-price"><?php echo $price; ?></div>
						</div>
						

						<div class="bat-details">
							<div class="details-title">Models</div>
							<ul class="details-list">
								<?php
									$index = 0;
									foreach ($models as $value) {

										echo "<li><div class='details-container'><div class='details-list-items' id=$value>$value</div><div class='details-text'>$desc[$value]</div></div></li>";
										$index += 1;
									}
								?>
							</ul>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="mobile-custom">
			<div class="cart-row">
				<div class="cart-col">
					<div class="bat-image"></div>
					
				</div>
				<div class="cart-col">
					<div class="bat-title"><?php echo $title; ?></div>
					<div class="bat-price"><?php echo $price; ?></div>
					<div class="bat-details">
							<div class="details-title">MODELS:</div>
							<select id="models-select"class="models-select">
								<option selected="selected">Choose</option>
								<?php
									foreach ($models as $value) {
										echo "<option id=$value value=$value>$value</option>";
									}
								?>
							</select>
							<div id="details-body" class="details-body">
								
							</div>
					</div>
				</div>
			</div>
			<div class="cart-row">
				<div class="button" id="cb-mobile">Customize</div>
			</div>
		</div>
	</div>
	<div id="desktop-bat" class="customize-bat">
		<div class="customize-inner">
			<div id="title-row-special" class="title-row">
				<div id="title-line-special" class="title-line"></div>
				<div id="section-title-special" class="section-title">CUSTOMIZE</div>
				<div id="title-line-special2" class="title-line"></div>
			</div>
			<div class="customize-image"></div>
			<div class="options-cont">

				<div class="cart-row">
						<div class="color-title">WOOD TYPE</div>
						<div id="woodList" class="color-cont">
							
						</div>
				</div>

				<div class="cart-row">
						<div class="color-title">BAT COLOR</div>
						<div class="color-cont">
							<div class="color"></div>
							<div class="color"></div>
							<div class="color"></div>
							<div class="color"></div>
						</div>
				</div>
					<div class="cart-row">
						<div id="optional-title" class="color-titleO">OPTIONAL TWO COLOR + $10</div>
						<div class="cart-row" id="optional-row">
							<div class="cart-col">
								<div class="color-title">HANDLE</div>
								<div class="color-cont">
									<div title="test" class="color"></div>
									<div class="color"></div>
									<div class="color"></div>
									<div class="color"></div>
									<div class="color"></div>
								</div>
							</div>
							<div class="cart-col">
								<div class="color-title">BARREL</div>
									<div class="color-cont">
										<div class="color"></div>
										<div class="color"></div>
										<div class="color"></div>
										<div class="color"></div>
										<div class="color"></div>
									</div>
							</div>
						</div>
					</div>			
					<div class="cart-row">
						<div class="cart-col">
							<div class="color-title">LOGO & ENGRAVING</div>
								<div class="color-cont">
									<div class="color"></div>
									<div class="color"></div>
									<div class="color"></div>
									<div class="color"></div>
								</div>
						</div>
						<div class="cart-col">
							<div class="color-title">FINISH</div>
								<div class="color-cont">
									<div class="colorX">GLOSSY</div>
									<div class="colorX">MATTE</div>
								</div>
						</div>
					</div>

				<div class="cart-row">
						<div class="color-title">BAT LENGTH</div>
						<div id="lengthList" class="color-cont">
						</div>
					</div>
				
				<div class="cart-row">
						<div class="color-title">BAT WEIGHT</div>
						<div id="weightList" class="color-cont">
							
							
						</div>
				</div>

				<div class="cart-row">
						<div class="color-title">END CUP</div>
						<div class="color-cont">
							<div class="color">YES</div>
							<div class="color">NO</div>
						</div>
				</div>

				<div class="cart-row">
						<div class="color-title">CUSTOM ENGRAVING LETTERING STYLE</div>
						<div class="color-cont">
							<div class="colorY">BANK GOTHIC</div>
							<div class="colorY">Brush Style</div>
						</div>
				</div>
				<div class="cart-row">
						<div class="color-title">CUSTOM ENGRAVING (UP TO 25 CHARACHTERS)</div>
						<div class="color-cont">
							<input class="engraving" type="text" maxlength="25">
						</div>
				</div>

				<div class="cart-row">
					<div class="custom-time">STANDARD PRODUCTION TIME IS 2-3 WEEKS FOR ALL CUSTOM ORDERS</div>
				</div>

				<div class="cart-row">
					<div class="ack-check">
						<div class="ack-checked"></div>
					</div>
					<div class="check-title">I ACKNOWLEDGE THAT ALL CUSTOM ORDERS ARE FINAL</div>
				</div>

				<div class="cart-row">
						<div class="color-title">QUANTITY</div>
						<div class="color-cont">
							<input class="quantity" type="number" min="1">
						</div>
				</div>

				<div class="cart-row">
					<div class="button disable" id="add">ADD TO CART</div>
					<div class="button-title">ONLINE STORE COMING SOON! PLEASE CALL 708.713.8000 TO ORDER</div>
				</div>

				
				
				
			</div>
		</div>


	</div>
	<div id="mobile-bat" class="customize-bat">
		
			
			<div class="customize-image"></div>
			<div class="options-cont">

				<div class="cart-row">
						<div class="color-title">WOOD TYPE</div>
						<div class="styled-select">
						   <select id="wood-select">
						     <option selected="selected">Choose</option>
						   </select>
						</div>
				</div>

				<div class="cart-row">
						<div class="color-title">BAT COLOR</div>
						<div class="styled-select">
						   <select>
						     <option selected="selected">Choose</option>
						   </select>
						</div>
				</div>
					<div class="cart-row">
						<div id="optional-title" class="color-titleO">OPTIONAL TWO COLOR + $10</div>
						<div class="optional-box">
							<div class="optional-box-inner">
								<div class="cart-row">
									<div class="color-title">HANDLE</div>
										<div class="styled-select">
										   <select>
										     <option selected="selected">Choose</option>
										   </select>
										</div>
								</div>
								<div class="cart-row">
									<div class="color-title">BARREL</div>
										<div class="styled-select">
										   <select>
										     <option selected="selected">Choose</option>
										   </select>
										</div>
								</div>
							</div>
						</div>
					</div>			
					<div class="cart-row">
						
							<div class="color-title">LOGO & ENGRAVING</div>
								<div class="styled-select">
								   <select id="wood-select">
								     <option selected="selected">Choose</option>
								   </select>
								</div>
					
						<div class="cart-row">
							<div class="color-title">FINISH</div>
								<div class="styled-select">
								   <select id="wood-select">
								     <option selected="selected">Choose</option>
								   </select>
								</div>
						</div>
					</div>

				<div class="cart-row">
						<div class="color-title">BAT LENGTH</div>
						<div class="styled-select">
						   <select id="length-select">
						     <option selected="selected">Choose</option>
						   </select>
						</div>
					</div>
				
				<div class="cart-row">
						<div class="color-title">BAT WEIGHT</div>
						<div class="styled-select">
						   <select id="weight-select">
						     <option selected="selected">Choose</option>
						   </select>
						</div>
				</div>

				<div class="cart-row">
						<div class="color-title">END CUP</div>
						<div class="styled-select">
						   <select>
						     <option selected="selected">Choose</option>
						   </select>
						</div>
				</div>

				<div class="cart-row">
						<div class="color-title">CUSTOM ENGRAVING LETTERING STYLE</div>
						<div class="styled-select">
						   <select>
						     <option selected="selected">Choose</option>
						     <option class="gothic-option">BANK GOTHIC</option>
						     <option class="brush-option">Brush Script</option>
						   </select>
						</div>
				</div>
				<div class="cart-row">
						<div class="color-title">CUSTOM ENGRAVING (UP TO 25 CHARACHTERS)</div>
						<div class="color-cont">
							<input class="engraving" type="text" maxlength="25">
						</div>
				</div>

				<div class="cart-row">
					<div class="custom-time">STANDARD PRODUCTION TIME IS 2-3 WEEKS FOR ALL CUSTOM ORDERS</div>
				</div>

				<div class="cart-row">
					<div class="ack-check">
						<div class="ack-checked"></div>
					</div>
					<div class="check-title">I ACKNOWLEDGE THAT ALL CUSTOM ORDERS ARE FINAL</div>
				</div>

				<div class="cart-row">
						<div class="color-title">QUANTITY</div>
						<div class="color-cont">
							<input class="quantity" type="number" min="1">
						</div>
				</div>

				<div class="cart-row">
					<div class="button disable" id="add">ADD TO CART</div>
					
				</div>

				<div class="cart-row">
					
					<div class="button-title">ONLINE STORE COMING SOON! PLEASE CALL 708.713.8000 TO ORDER</div>
				</div>

			

				
				
				
			
		</div>


	</div>
	
</body>
</html>