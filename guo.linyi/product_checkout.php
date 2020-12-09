<?php

include_once "lib/php/functions.php";

?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Product Checkout</title>

   <?php include "parts/meta.php" ?>
     <?php include "parts/navbar.php" ?>
</head>
<body>


   <div class="container form">
      
      <div class="card soft">
         
         <h2>Product Checkout</h2>

         <a href="product_list.php">Back</a>
         <br>
         <br>
         <br>
  <form action="//httpbin.org/post" method="POST">
    <input type="hidden" name="token" />
    <div class="group">
      <label>
        <span>Card</span>
        <div id="card-element" class="field"></div>
      </label>
    </div>
    <div class="group">
      <label>
        <span>First name</span>
        <input id="first-name" name="first-name" class="field" placeholder="Vicky" />
      </label>
      <label>
        <span>Last name</span>
        <input id="last-name" name="last-name" class="field" placeholder="Guo" />
      </label>
    </div>
    <div class="group">
      <label>
        <span>Address</span>
        <input id="address-line1" name="address_line1" class="field" placeholder="19th Street" />
      </label>
      <label>
        <span>Address (cont.)</span>
        <input id="address-line2" name="address_line2" class="field" placeholder="" />
      </label>
      <label>
        <span>City</span>
        <input id="address-city" name="address_city" class="field" placeholder="San Francisco" />
      </label>
      <label>
        <span>State</span>
        <input id="address-state" name="address_state" class="field" placeholder="CA" />
      </label>
      <label>
        <span>ZIP</span>
        <input id="address-zip" name="address_zip" class="field" placeholder="92236" />
      </label>
      <label>
        <span>Country</span>
        <select name="address_country" id="address-country" class="field">
          <option value="IN">China</option>
          <option value="SG" selected>United States</option>
        </select>
      </label>
    </div>
   <div><a href="product_confirmation.php" class="form-button-confirmcheckout">Confirm Checkout</a></div>
         
    <div class="outcome">
      <div class="error"></div>
      <div class="success">
        Success! Your Stripe token is <span class="token"></span>
      </div>
    </div>
  </form>
</body>
</html>

   <!-- 
   <div class="row">
    <div class="col-75">
      <div class="containerform">
      
      <form action="product_confirmation.php">
      <div class="row">
          <div class="col-50">

            <p class="billingaddress">Billing Address</p>
            <label for="fname">Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Vicky Guo">

            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="glyxb2012@gmail.com">

            <label for="adr">Address</label>
            <input type="text" id="adr" name="address" placeholder="19th Ave">

            <label for="city">City</label>
            <input type="text" id="city" name="city" placeholder="San Francisco">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="CA">
              </div>

              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="94116">
              </div>

            </div>
          </div>

          <div class="col-50">
            <p>Payment</p>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Vicky Guo">

            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">

            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2020">
              </div>

              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="123">
              </div>
            </div>

          </div>
        </div>

        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>

        <br>
        <br>
        <div><a href="product_confirmation.php" class="btn sell inline">Confirm Checkout</a></div>
         
      </form>
    </div>
  </div>

   -->


 <!--

   <form> 
      <div class="col-xs-12 col-md-6">
             <div class="grid gap">
            <h3>Payment Information</h3>

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
      

         

        
   <form>
           <div class="col-xs-12 col-md-6">
                <div class="grid gap">
            
         <h3>Billing Address</h3>
            <div class="form-control" >
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
            </div>
         </form>
-->


    
</body>
</html>