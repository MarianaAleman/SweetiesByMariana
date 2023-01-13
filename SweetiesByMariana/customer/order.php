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

  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="../style/bootstrap.min.css">
  <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />

  <!-- JS -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
   <script src="../script/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>


  <style>
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
    .product_type_div{
    height: 100px;
    width: 90%;
    margin: auto;
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

  <div class="div_principal_order">
    <img class="banner_title" src="../image/order-01.png">

<div class="form_div"> 

<form id="order" method="POST" action="order.php">

 <!-- here the customer can choose the type of product -->
    <div class="product_div">
        <label for="product_type"> Product </label>
        <select name="product_type" id="product_type">
            <option>Choose a product</option>
            <option value="Cake">Cake</option>
            <option value="Cupcakes">Cupcakes</option>
            <option value="Bundle">Bunde (Mini cake + cupcakes)</option>
        </select>
    </div>   

    <!-- here the customer can choose the size of the product they chose -->
    <div class="product_type_div">
        <label for="product_size"> Size </label>
        <select name="product_size" id="product_size">
            <option >Choose your size </option>
            <option value="4 inch">4 inch (10cm) from €30 </option>
            <option value="6 inch">6 inch (15cm) from €40 </option>
            <option value="7 inch">7 inch (18cm) from €50 </option>
            <option value="8 inch">8 inch (20cm) from €60 </option>
            <option value="9 inch">9 inch (22cm) from €70 </option>

            <option value="Box 6 cupcakes">6 cupcakes from €18 </option>
            <option value="Box 12 cupcakes">12 cupcakes from €35 </option>

            <option value="Bundle: 1 mini + 5 cupcakes">1 mini cake + 5 cupcakes from €24 </option>
            <option value="Bundle: 1 mini + 9 cupcakes">1 mini cake + 9 cupcakes from €45 </option>
        </select>

    </div>

      <div class="form_detail">
    <!-- here the customer can choose the ocasion of the product -->
            <div class="title_occation">
        <label for="occasion"> Occasion</label>
           </div>

            <div class="occasion_option">
                <input type="radio" id="birthday" name="occasion" value="Birthday" >
                <label for="birthday"> Birthday</label>
            </div>
            <div class="occasion_option">
                <input type="radio" id="wedding" name="occasion" value="Wedding" > 
                <label for="wedding"> Wedding</label> 
            </div>
            <div class="occasion_option">
                <input type="radio" id="baby" name="occasion" value="Baby Shower">
                <label for="baby">Baby shower</label>
            </div>
            <div class="occasion_option">
                <input type="radio" id="graduation" name="occasion" value="Graduation" >
                <label for="graduation">Graduation</label>
            </div>
            <div class="occasion_option">
                <input type="radio" id="other" name="occasion" value="Other" >
                <label for="other">Other</label>
                <input type="text" id="other_text" name="other_text" size="15" placeholder="Other">
            </div>

    </div>
 
    <!-- here the customer can select if they have any allegie-->
    <div class="extras_div">

        <label for="allergies"> Allergies:  </label>
        <input type="radio" id="yes_allergie" name="allergies" value="Yes">
                <label for="yes_allergie">Yes</label>
        <input type="radio" id="no_allergie" name="allergies" value="No">
                <label for="no_allergie">No</label>
    <div class="comments_div">
    <label for="comments">Comments</label>
             <input type="text" id="comments" name="comments" size="100" placeholder="Comments">
            </div>
    </div>

  
     <!-- here the customer can choose the date for the order -->
    <div class="customer_div">
        <form  method="post">
            <label  for="date_order">Date</label>
            <input class="form-control" id="date_order" name="date_order" placeholder="YYYY-MM-DD" type="date" required />
        
            <label for="time_order"> Time </label>
            <input type="time" id="time_order" name="time_order"  min="10:00" max="18:00" required>


        <button class="boton_submit" name="submit" type="submit">Order</button>


         <!-- PHP code -->
         <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email_customer = $_SESSION["login_db"];
    $product_type = $_POST['product_type'];
    $product_size = $_POST['product_size'];
    $occasion = $_POST['occasion'];
    $allergies = $_POST['allergies'];
    $comments =  $_POST['comments'];
    $date_order = date('Y-m-d', strtotime($_POST['date_order']));
    $time_order = $_POST['time_order'];
          
    $sql3 = "SELECT COUNT(date_order) FROM orders where date_order = '$date_order';";

    $result2 = mysqli_query($conn, $sql3);
    $count1 = mysqli_fetch_row($result2);
    $count = implode(" ", $count1);
 
   
    if ($count < 5) { 

    $sql22 = "INSERT INTO orders (email_customer,product_type, product_size, occasion, allergies, comments, date_order, time_order, status) 
      VALUES('".$email_customer."', '".$product_type."', '".$product_size."', '".$occasion."', '".$allergies."', '".$comments."' ,'".$date_order."', '".$time_order."' , 'Booked')";
    $result = mysqli_query($conn, $sql22); 
       
    echo '<script>alert("Your order was completed")</script>';
    header('Location: success.html');
    header('Location: history.php');
                    
    }
    else {
        echo '<script>alert("We are fuly booked for the date you selected, please select another date")</script>';
      }
    }
?>

</form>


</div>
</form>
</div>
</div>





<!---------------FOOTER----------------------->

  <div class="footer">
      <div class="box_footer">
          <h2>About us</h2>
          <p class="p_footer">Sweeties by Mariana is an online boutique cake shop providing minimal and modern buttercream cakes and cupcakes in Dublin.</p>
      </div>
      <div class="box_footer">
          <h2>Contact Us!</h2>
          <p class="p_footer">Chat with us through the messenger:</p>
          <p class="p_footer">Email: hello@bymariana.com</p>
      </div>
      <div class="box_footer">
          <h2>Follow us!</h2>
          <a href="https://www.instagram.com/sweeties.bymariana/"><img class = "redesicon1" src="assets/ig.svg"></a>
          <a href="https://www.facebook.com/Sweeties.byMariana/"><img class = "redesicon" src="assets/fb.svg"></a>
      </div>
      <div class="box_footer">
        <h2>Quick links</h2>
      
        <a href="../info.html" class="links_footer">Info</a>
        <a href="../order.html" class="links_footer">Order</a>
        <a href="../login.html" class="links_footer">Log In</a>
    </div>
  </div>


  <script>
          $(document).ready(function() {
            var date_input = $('input[name="date_order"]'); //our date input has the name "date"
            var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
            var options = {
              format: 'yyyy-mm-dd',
              container: container,
              todayHighlight: true,
              autoclose: true,
              daysOfWeekDisabled: [1],
          
            };
            date_input.datepicker(options);
          })
        
        </script>
</body>
</html>
