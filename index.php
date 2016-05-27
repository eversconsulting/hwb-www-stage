<!DOCTYPE html>
<html>
<head>
	<title>Homewood Bat</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styles.css">

	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="script.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/shopify-cartjs/0.4.0/cart.min.js"></script>
	<script src="http://sdks.shopifycdn.com/js-buy-sdk/latest/shopify-buy.polyfilled.globals.min.js"></script>

	<script type="text/javascript" src="cart.js"></script>
	<script type="text/javascript" src="jquery-ui.js"></script>

</head>
<body>

	<div class="side-cart">
		<div class="cart-item-display">
			<div class="cart-top">
				<div class="cart-top-text">Your Cart</div>
				<div class="cart-top-close">&#10006;</div>
				<div class="cart-top-remove">remove</div>
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
		<div class="logo"></div>

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
			<div id="cart-c" class="cart">
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


	 <script type="text/javascript">
	// 	$cart = sessionStorage.getItem("cart");

	// 	if(!$cart){
	// 		sessionStorage.setItem("cart", 0);
	// 		$("#cartShow").text("Cart (" + sessionStorage.cart +")");
	// 	}

	// 	$("#cartShow").text("Cart (" + sessionStorage.cart +")");

	 </script>


	</div>

	<div class="section" id="sec1">

		<div class="img-top"></div>
		<div class="spacer">THE SWEET SOUND OF A HOMEWOOD BAT<sup>&#174;</sup></div>

	</div>

	<div class="section" id="sec2" style="background-color: rgb(250, 245, 234);">
			<div class="title-rowB">
				<div class="title-lineB"></div>
				<div class="section-titleB">BATS & ACCESSORIES</div>
				<div class="title-lineB"></div>
			</div>

				<div id="desktop-shop" class="shop-inner">
					<div class="shop-box">
					<a href="customize.php?id=pro"><div id="pro-bat" class="select-area"></div></a>
					<a href="customize.php?id=game"><div id="game-bat" class="select-area"></div></a>
					<a href="customize.php?id=fungo"><div id="fungo-bat" class="select-area"></div></a>
					<a href="customize.php?id=promo"><div id="promo-bat" class="select-area"></div></a>
					<a href="customize.php?id=youth"><div id="youth-bat" class="select-area"></div></a>

					</div>



					<div class="shop-container" id="s1">
						<div class="shop-item">
							<div class="item-picture"><img class="img-bat" src="assets/tshirt2.png"></div>
							<div class="item-desc">HBC SWEET SOUND SHORT SLEEVE SHIRT <br> $25</div>
						</div>


					</div>
					<div class="spacer-col"></div>
					<div class="shop-container" id="s2">
						<div class="shop-item">
							<div class="item-picture"><img class="img-bat" src="assets/tshirt.png"></div>
							<div class="item-desc">HBC DISTRESSED LOGO 3/4 SLEEVE SHIRT<br> $35</div>
						</div>


					</div>
					<div class="spacer-col"></div>
					<div class="shop-container" id="s3">
						<div class="shop-item">
							<div class="item-picture"><img class="img-bat" src="assets/hat.png"></div>
							<div class="item-desc">HBC LOGO HAT <br> $30</div>
						</div>

					</div>

					<div class="acc-info">TO ORDER ACCESSORIES CALL 708.713.8000 FOR SIZES AND COLORS <br> OR EMAIL US AT INFO@HOMEWOODBAT.COM</div>



				</div>

				<div id="mobile-shop" class="mobile-shop">
					<a href="customize.php?id=pro"><div class="mobile-item">
						<div class="mobile-item-title">PRO BAT</div>
						<div class="mobile-item-selector">&#x2771;</div>
					</div></a>
					<a href="customize.php?id=game"><div class="mobile-item">
						<div class="mobile-item-title">GAME BAT</div>
						<div class="mobile-item-selector">&#x2771;</div>
					</div></a>
					<a href="customize.php?id=youth"><div class="mobile-item">
						<div class="mobile-item-title">YOUTH BAT</div>
						<div class="mobile-item-selector">&#x2771;</div>
					</div></a>
					<a href="customize.php?id=fungo"><div class="mobile-item">
						<div class="mobile-item-title">FUNGO BAT</div>
						<div class="mobile-item-selector">&#x2771;</div>
					</div></a>
					<a href="customize.php?id=promo"><div class="mobile-item">
						<div class="mobile-item-title">PROMOTIONAL BAT</div>
						<div class="mobile-item-selector">&#x2771;</div>
					</div></a>
					<div class="mobile-item">
						<div class="mobile-item-title">ACCESSORIES</div>
						<div class="mobile-item-selector">&#x2771;</div>
					</div>

				</div>
	</div>
	<div class="section" id="sec3" style="background-color: rgb(250, 245, 234); height: 600px;">
		<div class="title-row">
				<div class="title-line"></div>
				<div class="section-title">NEWS</div>
				<div class="title-line"></div>
		</div>
		<div id="desktop-news" class="section-inner">
			<div class="cart-col">
				<div class="news-image"></div>
			</div>
			<div class="cart-col">
				<div class="news-title">PROSHOP NOW OPEN</div>
				<div class="news-sub">MON-FRI<br>11-5</div>
				<div class="news-sub">CALL FOR EVENING AND WEEKEND HOURS!</div>
				<!-- <div class="news-body">Please join us as we celebrate the Grand Opening of our shop and store! We are looking forward to sharing our new venture with friends, both old and new alike.<br>See you there!</div> -->
			</div>
		</div>
		<div id="mobile-news">
			<div class="cart-row">
				<div class="news-image"></div>
			</div>
			<div class="news-cont">
				<div class="news-title">PROSHOP NOW OPEN</div>
				<div class="news-sub">MON-FRI<br>11-5</div>
				<div class="news-sub">CALL FOR EVENING AND WEEKEND HOURS!</div>
				<!-- <div class="news-body">Please join us as we celebrate the Grand Opening of our shop and store! We are looking forward to sharing our new venture with friends, both old and new alike.<br>See you there!</div> -->
			</div>

		</div>

	</div>
	<div class="section" id="sec4" style="background-color: rgb(250, 245, 234);">
		<div class="title-row">
				<div class="title-line"></div>
				<div class="section-title">CONTACT</div>
				<div class="title-line"></div>
			</div>
		<div id="desktop-contact" class="section-inner" style="height: auto;">
				<div class="cart-col" style="width: auto;">
					<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2985.1704947532794!2d-87.63521178505906!3d41.56555449289474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e18bb669d2c65%3A0xff83244a990b75e2!2s17845+Bretz+Dr%2C+Homewood%2C+IL+60430!5e0!3m2!1sen!2sus!4v1455171054605" width="400" height="400" frameborder="0" style="border:0" allowfullscreen></iframe></div>
				</div>
				<div class="cart-col" >
					<div id="col-inner-contact" class="col-inner">
						<div class="contact-info">
							<div class="contact-p">
								<div>We'd love to talk with you about your special bat needs. Please feel free to give us a call, send an email, or stop in for a look at our shop.</div>
							</div>
							<p>
							708.713.8000<br><a class="mail-to" title="Email Us!" href="mailto:info@homewoodbat.com">INFO@HOMEWOODBAT.COM</a>
							<p>
							HOMEWOOD BAT CO<br>17845 BRETZ DRIVE<br>HOMEWOOD, ILLINOIS 60430
						</div>
		</div>
					</div>
				</div>

		<div id="mobile-contact" class="mobile-contact">
			<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2985.1704947532794!2d-87.63521178505906!3d41.56555449289474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e18bb669d2c65%3A0xff83244a990b75e2!2s17845+Bretz+Dr%2C+Homewood%2C+IL+60430!5e0!3m2!1sen!2sus!4v1455171054605" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></div>
			<div class="contact-info">
				<div class="contact-p">
					<div>We'd love to talk with you about your special bat needs. Please feel free to give us a call, send an email, or stop in for a look at our shop.</div>
				</div>
				<p>
				708.713.8000<br><a class="mail-to" title="Email Us!" href="mailto:info@homewoodbat.com">INFO@HOMEWOODBAT.COM</a>
				<p>
				HOMEWOOD BAT CO<br>17845 BRETZ DRIVE<br>HOMEWOOD, ILLINOIS 60430
			</div>
		</div>
	</div>
	<div class="section" id="sec5" style="background-color: rgb(250, 245, 234);">
		<div class="title-row">
				<div class="title-line"></div>
				<div class="section-title">ABOUT US</div>
				<div class="title-line"></div>
		</div>
		<div id="desktop-about" class="section-inner">
			<div class="about-title">WHY ANOTHER BAT COMPANY?</div>
			<div class="star">&#9733;</div>
			<div class="about-body">
				<div class="about-sub">Because this is a baseball town.<br><br></div>
				We are located only 20 miles south of Chicago, a city that loves baseball so much that it has two professional teams. If you haven't experienced Chicago baseball, have you really experienced Chicago? Complete the experience by visiting a local company that loves baseball as much as the region it calls home.
				<div class="star">&#9733;</div>
				<div class="about-sub">Because this is our dream.<br><br></div>
				Creating bats in a plant where visitors can see that process and customize their bat has been a dream many years in the making. Patience and prayer have made that dream a reality. We know the quality of each bat will show our commitment to creating a fine and lasting product.
				<div class="star">&#9733;</div>
				<div class="about-sub">Because baseball brings people together.<br><br></div>
				For generations families, neighbors, friend and foe alike, have gathered in their local park, in Grandma's back yard, and in professional stadiums to enjoy a game of baseball...
				<div class="star">&#9733;</div>
				<div class="about-sub" id="bottom-sub">Come visit us and see for yourself!</div>
			</div>

			<div class="title-row-staff">
				<div class="staff-title-inner">
					<div class="title-line-staff"></div>
					<div class="section-title-staff">OUR FRIENDLY STAFF</div>
					<div class="title-line-staff"></div>
				</div>
			</div>



			<div class="staff-container">
				<div class="staff-inner-top">
					<div class="staffer-top">
						<div class="staff-image-top" id="todd"></div>
						<div class="staff-title-top">TODD PALS</div>
						<div class="staff-caption-top">PRESIDENT</div>
					</div>
					<div class="staffer-top">
						<div class="staff-image-top" id="pam"></div>
						<div class="staff-title-top">PAMELA PALS</div>
						<div class="staff-caption-top">THE BOSS</div>
					</div>
				</div>
				<div class="staff-inner-bottom">
					<div class="staffer-bottom">
						<div class="staff-image-bottom" id="dan"></div>
						<div class="staff-title-bottom">DAN GIBSON</div>
						<div class="staff-caption-bottom">VICE PRESIDENT <BR>SALES</div>
					</div>
					<div class="staffer-bottom">
						<div class="staff-image-bottom" id="craig"></div>
						<div class="staff-title-bottom">CRAIG OLTOFF</div>
						<div class="staff-caption-bottom">PRODUCTION <BR>MANAGER</div>
					</div>
					<div class="staffer-bottom">
						<div class="staff-image-bottom" id="carly"></div>
						<div class="staff-title-bottom">CARLY HOGAN</div>
						<div class="staff-caption-bottom">LASER ENGRAVER <br> EXTRAORDINARE</div>
					</div>

				</div>
			</div>




			<div class="cart-row">

			</div>





			<div class="sweet-sound">THE SWEET SOUND OF A HOMEWOOD BAT<sup>&#174;</sup></div>

		</div>

		<div id="mobile-about" class="mobile-about">
			<div class="about-title">WHY ANOTHER BAT COMPANY?</div>
			<div class="star">&#9733;</div>
			<div class="about-body">
				<div class="about-sub">Because this is a baseball town.<br><br></div>
				We are located only 20 miles south of Chicago, a city that loves baseball so much that it has two professional teams. If you haven't experienced Chicago baseball, have you really experienced Chicago? Complete the experience by visiting a local company that loves baseball as much as the region it calls home.
				<div class="star">&#9733;</div>
				<div class="about-sub">Because this is our dream.<br><br></div>
				Creating bats in a plant where visitors can see that process and customize their bat has been a dream many years in the making. Patience and prayer have made that dream a reality. We know the quality of each bat will show our commitment to creating a fine and lasting product.
				<div class="star">&#9733;</div>
				<div class="about-sub">Because baseball brings people together.<br><br></div>
				For generations families, neighbors, friend and foe alike, have gathered in their local park, in Grandma's back yard, and in professional stadiums to enjoy a game of baseball...
				<div class="star">&#9733;</div>
				<div class="about-sub">Come visit us and see for yourself!</div>
			</div>

			<div class="title-row">
				<div class="title-line title-line-staff"></div>
				<div id="staff-title" class="section-title">OUR FRIENDLY STAFF</div>
				<div class="title-line title-line-staff"></div>
			</div>

			<div class="cart-row">
				<div class="cart-col">
					<div class="staff-image" id="todd"></div>
					<div class="staff-name">TODD PALS</div>
					<div class="staff-caption">PRESIDENT</div>
				</div>
				<div class="cart-col">
					<div class="staff-image" id="dan"></div>
					<div class="staff-name">DAN GIBSON</div>
					<div class="staff-caption">VICE PRESIDENT<br>SALES</div>
				</div>

			</div>
			<div class="cart-row">
				<div class="cart-col">
					<div class="staff-image" id="craig"></div>
					<div class="staff-name">CRAIG OLTHOFF</div>
					<div class="staff-caption">PRODUCTION<br>MANAGER</div>
				</div>
				<div class="cart-col">
					<div class="staff-image" id="carly"></div>
					<div class="staff-name">CARLY HOGAN</div>
					<div class="staff-caption">LASER ENGRAVER<br>EXTRAORDINAIRE</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">

		<div class="footer-icons">
			<a href="https://www.instagram.com/homewoodbat/" target="_blank"><div id="instagram" class="nav-icon"></div></a>
			<a href="https://www.facebook.com/homewoodbat/" target="_blank"><div id="facebook" class="nav-icon"></div></a>
			<a href="https://twitter.com/HomewoodBat/" target="_blank"><div id="twitter" class="nav-icon"></div></a>
		</div>
		<div class="footer-text">HOMEWOOD BAT CO | 17845 BRETZ DRIVE | HOMEWOOD IL 60430 | 708.713.8000 | INFO@HOMEWOODBAT.COM | &copy;2016 ALL RIGHTS RESERVED</div>
	</div>

</body>
</html>
