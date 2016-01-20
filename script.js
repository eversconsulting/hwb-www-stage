$(document).ready(function(){
	$sec1Clicked = false;
	$sec2Clicked = false;
	$sec3Clicked = false;
	$slideClicked = false;
   $("#sec1").click(function() {
   		
   		if($sec1Clicked == false){
   			$(this).animate({
				    height: "400"
				  }, 500, function() {
				    // Animation complete.
				});
   			$sec1Clicked = true;

   			$("#sec2").animate({
				    height: "75"
				  }, 500, function() {
				    // Animation complete.
				});
   			$sec2Clicked = false;
    		$("#sec3").animate({
				    height: "75"
				  }, 500, function() {
				    // Animation complete.
				});
   			$sec3Clicked = false;
   		}
   		else{
   			$(this).animate({
				    height: "75"
				  }, 500, function() {
				    // Animation complete.
				});

   			$sec1Clicked = false;


   		}
	});

   $("#sec2").click(function() {
   		
   		if($sec2Clicked == false){
   			$(this).animate({
				    height: "400"
				  }, 500, function() {
				    // Animation complete.
				});
   			$sec2Clicked = true;

   			$("#sec1").animate({
				    height: "75"
				  }, 500, function() {
				    // Animation complete.
				});
   			$sec1Clicked = false;
    		$("#sec3").animate({
				    height: "75"
				  }, 500, function() {
				    // Animation complete.
				});
   			$sec3Clicked = false;
   		}
   		else{
   			$(this).animate({
				    height: "75"
				  }, 500, function() {
				    // Animation complete.
				});

   			$sec2Clicked = false;
   		}
	});

   $("#sec3").click(function() {
   		
   		if($sec3Clicked == false){
   			$(this).animate({
				    height: "400"
				  }, 500, function() {
				    // Animation complete.
				});
   			$sec3Clicked = true;

   			$("#sec1").animate({
				    height: "75"
				  }, 500, function() {
				    // Animation complete.
				});
   			$sec1Clicked = false;
    		$("#sec2").animate({
				    height: "75"
				  }, 500, function() {
				    // Animation complete.
				});
   			$sec2Clicked = false;
   		}
   		else{
   			$(this).animate({
				    height: "75"
				  }, 500, function() {
				    // Animation complete.
				});

   			$sec3Clicked = false;
   		}
	});

   $(".hamburger").click(function() {
   		if($slideClicked == false) {
   			$(".slide-menu").animate({
				    height: "300"
				  }, 500, function() {
				    // Animation complete.
				});

   			$slideClicked = true;
   		}
   		else{
   			$(".slide-menu").animate({
				    height: "0"
				  }, 500, function() {
				    // Animation complete.
				});

   			$slideClicked = false;
   		}
   });
}); 