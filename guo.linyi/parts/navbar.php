<header class="navbar">
   <div class="container display-flex flex-align-center">
       <div class="flex-none"><h1><a href="index.php">Nature</a></h1></div>
     <!-- <div class="flex-none"><img src="img/icons/logo.png"></div> -->
              <div class="flex-stretch"></div>
              <div class="flex-none">
         
      
      <!-- nav.nav>ul>li*4>a[href=#article$]>{Link $} -->
      <nav class="nav flex-none">
         <ul class="display-flex">
            <li><h3><a href="index.php">Home</a></h3></li>
            <li><h3><a href="product_list.php">Shop</a></h3></li>
            <li><h3><a href="about.php">About</a></h3></li>
            <li><h3><a href="product_cart.php">Cart</a>
              <h3> <span></span></h3></li>
               <span class="badge"><?= makeCartBadge() ?></span>
            </a></li>
         </ul>
      </nav>
   </div>
</header>

