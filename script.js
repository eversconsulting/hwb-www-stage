$(document).ready(function(){
	$slideVisible = false;
  $batNum = 0;
  $prodsActive = false;



  $("#cart-c").click(function() {


  });

	$(".navbar").click(function() {

		
	});



   $("#shop").click(function() {
      $("#sec2").scrollView();
   });

   $("#news").click(function() {
      $("#sec3").scrollView();
   });
   $("#about").click(function() {
      $("#sec5").scrollView();
   });
   $("#contact").click(function() {
      $("#sec4").scrollView();
   });
   $("#home").click(function() {
      $("#sec1").scrollView();
   });

   $("#mshop").click(function() {
      $("#sec2").scrollViewM();
      $(".slide-menu").slideUp("fast");
   });

   $("#mnews").click(function() {
      $("#sec3").scrollViewM();
      $(".slide-menu").slideUp("fast");
   });
   $("#mabout").click(function() {
      $("#sec5").scrollViewM();
      $(".slide-menu").slideUp("fast");
   });
   $("#mcontact").click(function() {
      $("#sec4").scrollViewM();
      $(".slide-menu").slideUp("fast");
   });
   $("#mhome").click(function() {
      $("#sec1").scrollViewM();
      $(".slide-menu").slideUp("fast");
   });





  //  $("#cartShow").click(function() {
  //
  //  		$batData = sessionStorage.getItem("bats");
	 //
	// 	$bats = JSON.parse($batData);
	 //
	// 	console.log($bats);
	 //
  //  });


});

$.fn.scrollView = function () {
  return this.each(function () {
    $('html, body').animate({
      scrollTop: $(this).offset().top - 125
    }, 1000);
  });
}

$.fn.scrollViewM = function () {
  return this.each(function () {
    $('html, body').animate({
      scrollTop: $(this).offset().top - 75
    }, 1000);
  });
}

function checkProds(){
  if($(".cart-prod").hasClass("prod-active")){
    $("#cart-button").removeClass("check-button").addClass("remove-button");
    $("#cart-button").text("REMOVE");
  }
  else{
    $("#cart-button").removeClass("remove-button").addClass("check-button");
    $("#cart-button").text("CHECKOUT");
  }
}
