


$(document).ready(function(){

  if(sessionStorage.getItem("bats") == null){
    $bats = [];
    sessionStorage.setItem("bats", JSON.stringify($bats));

  }
  else{
    $myArray = JSON.parse(sessionStorage.getItem("bats"));
    console.log($myArray);
  }

   $("#desk-cart").click(function() {
     $(".cart-mid").empty();

     $data = JSON.parse(sessionStorage.getItem("bats"));

     for(var x = 0; x < $data.length; x++){
       var productToAdd = '<div class="cart-prod"><div class="prod-row"><div class="prod-title">'+$data[x].type+' BAT</div><div class="prod-quant">'+$data[x].quantity+'</div></div><div class="prod-row"><div class="prod-col"><div class="prod-wood">'+$data[x].wood+'</div><div class="prod-hand">'+$data[x].handle+' Handle</div><div class="prod-barr">'+$data[x].barrel+' Barrel</div><div class="prod-logo">'+$data[x].logo+' Logo</div></div><div class="prod-col"><div class="prod-leng">'+$data[x].length+'"</div><div class="prod-finish">'+$data[x].finish+' Finish</div><div class="prod-eng-style">'+$data[x].engravingStyle+'</div><div class="prod-eng">"'+$data[x].engraving+'"</div></div></div></div>'

       $(".cart-mid").append(productToAdd);

     }

     shopifyActivate();

    $(".side-cart").animate({
        width: 400
      });
  });

  $("#mobile-cart").click(function() {
    $(".cart-mid").empty();

    $data = JSON.parse(sessionStorage.getItem("bats"));

    for(var x = 0; x < $data.length; x++){
      var productToAdd = '<div class="cart-prod"><div class="prod-row"><div class="prod-title">'+$data[x].type+' BAT</div><div class="prod-quant">'+$data[x].quantity+'</div></div><div class="prod-row"><div class="prod-col"><div class="prod-wood">'+$data[x].wood+'</div><div class="prod-hand">'+$data[x].handle+' Handle</div><div class="prod-barr">'+$data[x].barrel+' Barrel</div><div class="prod-logo">'+$data[x].logo+' Logo</div></div><div class="prod-col"><div class="prod-leng">'+$data[x].length+'"</div><div class="prod-finish">'+$data[x].finish+' Finish</div><div class="prod-eng-style">'+$data[x].engravingStyle+'</div><div class="prod-eng">"'+$data[x].engraving+'"</div></div></div></div>'

      $(".cart-mid").append(productToAdd);

    }

    shopifyActivate();

   $(".side-cart").animate({
       width: 300
     });
 });





  $("#cart-button").click(function() {
    $(".cart-item-display").hide(200);
    $(".cart-email-display").show();

  });

  $(".finish-button").click(function() {
    var goodEmail = validateEmail($(".email-prompt").val());
    if(goodEmail){
      var url = sessionStorage.getItem('loc');
      var win = window.open(url, '_blank');
      if(win){
          //Browser has allowed it to be opened
          win.focus();
          $someBats = JSON.parse(sessionStorage.getItem("bats"));

      		$toSend = JSON.stringify($someBats);


      		$dc = $(".email-prompt").val();

      		$.ajax({
      				url: 'sendOrder.php',
      				type: 'POST',
      				data: {'myData': $toSend, 'customer': $dc}
      		});
      }else{
          //Broswer has blocked it
          alert('Please allow popups for this site');
      }

      sessionStorage.removeItem("bats");
      window.location= 'index.php';


    }
    else{
      $(".email-prompt").css("border-color", "red");
      $(".email-prompt").animate({
        height: 30
      });
      $(".email-prompt").animate({
        height: 25
      });
      $(".email-prompt").animate({
        height: 30
      });
      $(".email-prompt").animate({
        height: 25
      });


    }
  });

  $(document).on('click', '#continue-shop', function(){
    window.location = 'index.php';
  });

  var actives = [];
  $(document).on("click", '.cart-prod',function(){
    $(this).toggleClass("prod-active");

    actives = [];
    var els = document.getElementsByClassName('cart-prod');
    for (var i = 0; i < els.length; ++i) {
      if($(els[i]).hasClass('prod-active')){
        actives.push(i);
      }
    }




    if(checkProds()){
      $(".cart-top-close").hide();
      $(".cart-top-remove").show();
    }
    else{
      $(".cart-top-remove").hide();
      $(".cart-top-close").show();
    }
  });

  $(document).on("click", '.cart-top-remove', function() {
    $('.prod-active').remove();

    for(var x = 0; x < actives.length; x++){
      var bats = JSON.parse(sessionStorage.getItem('bats'));
      for(var y = 0; y < bats.length; y++){
        if(actives[x] == y){
          bats.splice(y, 1);
        }
      }
      sessionStorage.setItem("bats", JSON.stringify(bats));
    }

    $(".cart-top-remove").hide();
    $(".cart-top-close").show();
    shopifyActivate();

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


  $("#add").click(function(){

    if(requireMobile()){
      	$batEngraving = $('#meng').val();
      	$batQuantity = $('#mq').val();
      	$agree = $('#ack-checked').is(':visible');


      	$batArray = JSON.parse(sessionStorage.getItem("bats"));

          $newBat = new Object();
          $newBat.type = $bat.toUpperCase();
          $newBat.wood = $batWood.charAt(0).toUpperCase()+ $batWood.slice(1);
          $newBat.handle = $batTwoHandle.charAt(0).toUpperCase()+ $batTwoHandle.slice(1);
          $newBat.barrel = $batTwoBarrel.charAt(0).toUpperCase()+ $batTwoBarrel.slice(1);
          $newBat.logo = $batLogoColor.charAt(0).toUpperCase()+ $batLogoColor.slice(1);
          $newBat.finish = $batFinish.charAt(0).toUpperCase()+ $batFinish.slice(1);
          $newBat.length = $batLength;
          $newBat.engravingStyle = $batEngravingStyle.charAt(0).toUpperCase()+ $batEngravingStyle.slice(1);
          if($batEngraving != ''){
            $newBat.engraving = $batEngraving;
          }
          else{
            $newBat.engraving = "No Engraving."
          }
          $newBat.quantity = $batQuantity;
          $newBat.agree = $agree;
          $newBat.model = $currentModel;
          $newBat.customColor = $batTwoOption;



      	$batArray.push($newBat);

        sessionStorage.setItem("bats", JSON.stringify($batArray));

        //var productToAdd = '<div class="cart-prod"><div class="prod-row"><div class="prod-title">'+$newBat.type+' BAT</div><div class="prod-quant">'+$newBat.quantity+'</div></div><div class="prod-row"><div class="prod-col"><div class="prod-wood">'+$newBat.wood+'</div><div class="prod-hand">'+$newBat.handle+' Handle</div><div class="prod-barr">'+$newBat.barrel+' Barrel</div><div class="prod-logo">'+$newBat.logo+' Logo</div></div><div class="prod-col"><div class="prod-leng">'+$newBat.length+'"</div><div class="prod-finish">'+$newBat.finish+' Finish</div><div class="prod-eng-style">'+$newBat.engravingStyle+'</div><div class="prod-eng">"'+$newBat.engraving+'"</div></div></div></div>'

        //$(".cart-mid").append(productToAdd);
        $(".cart-mid").empty();

        $data = JSON.parse(sessionStorage.getItem("bats"));

        for(var x = 0; x < $data.length; x++){
          var productToAdd = '<div class="cart-prod"><div class="prod-row"><div class="prod-title">'+$data[x].type+' BAT</div><div class="prod-quant">'+$data[x].quantity+'</div></div><div class="prod-row"><div class="prod-col"><div class="prod-wood">'+$data[x].wood+'</div><div class="prod-hand">'+$data[x].handle+' Handle</div><div class="prod-barr">'+$data[x].barrel+' Barrel</div><div class="prod-logo">'+$data[x].logo+' Logo</div></div><div class="prod-col"><div class="prod-leng">'+$data[x].length+'"</div><div class="prod-finish">'+$data[x].finish+' Finish</div><div class="prod-eng-style">'+$data[x].engravingStyle+'</div><div class="prod-eng">"'+$data[x].engraving+'"</div></div></div></div>'

          $(".cart-mid").append(productToAdd);

        }

        $(".side-cart").animate({
            width: 300
          });

          shopifyActivate();


    }
    else {
      requireMobile();
    }

  });

  $("#add1").click(function(){
    if(requireDesktop()){
      	$batEngraving = $('#engraving1').val();
      	$batQuantity = $('#q1').val();
      	$agree = $('#ack-checked').is(':visible');


      	$batArray = JSON.parse(sessionStorage.getItem("bats"));

          $newBat = new Object();
          $newBat.type = $bat.toUpperCase();
          $newBat.wood = $batWood.charAt(0).toUpperCase()+ $batWood.slice(1);
          $newBat.handle = $batTwoHandle.charAt(0).toUpperCase()+ $batTwoHandle.slice(1);
          $newBat.barrel = $batTwoBarrel.charAt(0).toUpperCase()+ $batTwoBarrel.slice(1);
          $newBat.logo = $batLogoColor.charAt(0).toUpperCase()+ $batLogoColor.slice(1);
          $newBat.finish = $batFinish.charAt(0).toUpperCase()+ $batFinish.slice(1);
          $newBat.length = $batLength;
          $newBat.engravingStyle = $batEngravingStyle.charAt(0).toUpperCase()+ $batEngravingStyle.slice(1);
          if($batEngraving != ''){
            $newBat.engraving = $batEngraving;
          }
          else{
            $newBat.engraving = "No Engraving."
          }
          $newBat.quantity = $batQuantity;
          $newBat.agree = $agree;
          $newBat.model = $currentModel;
          $newBat.customColor = $batTwoOption;



      	$batArray.push($newBat);

        sessionStorage.setItem("bats", JSON.stringify($batArray));

        //var productToAdd = '<div class="cart-prod"><div class="prod-row"><div class="prod-title">'+$newBat.type+' BAT</div><div class="prod-quant">'+$newBat.quantity+'</div></div><div class="prod-row"><div class="prod-col"><div class="prod-wood">'+$newBat.wood+'</div><div class="prod-hand">'+$newBat.handle+' Handle</div><div class="prod-barr">'+$newBat.barrel+' Barrel</div><div class="prod-logo">'+$newBat.logo+' Logo</div></div><div class="prod-col"><div class="prod-leng">'+$newBat.length+'"</div><div class="prod-finish">'+$newBat.finish+' Finish</div><div class="prod-eng-style">'+$newBat.engravingStyle+'</div><div class="prod-eng">"'+$newBat.engraving+'"</div></div></div></div>'

        //$(".cart-mid").append(productToAdd);
        $(".cart-mid").empty();

        $data = JSON.parse(sessionStorage.getItem("bats"));

        for(var x = 0; x < $data.length; x++){
          var productToAdd = '<div class="cart-prod"><div class="prod-row"><div class="prod-title">'+$data[x].type+' BAT</div><div class="prod-quant">'+$data[x].quantity+'</div></div><div class="prod-row"><div class="prod-col"><div class="prod-wood">'+$data[x].wood+'</div><div class="prod-hand">'+$data[x].handle+' Handle</div><div class="prod-barr">'+$data[x].barrel+' Barrel</div><div class="prod-logo">'+$data[x].logo+' Logo</div></div><div class="prod-col"><div class="prod-leng">'+$data[x].length+'"</div><div class="prod-finish">'+$data[x].finish+' Finish</div><div class="prod-eng-style">'+$data[x].engravingStyle+'</div><div class="prod-eng">"'+$data[x].engraving+'"</div></div></div></div>'

          $(".cart-mid").append(productToAdd);

        }

        $(".side-cart").animate({
            width: 400
          });

          shopifyActivate();


    }
    else {
      requireDesktop();
    }



  });


});

function requireMobile() {

  $batWood = $("#wood-select").val();

  $logoColor = $('#logo-select').val();
  $batLogoColor = $('#logo-select').val();
  $batFinish = $('#finish-select').val();
  $batLength = $('#length-select').val();

  var $sWood = false;
  var $sHandle = false;
  var $sBarrel = false;
  var $sLogo = false;
  var $sLength = false;
  var $sFinish = false;
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
  if($batFinish != ''){
    $sFinish = true;
  }
  else{
    $fix += "Bat Finish, ";

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
  if($batLogoColor != '' && $batLogoColor != 'Choose'){
    $sLogo = true;
  }
  else{
    $fix += "Logo Color, ";
  }
  if($batLength != '' && $batLength != 'Choose'){
    $sLength = true;
  }
  else{
    $fix += "Bat Length, ";
  }


  if($('.ack-checked').is(':visible')){

    $sAgree = true;
  }
  else{
    $fix += "Agree Checkbox, ";
  }
  if($('#mq').val() != ''){
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
      height: 150
    });
    $('.popup-text').show();
    return $readyToSubmit;
  }
}

function requireDesktop() {
  $batEngraving = $('#engraving1').val();
  var $sWood = false;
  var $sHandle = false;
  var $sBarrel = false;
  var $sLogo = false;
  var $sLength = false;
  var $sFinish = false;
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
  if($batFinish != ''){
    $sFinish = true;
  }
  else{
    $fix += "Bat Finish, ";

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

function shopifyActivate() {



  var shopClient = ShopifyBuy.buildClient({
    apiKey: 'a8ca2115ba8bf2a471b32d2ee821ffca',
    myShopifyDomain: 'homewood-bat-co',
    appId: '6'
  });

  shopClient.createCart().then(function(cart){
    $batArray = JSON.parse(sessionStorage.getItem("bats"));
    for(var x = 0; x < $batArray.length; x++){
      switch ($batArray[x].type) {
        case 'PRO':
          $batArray = JSON.parse(sessionStorage.getItem("bats"));
          shopClient.fetchProduct(6052966209).then(function(product){
            if($batArray[0].wood == 'Maple'){
              if($batArray[0].customColor == true){
                var v = product.variants[0];
              }
              else{
                var v = product.variants[1];
              }
            }
            else if($batArray[0].wood == 'Birch'){
              if($batArray[0].customColor == true){
                var v = product.variants[2];
              }
              else{
                var v = product.variants[3];
              }
            }
            else{
              if($batArray[0].customColor == true){
                var v = product.variants[4];
              }
              else{
                var v = product.variants[5];
              }
            }


            cart.addVariants({variant: v , quantity: $batArray[0].quantity, properties: { 'model' : $batArray[0].model, 'wood' : $batArray[0].wood, 'handle' : $batArray[0].handle, 'barrel' : $batArray[0].barrel, 'logo' : $batArray[0].logo, 'length' : $batArray[0].length, 'finish' : $batArray[0].finish, 'engraving-style' : $batArray[0].engravingStyle, 'engraving' : $batArray[0].engraving} });
            $batArray.shift();
            var locUrl = cart.checkoutUrl;
            sessionStorage.setItem('loc', locUrl);
            $(".cart-bot-amt").text("$"+cart.subtotal);


          });
          break;
        case 'GAME':
          $batArray = JSON.parse(sessionStorage.getItem("bats"));
          shopClient.fetchProduct(6373157313).then(function(product){
            if($batArray[0].wood == 'Maple'){
              if($batArray[0].customColor == true){
                var v = product.variants[0];
              }
              else{
                var v = product.variants[1];
              }
            }
            else if($batArray[0].wood == 'Birch'){
              if($batArray[0].customColor == true){
                var v = product.variants[2];
              }
              else{
                var v = product.variants[3];
              }
            }
            else{
              if($batArray[0].customColor == true){
                var v = product.variants[4];
              }
              else{
                var v = product.variants[5];
              }
            }
            cart.addVariants({variant: v , quantity: $batArray[0].quantity, properties: { 'model' : $batArray[0].model, 'wood' : $batArray[0].wood, 'handle' : $batArray[0].handle, 'barrel' : $batArray[0].barrel, 'logo' : $batArray[0].logo, 'length' : $batArray[0].length, 'finish' : $batArray[0].finish, 'engraving-style' : $batArray[0].engravingStyle, 'engraving' : $batArray[0].engraving} });
            $batArray.shift();
            var locUrl = cart.checkoutUrl;
            sessionStorage.setItem('loc', locUrl);
            $(".cart-bot-amt").text("$"+cart.subtotal);
          });
          break;
          case 'FUNGO':
            $batArray = JSON.parse(sessionStorage.getItem("bats"));
            shopClient.fetchProduct(6373486081).then(function(product){
              if($batArray[0].wood == 'Maple'){
                if($batArray[0].customColor == true){
                  var v = product.variants[0];
                }
                else{
                  var v = product.variants[1];
                }
              }


              cart.addVariants({variant: v , quantity: $batArray[0].quantity, properties: { 'model' : $batArray[0].model, 'wood' : $batArray[0].wood, 'handle' : $batArray[0].handle, 'barrel' : $batArray[0].barrel, 'logo' : $batArray[0].logo, 'length' : $batArray[0].length, 'finish' : $batArray[0].finish, 'engraving-style' : $batArray[0].engravingStyle, 'engraving' : $batArray[0].engraving} });
              $batArray.shift();
              var locUrl = cart.checkoutUrl;
              sessionStorage.setItem('loc', locUrl);
              $(".cart-bot-amt").text("$"+cart.subtotal);
            });
            break;
            case 'YOUTH':
              $batArray = JSON.parse(sessionStorage.getItem("bats"));
              shopClient.fetchProduct(5656695425).then(function(product){
                console.log("here");
                if($batArray[0].wood == 'Birch'){
                  if($batArray[0].customColor == true){
                    var v = product.variants[0];
                  }
                  else{
                    var v = product.variants[1];
                    console.log("variant");
                  }
                }
                else{
                  if($batArray[0].customColor == true){
                    var v = product.variants[2];
                  }
                  else{
                    var v = product.variants[3];
                  }
                }
                cart.addVariants({variant: v , quantity: $batArray[0].quantity, properties: { 'model' : $batArray[0].model, 'wood' : $batArray[0].wood, 'handle' : $batArray[0].handle, 'barrel' : $batArray[0].barrel, 'logo' : $batArray[0].logo, 'length' : $batArray[0].length, 'finish' : $batArray[0].finish, 'engraving-style' : $batArray[0].engravingStyle, 'engraving' : $batArray[0].engraving} });
                $batArray.shift();
                var locUrl = cart.checkoutUrl;
                sessionStorage.setItem('loc', locUrl);
                $(".cart-bot-amt").text("$"+cart.subtotal);
              });
              break;
        default:

      }



    }
          $(".cart-bot-amt").text("$"+cart.subtotal);





  });

  // shopClient.createCart().then(function(cart){
  //   shopClient.fetchProduct(6372409473).then(function(product){
  //     var v = product.variants[0];
  //
  //     $batArray = JSON.parse(sessionStorage.getItem("bats"));
  //     for(x = 0; x < $batArray.length; x++){
  //       cart.addVariants({variant: v , quantity: $batArray[x].quantity, properties: { 'model' : $batArray[x].model, 'wood' : $batArray[x].wood, 'handle' : $batArray[x].handle, 'barrel' : $batArray[x].barrel, 'logo' : $batArray[x].logo, 'length' : $batArray[x].length, 'finish' : $batArray[x].finish, 'engraving-style' : $batArray[x].engravingStyle, 'engraving' : $batArray[x].engraving} });
  //       console.log(cart);
  //     }
  //
  //     var locUrl = cart.checkoutUrl;
  //     console.log(locUrl);
  //
  //   });
  // });


}

function checkProds(){
  if($(".cart-prod").hasClass("prod-active")){
    return true;
  }
  else {
    return false;
  }
}



function validateEmail(email)
{
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}
