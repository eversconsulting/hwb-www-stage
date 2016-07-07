<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">
            Orders
          </a>
        </div>
      </div>
    </nav>

    <div class="container">
    <?php






      $con = mysql_connect('localhost','bevers222','Homewood01!') or die(mysql_error());
      mysql_select_db('hwbOrders', $con) or die(mysql_error());

      $result = mysql_query("SELECT * FROM Orders") or die(mysql_error());



      while($row = mysql_fetch_array($result)){
        $bats = [];

        $email = $row['Email'];
        $date = $row['Dte'];
        $status = $row['Fulfilled'];
        $type = $row['Type'];
        $types = explode(', ', $type);
        $wood = $row['Wood'];
        $woods = explode(', ', $wood);
        $model = $row['Model'];
        $models = explode(', ', $model);
        $bc = $row['Barrel_Color'];
        $bcs = explode(', ', $bc);
        $hc = $row['Handle_Color'];
        $hcs = explode(', ', $hc);
        $finish = $row['Finish'];
        $finishes = explode(', ', $finish);
        $eng = $row['Engraving'];
        $enges = explode(', ', $eng);
        $engS = $row['Engraving_Style'];
        $engSS = explode(', ', $engS);
        $length = $row['Length'];
        $lengths = explode(', ', $length);
        $lc = $row['Logo_Color'];
        $lcs = explode(', ', $lc);
        $q = $row['Quantity'];
        $qs = explode(', ', $q);
        $f = $row['Fulfilled'];
        $fs = explode(', ', $f);

        $batCount = count($types);



        // echo $batCount;







        echo '<div class="panel panel-default">';
        echo '<div class="panel-heading"><h5>Order By: '.$email.'<br>Date: '.$date.'<br>Status: '.$status.'</h5></div>';
        echo '<div class="panel-body">';
        echo '<table class="table table-hover">';
        echo  '<thead><tr><th>Type</th><th>Model</th><th>Wood</th><th>Handle Color</th><th>Barrel Color</th><th>Logo/Engraving Color</th><th>Engraving Style</th><th>Engraving</th><th>Quantity</th></tr></thead>';
        echo '<tbody>';

        for ($x = 0; $x <= $batCount; $x++) {
          echo '<tr>';
          echo '<td>'.$types[$x].'</td>';
          echo '<td>'.$models[$x].'</td>';
          echo '<td>'.$woods[$x].'</td>';
          echo '<td>'.$hcs[$x].'</td>';
          echo '<td>'.$bcs[$x].'</td>';
          echo '<td>'.$lcs[$x].'</td>';
          echo '<td>'.$engSS[$x].'</td>';
          echo '<td>'.$enges[$x].'</td>';
          echo '<td>'.$qs[$x].'</td>';
          echo '<tr>';
        }


              echo '</tbody>';
            echo '</table>';
          echo '</div>';
          echo '<div class="panel-footer">';
            echo '<button class="btn btn-success">Fulfill</button>';
          echo '</div>';
        echo '</div>';
      }
    ?>
  </div>


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>
