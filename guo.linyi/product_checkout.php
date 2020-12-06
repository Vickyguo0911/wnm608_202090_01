<?php

include_once "lib/php/functions.php";

?><!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
   <title>Product Checkout</title>

   <?php include "parts/meta.php" ?>
     <?php include "parts/navbar.php" ?>
</head>
<body>


   <div class="container">
      <div class="card soft">
         <h2>Product Checkout</h2>

         <a href="product_list.php">Back</a>

         <div>Fill in your information</div>
         <body>
 <h3>Payment Information</h3>

 


   <form>
            <div class="form-control">
               <label for="example-1" class="form-label">Card Holder Name</label>
               <input id="example-1" type="text" placeholder="Text" class="form-input">
            </div>
            <div class="form-control">
               <label for="example-2" class="form-label">Card Number</label>
               <input id="example-2" type="text" placeholder="Text" class="form-input">
            </div>
         <div class="display-flex flex-align-center">
               <div class="flex-none">
                  <label for="example-search" class="form-label">Expiration Month  </label>
               </div>
               <div class="flex-stretch">
                  <input id="example-search" type="search" placeholder="Text" class="form-input">
               </div>
               <div class="flex-none">
                  <label for="example-search" class="form-label">Expiration Year</label>
               </div>
               <div class="flex-stretch">
                  <input id="example-search" type="search" placeholder="Text" class="form-input">
               </div>
               <div class="display-flex flex-align-center">
               <div class="flex-none">
                  <label for="example-search" class="form-label">CVV </label>
               </div>
               <div class="flex-stretch">
                  <input id="example-search" type="search" placeholder="Text" class="form-input">
               </div>
            </div>
         </div>
         </form>
         <h3>Billing Address</h3>
         <form>
            <div class="form-control">
               <label for="example-1" class="form-label">Name</label>
               <input id="example-1" type="text" placeholder="Text" class="form-input">
            </div>
            <div class="form-control">
               <label for="example-2" class="form-label">Email</label>
               <input id="example-2" type="text" placeholder="Text" class="form-input">
            </div>
            <div class="form-control">
               <label for="example-3" class="form-label">Street</label>
               <input id="example-3" type="text" placeholder="Text" class="form-input">
            </div>
            <div class="display-flex flex-align-center">
               <div class="flex-none">
                  <label for="example-search" class="form-label">City  </label>
               </div>
               <div class="flex-stretch">
                  <input id="example-search" type="search" placeholder="Text" class="form-input">
               </div>
               <div class="flex-none">
                  <label for="example-search" class="form-label">State</label>
               </div>
               <div class="flex-stretch">
                  <input id="example-search" type="search" placeholder="Text" class="form-input">
               </div>
               <div class="display-flex flex-align-center">
               <div class="flex-none">
                  <label for="example-search" class="form-label">Zip Code </label>
               </div>
               <div class="flex-stretch">
                  <input id="example-search" type="search" placeholder="Text" class="form-input">
               </div>
               <div class="flex-none">
                  <label for="example-search" class="form-label">Phone number</label>
               </div>
               <div class="flex-stretch">
                  <input id="example-search" type="search" placeholder="Text" class="form-input">
               </div>

            </div>
         </form>
         <div>
         <div><a href="product_confirmation.php" class="btn sell inline">Confirm Checkout</a></div>
         
      </div>
   </div>

</body>
</html>