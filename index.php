<!DOCTYPE html>
<html> 
<head>
	<title>Homewood Bat</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	
	<div class="navbar">
		<div class="logo"></div>
		
		<ul class="navbar-items">
			<a href="index.php"><li>HOME</li></a>
			<li>SHOP</li>
			<li>NEWS</li>
			<li>CONTACT</li>
			<li>ABOUT</li>
			<a href="cart.php"><li id="cartShow">CART ( )</li></a>
		</ul>

		<div class="navbar-icons">
			<div class="nav-icon"></div>
			<div class="nav-icon"></div>
			<div class="nav-icon"></div>
		</div>
		<div class="hamburger"></div>
	</div>
	<div class="navbar-spacer"></div>
	<div class="slide-menu">

	<script type="text/javascript">
		$cart = sessionStorage.getItem("cart");

		if(!$cart){
			sessionStorage.setItem("cart", 0);
			$("#cartShow").text("Cart (" + sessionStorage.cart +")");
		}
		
		$("#cartShow").text("Cart (" + sessionStorage.cart +")");
		
	</script>


	</div>
	
	<div class="section" id="sec1">
		
		<img class="img-top" src="assets/baseball.jpg">
		<div class="spacer">THE SWEET SOUND OF A HOMEWOOD BAT</div>

	</div>
	<div class="section" id="sec2" style="background-color: rgb(250, 245, 234);">
			<div class="title-row">
				<div class="title-line"></div>
				<div class="section-title">SHOP</div>
				<div class="title-line"></div>
			</div>
				<div class="shop-inner">
					<div class="shop-container" id="s1">
						<div class="shop-item">
							<a href="customize.php?id=pro"><div class="item-picture"></div></a>
							<div class="item-desc">PRO BAT</div>
						</div>
						<div class="shop-item">
							<a href="customize.php?id=fungo"><div class="item-picture"></div></a>
							<div class="item-desc">FUNGO BAT</div>
						</div>
						<div class="shop-item">
							<a href="customize.php?id=gift"><div class="item-picture"></div></a>
							<div class="item-desc">GIFT CARD</div>
						</div>
					</div>
					<div class="spacer-col"></div>
					<div class="shop-container" id="s2">
						<div class="shop-item">
							<a href="customize.php?id=game"><div class="item-picture"></div></a>
							<div class="item-desc">GAME BAT</div>
						</div>
						<div class="shop-item">
							<a href="customize.php?id=promo"><div class="item-picture"></div></a>
							<div class="item-desc">PROMOTIONAL BAT</div>
						</div>
						
					</div>
					<div class="spacer-col"></div>
					<div class="shop-container" id="s3">
						<div class="shop-item">
							<a href="customize.php?id=youth"><div class="item-picture"></div></a>
							<div class="item-desc">YOUTH BAT</div>
						</div>
						<div class="shop-item">
							<a href="customize.php?id=accessories"><div class="item-picture"></div></a>
							<div class="item-desc">ACCESSORIES</div>
						</div>
						
						
					</div>
				</div>		
	</div>
	<div class="section" id="sec3" style="background-color: rgb(250, 245, 234);">
		<div class="title-row">
				<div class="title-line"></div>
				<div class="section-title">NEWS</div>
				<div class="title-line"></div>
			</div>
		<div class="section-inner">
			
			
		</div>
	</div>
	<div class="section" id="sec4" style="background-color: rgb(250, 245, 234); height: 600px;">
		<div class="title-row">
				<div class="title-line"></div>
				<div class="section-title">CONTACT</div>
				<div class="title-line"></div>
			</div>
		<div class="section-inner" style="height: auto;">
			
				<div class="cart-col" style="width: auto;">
					<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2985.1704947532794!2d-87.63521178505906!3d41.56555449289474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e18bb669d2c65%3A0xff83244a990b75e2!2s17845+Bretz+Dr%2C+Homewood%2C+IL+60430!5e0!3m2!1sen!2sus!4v1455171054605" width="400" height="400" frameborder="0" style="border:0" allowfullscreen></iframe></div>
				</div>
				<div class="cart-col" >
					<div class="col-inner">
						<div class="contact-info">
							<div class="contact-p">
								<div>We'd love to talk with you about your special bat needs. Please feel free to give us a call, send an email, or stop in for a look at our shop.</div>
							</div>
							<p>
							708.713.8000<br>INFO@HOMEWOODBAT.COM
							<p>
							HOMEWOOD BAT CO<br>17845 BRETS DRIVE<br>HOMEWOOD, ILLINOIS 60430
						</div>


					</div>
				</div>
			
		</div>
	</div>
	<div class="section" id="sec5" style="background-color: rgb(250, 245, 234);">
		<div class="title-row">
				<div class="title-line"></div>
				<div class="section-title">ABOUT</div>
				<div class="title-line"></div>
			</div>
		<div class="section-inner">
			<div class="about-title">WHY ANOTHER BAT COMPANY?</div>
			<p>
			<div class="about-body">
				<div class="about-sub">Because this is a baseball town.<br><br></div>
				We are located only 20 miles south of Chicago, a city that loves baseball so much that it has two professional teams. If you haven't experienced Chicago baseball, have you really experienced Chicago? Complete the experience by visiting a local company that loves baseball as much as the region it calls home.
				<br>
				<br>
				<div class="about-sub">Because this is our dream.<br><br></div>
				Creating bats in a plant where visitors can see that process and customize their bat has been a dream many years in the making. Patience and prayer have made that dream a reality. We know the quality of each bat will show our commitment to creating a fine and lasting product.
				<br>
				<br>
				<div class="about-sub">Because baseball brings people together.<br><br></div>
				For generations families, neighbors, friend and foe alike, have gathered in their local park, in Grandma's back yard, and in professional stadiums to enjoy a game of baseball...
				<br>
				<br>
				<div class="about-sub">Come visit us and see for yourself!</div>
			</div>
		</div>
	</div>
	<div class="footer">
		HOMEWOOD BAT CO | 17845 BRETS DRIVE | HOMEWOOD IL 60430 | 708.713.8000 | INFO@HOMEWOODBAT.COM | &copy;2016 ALL RIGHTS RESERVED
	</div>
	
</body>
</html>