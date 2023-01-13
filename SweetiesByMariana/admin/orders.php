<!-- PHP code -->
<?php
include('session_admin.php');
?>



<!doctype html>
<html>
  <head>
    <title> Sweeties by Mariana </title>
    <link rel="stylesheet" href="../style/style.css">
    <style>
    .banner_welcome{
    padding-top: 20px;
    padding-left: 40%;
    height: 150px;
  }
  
 
  .welcome_div{
    height: 500px;
    width: 75%;
    margin: auto;
  }


.indexcustomer_div{
    height: 170px;
    width: 45%;
    margin: auto;
    padding: 50px;
    background-color: beige;
}

.welcome_buttons{
    background-color:#C4802A;
    width: 160px;
    color: white;
    padding: 16px 32px;
    margin: 4px 5px;
    cursor: pointer; 
    border-radius: 5px;
    list-style: none ;
    float: left;

}

.welcome_items{
    text-decoration: none;
    cursor: pointer; 
    font-size: 18px;
    font-weight: 100;
    border-radius: 5px;
    color: white;
    width: 100%;
    height: 100%;

}
.welcome_buttons:hover{
    cursor: pointer;
}

.name_echo{
    padding-top: 50px;
    font-size:50px;
    font-weight:100;
}
.table{
      border-collapse: collapse;
       width: 100%;
      padding: 50px;
    }

.table tr:nth-child(even){background-color: beige;}

.table tr:hover {background-color: #ddd;}

.table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #C4802A;
  color: white;
}

.table td {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;

}
    </style>
  </head>

<body>
<!-------------------Menu------------------------->

  <nav class="menu">
    <section class="menu_container">
        <img class="logo_img" src="../image/byMarianalogo-01.png">

     <li class="menu_item">
        <a href="index_admin.php" class="menu_link">Welcome</a>
    </li>
    <li class="menu_item">
        <a href="invoice.php" class="menu_link">Invoice</a>
    </li>
    <li class="menu_item">
        <a href="orders.php" class="menu_link">Orders</a>
    </li>
    <li class="menu_item">
        <a href="managment.php" class="menu_link">Managment</a>
    </li>
    <li class="menu_item">
        <a href="../logout.php" class="menu_link">Log Out</a>
    </li>

    </ul>
</section>
  </nav>
<!-----------BODY-------------------->
<div class= "banner">
    <img class="banner_img" src="../image/size_banner-01.png">
</div>

  <div class="div_title_welcome">
    <img class="banner_welcome" src="../image/bookings-01.png">
 
  </div>
 <div class="welcome_div">


<!-- here the admin can see all the booking that they have during the day -->
<div id="sign-up">
    <label class="text-white" for="booking_day">All the Booking of the day:<br></label>
    <?php
    $todays_date = date("Y-m-d");

    $sql = "SELECT * FROM orders
            INNER JOIN products ON products.product_size = orders.product_size
            WHERE date_order =  '$todays_date';";

    

    
    if ($result = mysqli_query($conn, $sql)) {
      if (mysqli_num_rows($result) > 0) {
        echo "   <table class='table'>
        <thead>
        <tr>
        <th class='text-table'>Date</th>
        <th class='text-table'>Time</th>
        <th class='text-table'>Id Order</th>
        <th class='text-table'>Product</th>
        <th class='text-table'>Size</th>
        <th class='text-table'>Price</th>
        <th class='text-table'>Occasion</th>
        <th class='text-table'>Allergies</th>
        <th class='text-table'>Comments</th>
        <th class='text-table'>Status</th>
        </tr>
        </thead>
        <tbody>";
        while ($row = $result->fetch_assoc()) {
          echo "<tr class='text-table'><td class='text-table'>" .
          $row["date_order"] . "</td><td>" .
          $row["time_order"] . "</td><td>" .
          $row["id_order"] . "</td><td>" .
          $row["product_type"] . "</td><td>" .
          $row["product_size"] . "</td><td>" .
          $row["price_product"] . "</td><td>" .
          $row["occasion"] . "</td><td>" .
          $row["allergies"] . "</td><td>" .
          $row["comments"] . "</td><td>" .
          $row["status"] . "</td><td>" .
          "</td></tr>";
        }
        echo "</tbody>
        </table> </br>";
      } else {
        echo "<br>You have <b>0</b> orders for today";
      }
    }
    ?>
    </br>


    <!-- Here the Admin can see all the bookings that the customer request for the week -->
    <label class="text-white" for="bookings_week"><br>All the Bookings of the week:<br></label>
    <?php
    $todays_date = date("Y-m-d");
    $six_days_date = date('Y-m-d', strtotime($todays_date . ' + 6 days'));
    // select all the information from the tables booking and vehicle
    $sql = "SELECT * FROM orders
            WHERE date_order BETWEEN '$todays_date' and '$six_days_date' ORDER BY date_order;";
            
    // Will show a table with the information 
    if ($result = mysqli_query($conn, $sql)) {
      if (mysqli_num_rows($result) > 0) {
        echo " <table class='table'>
        <thead>
        <tr>
        <th class='text-table'>Date</th>
        <th class='text-table'>Time</th>
        <th class='text-table'>Id Order</th>
        <th class='text-table'>Product</th>
        <th class='text-table'>Size</th>
        <th class='text-table'>Price</th>
        <th class='text-table'>Occasion</th>
        <th class='text-table'>Allergies</th>
        <th class='text-table'>Comments</th>
        
        </tr>
        </thead>
        <tbody>";
        while ($row = $result->fetch_assoc()) {
          echo "<tr class='text-table'><td class='text-table'>" .
          $row["date_order"] . "</td><td>" .
          $row["time_order"] . "</td><td>" .
          $row["id_order"] . "</td><td>" .
          $row["product_type"] . "</td><td>" .
          $row["product_size"] . "</td><td>" .
          $row["price_product"] . "</td><td>" .
          $row["occasion"] . "</td><td>" .
          $row["allergies"] . "</td><td>" .
          $row["comments"] . "</td><td>" .
          "</td></tr>";
        }
        echo "</tbody>
        </table> </br>";
      } else {
        echo "0 Result";
      }
    }
    ?>







  </div>

<!---------------FOOTER----------------------->

</body>
</html>
