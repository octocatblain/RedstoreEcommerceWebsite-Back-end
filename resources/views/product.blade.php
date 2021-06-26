<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Products - The Mink Tribe | Store</title>
  <link rel="stylesheet" href="resources/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="undefined" crossorigin="anonymous">
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
  
    <!-- all products-->
    <div class="small-container">

        <div class="row row-2">
            <h2>All Products</h2>
            <select>
                <option>Default Sort</option>
                <option>Sort by Price</option>
                <option>Sort by Popularity</option>
                <option>Sort by Rating</option>
                <option>Sort by Sale</option>
            </select>
        </div>

    <div class="row">
        <div class="col-4">
          <img src="images/product-1.jpg" alt="product-1">
          <h4>Printed Red T-shirt</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>Ksh. 1,000</p>
        </div>
        <div class="col-4">
          <img src="images/product-2.jpg" alt="product-2">
          <h4>Black Running Shoes</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>Ksh. 3,000</p>
        </div>
        <div class="col-4">
          <img src="images/product-3.jpg" alt="product-3">
          <h4>Grey-Black Sweatpants</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            <i class="fa fa-star-o"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>Ksh. 900</p>
        </div>
        <div class="col-4">
          <img src="images/product-4.jpg" alt="product-4">
          <h4>Printed Navy Blue T-shirt</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
          </div>
          <p>Ksh. 750</p>
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <img src="images/product-5.jpg" alt="product-5">
          <h4>Printed Red T-shirt</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>Ksh. 1,000</p>
        </div>
        <div class="col-4">
          <img src="images/product-6.jpg" alt="product-6">
          <h4>Black Running Shoes</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>Ksh. 3,000</p>
        </div>
        <div class="col-4">
          <img src="images/product-7.jpg" alt="product-7">
          <h4>Grey-Black Sweatpants</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            <i class="fa fa-star-o"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>Ksh. 900</p>
        </div>
        <div class="col-4">
          <img src="images/product-8.jpg" alt="product-8">
          <h4>Printed Navy Blue T-shirt</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
          </div>
          <p>Ksh. 750</p>
        </div>

        <!--second row of latest products-->
    <div class="row">
        <div class="col-4">
          <img src="images/product-9.jpg" alt="product-9">
          <h4>Printed Red T-shirt</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>Ksh. 1,000</p>
        </div>
        <div class="col-4">
          <img src="images/product-10.jpg" alt="product-10">
          <h4>Black Running Shoes</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>Ksh. 3,000</p>
        </div>
        <div class="col-4">
          <img src="images/product-11.jpg" alt="product-11">
          <h4>Grey-Black Sweatpants</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            <i class="fa fa-star-o"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>Ksh. 900</p>
        </div>
        <div class="col-4">
          <img src="images/product-12.jpg" alt="product-12">
          <h4>Printed Navy Blue T-shirt</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
          </div>
          <p>Ksh. 750</p>
        </div>
    </div>
    <div class="page-btn">
        <span>1</span>
        <span>2</span>
        <span>3</span>
        <span>4</span>
        <span>5</span>
        <span>&#8594;</span>
    </div>
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
