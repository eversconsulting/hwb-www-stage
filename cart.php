<!DOCTYPE html>
<html> 
<head>
	<title>Homewood Bat</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="script.js"></script>
	<script type="text/javascript" src="cart.js"></script>
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
		
			<div class="cart-list">

			</div>
		
	</div>
	
	<div class="footer">
		Homewoodbat &middot; addressss goes here lala &middot; (555) - 555 - 5555
	</div>
	
</body>
</html>