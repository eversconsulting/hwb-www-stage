<!DOCTYPE html>
<?php
	$id = $_GET['id'];
	$showPrices = false;
	$showWeight = true;
	switch ($id) {
		case 'pro':
			$title = "PRO SERIES ";
			$d = "These bats are made with wood that measures top grade in every way. They include the ink dot window showing straight grain in the handle. The finishing process includes additional sanding and care. The finished weight of the bat will be approximately 3 ounces less than the length of the bat, unless otherwise requested.";
			$price = "$120";
			$models = array("024", "026", "110", "243", "271");
			$desc = array("024" => "Barrel = 2.50 Handle = .92 <br>Medium / large barrel diameter, Medium / long barrel, thin handle, flared knob", "026" => "Barrel = 2.50 Handle = .94 <br>Large barrel diameter, long barrel, medium handle, flared knob","110" => "Barrel = 2.48 Handle = .96 <br>Medium barrel diameter, long barrel , medium handle, regular knob", "243" => "Barrel = 2.52 Handle = .94 <br>Large barrel diameter, long barrel , medium handle, regular knob", "271" => "Barrel = 2.48 Handle = .94 <br>Medium barrel diameter, Tapered barrel, medium handle, flared knob");
			$display = true;
			$displayModels = true;
			$showPrices = true;
			$imageM = "assets/prom.png";
			$showPricesGame = false;
			$showPromo = false;

			break;
		case 'game':
			$title = "GAME SERIES ";
			$d = "These bats are available in top grade Maple, Ash or Birch and are made for game use.  The finished weight of the bat will be approximately 3 ounces less than the length of the bat, unless otherwise requested.";
			$price = "$70";
			$models = array("024", "026", "110", "243", "271");
			$desc = array("024" => "Barrel = 2.50 Handle = .92 <br>Medium / large barrel diameter, Medium / long barrel, thin handle, flared knob", "026" => "Barrel = 2.50 Handle = .94 <br>Large barrel diameter, long barrel, medium handle, flared knob","110" => "Barrel = 2.48 Handle = .96 <br>Medium barrel diameter, long barrel , medium handle, regular knob", "243" => "Barrel = 2.52 Handle = .94 <br>Large barrel diameter, long barrel , medium handle, regular knob", "271" => "Barrel = 2.48 Handle = .94 <br>Medium barrel diameter, Tapered barrel, medium handle, flared knob");
			$display = true;
			$displayModels = true;
			$imageM = "assets/gamem.png";
			$showPricesGame = true;
			$showPrices = false;
			$showPromo = false;

			break;
		case 'youth':
			$title = "YOUTH BAT | ";
			$d = "This bat has a maximum barrel diameter of 2.25 inches as required by youth baseball organizations, and is available in Ash or Birch. The finished weight will be approximately 5 ounces less than the length.";
			$price = "$40";
			$models = array();
			$display = true;
			$displayModels = false;
			$showWeight = false;
			$imageM = "assets/youthm.png";
			$showPrices = false;
			$showPricesGame = false;
			$showPromo = false;
			break;
		case 'fungo':
			$title = "FUNGO BAT | ";
			$d = "Provides great balance with good pop in the barrel, available in Ash, Birch and Maple. The finished weight will be approximately 12 ounces less than the length. ";
			$price = "$65";
			$models = array();
			$display = true;
			$displayModels = false;
			$showWeight = false;
			$imageM = "assets/fungom.png";
			$showPrices = false;
			$showPricesGame = false;
			$showPromo = false;
			break;
		case 'promo':
			$title = "PROMOTIONAL/AWARD BAT ";
			$d = "These bats can be cut to a professional model and size but may vary in weight. The artwork to be engraved in the bat can include logos, personal autographs, etc. Please contact us for quantity pricing and details. ";
			$price = "$70";
			$models = array();
			$display = false;
			$displayModels = false;
			$imageM = "assets/prom.png";
			$showPrices = false;
			$showPricesGame = false;
			$showPromo = true;

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
	<script src="http://sdks.shopifycdn.com/js-buy-sdk/latest/shopify-buy.polyfilled.globals.min.js"></script>
	<script type="text/javascript" src="jquery-ui.js"></script>
	<script type="text/javascript" src="cart.js"></script>



</head>
<body>

	<div class="side-cart">

		<div class="cart-top">
			<div class="cart-top-text">Your Cart</div>
			<div class="cart-top-close">&#10006;</div>
		</div>

		<div class="cart-mid">


		</div>

		<div class="cart-bot">
			<div id="cart-check">
				<div class="cart-bot-total">
					<div class="cart-bot-text">Total</div>
					<div class="cart-bot-amt">$0</div>
				</div>
				<div class="cart-bot-checkout">
					<a class="check-a" href=""><div id="cart-button" class="check-button">Checkout</div></a>
				</div>
			</div>
			<div id="cart-confirm">
				<div class="cart-ask-txt">Are you sure?</div>
				<div class="ask-cont">
					<div id="yes-button" class="ask-button">Yes</div>
					<div id="no-button" class="ask-button">No</div>
				</div>

			</div>
		</div>

  	</div>

		<div class="bottom-popup">
			<div class="popup-text"></div>
			<div class="dismiss-popup">Ok</div>
		</div>

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
				<div class="notify" style="display: none"></div>
				<img class="cart-icon" src="assets/cart.png">
			</div>
		</div>


		<div id="desk-cart" class="cart">
			<div class="notify" style="display: none">2</div>
			<img class="cart-icon" src="assets/cart.png">
		</div>

		<div class="navbar-icons" style="float: right">
			<a href="https://www.instagram.com/homewoodbat/" target="_blank"><div id="instagram" class="nav-icon"></div></a>
			<a href="https://www.facebook.com/homewoodbat/" target="_blank"><div id="facebook" class="nav-icon"></div></a>
			<a href="https://twitter.com/HomewoodBat/" target="_blank"><div id="twitter" class="nav-icon"></div></a>
		</div>





	</div>
	<div class="navbar-spacer"></div>
	<div class="slide-menu">
		<a href="index.php"><div id="mhome" class="slide-option">HOME</div></a>
		<div id="mshop" class="slide-option">SHOP</div>
		<div id="mnews" class="slide-option">NEWS</div>
		<div id="mcontact" class="slide-option">CONTACT</div>
		<div id="mabout" class="slide-option">ABOUT</div>



	</div>


	<div class="section" id="customize-sec">
		<div id="desktop-custom">
			<div class="display-bat">
				<div class="cart-spec">
				<div class="cart-col col-spec">

						<div class="bat-image desktop-bat-img"></div>



				</div>
				<div class="cart-col">
					<div class="col-inner">
						<div id="row-spec" class="cart-row">
							<div class="bat-title"><?php echo $title; ?></div>

							<?php
								if(($showPrices == false) && ($showPricesGame == false) && ($showPromo == false)){
									echo '<div class="bat-price">'.$price.'</div>';
								}
							?>
						</div>
						<div class="bat-general">
						<?php echo $d; ?>
						<br>
						<br>

						<?php
							if($showPrices == true){
								echo '<div class="wood-prices">MAPLE | $120 <br />ASH & BIRCH | $100</div>';
							}
							if($showPricesGame == true){
								echo '<div class="wood-prices">MAPLE | $95<br />ASH & BIRCH | $70</div>';
							}
							if($showPromo == true){
								echo '<div class="wood-prices">PROMO BATS: $70 <sup>(includes artwok)</sup><br />ADDITIONAL BATS: $55 EACH <sup>(w/ same artwork)</sup></div>';
								echo'<br><br>';
								echo '<div class="promo-contact">INFO@HOMEWOODBAT.COM</div>';
								echo '<div class="promo-contact">708.713.8000</div>';
							}
						?>
						<br>
						<br>
						</div>



						<div class="bat-details">
						<?php
							if($display == true){
								if($displayModels == true) {
									echo '<div class="details-title">Models</div>';
								}
								echo '<ul class="details-list">';

									$index = 0;
									foreach ($models as $value) {

										echo "<li><div class='details-container'><div class='details-list-items' id=$value>$value</div><div class='details-text'>$desc[$value]</div></div></li>";
										$index += 1;
									}

								echo '</ul>';
							}
							else{

							}

						?>


						</div>
						<?php
						if ($display == true){
							if($displayModels == true){
								echo '<div class="button disable" id="cb">Customize</div>';
							}
							else{
								echo '<div class="button" id="cb">Customize</div>';
							}
						}
						else{

						}

					?>
					</div>
				</div>
				</div>
			</div>
		</div>
		<div id="mobile-custom">
			<div class="cart-row">
				<div class="cart-col">
					<div class="bat-image">
					<?php
						echo '<img class="bat-image-m" src='.$imageM.'></div>';
					?>
				</div>
				<div class="cart-col">
					<div class="bat-title"><?php echo $title; ?></div>
					<div class="bat-price"><?php echo $price; ?></div>
					<div class="bat-details">

					<?php
						if($display == true){
							echo '<div class="details-title">MODELS:</div>';
							echo '<select id="models-select"class="models-select">';
								echo '<option selected="selected">Choose</option>';

									foreach ($models as $value) {
										echo "<option id=$value value=$value>$value</option>";
									}

							echo '</select>';
							echo '<div id="barrel"></div>';
							echo '<div id="handle"></div>';
							echo '<div id="details-body" class="details-body"></div>';
						}
					?>
					</div>
				</div>
			</div>
			<div class="cart-row">
				<div class="bat-general">
					<?php echo $d; ?>
				</div>

			</div>
			<div class="cart-row">
				<?php
					if($display == true){
						echo '<div class="button" id="cb-mobile">Customize</div>';
					}
					else {
						echo '<div class="button disable" id="addCart-mobile">Add to Cart</div>';
					}

				?>
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

				<div class="customize-model"></div>

			<div id="custom-bat" class="customize-image">
				<div id="logo-overlay" class="logo-image"></div>
			</div>
			<div class="options-cont">

				<div class="cart-row">

						<div class="color-title">WOOD TYPE</div>
						<div id="woodList" class="color-cont">

						</div>

				</div>

				<div class="cart-row">
						<div class="color-title">BAT COLOR</div>
						<div class="color-cont">



							<div id="bc1" title="Unfinished" class="color"></div>
							<div id="bc2" title="Natural" class="color"></div>
							<div id="bc3" title="Black" class="color"></div>
							<div id="bc4" title="Gray" class="color"></div>
						</div>
				</div>
					<div class="cart-row">
						<div id="optional-title" class="color-titleO">OPTIONAL TWO COLOR + $10</div>
						<div class="cart-row" id="optional-row">
							<div class="cart-col">
								<div class="color-title">HANDLE</div>
								<div class="color-cont">
									<div id="hc1" title="Unfinished" class="color"></div>
									<div id="hc2" title="Natural" class="color"></div>
									<div id="hc3" title="Black" class="color"></div>
									<div id="hc4" title="Gray" class="color"></div>
								</div>
							</div>
							<div class="cart-col">
								<div class="color-title">BARREL</div>
									<div class="color-cont">
										<div id="brc1" title="Unfinished" class="color"></div>
										<div id="brc2" title="Natural" class="color"></div>
										<div id="brc3" title="Black" class="color"></div>
										<div id="brc4" title="Gray" class="color"></div>
									</div>
							</div>
						</div>
					</div>
					<div class="cart-row">
						<div class="cart-col">
							<div class="color-title">LOGO & ENGRAVING</div>
								<div class="color-cont">
									<div id="lc1" class="color"></div>
									<div id="lc2" class="color"></div>
									<div id="lc3" class="color"></div>
									<div id="lc4" class="color"></div>
								</div>
						</div>
						<div class="cart-col">
							<div class="color-title">FINISH</div>
								<div class="color-cont">
									<div id="fc1" class="colorX">GLOSSY</div>
									<div id="fc2" class="colorX">MATTE</div>
								</div>
						</div>
					</div>

				<div class="cart-row">
						<div class="color-title">BAT LENGTH</div>
						<div id="lengthList" class="color-cont">
						</div>
					</div>

				<!-- <?php
					if($showWeight == false){

					}
					else {
						echo '<div class="cart-row"><div class="color-title">BAT WEIGHT</div><div id="weightList" class="color-cont"></div></div>';
					}
				?> -->



				<div class="cart-row">
						<div class="color-title">CUSTOM ENGRAVING LETTERING STYLE</div>
						<div class="color-cont">
							<div id="eg1" class="colorY">BANK GOTHIC</div>
							<div class="colorY" id="brush-option">Brush Style</div>
						</div>
				</div>
				<div class="cart-row">
						<div class="color-title">CUSTOM ENGRAVING (UP TO 25 CHARACTERS)</div>
						<div class="color-cont">
							<input id="engraving1" class="engraving" type="text" maxlength="25">
						</div>
				</div>

				<div class="cart-row">
					<div class="custom-time"><div class="custom-time-inner">STANDARD PRODUCTION TIME IS 2-3 WEEKS FOR ALL CUSTOM ORDERS</div></div>
				</div>

				<div class="cart-row">
					<div class="ack-check">
						<div id="ack-checked" class="ack-checked"></div>
					</div>
					<div class="check-title">I ACKNOWLEDGE THAT ALL CUSTOM ORDERS ARE FINAL</div>
				</div>

				<div class="cart-row">
						<div class="color-title">QUANTITY</div>
						<div class="color-cont">
							<input id="q1" class="quantity" type="number" min="1">
						</div>
				</div>

				<div class="cart-row">
					<div class="button" id="add1">ADD TO CART</div>
					<div class="button-title">ONLINE STORE COMING SOON! PLEASE CALL 708.713.8000 TO ORDER</div>
				</div>




			</div>
		</div>


	</div>
	<div id="mobile-bat" class="customize-bat">

			<div class="customize-model"></div>
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
						     <option id="bc1">Maple</option>
						     <option id="bc2">Birch</option>
						     <option style="color: rgb(250, 245, 234);" id="bc3">Black</option>
						     <option style="color: rgb(250, 245, 234);" id="bc4">Gray</option>
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
										     <option id="bc1">Maple</option>
										     <option id="bc2">Birch</option>
										     <option style="color: rgb(250, 245, 234);" id="bc3">Black</option>
										     <option style="color: rgb(250, 245, 234);" id="bc4">Gray</option>
										   </select>
										</div>
								</div>
								<div class="cart-row">
									<div class="color-title">BARREL</div>
										<div class="styled-select">
										   <select>
										     <option selected="selected">Choose</option>
										     <option id="bc1">Maple</option>
										     <option id="bc2">Birch</option>
										     <option style="color: rgb(250, 245, 234);" id="bc3">Black</option>
										     <option style="color: rgb(250, 245, 234);" id="bc4">Gray</option>
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
								     <option id="lc1" style="color: rgb(250, 245, 234);">Black</option>
								     <option id="lc2">Silver</option>
								     <option id="lc3">Gold</option>
								     <option id="lc4">White</option>
								   </select>
								</div>

						<div class="cart-row">
							<div class="color-title">FINISH</div>
								<div class="styled-select">
								   <select id="wood-select">
								     <option selected="selected">Choose</option>
								     <option id="fc1" style="color: rgb(250, 245, 234);">Glossy</option>
								     <option id="fc2" style="color: rgb(250, 245, 234);">Matte</option>
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

				<?php
					if($showWeight == false){

					}
					else {

						echo '<div class="cart-row"><div class="color-title">BAT WEIGHT</div><div class="styled-select"><select id="weight-select"><option selected="selected">Choose</option></select></div></div>';
					}
				?>



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
						<div class="color-title">CUSTOM ENGRAVING (UP TO 25 CHARACTERS)</div>
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
					<div class="button" id="add">ADD TO CART</div>

				</div>

				<div class="cart-row">

					<div class="button-title">ONLINE STORE COMING SOON! PLEASE CALL 708.713.8000 TO ORDER</div>
				</div>







		</div>


	</div>
</body>
</html>
