<?php

include_once "lib/php/functions.php";
$product = MYSQLIQuery("SELECT * FROM `products` WHERE `id` = ".$_GET['id'])[0];

$cart_product = cartItemById($_GET['id']);

?><!DOCTYPE html>
<html lang="en">

<head>
   <title>Added Product To Cart</title>

   <?php include "parts/meta.php" ?>
</head>
<body>

   <?php include "parts/navbar.php" ?>

   <div class="container">
      <div class="card soft">
     
         <img src="img/illustration/giftbar.png" alt="" class="giftbar" style=" width: 100%;">


         <h2>Added <?= $product->product_name ?> To Cart</h2>

         <p>There are now <?= $cart_product->amount ?> of <?= $product->product_name ?> in your cart.</p>

         <div class="display-flex">
            <div class="flex-none">
               <a href="product_list.php" class="form-button-backtoshopping">Back to shopping</a>
            </div>
            <div class="flex-stretch"></div>
            <div class="flex-none">
               <a href="product_cart.php" class="form-button-checkcart">Check Cart</a>
            </div>
         </div>
         
      </div>
   </div>

</body>
</html>