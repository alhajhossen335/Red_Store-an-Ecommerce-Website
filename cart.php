<?php include('server.php');?>


<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Shopping Cart Page - RedStore</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

  <div class="container">
  <div class="navbar">
    <div class="logo">
      <a href="index.php"><img src="images/logo.png" width="125px">
    </div>
    <nav>
      <ul id="MenuItems">
        <li><a href="index.php">Home</a></li>
        <li><a href="product.php">Products</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="register.php">Account</a></li>
      </ul>
    </nav>
    <img src="images/cart.png" width="30px" height="30px">
    <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
  </div>
  
  </div>

  <!--------------cart items details-------------->


  <div class="small-container cart-page">
    <table>
      <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Subtotal</th>
      </tr>

      <tr>
        <td>
          <div class="cart-info">
            <img src="images/buy-1.jpg">
          </div>

          <div>
            <p>Red Printed T-Shirt</p>
            <small>Price: ৳ 350.00 </small>
            <br>
            <a href="">Remove</a>
          </div>
        </td>
        <td><input type="number" value="1"></td>
        <td>৳ 350.00</td>
      </tr>

      <tr>
        <td>
          <div class="cart-info">
            <img src="images/buy-2.jpg">
          </div>

          <div>
            <p>SPRINT Men's Sneaker</p>
            <small>Price: ৳ 2650.00 </small>
            <br>
            <a href="">Remove</a>
          </div>
        </td>
        <td><input type="number" value="1"></td>
        <td>৳ 2650.00</td>
      </tr>

      <tr>
        <td>
          <div class="cart-info">
            <img src="images/buy-3.jpg">
          </div>

          <div>
            <p>Men's Gray Athletic pants</p>
            <small>Price: ৳ 460.00 </small>
            <br>
            <a href="">Remove</a>
          </div>
        </td>
        <td><input type="number" value="1"></td>
        <td>৳ 460.00</td>
      </tr>
    </table>


    <div class="total-price">
      <table>
        <tr>
          <td>Subtotal</td>
          <td>৳ 3460.00</td>
        </tr>

        <tr>
          <td>VAT</td>
          <td>৳ 137.00</td>
        </tr>

        <tr>
          <td>Total</td>
          <td>৳ 3597.00</td>
        </tr>
      </table>
      
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
