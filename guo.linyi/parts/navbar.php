<header class="navbar">
   <div class="container display-flex flex-align-center">
   <!-- <div class="flex-none"> <h1><a href="index.php">N A T U R E</a></h1></div> -->

   <a href="index.php"> <img src="img/icons/whitelogo.png" alt="logo" class="logo">
     <!-- <div class="flex-none"><img src="img/icons/logo.png"></div> -->
              <div class="flex-stretch"></div>
      
         
      
      <!-- nav.nav>ul>li*4>a[href=#article$]>{Link $} -->
      <nav class="nav flex-none">
         <ul class="display-flex">
           
            <li><h3><a href="product_list.php">Shop</a></h3></li>
            <li><h3><a href="about.php">About</a></h3></li>
            <li><h3><a href="product_cart.php">
               <div class="display-flex">
                     <span>Cart</span>
              
               <span class="badge"><?= makeCartBadge() ?></span>
        
            </a></li>
         </ul>
      </nav>
   </div>
</header>

