<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$product = MYSQLIQuery("SELECT * FROM products WHERE id = {$_GET['id']}")[0];

$thumbs = explode(",",$product->image_other);

$thumbs_elements = array_reduce($thumbs,function($r,$o){
   return $r."<img src='img/products/$o'>";
});

?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Store: <?= $product->product_name ?></title>

   <?php include "parts/meta.php" ?>
</head>
<body>
   
   <?php include "parts/navbar.php" ?>


<!--item page nav -->
<!--
   <div class="container">
      <div class="card">
      <nav class="nav-crumbs">
         <ul>
            <li class=""><a href="index.php">Home</a></li>
            <li><a href="product_list.php">Shop</a></li>
            <li><?= $o->category ?></a></li>
            <li><?= $o->product_name ?></a></li>
         </ul>
      </nav>
      </div>

<script type="text/javascript">
   $(document).on('click', 'ul li', function(){
      $(this).addClass(active).siblings().removeClass(active)
   })
</script>
----->

   <div class="container">
      <div class="grid gap">
         <div class="col-xs-12 col-md-7">
            <div class="card ">
               <div class="image-main">
                  <img src="img/products/<?= $product->image_thumb ?>" alt="">
               </div>
               <div class="image-thumbs">
                  <?= $thumbs_elements ?>
               </div>
            </div>
         </div>
         <div class="col-xs-12 col-md-5">
            <form class="card soft flat" method="post" action="product_actions.php?action=add-to-cart">
               <input type="hidden" name="product-id" value="<?= $product->id ?>">
               <div class="card-section">
                  <h2><?= $product->product_name ?></h2>
                  <div>&dollar;<?= $product->price ?></div>
                  <div><a href="product_list.php?t=products_by_category&category=<?= $product->category ?>"><?= $product->category ?></a></div>
               </div>
               <div class="card-section">
                  <div class="form-control"> 
                     <label for="product-amount" class="form-label">Quantity (max. 10)

</label>
                     <div class="form-select">
                        <select name="product-amount" id="product-amount">
                           <!-- option[value=$]*10>{$} -->
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                           <option value="5">5</option>
                           <option value="6">6</option>
                           <option value="7">7</option>
                           <option value="8">8</option>
                           <option value="9">9</option>
                           <option value="10">10</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-control">
                     
                     <label for="product-size" class="form-label">Size</label>
                     <div class="form-select">
                        <select name="product-size" id="product-size">
                           <option value="0.5oz">0.5oz</option>
                           <option value="1.0oz">1.0oz</option>
                           <option value="2.4oz">2.4oz</option>
                           <option value="8.0oz">8.0oz</option>
                           <option value="8.4oz">8.4oz</option>
                           <option value="10.0oz">10.0oz</option>

                        </select>
                     </div>
                  </div>
                  <div class="form-control">
                     <input type="submit" class="form-button" value="Add To Cart">
                  </div>
               </div>
          </form>
         </div>
      </div>
   <div class="card soft medium">
         <p><?= $product->description ?></p>
      </div>
         <h2>Related Products</h2>

         <div class="grid gap">
           
            <?php

            echo array_reduce(
               MYSQLIQuery("
                  SELECT *
                  FROM products
                  WHERE id in (4,6,8)
               "),
               'makeProductList'
            );

            ?>
         </div>
   </div>

</body>
</html>