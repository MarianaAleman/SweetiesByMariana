<!-- PHP code -->
<?php
include('session_customer.php');
?>

<!doctype html>
<html>
  <head>
    <title> Sweeties by Mariana </title>
    <link rel="stylesheet" href="../style/style.css">
    <style>
      .details_div{
    width: 60%;
    height: 450px;
    margin: auto;
    padding: 100px;
    background-color: beige;
    
}

.elements_details{
    width: 75%;
    height: 50px;
    margin: auto;
    padding: 10px;
    background-color: white;
    float: left;
}
.elements_details_tag{
    width: 25%;
    height: 50px;
    margin: auto;
    padding: 10px;
    background-color: white;
    float: left;
}

.tag_details{
    font-size: 18px;
    color: gray;
}
.echo_details{
  font-size: 18px;
    color: black;
}
.div_principal_detail{
    background-color:white;
    height: 650px;
    width: 70%;
    margin: auto;
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

<div class="div_principal_detail">
  <img class="banner_title" src="../image/mydetails-01.png">


<div class="details_div">

<div class="elements_details_tag">
  <p class="tag_details">Name:</p> 
</div>
<div class="elements_details">
  <p class="echo_details"><?php echo "" . $_SESSION["login_name_customer"]; ?> </p>
</div>
<div class="elements_details_tag">
  <p class="tag_details">Surname:</p> 
</div>
<div class="elements_details">
<p class="echo_details"><?php echo "" . $_SESSION["login_surname_customer"]; ?> </p>
</div>
<div class="elements_details_tag">
  <p class="tag_details">Email:</p> 
</div>
<div class="elements_details">
<p class="echo_details"><?php echo "" . $_SESSION["login_email_customer"]; ?> </p>
</div>
<div class="elements_details_tag">
  <p class="tag_details">Phone:</p> 
</div>
<div class="elements_details">
<p class="echo_details"><?php echo "" . $_SESSION["login_phone_customer"]; ?> </p>
</div>

<button type="submit" class="boton_submit">Update</button>
<button a href="index_customer.php" class="boton_submit">Back</button>
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
          <a href="https://www.instagram.com/sweeties.bymariana/"><img class = "redesicon1" src="../assets/ig.svg"></a>
          <a href="https://www.facebook.com/Sweeties.byMariana/"><img class = "redesicon" src="../assets/fb.svg"></a>
      </div>
      <div class="box_footer">
        <h2>Quick links</h2>
      
        <a href="info.html" class="links_footer">Info</a>
        <a href="order.html" class="links_footer">Order</a>
        <a href="login.html" class="links_footer">Log In</a>
    </div>
  </div>


  <script src="script/script.js"></script>
</body>
</html>
