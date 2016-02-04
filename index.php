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
			<li id="cartShow">Cart ( )</li>
		</ul>
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
	
	<div class="section" id="sec1" style="background-color: #2F4F4F;">
		
		<img class="img-top" src="assets/baseball.jpg">
		<div class="spacer">the sweet sound of a homewood bat</div>

	</div>
	<div class="section" id="sec2" style="background-color: #F0EAD6;">
			<div class="section-title">SHOP</div>
				<div class="shop-inner">
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
					</div>
					<div class="spacer-col"></div>
					<div class="shop-container" id="s2">
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
							<div class="item-desc">Apparel</div>
						</div>
					</div>
					<div class="spacer-col"></div>
					<div class="shop-container" id="s3">
						<div class="shop-item">
							<a href="customize.php?id=7"><div class="item-picture"></div></a>
							<div class="item-desc">Test Bat</div>
						</div>
						<div class="shop-item">
							<a href="customize.php?id=8"><div class="item-picture"></div></a>
							<div class="item-desc">Test Bat</div>
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
		Homewoodbat &middot; addressss goes here lala &middot; (555) - 555 - 5555
	</div>
	
</body>
</html>