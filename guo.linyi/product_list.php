<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";
include_once "data/api.php";



setDefault('s','');
setDefault('t','products_all');
setDefault('orderby_direction','DESC');
setDefault('orderby','date_create');
setDefault('limit','12');




function makeSortOptions() {
   $options = [
      ["date_create","DESC","Newest"],
      ["date_create","ASC","Oldest"],
      ["price","DESC","Most Expensive"],
      ["price","ASC","Least Expensive"]
   ];
   foreach($options as [$orderby,$direction,$title]) {
      echo "
      <option data-orderby='$orderby' data-direction='$direction'
      ".($_GET['orderby']==$orderby && $_GET['orderby_direction']==$direction ? "selected" : "").">
      $title
      </option>
      ";
   }
}

function makeHiddenValues($arr1,$arr2) {
   foreach(array_merge($arr1,$arr2) as $k=>$v) {
      echo "<input type='hidden' name='$k' value='$v'>\n";
   }
}




$result = makeStatement($_GET['t']);
$products = isset($result['error']) ? [] : $result;



?><!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>


   <?php include "parts/meta.php" ?>
</head>
<body>
   
   <?php include "parts/navbar.php" ?>
      

   <div class="container">
      <div class="cardtransparent">
         <h2 class="">Product list</h2>
         
      </div>


      <form action="product_list.php" method="get" class="hotdog stack">

         <input type="search" name="s" placeholder="Search for a product"
         value="<?= @$_GET['s'] ?>">

         <?
         makeHiddenValues([
            "orderby"=>$_GET['orderby'],
            "orderby_direction"=>$_GET['orderby_direction'],
            "limit"=>$_GET['limit'],
            "t"=>"search"
         ],[]);
         ?>

         <button type="submit">Search</button>
      </form>

      <div class="display-flex" style="margin:1em 0">
         <div class="flex-none display-flex">
            <form action="product_list.php" method="get">
               <?
               makeHiddenValues($_GET,[
                  "category"=>"skincare",
                  "t"=>"products_by_category"
               ]);
               ?>

               <input type="submit" value="skincare" class="form-button-categorysearch">
            </form>
            <form action="product_list.php" method="get">
               <?
               makeHiddenValues($_GET,[
                  "category"=>"hair",
                  "t"=>"products_by_category"
               ]);
               ?>

               <input type="submit" value="hair" class="form-button-categorysearch">
            </form>
         </div>
         <div class="flex-stretch"></div>
         <div class="flex-none">
            
            <form action="product_list.php" method="get">

               <?
               makeHiddenValues($_GET,[]);
               ?>
               <div class="form-select">
                  <select onchange="checkSort(this)">
                     <?=makeSortOptions()?>
                  </select>
               </div>
            </form>
         </div>
      </div>



      <div class="grid gap">
        
         <?php

         echo array_reduce(
            $products,
            'makeProductList'
         );

         ?>
      </div>
   </div>
 <br>
<br>
<br>
<hr>
<br>
<br>
          <?php include "parts/subscribe.php" ?>

   </div>
<br>
<br>
 <?php include "parts/footer.php" ?>
</body>
</html>