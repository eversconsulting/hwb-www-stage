<?php
  // $types= [];
  // $woods = [];
  // $handles = [];
  // $barrels = [];
  // $logos = [];
  // $finishes = [];
  // $lengths = [];
  // $ess = [];
  // $engs = [];
  // $qs = [];
  // $ms = [];

  $body = "New Order! Here's the details: \n";

  $json = json_decode($_POST['myData'], true);
  $customer = $_POST['customer'];
  foreach($json as $order_bat){
      $type = $order_bat['type'];
      $wood = $order_bat['wood'];
      $handle = $order_bat['handle'];
      $barrel = $order_bat['barrel'];
      $logo = $order_bat['logo'];
      $finish = $order_bat['finish'];
      $length = $order_bat['length'];
      $engStyle = $order_bat['engravingStyle'];
      $eng = $order_bat['engraving'];
      $quantity = $order_bat['quantity'];
      $model = $order_bat['model'];

      $toAdd = "Type: $type Bat\nWood: $wood\nHandle Color: $handle\nBarrel Color: $barrel\nLogo/Engraving Color: $logo\nFinish: $finish\nLength: $length\nEngraving Style: $engStyle\nEngraving: $eng\nQuantity: $quantity\nModel: $model\n";

      $body .= "$toAdd\n";
      // array_push($types, $type);
      // array_push($woods, $wood);
      // array_push($handles, $handle);
      // array_push($barrels, $barrel);
      // array_push($logos, $logo);
      // array_push($finishes ,$finish);
      // array_push($lengths, $length);
      // array_push($ess ,$engStyle);
      // array_push($engs ,$eng);
      // array_push($qs ,$quantity);
      // array_push($ms ,$model);

  }

  // $a = implode(", ", $types);
  // $b = implode(", ", $woods);
  // $c = implode(", ", $handles);
  // $d = implode(", ", $barrels);
  // $e = implode(", ", $logos);
  // $f = implode(", ", $finishes);
  // $g = implode(", ", $lengths);
  // $h = implode(", ", $ess);
  // $i = implode(", ", $engs);
  // $j = implode(", ", $qs);
  // $k = implode(", ", $ms);


  $today = date("m-d-y");

  $fileName = "$customer-$today.txt";
  $myfile = fopen("orders/$fileName", "w");
  fwrite($myfile, $body);
  fclose($myfile);

  // $con = mysql_connect('localhost','bevers222','Homewood01!') or die(mysql_error());
  // mysql_select_db('hwbOrders', $con) or die(mysql_error());
  //
  // $rs = mysql_query("INSERT INTO Orders (Email, Type, Wood, Length, Handle_Color, Barrel_Color, Logo_Color, Engraving, Engraving_Style, Quantity, Finish, Model, Fulfilled, Dte) VALUES ($email, $a, $b, $g, $c, $d, $e, $i, $h, $j, $f, $k, Unfulfilled, $today)", $con);
  //
  // if(!$rs ) {
  //     echo 'Could not enter data: '.mysql_error());
  //  }
  // else {
  //   echo "it worked";
  // }

 ?>
