


$(document).ready(function(){



  //---------Shopify Start------------
  var shopClient = ShopifyBuy.buildClient({
      apiKey: 'a8ca2115ba8bf2a471b32d2ee821ffca',
      myShopifyDomain: 'homewood-bat-co',
      appId: '6'
    });



   $("#desk-cart").click(function() {
    $(".side-cart").animate({
        width: 400
      });
  });

  $(".side-cart").mouseleave(function(){
    $(".side-cart").animate({
        width: 0
      });
  });



  $("#cart-button").click(function() {
    if($("#cart-button").hasClass("remove-button")){

      if($(".cart-prod").hasClass("prod-active")){
        $(".cart-prod").css("pointer-events", "none");
      }

      $("#cart-check").hide();
      $("#cart-confirm").show();
    }
  });
  $(".cart-prod").click(function() {
    if($(this).hasClass("prod-active")){
      $(this).removeClass("prod-active");
      checkProds();

    }
    else{
      $(this).addClass("prod-active");
      checkProds();
    }
  });

  $("#yes-button").click(function() {
    $("#cart-confirm").hide();
    $("#cart-check").show();
    $(".prod-active").remove();
    checkProds();
    $(".cart-prod").css("pointer-events", "auto");
  });

  $("#no-button").click(function() {
    $("#cart-confirm").hide();
    $("#cart-check").show();
    $(".cart-prod").removeClass("prod-active");
    checkProds();
    $(".cart-prod").css("pointer-events", "auto");
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

   $(".cart-top-close").click(function() {
      $(".side-cart").animate({
        width: 0
      });
   });
   $(".dismiss-popup").click(function(){
     $(".bottom-popup").animate({
       height: 0
     });
     $(".popup-text").hide();
   });


  shopClient.createCart().then(function(newCart){
    var cart = newCart;

    shopClient.fetchProduct(6052966209).then(function(product){

      shopClient.fetchCart(cart.id).then(cart => {
        console.log(cart); // The retrieved cart
        var items = cart.lineItems;
        for (index = 0; index < items.length; ++ index){
          var item = items[index];
          var productToAdd = '<div class="cart-prod"><div class="prod-row"><div class="prod-title">Pro Bat</div><div class="prod-quant">1</div></div><div class="prod-row"><div class="prod-col"><div class="prod-wood">'+item.properties.wood+'</div><div class="prod-hand">'+item.properties.handle+' Handle</div><div class="prod-barr">'+item.properties.barrel+' Barrel</div><div class="prod-logo">'+item.properties.logo+' Logo</div></div><div class="prod-col"><div class="prod-leng">'+item.properties.length+'"</div><div class="prod-finish">'+item.properties.finish+' Finish</div><div class="prod-eng-style">'+item.properties.engravingStyle+'</div><div class="prod-eng">"'+item.properties.engraving+'"</div></div></div></div>'

          $(".cart-mid").append(productToAdd);
        }
        var locUrl = cart.checkoutUrl;
        $(".check-a").attr("href", locUrl);
      });
    });
  });


  $("#add1").click(function(){
    if(requireDesktop()){
      $batEngraving = $('#engraving1').val();
      $batQuantity = $('#q1').val();
      $agree = $('#ack-checked').is(':visible');

      $batWood = $batWood.substring(0, 1).toUpperCase() + $batWood.substring(1);
      $bat = $bat.toUpperCase();
      $batTwoHandle = $batTwoHandle.substring(0, 1).toUpperCase() + $batTwoHandle.substring(1);
      $batTwoBarrel = $batTwoBarrel.substring(0, 1).toUpperCase() + $batTwoBarrel.substring(1);
      $batLogoColor = $batLogoColor.substring(0, 1).toUpperCase() + $batLogoColor.substring(1);
      $batFinish = $batFinish.substring(0, 1).toUpperCase() + $batFinish.substring(1);
      $batLength = $batLength.substring(0, 1).toUpperCase() + $batLength.substring(1);

      $batEngravingStyle = $batEngravingStyle.substring(0, 1).toUpperCase() + $batEngravingStyle.substring(1);


      shopClient.createCart().then(function(newCart){
        var cart = newCart;
        var batNum;
        switch($bat){
          case 'PRO':
            $batNum = 6052966209;
          break;

          case 'GAME':
            $batNum = 5656595905;

          default:

          break;
        }

        shopClient.fetchProduct($batNum).then(function(product){
          var v = product.variants[0];
          cart.addVariants({variant: v , quantity: 1, properties: { 'wood' : $batWood, 'handle' : $batTwoHandle, 'barrel' : $batTwoBarrel, 'logo' : $batLogoColor, 'length' : $batLength, 'finish' : $batFinish, 'engravingStyle' : $batEngravingStyle, 'engraving' : $batEngraving} });
          shopClient.fetchCart(cart.id).then(cart => {
            console.log(cart); // The retrieved cart
            var items = cart.lineItems;
            for (index = 0; index < items.length; ++ index){
              var item = items[index];
              var productToAdd = '<div class="cart-prod"><div class="prod-row"><div class="prod-title">'+$bat+' BAT</div><div class="prod-quant">'+$batQuantity+'</div></div><div class="prod-row"><div class="prod-col"><div class="prod-wood">'+item.properties.wood+'</div><div class="prod-hand">'+item.properties.handle+' Handle</div><div class="prod-barr">'+item.properties.barrel+' Barrel</div><div class="prod-logo">'+item.properties.logo+' Logo</div></div><div class="prod-col"><div class="prod-leng">'+item.properties.length+'"</div><div class="prod-finish">'+item.properties.finish+' Finish</div><div class="prod-eng-style">'+item.properties.engravingStyle+'</div><div class="prod-eng">"'+item.properties.engraving+'"</div></div></div></div>'

              $(".cart-mid").append(productToAdd);

            }
            var locUrl = cart.checkoutUrl;
            $(".check-a").attr("href", locUrl);
          });
        });
        $(".side-cart").animate({
            width: 400
        });
      });
    }
    else {
      requireDesktop();
    }



  });





});

function requireDesktop() {
  $batEngraving = $('#engraving1').val();
  var $sWood = false;
  var $sHandle = false;
  var $sBarrel = false;
  var $sLogo = false;
  var $sLength = false;

  var $sAgree = false;
  var $sQuant = false;
  var $readyToSubmit = false;
  var $fix = 'Sorry, you still need to tell us about the ';

  if($batWood != ''){
    $sWood = true;
  }
  else{
    $fix += "Wood Type, ";

  }
  if($batTwoHandle != ''){
    $sHandle = true;
  }
  else{
    $fix += "Handle Color, ";
  }
  if($batTwoBarrel != ''){
    $sBarrel = true;
  }
  else{
    $fix += "Barrel Color, ";
  }
  if($batLogoColor != ''){
    $sLogo = true;
  }
  else{
    $fix += "Logo Color, ";
  }
  if($batLength != ''){
    $sLength = true;
  }
  else{
    $fix += "Bat Length, ";
  }


  if($('#ack-checked').is(':visible')){
    $sAgree = true;
  }
  else{
    $fix += "Agree Checkbox, ";
  }
  if($('#q1').val() != ''){
    $sQuant = true;
  }
  else{
    $fix += "Quantity, ";
  }

  if($sWood && $sHandle && $sBarrel && $sLogo && $sLength && $sAgree && $sQuant){
    $readyToSubmit = true;
    return $readyToSubmit;
  }
  else{
    $readyToSubmit = false;
    $fix = $fix.substring(0, $fix.length - 2);
    $fix += ".";
    $('.popup-text').text($fix);
    $('.bottom-popup').animate({
      height: 75
    });
    $('.popup-text').show();
    return $readyToSubmit;
  }
}
