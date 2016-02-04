$(document).ready(function(){
	$slideClicked = false;
	
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