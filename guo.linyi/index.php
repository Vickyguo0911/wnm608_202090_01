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
   
   <div class="view-window" style="background-image:url(img/storebanner1.png)">
    
    <!--  <div class="card cta soft">
      <h1>Discover our Products</h1> 
  
</div> -->

      <div class="btn explore">

             <a href="product_list.php?id=$o->id" class="btn.shop"><h1>Discover Our product</h1></a>
   
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



