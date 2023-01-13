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
      .banner_welcome{
    padding-top: 20px;
    height: 150px;
    float: left;
  }
  
  .div_title_welcome{
    height: 150px;
    width: 35%;
    margin: auto;
  }

  .welcome_div{
    height: 250px;
    width: 90%;
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

  <div class="div_title_welcome">
    <img class="banner_welcome" src="../image/welcome-01.png">
    <div class="name_echo"><?php echo "". $_SESSION["login_name_customer"]; ?></div>
  </div>
 <div class="welcome_div">
    <div class="indexcustomer_div">

      <li class="welcome_buttons">
        <a href="order.php" class="welcome_items"> New order</a>
      </li>
      <li class="welcome_buttons">
        <a href="history.php" class="welcome_items"> My history</a>
      </li>
      <li class="welcome_buttons">
        <a href="details.php" class="welcome_items"> My details </a>
      </li>
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
      
        <a href="../info.php" class="links_footer">Info</a>
        <a href="../order.php" class="links_footer">Order</a>

    </div>
  </div>


</body>
</html>
