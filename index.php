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

	<script type="text/javascript">
		$cart = sessionStorage.getItem("cart");

		if(!$cart){
			sessionStorage.setItem("cart", 0);
			$("#cartShow").text("Cart (" + sessionStorage.cart +")");
		}
		
		$("#cartShow").text("Cart (" + sessionStorage.cart +")");
		
	</script>


	</div>
	
	<div class="section" id="sec1" style="background-color: rgb(53, 95, 106);">
		
		<img class="img-top" src="assets/baseball.jpg">
		<div class="spacer">the sweet sound of a homewood bat</div>

	</div>
	<div class="section" id="sec2" style="background-color: #FAF5EA;">
			<div class="section-title">SHOP</div>
				<div class="shop-inner">
					<div class="shop-container" id="s1">
						<div class="shop-item">
							<a href="customize.php?id=pro"><div class="item-picture"></div></a>
							<div class="item-desc">Pro Bat</div>
						</div>
						<div class="shop-item">
							<a href="customize.php?id=fungo"><div class="item-picture"></div></a>
							<div class="item-desc">Fungo Bat</div>
						</div>
						<div class="shop-item">
							<a href="customize.php?id=gift"><div class="item-picture"></div></a>
							<div class="item-desc">Gift Card</div>
						</div>
					</div>
					<div class="spacer-col"></div>
					<div class="shop-container" id="s2">
						<div class="shop-item">
							<a href="customize.php?id=game"><div class="item-picture"></div></a>
							<div class="item-desc">Game Bat</div>
						</div>
						<div class="shop-item">
							<a href="customize.php?id=promo"><div class="item-picture"></div></a>
							<div class="item-desc">Promotional Bat</div>
						</div>
						
					</div>
					<div class="spacer-col"></div>
					<div class="shop-container" id="s3">
						<div class="shop-item">
							<a href="customize.php?id=youth"><div class="item-picture"></div></a>
							<div class="item-desc">Youth Bat</div>
						</div>
						<div class="shop-item">
							<a href="customize.php?id=accessories"><div class="item-picture"></div></a>
							<div class="item-desc">Accessories</div>
						</div>
						
						
					</div>
				</div>
				<div class="shop-tab">
					<div class="shop-container" id="s1">
						<div class="shop-item">
							<a href="customize.php?id=1"><div class="item-picture"></div></a>
							<div class="item-desc">Test Bat</div>
						</div>
						<div class="shop-item">
							<a href="customize.php?id=2"><div class="item-picture"></div></a>
							<div class="item-desc">Test Bat</div>
						</div>
						<div class="shop-item">
							<a href="customize.php?id=3"><div class="item-picture"></div></a>
							<div class="item-desc">Test Bat</div>
						</div>
						<div class="shop-item">
							<a href="customize.php?id=4"><div class="item-picture"></div></a>
							<div class="item-desc">Test Bat</div>
						</div>
					</div>
					<div class="spacer-col"></div>
					<div class="shop-container" id="s2">
						<div class="shop-item">
							<a href="customize.php?id=5"><div class="item-picture"></div></a>
							<div class="item-desc">Test Bat</div>
						</div>
						<div class="shop-item">
							<a href="customize.php?id=6"><div class="item-picture"></div></a>
							<div class="item-desc">Test Bat</div>
						</div>
						<div class="shop-item">
							<a href="customize.php?id=7"><div class="item-picture"></div></a>
							<div class="item-desc">Test Bat</div>
						</div>
						<div class="shop-item">
							<a href="customize.php?id=8"><div class="item-picture"></div></a>
							<div class="item-desc">Apparel</div>
						</div>
					</div>
				</div>
				<div class="shop-small">
					<div class="shop-container">
						<div class="shop-item">
							<a href="customize.php?id=1"><a href="customize.php"><div class="item-picture"></div></a></a>
							<div class="item-desc">Test Bat</div>
						</div>

						<div class="shop-item">
							<a href="customize.php?id=2"><div class="item-picture"></div></a>
							<div class="item-desc">Test Bat</div>
						</div>
						<div class="shop-item">
							<a href="customize.php?id=3"><div class="item-picture"></div></a>
							<div class="item-desc">Test Bat</div>
						</div>
						<div class="shop-item">
							<a href="customize.php?id=4"><div class="item-picture"></div></a>
							<div class="item-desc">Test Bat</div>
						</div>
						<div class="shop-item">
							<a href="customize.php?id=5"><div class="item-picture"></div></a>
							<div class="item-desc">Test Bat</div>
						</div>
						<div class="shop-item">
							<a href="customize.php?id=6"><div class="item-picture"></div></a>
							<div class="item-desc">Test Bat</div>
						</div>
						<div class="shop-item">
							<a href="customize.php?id=7"><div class="item-picture"></div></a>
							<div class="item-desc">Test Bat</div>
						</div>
						<div class="shop-item">
							<a href="customize.php?id=8"><div class="item-picture"></div></a>
							<div class="item-desc">Apparel</div>
						</div>
					</div>
				</div>

		
	</div>
	<div class="section" id="sec3" style="background-color:  #2F4F4F;">
		<div class="section-inner">
			<div class="section-title">ABOUT US</div>
			
		</div>
	</div>
	<div class="footer">
		Homewood Bat Co | 17845 Brets drive | homewood il 60430 | 708.713.8000 | info@homewoodbat.com | &copy;2016 all rights reserved
	</div>
	
</body>
</html>