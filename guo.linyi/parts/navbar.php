<header class="navbar">
   <div class="container display-flex flex-align-center">
      <div class="flex-none"><h1><a href="index.php">N A T U R E</a></h1></div>
      <div class="flex-stretch"></div>
      
      <!-- nav.nav>ul>li*4>a[href=#article$]>{Link $} -->
      <nav class="nav flex-none">
         <ul class="display-flex">
            <li><a href="product_list.php">Shop</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="product_cart.php">
               <span>Cart</span>
               <span class="badge"><?= makeCartBadge() ?></span>
            </a></li>
         </ul>
      </nav>
   </div>
</header>
