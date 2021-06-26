<?php 

?>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Home - The Mink Tribe | Store</title>
  <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="undefined" crossorigin="anonymous">

 </head>
<body>
 <!--header section-->
  <div class="header">
    <div class="container">
      <div class="navbar">
        <div class="logo">
          <img alt="logo" src="images/logo.png" width="125px">
        </div>
        <nav>
          <ul id="MenuItems">
            <li><a href="/">Home</a></li>
            <li><a href="product.blade.php">Products</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="account.blade.php">Account</a></li>
          </ul>
        </nav>
        <img src="images/cart.png" width="30px" height="30px">  <!--Cart image-->
        <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">  <!--Menu image-->
      </div>
      <div class="row">
        <div class="col-2">
          <h1> Give your workout</br>A New Style</h1>
          <p>Success isn't always about greatness. It's about consistency. Consistent</br>work gains success. Greatness will come.</p>
          <!--Button and icon in button-->
          <a href="" class="btn">Explore Now &#8594;</a>
      </div>
      <div class="col-2">
        <img src="images/image1.png">
      </div>
    </div>
  </div>
  </div>

  <!--featured categories-->
  <div class="categories">
    <div class="small-container">
      <div class="row">
        <div class="col-3">
          <img src="images/category-1.jpg" alt="category-1-image">      
        </div>
        <div class="col-3">
          <img src="images/category-2.jpg" alt="category-2-image">
        </div>
        <div class="col-3">
          <img src="images/category-3.jpg" alt="category-3-image">
        </div>
      </div>
    </div>

    <!--featured products-->
    <div class="small-container">
      <h2 class="title">Featured Products</h2>
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

      <!--latest products-->
      <h2 class="title">Latest Products</h2>
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
    </div>
  </div>
    <!--offers-->
  <div class="offer">
    <div class="small-containers">
      <div class="row">
        <div class="col-2">
          <img src="images/exclusive.png" alt="exclusive-1" class="offer-img">
        </div>
        <div class="col-2">
          <p>Exclusive offers in The Mink Tribe Store</p>
          <h1>Smart Band 4</h1>
          <small>The Mi Smart Band 4 features a 39.9% larger(than Mi Band 3) AMOLED color full-touch display with adaptive brightness, so everything is clear as can be.</small></br>
          <a href="" class="btn">Buy Now &#8594;</a>
        </div>
      </div>
    </div>
  </div>
<!--testimonial section-->
  <div class="testimonial">
    <div class="small-container">
      <div class="row">
        <div class="col-3">
          <i class="fa fa-quote-left"></i>
          <p>Lorem Ipsum is simply the dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standrard dummy text ever.</p>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
          </div>
          <img src="images/user-1.png" alt="user-1">
          <h3>Mabel Joe</h3>
        </div>
        <div class="col-3">
          <i class="fa fa-quote-left"></i>
          <p>Lorem Ipsum is simply the dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standrard dummy text ever.</p>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
          </div>
          <img src="images/user-2.png" alt="user-2">
          <h3>Mike Smith</h3>
        </div>
        <div class="col-3">
          <i class="fa fa-quote-left"></i>
          <p>Lorem Ipsum is simply the dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standrard dummy text ever.</p>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
          </div>
          <img src="images/user-3.png" alt="user-3">
          <h3>Mary Poppins</h3>
        </div>
      </div>
    </div>
  </div>
<!--Brands-->
  <div class="brands">
    <div class="small-container">
      <div class="row">
        <div class="col-5">
          <img src="images/logo-godrej.png" alt="logo-godrej">
        </div>
        <div class="col-5">
          <img src="images/logo-oppo.png" alt="logo-oppo">
        </div>
        <div class="col-5">
          <img src="images/logo-coca-cola.png" alt="logo-coca-cola">
        </div>
        <div class="col-5">
          <img src="images/logo-paypal.png" alt="logo-paypal">
        </div>
        <div class="col-5">
          <img src="images/logo-philips.png" alt="logo-philips">
        </div>
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
