<?php
session_start();
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name_customer = $_POST['name_customer'];
    $surname_customer = $_POST['surname_customer'];
    $password = $_POST['password'];
    $email_customer = $_POST['email_customer'];
    $phone_customer = $_POST['phone_customer'];

    // Insert to the table customer 
    $sql = "INSERT INTO customer (name_customer, surname_customer, password, email_customer, phone_customer) 
  			  VALUES('$name_customer', '$surname_customer', '$password', '$email_customer', '$phone_customer')";
    $result = mysqli_query($conn, $sql);
    header('Location: success.html');
    header('Location: login.php');
}

?>

<!doctype html>
<html>
  <head>
    <title> Sweeties by Mariana </title>
    <link rel="stylesheet" href="style/style.css">
  </head>

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

</style>
<body>
<!-------------------Menu------------------------->
<nav class="menu">
    <section class="menu_container">
        <img class="logo_img" src="image/byMarianalogo-01.png">
 
    <ul class="menu_links">
        <li class="menu_item">
            <a href="index.php" class="menu_link">Home</a>
        </li>
        <li class="menu_item menu_item--show">
            <a href="index.php" class="menu_link">Cakes<img src="assets/arrow.svg" class="menu_arrow"></a>
                <ul class="menu_nesting">
                    <li class="menu_inside">
                        <a href="sizes.php" class="menu_link menu_link--inside">Sizes guide</a>
                    </li>
                    <li class="menu_inside">
                        <a href="flavors.php" class="menu_link menu_link--inside">Flavor guide</a>
                    </li>
                    <li class="menu_inside">
                        <a href="howto.php" class="menu_link menu_link--inside">How to order</a>
                    </li>
                </ul>
        </li>
        <li class="menu_item menu_item--show">
          <a href="index.php" class="menu_link">Cupcakes<img src="assets/arrow.svg" class="menu_arrow"></a>
              <ul class="menu_nesting">
                  <li class="menu_inside">
                      <a href="sizes.php" class="menu_link menu_link--inside">Sizes guide</a>
                  </li>
                  <li class="menu_inside">
                      <a href="flavors.php" class="menu_link menu_link--inside">Flavor guide</a>
                  </li>
                  <li class="menu_inside">
                      <a href="howto.php" class="menu_link menu_link--inside">How to order</a>
                  </li>
              </ul>
      </li>
      <li class="menu_item menu_item--show">
        <a href="index.php" class="menu_link">Bundles<img src="assets/arrow.svg" class="menu_arrow"></a>
            <ul class="menu_nesting">
                <li class="menu_inside">
                    <a href="sizes.php" class="menu_link menu_link--inside">Sizes guide</a>
                </li>
                <li class="menu_inside">
                    <a href="flavors.php" class="menu_link menu_link--inside">Flavor guide</a>
                </li>
                <li class="menu_inside">
                    <a href="howto.php" class="menu_link menu_link--inside">How to order</a>
                </li>
            </ul>
    </li>
    
    <li class="menu_item">
        <a href="login.php" class="menu_link">Log In</a>
    </li>
    </ul>
</section>
  </nav>
<!-----------BODY-------------------->
<div class= "banner">
    <img class="banner_img" src="image/order_banner-01.png">
</div>

  <div class="div_principal_signin">
    <img class="banner_title" src="image/signin-01.png">
    <div class="signin_div">
        <div class="sign_details_div">
        <form id="signin_details" method="post" action="signin.php" onsubmit="return checkForm(this);">
            <label for="name"> Name </label>
            <input type="text" id="name_customer" name="name_customer" size="15" placeholder="Name" required>
            <input type="text" id="surname_customer" name="surname_customer" size="20" placeholder="Last name" required>

            <label for="tel"> Phone</label>
            <input type="tel" id="phone_customer" name="phone_customer" size="10" placeholder="Phone" required>

            <label for="email"> Email </label>
            <input type="email" id="email_customer" name="email_customer" size="30" placeholder="Email" required>

            <label for="password"> Password </label>
            <input type="password" id="password" name="password" size="30" placeholder="Password" required>

            <p class="text_signin">Registered already?  <a href="login.php"> Log in here</a></p>

            <button name="reg_user" type="submit" class="boton_submit">Submit</button> 

            
        </form>
        </div>
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
    <div class="box_footer">
        <h2>Admin links</h2>
        <a href="login_admin.php" class="links_footer">Log In</a>
    </div>
</div>


<script src="script/script.js"></script>
</body>
</html>
