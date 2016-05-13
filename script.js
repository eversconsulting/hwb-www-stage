$(document).ready(function(){
	$slideVisible = false;
  $batNum = 0;

  if(sessionStorage.getItem("bats") == null){
    $bats = [];
    sessionStorage.setItem("bats", JSON.stringify($bats));
    $batNum = 0;
    $(".notify").text($batNum);
  }
  else{
    $myArray = JSON.parse(sessionStorage.getItem("bats"));
    for ($i=0; $i<$myArray.length; $i++){
        $batNum += 1;
    }
    $(".notify").text($batNum);
  }

  $("#cart-c").click(function() {
    

  });
  $("#desk-cart").click(function() {
    

  });

   $(".hamburger").click(function() {
      $slideVisible = $('.slide-menu').is(':visible');
      if($slideVisible == false){
         $(".slide-menu").slideDown("slow");
      }
      else {
         $(".slide-menu").slideUp("slow");
      }
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

   $(".cart-icon").click(function() {
      $link = "myshop-shopify/cart/";
      $batData = sessionStorage.getItem("bats");

      $bats = JSON.parse($batData);

        $.each($bats, function(){
          switch(this.type){
            case "pro":
              console.log("pro");
              break;
            case "game":
              console.log("game");
              break;
            case "fungo":
              console.log("fungo");
              break;
            case "youth":
              console.log("youth");
              break;
            default:
              console.log("other");
              break;
          }
      });
   });

   

   $("#cartShow").click(function() {
   		
   		$batData = sessionStorage.getItem("bats");

		$bats = JSON.parse($batData);

		console.log($bats);

   });

   
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