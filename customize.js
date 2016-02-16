$bat = "";


$(document).ready(function() {
	

	$bat = getParameterByName('id');
	$ackChecked = false;

	$('#models-select').on('change', function() {
		$model = $(this).val();

		switch ($model) {
			case "024":
				$mDesc = "Medium / large barrel diameter, Medium / long barrel, thin handle, flared knob";
			
				break;
			case "110":
				$mDesc = "Medium barrel diameter, long barrel, thick handle, regular knob";
				break;
			case "271":
				$mDesc = "Medium barrel diameter, Tapered barrel, medium handle, flared knob";
				break;
			case "243":
				$mDesc = "Large barrel diameter, long barrel , medium handle, regular knob";
				break;
			case "141":
				$mDesc = "Medium barrel diameter, long barrel, thin handle, regular knob";
				break;
		}

		$("#details-body").text($mDesc);
		
	});


	$("#cb-mobile").click(function() {
		$customAreaShownM = $("#mobile-bat").is(":visible");

		
		if($customAreaShownM)
			$("#mobile-bat").slideUp();

		else{

			$("#mobile-bat").slideDown();
			$("#mobile-bat").scrollView();

			

			switch ($bat) {
				case 'pro':

					$lengths = ["32", "32.5", "33", "33.5", "34", "34.5"];
					$weights = ["-3", "-2", "-1", "0"];
					$woods = ["MAPLE", "ASH", "BIRCH"];
					$desc = ["Medium / large barrel diameter, Medium / long barrel, thin handle, flared knob", "Medium barrel diameter, long barrel, thick handle, regular knob", "Medium barrel diameter, long barrel, thin handle, regular knob", "Large barrel diameter, long barrel , medium handle, regular knob", "Medium barrel diameter, Tapered barrel, medium handle, flared knob"];


					break;
				case 'game':

					$lengths = ["31", "32", "32.5", "33", "33.5", "34", "34.5"];
					$weights = ["-3", "-2", "-1", "0"];
					$woods = ["ASH", "BIRCH"];
					$desc = ["Medium / large barrel diameter, Medium / long barrel, thin handle, flared knob", "Medium barrel diameter, long barrel, thick handle, regular knob", "Medium barrel diameter, long barrel, thin handle, regular knob", "Large barrel diameter, long barrel , medium handle, regular knob", "Medium barrel diameter, Tapered barrel, medium handle, flared knob"];


					break;
				case 'youth':
					$lengths = ["26", "27", "28", "29", "30"];
					$weights = ["-3", "-2", "-1", "0"];
					$woods = ["ASH", "BIRCH"];

					break;
				case 'fungo':
					$lengths = ["34", "35", "35.5", "36"];
					$weights = ["-3", "-2", "-1", "0"];
					$woods = ["MAPLE"];

					break;
				case 'promo':
					$lengths = ["34", "35", "35.5", "36"];
					$weights = ["-3", "-2", "-1", "0"];
					$woods = ["MAPLE"];

					break;
				
				default:
					
					break;
			}

			jQuery.each( $lengths, function(i, val)  {
				$("#length-select").append('<option class="option-select" id='+val+'>'+val+'"</div>');
			});

			jQuery.each( $weights, function(i, val)  {
				$("#weight-select").append("<option class='option-select' id="+val+">"+val+"</div>");
			});

			jQuery.each( $woods, function(i, val)  {
				$("#wood-select").append("<option class='option-select' id="+val+">"+val+"</div>");
			});
	   	}	
	});

	


	$(".ack-check").click(function() {
		$ackChecked = $(".ack-checked").is(":visible");
		if($ackChecked){
			$(".ack-checked").hide();
		}
		else{
			$(".ack-checked").show();
		}
		
	});
	$("#cb").click(function() {
		$customAreaShown = $("#desktop-bat").is(":visible");

		
		if($customAreaShown)
			$("#desktop-bat").slideUp();

		else{

			$("#desktop-bat").slideDown();
			$("#desktop-bat").scrollView();


			switch ($bat) {
				case 'pro':

					$lengths = ["32", "32.5", "33", "33.5", "34", "34.5"];
					$weights = ["-3", "-2", "-1", "0"];
					$woods = ["MAPLE", "ASH", "BIRCH"];
					$desc = ["Medium / large barrel diameter, Medium / long barrel, thin handle, flared knob", "Medium barrel diameter, long barrel, thick handle, regular knob", "Medium barrel diameter, long barrel, thin handle, regular knob", "Large barrel diameter, long barrel , medium handle, regular knob", "Medium barrel diameter, Tapered barrel, medium handle, flared knob"];

					break;
				case 'game':

					$lengths = ["31", "32", "32.5", "33", "33.5", "34", "34.5"];
					$weights = ["-3", "-2", "-1", "0"];
					$woods = ["ASH", "BIRCH"];
					$desc = ["Medium / large barrel diameter, Medium / long barrel, thin handle, flared knob", "Medium barrel diameter, long barrel, thick handle, regular knob", "Medium barrel diameter, long barrel, thin handle, regular knob", "Large barrel diameter, long barrel , medium handle, regular knob", "Medium barrel diameter, Tapered barrel, medium handle, flared knob"];


					break;
				case 'youth':
					$lengths = ["26", "27", "28", "29", "30"];
					$weights = ["-3", "-2", "-1", "0"];
					$woods = ["ASH", "BIRCH"];

					break;
				case 'fungo':
					$lengths = ["34", "35", "35.5", "36"];
					$weights = ["-3", "-2", "-1", "0"];
					$woods = ["MAPLE"];

					break;
				case 'promo':
					$lengths = ["34", "35", "35.5", "36"];
					$weights = ["-3", "-2", "-1", "0"];
					$woods = ["MAPLE"];

					break;
				
				default:
					
					break;
			}

			jQuery.each( $lengths, function(i, val)  {
				$("#lengthList").append('<div class="colorL" id='+val+'>'+val+'"</div>');
			});

			jQuery.each( $weights, function(i, val)  {
				$("#weightList").append("<div class='color' id="+val+">"+val+"</div>");
			});

			jQuery.each( $woods, function(i, val)  {
				$("#woodList").append("<div class='colorX' id="+val+">"+val+"</div>");
			});
	   	}	


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

	$(".details-list-items").click(function() {
		$(".details-list-items").removeClass("model-select");

		$(this).addClass("model-select");
		
		$("#cb").removeClass("disable");


		



	});

	





});

function loadBatData(id) {
	

}

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

$.fn.scrollView = function () {
  return this.each(function () {
    $('html, body').animate({
      scrollTop: $(this).offset().top - 125
    }, 1000);
  });


 
}

function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}