<?php include('server.php');

	if (empty($_SESSION['username'])){
		header('location: login.php');
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>About-Us</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="header">
  <div class="container">
  <div class="navbar">
    <div class="logo">
      <a href="index.php"><img src="images/logo.png" width="125px">
    </div>
    <nav>
      <ul id="MenuItems">
        <li><a href="index.php">Home</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="register.php">Account</a></li>
      </ul>
    </nav>
    <a href="cart.html"><img src="images/cart.png" width="30px" height="30px">
    <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
  </div>

  <!------------about us-------------->

  <div class="aboutus">
    <div class="container">
      <div class="row">
        <div class="col-2">
          <img src="images/image1.png" width="100%">

        </div>

        <div class="col-2">
          <div class="form-box">
            <h2><u> About Us</u></h2>

            <br>

          <p>Be it clothing, footwear or accessories, Redstore offers you the ideal combination of fashion and functionality for men, women and kids. You will realise that the sky is the limit when it comes to the types of outfits that you can purchase for different occasions.
            At Redstore you will find myriad options in smart formal shirts and trousers, cool T-shirts and jeans, or kurta and pyjama combinations for men. Wear your attitude with printed T-shirts. Create the back-to-campus vibe with varsity T-shirts and distressed jeans. Be it gingham, buffalo, or window-pane style, checked shirts are unbeatably smart. Team them up with chinos, cuffed jeans or cropped trousers for a smart casual look. Opt for a stylish layered look with biker jackets. Head out in cloudy weather with courage in water-resistant jackets. Browse through our innerwear section to find supportive garments which would keep you confident in any outfit.
            Redstore is one of the best online shopping sites for classy accessories that perfectly complement your outfits. You can select smart analogue or digital watches and match them up with belts and ties. Pick up spacious bags, backpacks, and wallets to store your essentials in style. Whether you prefer minimal jewellery or grand and sparkling pieces, our online jewellery collection offers you many impressive options.
            </p>
          </p>

         </div>

          </div>
        </div>
      </div>
    </div>


<!--------------footer------------>

    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col-1">
            <h3>Download Our Apps</h3>
            <p>Download App for Android and ios mobile phone.</p>
            <div class="app-logo">
              <img src="images/play-store.png">
              <img src="images/app-store.png">

            </div>

          </div>
          <div class="footer-col-2">
            <img src="images/logo-white.png">
            <p>Our Purpose Is To Sustainably Make the Pleasure and Benefits of Sports Accessible to the Many.</p>

          </div>

          <div class="footer-col-3">
            <h3>Useful Links</h3>
            <ul>
              <li>Coupons</li>
              <li>Blog Post</li>
              <li>Return Policy</li>
              <li>Join Affiliate</li>
            </ul>

          </div>

          <div class="footer-col-4">
            <h3>Follow us</h3>
            <ul>
              <li>Facebook</li>
              <li>Twitter</li>
              <li>Instagram</li>
              <li>YouTube</li>
            </ul>

          </div>

        </div>
        <hr>
        <p class="copyright">Copyright 2020</p>

      </div>

    </div>

    <!--------js for toggle menu-------->

     <script>
       var MenuItems = document.getElementById("MenuItems");

       MenuItems.style.maxHeight = "0px";

       function menutoggle(){
        if(MenuItems.style.maxHeight == "0px")
          {
             MenuItems.style.maxHeight = "200px";
          }
          else{
            MenuItems.style.maxHeight = "0px";
          }
       }
     </script>
</body>
</html>
