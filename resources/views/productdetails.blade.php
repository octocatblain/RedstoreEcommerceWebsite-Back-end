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
  
    <!-- single product details-->
    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="images/gallery-1.jpg" width="100%" alt="gallery-picture-1" id="ProductImg">

                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="images/gallery-1.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/gallery-2.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/gallery-3.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/gallery-4.jpg" width="100%" class="small-img">
                    </div>
                </div>

            </div>
            <div class="col-2">
                <p>Products/T-shirt</p>
                <h1>Printed Red T-shirt by Puma</h1>
                <h4>Ksh. 1,000</h4>
                <select>
                    <option>Select size</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>L</option>
                    <option>M</option>
                    <option>S</option>
                </select>
                <input type="number" value="1" min="1">
                <a href="" class="btn">Add to Cart</a>

                <h3>Product Details<i class="fa fa-indent"></i></h3>
                </br>
                <p>Give your summer wardrobe a style upgrade with the Puma Men's Active T-shirt. Team it with a pair of shorts for your morning workout or a denim for an evening out with the guys.</p>
            </div>
        </div>
    </div>
<!-- title-->
<div class="small-container">
    <dic class="row row-2">
        <h2>Related Products</h2>
        <p>View More</p>
    </div>
</div>


<!-- latest products-->
    <div class="small-container">
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

  <!--JavaScript for toggle menu-->
  <script>
    var ProductImg = document.getElementById("ProductImg");
    var SmallImg = document.getElementsByClassName("small-img");

        SmallImg[0].onclick = function()
        {
            ProductImg.src = SmallImg[0].src;
        }
        SmallImg[1].onclick = function()
        {
            ProductImg.src = SmallImg[1].src;
        }
        SmallImg[2].onclick = function()
        {
            ProductImg.src = SmallImg[2].src;
        }
        SmallImg[3].onclick = function()
        {
            ProductImg.src = SmallImg[3].src;
        }

  </script>
</body>
</html>
