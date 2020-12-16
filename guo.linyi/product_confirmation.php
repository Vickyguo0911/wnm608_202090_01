<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";



?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Thanks</title>

   <?php include "parts/meta.php" ?>
</head>
<body>
     <?php include "parts/navbar.php" ?>

  

   <div class="container">
      <div class="card soft">
      	<img src="img/illustration/happythree.png" alt="" class="happy"  style="width:100%;">
         <h1 style="text-align: center;">Thank you for your purchase!</h1>
         <p style="text-align: center;"> Hi, We're getting your order ready to be shipped. We will notify you when is has been sent. </p>
<br>
<br>
<br>
       <a href="product_list.php"class="btn checkout";>Back to shopping</a>
       <br>
       <br>
       <br>
        </div>

         <div class="decobar">
      <img src="img/illustration/birdbar.png" style="width: 100%;  " > 
     
   </div>
   <br>

 <div class="container">

      <h2>You may also like ...</h2>

      <?php recommendCategory('hair'); ?>
   </div>


</body>
</html>
