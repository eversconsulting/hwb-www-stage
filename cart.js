


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

  $("#cart-button").click(function() {
    if($("#cart-button").hasClass("remove-button")){

      if($(".cart-prod").hasClass("prod-active")){
        $(".cart-prod").css("pointer-events", "none");
      }

      $("#cart-check").hide();
      $("#cart-confirm").show();
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


     shopClient.createCart().then(function(newCart){
    var cart = newCart;

    shopClient.fetchProduct(6052966209).then(function(product){
      var v = product.variants[0];
      cart.addVariants({variant: v , quantity: 1, properties: { 'wood' : 'maple', 'handle' : 'black', 'barrel' : 'black', 'logo' : 'gold', 'length' : '33.5', 'finish' : 'glossy', 'engravingStyle' : 'bank gothic', 'engraving' : 'congrats brandon you arent'} });  
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
});





