<!-- PHP code -->
<?php
include('session_customer.php');
?>

<!doctype html>
<html>
  <head>
    <title> Sweeties by Mariana </title>
    <link rel="stylesheet" href="../style/style.css">
  </head>

  <style>

    .history_div{
      height: 1000px;
    width: 70%;
    margin: auto;
    }

    .history_div{
      height: 700px;
    width: 70%;
    margin: auto;
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
<body>
<!-------------------Menu------------------------->

<nav class="menu">
  <section class="menu_container">
      <img class="logo_img" src="../image/byMarianalogo-01.png">

   <li class="menu_item">
      <a href="index_customer.php" class="menu_link">Welcome</a>
  </li>
  <li class="menu_item">
      <a href="order.php" class="menu_link">Order</a>
  </li>
  <li class="menu_item">
      <a href="history.php" class="menu_link">History</a>
  </li>
  <li class="menu_item">
    <a href="details.php" class="menu_link">My details</a>
</li>
  <li class="menu_item">
      <a href="../logout.php" class="menu_link">Log Out</a>
  </li>

  </ul>
</section>
</nav>
<!-----------BODY-------------------->
<div class= "banner">
    <img class="banner_img" src="../image/order_banner-01.png">
</div>

 <div class="history_div">
 <img class="banner_title" src="../image/myhistorial-01.png">
 <div class="history_div2">
<!-- PHP Code -->
<?php
        $email_customer = $_SESSION["login_db"];
         
        // Select all the information from the tables booking and vehicle
        $sql = " SELECT * FROM `orders` 
        INNER JOIN products ON products.product_size = orders.product_size 
        WHERE `email_customer`= '$email_customer'
        ORDER BY date_order;";


if ($result = mysqli_query($conn, $sql)) {
  if (mysqli_num_rows($result) > 0) {
      echo "  <table class='table'>
<thead>
<tr>
<th class='text-table'>Date</th>
<th class='text-table'>Time</th>
<th class='text-table'>Id Order</th>
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
              $row["product_size"] . "</td><td>" .
              $row["price_product"] . "</td><td>" .
              $row["occasion"] . "</td><td>" .
              $row["allergies"] . "</td><td>" .
              $row["comments"] . "</td><td>" .
              $row["status"] . "</td><td>" .
              "</td></tr>";
      }

} else {
  echo "You dont have any order with us.";
}
}

?>      

</div>

</div>



</body>
</html>
