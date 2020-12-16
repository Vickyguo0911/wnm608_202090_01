<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Store</title>

   <?php include "parts/meta.php" ?>
</head>
<body>
   
   <?php include "parts/navbar.php" ?>



   <div class="view-window" style="background-image:url(img/store/storebanner01.jpg)">
      <h2>Welcome to the Store</h2>
   </div>
<br>
<br>
<br>

   <div class="container">
      <h1 style="text-align: center;">New Arrivals</h1>

      <?php recommendCategory('skincare'); ?>
   </div>
<br>
<br>
        <div class="view-window middle-window" style="background-image:url(img/illustration/middlebanner.png)">

   </div>   
   <br>
   <br>    
   <div class="container">

      <h1 style="text-align: center;">Hot Products</h1>

      <?php recommendCategory('hair'); ?>
   </div>

<br>
<br>
<br>

<br>
 <div class="decobar">
      <img src="img/illustration/birdbar.png" style="width: 61%; margin-left: 19%; " > 
      <hr>
   </div>


<?php include "parts/subscribe.php" ?>

<br>
<br>

 <?php include "parts/footer.php" ?>

</body>
</html>