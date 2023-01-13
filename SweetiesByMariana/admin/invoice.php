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
  .welcome_div{
    height: 600px;
    width: 90%;
    margin: auto;
    background: beige;
    padding: 50px;
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

.div_invoice{
  height: 1000px;
    width: 90%;
    margin: auto;
}

.table{
      border-collapse: collapse;
       width: 100%;
      padding: 50px;
    }

.table tr{background-color: white;}


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
    .invoice{
      background: white;
      width: 50%;
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

  <div class="div_invoice">
  <img class="banner_title" src="../image/invoice-01.png">

  <div class="welcome_div">
  <!-- Formulario -->
  <div id="formulario_invoice">

  <div id="sign-up3">
    <form method="get">
      <div class="form-group">
        <label class="text-white" for="id_order">Id order:</label>
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
    $todays_date = date("Y-m-d");
    
    // Select the information from the tables
    $sql = "SELECT * FROM orders 
    INNER JOIN products ON products.product_size = orders.product_size
    INNER JOIN customer ON customer.email_customer = orders.email_customer
    WHERE id_order = $id;";


      // Will show a table with the information 
    if ($result = mysqli_query($conn, $sql)) {
      if (mysqli_num_rows($result) > 0) {
        echo "
        <div id='invoice'>
      
          <div id='a111'> 
            <label>Id Invoice : </label>
            <label>" . $id . "</label>
            </br>
            <label>Date: </label>
            <label>" . $todays_date . "</label>                  
          </div>
        </div> ";



        //-------------------------CUSTOMER----------->
        echo "
         <div id='invoice'>
        <div id='a112'> 
      
         <table class='table' >
                       <thead>
                       <tr>
                       <th>Name Customer</th>
                       <th>Surname Customer</th>
                       <th>Phone Customer</th>
                       <th>Email Customer</th>
                       </tr>
                       </thead>
                       <tbody>";
     
     while ($row = $result->fetch_assoc()) {
       echo "<tr class='text-table'><td class='text-table'>" .
         $row["name_customer"] . "</td><td>" .
         $row["surname_customer"] . "</td><td>" .
         $row["phone_customer"] . "</td><td>" .
         $row["email_customer"] . "</td><td>" .
         "</td></tr>";
  }
echo "</tbody>
                </table></div>";
} else {
echo "0 Result";
  

  }
} 
     


      if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
          echo"
   <table class='table'>
        <thead>
        <tr>
        <th class='text-table'>Date</th>
        <th class='text-table'>Time</th>
        <th class='text-table'>Id Order</th>
        <th class='text-table'>Product</th>
        <th class='text-table'>Size</th>
        
        <th class='text-table'>Occasion</th>
        <th class='text-table'>Allergies</th>
        <th class='text-table'>Comments</th>
        <th class='text-table'>Status</th>
        <th class='text-table'>Total price</th>
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
          
          $row["occasion"] . "</td><td>" .
          $row["allergies"] . "</td><td>" .
          $row["comments"] . "</td><td>" .
          $row["status"] . "</td><td>" .
          $row["price_product"] . "</td><td>" .
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



        <!-- Print -->
        <label class="text-white" for="id">Print Invoice: </label>
      <div class="form-group">
        <button onclick='myFunction()' class='boton_submit'>Print</button>
      </div>
      <script>
        function myFunction() {
          window.print();
        }
      </script>


  </div>
<!---------------FOOTER----------------------->

</body>
</html>
