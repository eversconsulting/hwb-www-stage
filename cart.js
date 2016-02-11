
$(document).ready(function(){
	getBats();


	$(".cart-item").click(function() {
		$(this).css("background-color", "lightblue");

	});

	$(".cart-item").dblclick(function() {
		$(this).css("background-color", "transparent");

	});
	
});

function getBats(){
	$inCart = [];
	$batData = sessionStorage.getItem("bats");
	$bats = JSON.parse($batData);

	
	$.each( $bats, function( index, value ){
    	//break down bat key for each bat

    	//get handle color
    	$handleColor = value.charAt(0);

		//translate to full info

    	switch($handleColor){
			case 'r':
				$h = 'Red';
				break;
			case 'b':
				$h = 'Blue';
				break;
			case 'g':
				$h = 'Green';
				break;
			default:
				$h = 'none';
			}

		//get bat color
    	$batColor = value.charAt(1);

    	//translate to full info

		switch($batColor){
			case 'r':
				$b = 'Red';
				break;
			case 'b':
				$b = 'Blue';
				break;
			case 'g':
				$b = 'Green';
				break;
			default:
				$b = 'none';
			}

    	$bat = {
    		handle: $h,
    		bat: $b

    	};

    	$inCart.push($bat);
    	
		$(".cart-check").append('<div class="cart-mark"></div>');
    	$(".cart-list").append('<div class="cart-item" id="item'+index+'"><div class="cart-row"><div class="cart-title">Homewood Test Bat v21</div><div class="cart-price">$59.99</div></div><div class="cart-col"><div class="cart-row"><div class="cart-label">Bat Color:</div><div class="cart-info">'+$b+'</div></div><div class="cart-row"><div class="cart-label">Handle Color:</div><div class="cart-info">'+$h+'</div></div></div></div>');

	});

	
	
}