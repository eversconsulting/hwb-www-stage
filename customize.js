$batColor = "none";
$handleColor = "none";


$(document).ready(function() {
	$("#cartShow").text("Cart (" + sessionStorage.cart +")");
	

	$batFilled = sessionStorage.getItem("bats");

	if(!$batFilled){
		$bats = ["empty"];
		sessionStorage.setItem("bats", JSON.stringify($bats));
	}

	


	
	$("#customize").click(function() {
	   	// 	$(".customize-area").animate({
					//     height: "200"
					//   }, 500, function() {
					//     // Animation complete.
					// });
		$customAreaShown = $(".customize-area").is(":visible");

		if($customAreaShown)
			$(".customize-area").slideUp();

		else
			$(".customize-area").slideDown();
	   		


	   });

	$("#hR").click(function() {
		$handleColor = "red";
		checkCustom();

		$(this).addClass("colorSelected");
		$("#hB").removeClass("colorSelected");
		$("#hG").removeClass("colorSelected");


	});
	$("#hB").click(function() {
		$handleColor = "blue";
		checkCustom();

		$(this).addClass("colorSelected");
		$("#hR").removeClass("colorSelected");
		$("#hG").removeClass("colorSelected");
	});
	$("#hG").click(function() {
		$handleColor = "green";
		checkCustom();

		$(this).addClass("colorSelected");
		$("#hB").removeClass("colorSelected");
		$("#hR").removeClass("colorSelected");
	});
	$("#bR").click(function() {
		$batColor = "red";
		checkCustom();

		$(this).addClass("colorSelected");
		$("#bB").removeClass("colorSelected");
		$("#bG").removeClass("colorSelected");
	});
	$("#bB").click(function() {
		$batColor = "blue";
		checkCustom();

		$(this).addClass("colorSelected");
		$("#bR").removeClass("colorSelected");
		$("#bG").removeClass("colorSelected");
	});
	$("#bG").click(function() {
		$batColor = "green";
		checkCustom();

		$(this).addClass("colorSelected");
		$("#bB").removeClass("colorSelected");
		$("#bR").removeClass("colorSelected");
	});

	

	$('#handleSelect').on('change', function() {
	  	$handleColor = $(this).val();
	  	checkCustom();
	});

	$('#batSelect').on('change', function() {
	  	$batColor = $(this).val();
	  	checkCustom();
	});

	$("#add").click(function() {
		sessionStorage.cart = parseInt(sessionStorage.cart) + 1;
   		$cartAmount = sessionStorage.cart;
   		$("#cartShow").text("Cart (" + sessionStorage.cart +")");
   		sendBat($handleColor, $batColor);
	});

	





});

function checkCustom() {
	if(($handleColor != "none") && ($batColor != "none")){
		$("#add").removeClass("disable");
	}
}

function sendBat(handle, bat) {
	$h = 'none';
	$b = 'none';

//Create new batKey for a new bat in cart

	switch(handle){
		case 'red':
			$h = 'r';
			break;
		case 'blue':
			$h = 'b';
			break;
		case 'green':
			$h = 'g';
			break;
		default:
			$h = 'none';
	}

	switch(bat){
		case 'red':
			$b = 'r';
			break;
		case 'blue':
			$b = 'b';
			break;
		case 'green':
			$b = 'g';
			break;
		default:
			$b = 'none';
	}

	$batKey = $h + $b;

	$batData = sessionStorage.getItem("bats");

	$bats = JSON.parse($batData);

	if($bats[0] == "empty"){
		$bats.splice(0, 1);
		$bats.push($batKey);

	}
	else{
		$bats.push($batKey);

	}


	
	sessionStorage.setItem("bats", JSON.stringify($bats));


	$batData = sessionStorage.getItem("bats");

	$bats = JSON.parse($batData);

	console.log($bats);

}