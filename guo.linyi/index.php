<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";


?><!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
  
      <title>Store</title>

   <?php include "parts/meta.php" ?>
      <?php include "parts/navbar.php" ?>

</head>
<body>
   
   <div class="view-window main-window" style="background-image:url(img/store/storebanner01.jpg)">
    
    <!--  <div class="card cta soft">
      <h1>Discover our Products</h1> 
  
</div> -->

      <div class="btn explore">

             <a href="product_list.php?id=$o->id" ><h2>Discover Our product</h2></a>
   
            </div>
      </div>
      <div class="container">
    <div class=" grid margin-top-6 margin-bottom-7">
      
        <div class="col-sm-12 col-md-6  "><img src="img/products/everyday_face_oil.jpg" alt="" style="height: 400px">
        </div>
        <div class="col-md-1"></div>
      <div class="col-md-5 col-sm-10 ">
        <div class="card transparent ">
          <h1 class="medium-color">WELCOME</h1>
          <br>
          <p>Hello Customer, shop all the natural skin care products! They are all design by ourselves! Our store always pays attention to what customers care about most, so that customers love our products and designs.</p>
          
           <a class="btn dark display-inline-block" href="product_list.php"> shop now </a>
        </div>
      </div>
    </div>
  </div>


<?php include "parts/new_arrival.php" ?>

<?php include "parts/hot_products.php" ?>
<br>
<br>
<hr>



      
<?php include "parts/subscribe.php" ?>
<br>
<br>
 <?php include "parts/footer.php" ?>

</body>
</html>



