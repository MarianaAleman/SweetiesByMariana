

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
    <img class="banner_img" src="image/size_banner-01.png">
</div>

  <div class="div_principal_login">
    <img class="banner_title" src="image/login-01.png">
    <div class="login_div">
        <div class="login_details_div">
        <form id="login_details" method="post">
            
            <label for="email"> Email </label>
            <input type="email" id="email_admin" name="email_admin" size="30" placeholder="Email" required>

            <label for="password"> Password </label>
            <input type="password" id="password_admin" name="password_admin" size="30" placeholder="Password" required>
        

            <button type="submit" class="boton_submit">Log In</button>
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
        <h2>Admin links</h2>
        <a href="login_admin.php" class="links_footer">Log In</a>
    </div>
</div>


<script src="script/script.js"></script>
</body>
</html>

<!-- PHP code -->
<?php
session_start();
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email_admin = $_POST['email_admin'];
  $password_admin = $_POST['password_admin'];
  
  $sql = "SELECT * FROM admin WHERE email_admin='$email_admin' && password_admin ='$password_admin'";
  $sqlName = "SELECT name_admin FROM admin WHERE email_admin='$email_admin' && password_admin='$password_admin'";

  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);

  $count = mysqli_num_rows($result);
  // In case if the data is match you will go directly to the main page from admin
  if ($count == 1) {
    $_SESSION['login_admin'] = $row['email_admin'];
    $_SESSION['name_admin'] = $row['name_admin'];
    header('Location: success.html');
    header('Location: admin/index_admin.php');
  } else {
  // In case if is not match you will see this alert 
    echo '<script>alert("Your Login Name or Password is invalid!")</script>';
  }
}
?>