<?php

include_once "lib/php/functions.php";


function makeProductList($r,$o) {
return $r.<<<HTML
<div class="col-xs-12 col-md-4">
   <a href="product_item.php?id=$o->id">
      <figure class="product-item">
         <div class="product-image">
            <img src="img/products/$o->image_thumb" alt="">
         </div>
         <figcaption class="product-description">
            <div class="product-title">$o->product_name</div>
            <div class="product-price">&dollar;$o->price/piece</div>
         </figcaption>

        <a href="product_item.php?id=$o->id" class="btn sell inline">Shop now</a>
      </figure>
   </a>
</div>
HTML;
}



?><!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width,initial-scale=1">
   <title>Store</title>

   <?php include "parts/meta.php" ?>
      <?php include "parts/navbar.php" ?>
</head>
<body>
   




   <div class="view-window" style="background-image:url(img/storebanner1.png)">
    
    <!--  <div class="card cta soft">
      <h1>Discover our Products</h1> 
  
</div> -->

      <div class="btn explore">

             <a href="product_list.php?id=$o->id" class="btn.shop"><h1>Discover Our product</h1></a>
   
            </div>
        
      </div>




<?php include "parts/new_arrival.php" ?>

  <div class="view-window" style="background-image:url(img/storebanner.jpg)">
   
      </div>
<?php include "parts/hot_products.php" ?>
<br>
<br>
<hr>
      <div class="container" align="center">
         <br>
         <h1>Want $10 off your next purchase?</h1>
         <br>
         <p>Sign up for Nature emails today and we'll send you your special offer.</p>
         <div class="container">
            <div class="form-control display-flex flex-align-center flex-justify-center" style="max-width: 400px">
               <!-- <div class="flex-none"> -->
                  <input type="text" class="form-input" placeholder="Enter your email">
               <!-- </div> -->
               <div class="flex-none">
                  <button type="button" class="form-button third">SUBSCRIBE</button>
               </div>
            </div>
         </div>
      </div>

   </div>
<br>
<br>
 <?php include "parts/footer.php" ?>

</body>
</html>



