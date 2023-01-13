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
    width: 70%;
    margin: auto;
    background: beige;
    padding: 50px;
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
.boton_submit{
    background-color: #C4802A;
    border: none;
    color: white;
     padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;  
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
    <img class="banner_welcome" src="../image/managment-01.png">
 
  </div>

 <div class="welcome_div">

  <!--------------- Form ------------------------------->
  <div id="sign-up3">
    <form method="get">
      <div class="form-group">
        <label class="text-white" for="id_order">Id Order:</label>
        <input name="id_order" type="text" class="form-control" placeholder="Enter Id order" id="id_order" required>
        <div class="form-group">
          <button name="submit" type="submit" class="boton_submit">Search</button>
        </div>
      </div>
    </form>
    <br>

      <?php
  if (isset($_GET['submit'])) {
    $id =  $_GET['id_order'];
    $_SESSION['id_order'] = $id;
    // Select the information from the tables booking, vehicle, staff
    $sql = "SELECT * FROM orders WHERE id_order = $id;";

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
        echo "0 Result";
      }

    }
  }
  ?>

       <!-- Formulario -->
       <form method="post">
      <div class="form-group">
        <label class="text-white" for="engine_type_vehicle">Status:</label>
        <select class="form-control" name="status" id="status">
          <option>Booked</option>
          <option>Received</option>
          <option>On process</option>
          <option>Ready for collection</option>
          <option>Delivered</option>
        </select>
   
        </div>
        <br>
        <button name="update" type="submit" class="boton_submit">Update</button>
      </div>

  <!-- PHP code -->
  <?php
  if (isset($_POST['update'])) {
    $status = $_POST['status'];
    $id_order = $_SESSION['id_order'];


    $result1 = mysqli_query($conn, $sql1);
    $id2 = mysqli_fetch_row($result1);


    $sql = "UPDATE orders
            SET status='$status'
            WHERE id_order = $id_order;";
    $result = mysqli_query($conn, $sql);

 
    // Refresh everything
    echo "<meta http-equiv='refresh' content='0'>";
  }
  ?>


  </div>

<!---------------FOOTER----------------------->

</body>
</html>
