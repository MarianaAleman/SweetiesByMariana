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
    <img class="banner_img" src="image/size_banner-01.png">
</div>  

<div class="div_principal_sizes">
    
    <img class="banner_title" src="image/sizes-01.png">
    <p id="sub_sizes">Choose your cake size. All of our cake sizes are displayed below.</p>
    <p id="sub_sizes2">Some decorations have extra charge according to the design.</p>

    <div class="box_size">
    <img class="size_img" src="image/cake_sizes-01.png">
    <p class="t_sizes"> 4" cake (10cm) </p>
    <p class="p_sizes">4 layers and 3 layes of filling</p>
    <p class="p_sizes">Serves 6 - 8</p>
    <p class="p_sizes">Usually mounted on a 6" cake board</p>
    <p class="p_sizes">Price: from <b>€30</b></p>
    </div>

    <div class="box_size">
    <img class="size_img" src="image/cake_sizes-02.png">
    <p class="t_sizes"> 6" cake (15cm) </p>
    <p class="p_sizes">4 layers and 3 layes of filling</p>
    <p class="p_sizes">Serves 10 - 15</p>
    <p class="p_sizes">Usually mounted on a 8" cake board</p>
    <p class="p_sizes">Price: from <b>€40</b></p>
    </div>

    <div class="box_size">
    <img class="size_img" src="image/cake_sizes-03.png">
    <p class="t_sizes"> 7" cake (18cm) </p>
    <p class="p_sizes">4 layers and 3 layes of filling</p>
    <p class="p_sizes">Serves 15 - 20</p>
    <p class="p_sizes">Usually mounted on a 9" cake board</p>
    <p class="p_sizes">Price: from <b>€50</b></p>
    </div>

    <div class="box_size">
    <img class="size_img" src="image/cake_sizes-04.png">
    <p class="t_sizes"> 8" cake (20cm) </p>
    <p class="p_sizes">4 layers and 3 layes of filling</p>
    <p class="p_sizes">Serves 20 - 25</p>
    <p class="p_sizes">Usually mounted on a 10" cake board</p>
    <p class="p_sizes">Price: from <b>€60</b></p>
    </div>

    <div class="box_size">
    <img class="size_img" src="image/cake_sizes-05.png">
    <p class="t_sizes"> 9" cake (23cm) </p>
    <p class="p_sizes">4 layers and 3 layes of filling</p>
    <p class="p_sizes">Serves 25 - 30</p>
    <p class="p_sizes">Usually mounted on a 12" cake board</p>
    <p class="p_sizes">Price: from <b>€70</p>
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
