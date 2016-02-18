$bat = "";


$(document).ready(function() {
	
	$currentModel = '';
	$customTitle = '';
	$price = '';
	$bat = getParameterByName('id');
	$ackChecked = false;



	$('#models-select').on('change', function() {
		$model = $(this).val();
		$currentModel = $model;

		switch ($model) {
			case "024":
				$mDesc = "Medium / large barrel diameter, Medium / long barrel, thin handle, flared knob";
				$b = 'BARREL = 2.50"';
				$h = 'HANDLE = .92"';
				break;
			case "110":
				$mDesc = "Medium barrel diameter, long barrel, thick handle, regular knob";
				$b = 'BARREL = 2.46"';
				$h = 'HANDLE = .97"';
				break;
			case "271":
				$mDesc = "Medium barrel diameter, Tapered barrel, medium handle, flared knob";
				$b = 'BARREL = 2.48"';
				$h = 'HANDLE = .94"';
				break;
			case "243":
				$mDesc = "Large barrel diameter, long barrel , medium handle, regular knob";
				$b = 'BARREL = 2.52"';
				$h = 'HANDLE = .94"';
				break;
			case "141":
				$mDesc = "Medium barrel diameter, long barrel, thin handle, regular knob";
				$b = 'BARREL = 2.46"';
				$h = 'HANDLE = .92"';
				break;
		}

		$("#details-body").text($mDesc);
		$("#barrel").text($b);
		$("#handle").text($h);
		
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
					$woods = ["MAPLE | $120", "ASH | $100", "BIRCH | $100"];
					$desc = ["Medium / large barrel diameter, Medium / long barrel, thin handle, flared knob", "Medium barrel diameter, long barrel, thick handle, regular knob", "Medium barrel diameter, long barrel, thin handle, regular knob", "Large barrel diameter, long barrel , medium handle, regular knob", "Medium barrel diameter, Tapered barrel, medium handle, flared knob"];
					$customTitle = "PRO BAT";
					$price = "$120";

					break;
				case 'game':

					$lengths = ["31", "32", "32.5", "33", "33.5", "34", "34.5"];
					$weights = ["-3", "-2", "-1", "0"];
					$woods = ["ASH", "BIRCH"];
					$desc = ["Medium / large barrel diameter, Medium / long barrel, thin handle, flared knob", "Medium barrel diameter, long barrel, thick handle, regular knob", "Medium barrel diameter, long barrel, thin handle, regular knob", "Large barrel diameter, long barrel , medium handle, regular knob", "Medium barrel diameter, Tapered barrel, medium handle, flared knob"];
					$customTitle = "GAME BAT";
					$price = "$70";

					break;
				case 'youth':
					$lengths = ["26", "27", "28", "29", "30"];
					$weights = ["-3", "-2", "-1", "0"];
					$woods = ["ASH", "BIRCH"];
					$customTitle = "GAME BAT";
					$price = "$40";

					break;
				case 'fungo':
					$lengths = ["34", "35", "35.5", "36"];
					$weights = ["-3", "-2", "-1", "0"];
					$woods = ["MAPLE"];
					$customTitle = "GAME BAT";
					$price = "$65";

					break;
				case 'promo':
					$lengths = ["34", "35", "35.5", "36"];
					$weights = ["-3", "-2", "-1", "0"];
					$woods = ["MAPLE"];

					break;
				
				default:
					
					break;
			}

			switch($customTitle){
				case 'FUNGO BAT':
					$text = $customTitle + " | " + $price;
				break;
				case 'YOUTH BAT':
					$text = $customTitle + " | " + $price;
				break;
				case 'PRO BAT':
					$text = $customTitle + " - MODEL #" + $currentModel;
				break;
				default:
					$text = $customTitle + " - MODEL #" + $currentModel + " | " + $price;
				break;
			}
			$(".customize-model").text($text);

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
					$customTitle = "PRO BAT";
					$price = "$120";
					break;
				case 'game':

					$lengths = ["31", "32", "32.5", "33", "33.5", "34", "34.5"];
					$weights = ["-3", "-2", "-1", "0"];
					$woods = ["ASH", "BIRCH"];
					$desc = ["Medium / large barrel diameter, Medium / long barrel, thin handle, flared knob", "Medium barrel diameter, long barrel, thick handle, regular knob", "Medium barrel diameter, long barrel, thin handle, regular knob", "Large barrel diameter, long barrel , medium handle, regular knob", "Medium barrel diameter, Tapered barrel, medium handle, flared knob"];
					$customTitle = "GAME BAT";
					$price = "$70";

					break;
				case 'youth':
					$lengths = ["26", "27", "28", "29", "30"];
					$weights = ["-3", "-2", "-1", "0"];
					$woods = ["ASH", "BIRCH"];
					$customTitle = "YOUTH BAT";
					$price = "$40";

					break;
				case 'fungo':
					$lengths = ["34", "35", "35.5", "36"];
					$weights = ["-3", "-2", "-1", "0"];
					$woods = ["MAPLE"];
					$customTitle = "FUNGO BAT";
					$price = "$65";

					break;
				case 'promo':
					$lengths = ["34", "35", "35.5", "36"];
					$weights = ["-3", "-2", "-1", "0"];
					$woods = ["MAPLE"];

					break;
				
				default:
			
					break;
			}


			switch($customTitle){
				case 'FUNGO BAT':
					$text = $customTitle + " | " + $price;
				break;
				case 'YOUTH BAT':
					$text = $customTitle + " | " + $price;
				break;
				case 'PRO BAT':
					$text = $customTitle + " - MODEL #" + $currentModel;
				break;
				default:
					$text = $customTitle + " - MODEL #" + $currentModel + " | " + $price;
				break;
			}

			
			$(".customize-model").text($text);

			jQuery.each( $lengths, function(i, val)  {
				$("#lengthList").append('<div class="colorL length-colors" id='+val+'>'+val+'"</div>');
			});

			jQuery.each( $weights, function(i, val)  {
				$("#weightList").append("<div class='color weight-colors' id="+val+">"+val+"</div>");
			});

			jQuery.each( $woods, function(i, val)  {
				$("#woodList").append("<div class='colorX' id="+val+">"+val+"</div>");
			});
	   	}	
	   		$("#MAPLE").click(function() {
				$(this).css("border-color", "rgb(252, 116, 44)");
				$("#ASH").css("border-color", "rgb(24, 53, 80)");
				$("#BIRCH").css("border-color", "rgb(24, 53, 80)");
			});
			$("#BIRCH").click(function() {
				$(this).css("border-color", "rgb(252, 116, 44)");
				$("#MAPLE").css("border-color", "rgb(24, 53, 80)");
				$("#ASH").css("border-color", "rgb(24, 53, 80)");
			});
			$("#ASH").click(function() {
				$(this).css("border-color", "rgb(252, 116, 44)");
				$("#MAPLE").css("border-color", "rgb(24, 53, 80)");
				$("#BIRCH").css("border-color", "rgb(24, 53, 80)");
			});
			$("#bc1").click(function() {
				$(this).css("border-color", "rgb(252, 116, 44)");
				$("#bc2").css("border-color", "rgb(24, 53, 80)");
				$("#bc3").css("border-color", "rgb(24, 53, 80)");
				$("#bc4").css("border-color", "rgb(24, 53, 80)");
			});
			$("#bc2").click(function() {
				$(this).css("border-color", "rgb(252, 116, 44)");
				$("#bc1").css("border-color", "rgb(24, 53, 80)");
				$("#bc3").css("border-color", "rgb(24, 53, 80)");
				$("#bc4").css("border-color", "rgb(24, 53, 80)");
			});
			$("#bc3").click(function() {
				$(this).css("border-color", "rgb(252, 116, 44)");
				$("#bc2").css("border-color", "rgb(24, 53, 80)");
				$("#bc1").css("border-color", "rgb(24, 53, 80)");
				$("#bc4").css("border-color", "rgb(24, 53, 80)");
			});
			$("#bc4").click(function() {
				$(this).css("border-color", "rgb(252, 116, 44)");
				$("#bc2").css("border-color", "rgb(24, 53, 80)");
				$("#bc3").css("border-color", "rgb(24, 53, 80)");
				$("#bc1").css("border-color", "rgb(24, 53, 80)");
			});
			$("#hc1").click(function() {
				$(this).css("border-color", "rgb(252, 116, 44)");
				$("#hc2").css("border-color", "rgb(24, 53, 80)");
				$("#hc3").css("border-color", "rgb(24, 53, 80)");
				$("#hc4").css("border-color", "rgb(24, 53, 80)");
			});
			$("#hc2").click(function() {
				$(this).css("border-color", "rgb(252, 116, 44)");
				$("#hc1").css("border-color", "rgb(24, 53, 80)");
				$("#hc3").css("border-color", "rgb(24, 53, 80)");
				$("#hc4").css("border-color", "rgb(24, 53, 80)");
			});
			$("#hc3").click(function() {
				$(this).css("border-color", "rgb(252, 116, 44)");
				$("#hc2").css("border-color", "rgb(24, 53, 80)");
				$("#hc1").css("border-color", "rgb(24, 53, 80)");
				$("#hc4").css("border-color", "rgb(24, 53, 80)");
			});
			$("#hc4").click(function() {
				$(this).css("border-color", "rgb(252, 116, 44)");
				$("#hc2").css("border-color", "rgb(24, 53, 80)");
				$("#hc3").css("border-color", "rgb(24, 53, 80)");
				$("#hc1").css("border-color", "rgb(24, 53, 80)");
			});
			$("#brc1").click(function() {
				$(this).css("border-color", "rgb(252, 116, 44)");
				$("#brc2").css("border-color", "rgb(24, 53, 80)");
				$("#brc3").css("border-color", "rgb(24, 53, 80)");
				$("#brc4").css("border-color", "rgb(24, 53, 80)");
			});
			$("#brc2").click(function() {
				$(this).css("border-color", "rgb(252, 116, 44)");
				$("#brc1").css("border-color", "rgb(24, 53, 80)");
				$("#brc3").css("border-color", "rgb(24, 53, 80)");
				$("#brc4").css("border-color", "rgb(24, 53, 80)");
			});
			$("#brc3").click(function() {
				$(this).css("border-color", "rgb(252, 116, 44)");
				$("#brc2").css("border-color", "rgb(24, 53, 80)");
				$("#brc1").css("border-color", "rgb(24, 53, 80)");
				$("#brc4").css("border-color", "rgb(24, 53, 80)");
			});
			$("#brc4").click(function() {
				$(this).css("border-color", "rgb(252, 116, 44)");
				$("#brc2").css("border-color", "rgb(24, 53, 80)");
				$("#brc3").css("border-color", "rgb(24, 53, 80)");
				$("#brc1").css("border-color", "rgb(24, 53, 80)");
			});
			$("#lc1").click(function() {
				$(this).css("border-color", "rgb(252, 116, 44)");
				$("#lc2").css("border-color", "rgb(24, 53, 80)");
				$("#lc3").css("border-color", "rgb(24, 53, 80)");
				$("#lc4").css("border-color", "rgb(24, 53, 80)");
			});
			$("#lc2").click(function() {
				$(this).css("border-color", "rgb(252, 116, 44)");
				$("#lc1").css("border-color", "rgb(24, 53, 80)");
				$("#lc3").css("border-color", "rgb(24, 53, 80)");
				$("#lc4").css("border-color", "rgb(24, 53, 80)");
			});
			$("#lc3").click(function() {
				$(this).css("border-color", "rgb(252, 116, 44)");
				$("#lc2").css("border-color", "rgb(24, 53, 80)");
				$("#lc1").css("border-color", "rgb(24, 53, 80)");
				$("#lc4").css("border-color", "rgb(24, 53, 80)");
			});
			$("#lc4").click(function() {
				$(this).css("border-color", "rgb(252, 116, 44)");
				$("#lc2").css("border-color", "rgb(24, 53, 80)");
				$("#lc3").css("border-color", "rgb(24, 53, 80)");
				$("#lc1").css("border-color", "rgb(24, 53, 80)");
			});
			$("#fc1").click(function() {
				$(this).css("border-color", "rgb(252, 116, 44)");
				$("#fc2").css("border-color", "rgb(24, 53, 80)");
			});
			$("#fc2").click(function() {
				$(this).css("border-color", "rgb(252, 116, 44)");
				$("#fc1").css("border-color", "rgb(24, 53, 80)");
			});
			$(".length-colors").click(function() {
				$(".length-colors").css("border-color", "rgb(24, 53, 80)");
				$(this).css("border-color", "rgb(252, 116, 44)");
			});
			$(".weight-colors").click(function() {
				$(".weight-colors").css("border-color", "rgb(24, 53, 80)");
				$(this).css("border-color", "rgb(252, 116, 44)");
			});
			$("#e1").click(function() {
				$(this).css("border-color", "rgb(252, 116, 44)");
				$("#e2").css("border-color", "rgb(24, 53, 80)");
			});
			$("#e2").click(function() {
				$(this).css("border-color", "rgb(252, 116, 44)");
				$("#e1").css("border-color", "rgb(24, 53, 80)");
			});
			$("#eg1").click(function() {
				$(this).css("border-color", "rgb(252, 116, 44)");
				$("#brush-option").css("border-color", "rgb(24, 53, 80)");
			});
			$("#brush-option").click(function() {
				$(this).css("border-color", "rgb(252, 116, 44)");
				$("#eg1").css("border-color", "rgb(24, 53, 80)");
			});

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

		$currentModel = $(this).text();




		



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