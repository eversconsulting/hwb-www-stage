<!DOCTYPE html>
<html>
<head>
	<title>Homewood Bat</title>
	 <meta charset="UTF-8">

	<link rel="stylesheet" type="text/css" href="styles.css">

	<link rel="stylesheet" type="text/css" href="custom.css">

	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="script.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/shopify-cartjs/0.4.0/cart.min.js"></script>
	<script src="http://sdks.shopifycdn.com/js-buy-sdk/latest/shopify-buy.polyfilled.globals.min.js"></script>

	<script type="text/javascript" src="cart.js"></script>
	<script type="text/javascript" src="jquery-ui.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<body>

	<div class="side-cart">
		<div class="cart-item-display">
			<div class="cart-top">
				<div class="cart-top-text">Your Cart</div>
				<div class="cart-top-close">&#10006;</div>
				<div class="cart-top-remove">remove</div>
				<sup class="supCart">(Select product to edit your cart)</sup>
			</div>

			<div class="cart-mid">

			</div>

			<div class="cart-bot">
					<div class="cart-bot-text">
						<div class="cart-bot-total">Total:</div>
						<div class="cart-bot-amt"></div>
					</div>
					<sup>*before tax and shipping</sup>
					<div id="cart-button">Checkout</div>
					<p>- OR -</p>
					<div id="continue-shop">Continue Shopping</div>
			</div>
		</div>
		<div class="cart-email-display">
			<div class="prompt-cont">
				<div class="prompt">Please enter your email so we can keep track of your order!</div>
			<div class="email-cont">
				<input class="email-prompt" type="text" pattern='/.+@.+/' autofocus="true">
			</div>
				<div class="finish-button">FINISH</div>
			</div>

  	</div>
	</div>
	<div class="navbar">
		<a href="index.php"><div class="logo"></div></a>

		<ul class="navbar-items">
			<li id="home">HOME</li>
			<li id="shop">SHOP</li>
			<li id="news">NEWS</li>
			<li id="contact">CONTACT</li>
			<li id="about">ABOUT US</li>
		</ul>
		<div class="ham-contain">
			<div class="hamburger">
				<div id="ham1" class="hamburger-line"></div>
				<div id="ham2" class="hamburger-line"></div>
				<div id="ham3" class="hamburger-line"></div>
			</div>
			<div id="mobile-cart" class="cart">
				<div class="notify" style="display: none;"></div>
				<img class="cart-icon" src="assets/cart.png">
			</div>
		</div>



		<div class="navbar-icons">
			<a href="https://www.instagram.com/homewoodbat/" target="_blank"><div id="instagram" class="nav-icon"></div></a>
			<a href="https://www.facebook.com/homewoodbat/" target="_blank"><div id="facebook" class="nav-icon"></div></a>
			<a href="https://twitter.com/HomewoodBat/" target="_blank"><div id="twitter" class="nav-icon"></div></a>
		</div>

		<div id="desk-cart" class="cart">
			<div class="notify" style="display: none;"></div>
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

	<div id="sec1" class="img-big"></div>
	<div class="img-big-text">THE SWEET SOUND OF A HOMEWOOD BAT<sup>&#xae;</sup></div>
	<div class="body-inner">
		<div class="sec-spacer"></div>
		<div id="sec2" class="title-cont">
			<div class="line line-left"></div>
			<div class="title">BATS & ACCESSORIES</div>
			<div class="line line-right"></div>
		</div>

		<div class="section">
			<div class="acc-warn">CLICK ON A BAT TO CUSTOMIZE</div>
			<div class="product-cont">
				<a href="customize.php?id=pro"><div class="product">
					<div class="product-title">PRO BAT</div>
					<div class="product-arrow">❱</div>
				</div></a>
				<a href="customize.php?id=game"><div class="product">
					<div class="product-title">GAME BAT</div>
					<div class="product-arrow">❱</div>
				</div></a>
				<a href="customize.php?id=fungo"><div class="product">
					<div class="product-title">FUNGO BAT</div>
					<div class="product-arrow">❱</div>
				</div></a>
				<a href="customize.php?id=youth"><div class="product">
					<div class="product-title">YOUTH BAT</div>
					<div class="product-arrow">❱</div>
				</div></a>
			</div>
			<div class="shop">
				<div class="click"></div>
				<a href="customize.php?id=pro"><div class="click"></div></a>
				<a href="customize.php?id=game"><div class="click"></div></a>
				<a href="customize.php?id=game"><div class="click"></div></a>
				<a href="customize.php?id=fungo"><div class="click"></div></a>
				<a href="customize.php?id=promo"><div class="click"></div></a>
				<a href="customize.php?id=promo"><div class="click"></div></a>
				<a href="customize.php?id=youth"><div class="click"></div></a>
				<p class="accm">PLEASE GIVE US A CALL TO ORDER ACCESSORIES 708.713.8000</p>
			</div>
			<div class="acc-cont">
				<div class="acc">
					<div class="acc-img" style="background-image: url('assets/tshirt2.png');"></div>
					<div class="acc-title">HBC SWEET SOUND SHORT SLEEVE SHIRT <br> $25</div>
				</div>
				<div class="acc">
					<div class="acc-img" style="background-image: url('assets/tshirt.png');"></div>
					<div class="acc-title">HBC DISTRESSED LOGO 3/4 SLEEVE SHIRT <br> $35</div>
				</div>
				<div class="acc">
					<div class="acc-img" style="background-image: url('assets/hat.png'); background-color: white;"></div>
					<div class="acc-title">HBC LOGO HAT <br> $30</div>
				</div>
			</div>
		</div>
		<div class="acc-warn">PLEASE COME VISIT US OR GIVE US A CALL TO ORDER ACCESSORIES 708.713.8000</div>

		<div class="sec-spacer"></div>
		<div id="sec3" class="title-cont">
			<div class="line line-left"></div>
			<div class="title">NEWS</div>
			<div class="line line-right"></div>
		</div>
		<div class="sec-spacer"></div>

		<div class="section">
			<div class="sec-image-cont">
				<div class="sec-image" style="background-image: url('assets/bldg.jpg');"></div>
			</div>
			<div class="sec-body-cont">
				<div class="sec-body">
					<div class="head">PRO SHOP HOURS</div>
					<div class="head2">MONDAY-FRIDAY: 9-5<br>SATURDAYS IN JULY: 9-2<br><br>CALL FOR EVENING HOURS!</div>
				</div>
			</div>
		</div>
		<div class="sec-spacer"></div>
		<div id="sec4" class="title-cont">
			<div class="line line-left"></div>
			<div class="title">CONTACT US</div>
			<div class="line line-right"></div>
		</div>
		<div class="sec-spacer"></div>

		<div class="section">
			<div class="sec-image-cont">
				<div class="sec-image">
				<iframe class="map-size" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2985.1704947532794!2d-87.63521178505906!3d41.56555449289474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e18bb669d2c65%3A0xff83244a990b75e2!2s17845+Bretz+Dr%2C+Homewood%2C+IL+60430!5e0!3m2!1sen!2sus!4v1455171054605" style="border:0" allowfullscreen="" frameborder="0"></iframe>
				</div>
			</div>
			<div class="sec-body-cont">
				<div class="sec-body">
					<div class="copy">We'd love to talk with you about your special bat needs. Please feel free to give us a call, send us an email, or stop in for a look at our shop.<br></div>
					<div class="head2">708.713.8000</div>
					<a class="mail-to" title="Email Us!" href="mailto:info@homewoodbat.com">INFO@HOMEWOODBAT.COM</a>
					<div class="head2">HOMEWOOD BAT CO<br>17845 BRETZ DRIVE<br>HOMEWOOD, ILLINOIS 60430</div>
				</div>
			</div>
		</div>
		<div class="sec-spacer"></div>
		<div id="sec5" class="title-cont">
			<div class="line line-left"></div>
			<div class="title">ABOUT US</div>
			<div class="line line-right"></div>
		</div>
		<div class="sec-spacer"></div>
		<div class="section">
			<div class="sec-body full">
				<div class="head1">WHY ANOTHER BAT COMPANY?</div>
				<div class="star">&#9733;</div>
				<div class="head">BECAUSE THIS IS A BASEBALL TOWN</div>
				<div class="copy">We are located only 20 miles south of Chicago, a city that loves baseball so much that it has two professional teams. If you haven't experienced Chicago baseball, have you really experienced Chicago? Complete the experience by visiting a local company that loves baseball as much as the region it calls home.</div>
				<div class="star">&#9733;</div>
				<div class="head">BECAUSE THIS IS OUR DREAM</div>
				<div class="copy">Creating bats in a plant where visitors can see that process and customize their bat has been a dream many years in the making. Patience and prayer have made that dream a reality. We know the quality of each bat will show our commitment to creating a fine and lasting product.</div>
				<div class="star">&#9733;</div>
				<div class="head">BECAUSE BASEBALL BRINGS PEOPLE TOGETHER</div>
				<div class="copy">For generations families, neighbors, friend and foe alike, have gathered in their local park, in Grandma's back yard, and in professional stadiums to enjoy a game of baseball... </div>
				<div class="star">&#9733;</div>
				<div class="head">COME VISIT US AND SEE FOR YOURSELF!</div>
			</div>
		</div>
		<div class="sec-spacer"></div>
		<div class="our-staff">&#9733;&nbsp;OUR FREINDLY STAFF&nbsp;&#9733;</div>
		<div class="section">
			<div class="staff-sec-cont">
				<div class="staffer">
					<div class="staffer-img" id="todd"></div>
					<div class="staffer-title">TODD PALS</div>
					<div class="staffer-sub">PRESIDENT</div>
				</div>
				<div class="staffer">
					<div class="staffer-img" id="dan"></div>
					<div class="staffer-title">DAN GIBSON</div>
					<div class="staffer-sub">VICE PRESIDENT<br>SALES</div>
				</div>
				<div class="staffer">
					<div class="staffer-img" id="craig"></div>
					<div class="staffer-title">CRAIG OLTOFF</div>
					<div class="staffer-sub">PRODUCTION MANAGER</div>
				</div>
				<div class="staffer">
					<div class="staffer-img" id="carly"></div>
					<div class="staffer-title">CARLY HOGAN</div>
					<div class="staffer-sub">LASER ENGRAVER<br>EXTRAORDINARE</div>
				</div>
				<div class="staffer staffer-spec">
					<div class="staffer-img" id="pam"></div>
					<div class="staffer-title">PAMELA PALS</div>
					<div class="staffer-sub"></div>
				</div>
			</div>
		</div>
		<div class="sec-spacer"></div>
		<div class="section">
			<div class="head3">THE SWEET SOUND OF A HOMEWOOD BAT<sup>&#xae;</sup></div>
		</div>
		<div class="sec-spacer"></div>
	</div>
	<div class="footer">

		<div class="footer-icons-cont">
			<div class="footer-icons">
				<div class="footer-icon">
					<a href="https://www.facebook.com/homewoodbat/" target="_blank"><div class="fIcon" id="facebook"></div></a>
				</div>
				<div class="footer-icon">
					<a href="https://www.instagram.com/homewoodbat/" target="_blank"><div class="fIcon" id="instagram"></div></a>
				</div>
				<div class="footer-icon">
					<a href="https://twitter.com/HomewoodBat/" target="_blank"><div class="fIcon" id="twitter"></div></a>
				</div>
			</div>
		</div>

		<div class="footer-text">HOMEWOOD BAT CO | 17845 BRETZ DRIVE | HOMEWOOD IL 60430 | 708.713.8000 | INFO@HOMEWOODBAT.COM | ©2016 ALL RIGHTS RESERVED</div>
	</div>



</body>
</html>
