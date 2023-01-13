<!doctype html>
<html>
  <head>
    <title> Sweeties by Mariana </title>
    <link rel="stylesheet" href="style/style.css">
  </head>

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
      <img class="banner_img" src="image/cake_banner-01.png">
  
  </div>

  <div class="div_principal_flavor">
    
    <img class="banner_title" src="image/flavors-01.png">
    <img class="flavors_img" src="image/flavor_img.jpg">
    
        <p class="p_about"> An in-depth look at our flavors:</p>
        <p class="flavor"> Vanilla </p>
        <p class="filling"> Strawberry jam and vanilla swiss meringue buttercream</p>
            
        <p class="flavor">Chocolate</p>
        <p class="filling">Chocolate ganage and chocolate swiss meringue buttercream</p>
            
        <p class="flavor">Chocolate/Vanilla</p>
        <p class="filling">Strawberry jam and vanilla swiss meringue buttercream</p>
            
        <p class="flavor">3 leches</p>
        <p class="filling"> Whipped cream and peaches</p>
            
        <p class="flavor">Red Velvet</p>
        <p class="filling">Soft cheese buttercream </p>
            
        <p class="flavor">Lemon and poppy seeds</p>
        <p class="filling">Lemon curd and almond swiss meringue buttercream</p>
            
        <p class="flavor">Carrot, walnuts and raisins</p>
         <p class="filling">Vanilla swiss meringue buttercream </p>
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
