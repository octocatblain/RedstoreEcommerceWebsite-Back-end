<html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Products - The Mink Tribe | Store</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
 <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"> ->>> Search Google for Font-awesome for cdn-->
 </head>
<body>

 <!--header section-->
    <div class="container">
        <div class="navbar">
            <div class="logo">
            <img alt="logo" src="images/logo.png" width="125px">
            </div>
            <nav>
            <ul id="MenuItems">
                <li><a href="welcome.blade.php">Home</a></li>
                <li><a href="product.blade.php">Products</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="account.blade.php">Account</a></li>
            </ul>
            </nav>
            <img src="images/cart.png" width="30px" height="30px">  <!--Cart image-->
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">  <!--Menu image-->
        </div>
    </div>
  
<!-- cart item details-->
    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>SubTotal</th>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src ="images/buy-1.jpg">
                        <div>
                            <p>Printed Red T-shirt</p>
                            <small>Price : Ksh. 1,000</small>
                            </br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1" min="1"></td>
                <td>Ksh. 1,000</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src ="images/buy-2.jpg">
                        <div>
                            <p>Printed Red T-shirt</p>
                            <small>Price : Ksh. 1,000</small>
                            </br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1" min="1"></td>
                <td>Ksh. 1,000</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src ="images/buy-3.jpg">
                        <div>
                            <p>Printed Red T-shirt</p>
                            <small>Price : Ksh. 1,000</small>
                            </br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1" min="1"></td>
                <td>Ksh. 1,000</td>
            </tr>
        </table>
<!--total-->
<div class="total-price">
    
    <table>
        <tr>
            <td>Subtotal</td>
            <td>Ksh. 3,000</td>
        </tr>
        <tr>
            <td>Tax</td>
            <td>Ksh. 150</td>
        </tr>
        <tr>
            <td>Total</td>
            <td>Ksh. 3,150</td>
        </tr>
    </table>

</div>

    </div>
    
<!--footer-->
<div class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col-1">
          <h3>Download Our Apps:</h3>
          <p>Download app for Android and iOS mobile phones.</p>
          <div class="app-logo">
            <img src="images/play-store.png" alt="play-store-logo">
            <img src="images/app-store.png" alt="app-store-logo">
          </div>
        </div>
        <div class="footer-col-2">
          <img src="images/logo-white.png" alt="white-logo">
          <p>Our Purpose is to Sustainably Make the Pleasure and Benefits of Sports Accessible to Many.</p>
        </div>
        <div class="footer-col-3">
          <h3>Useful Links:</h3>
          <ul>
            <li>Coupons</li>
            <li>Blog Posts</li>
            <li>Return Policy</li>
            <li>Join Affiliate Program</li>
          </ul>
        </div>
        <div class="footer-col-4">
          <h3>Follow Us On:</h3>
          <ul>
            <li>Facebook</li>
            <li>Twitter</li>
            <li>Instagram</li>
            <li>Youtube</li>
          </ul>
        </div>
      </div>
      <hr>
      <p class="copyright">Copyright 2021 - The Mink Tribe</br><span>Designed by<a href="https://www.muemablain.wordpress.com/portfolio/" style="color:#ff523b" target="_blank"> Blain Muema</a></span></p>
    </div>
</div>
<!--JavaScript for toggle menu-->
  <script>
    var MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px";

    function menutoggle(){
      if (MenuItems.style.maxHeight == "0px")
        {
          MenuItems.style.maxHeight = "200px";
        }
    else
        {
          MenuItems.style.maxHeight = "0px";
        }
    }
  </script>

  
</body>
</html>
