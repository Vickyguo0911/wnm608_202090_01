<?php

include "../lib/php/functions.php";

$users = file_get_json("users.json");






function showUserPage($user) {

$classes = implode(", ", $user->classes);

echo <<<HTML
<nav class="nav crumbs">
   <ul>
      <li><a href="{$_SERVER['PHP_SELF']}">Back</a></li>
   </ul>
</nav>
<div>
   <h2>$user->name</h2>
   <div>
      <strong>Type</strong>
      <span>$user->type</span>
   </div>
   <div>
      <strong>Email</strong>
      <span>$user->email</span>
   </div>
   <div>
      <strong>Classes</strong>
      <span>$classes</span>
   </div>
</div>
HTML;
}





?><!DOCTYPE html>
<html lang="en">
<head>
   <title>User Administrator</title>

   <?php include "../parts/meta.php"; ?>
</head>
<body>

   <header class="navbar">
      <div class="container display-flex">
         <div class="flex-none">
            <h1>Users Admin</h1>
         </div>
         <div class="flex-stretch"></div>
         <!-- nav.nav.flex-none>ul>li>a[href=#]>{List} -->
         <nav class="nav flex-none">
            <ul>
               <li><a href="<?= $_SERVER['PHP_SELF'] ?>">List</a></li>
            </ul>
         </nav>
      </div>
   </header>

   <div class="container">
      <div class="card soft">

         <?php


         if(isset($_GET['id'])) {

            showUserPage($users[$_GET['id']]);

            echo 
            '
         <form class="user_form" action="'.$_SERVER['REQUEST_URI'].'" method="post">
            <input type="user name" placeholder="User name" class="form-input">
            <input type="user type" placeholder="User type" class="form-input">
            <input type="email" placeholder="Email" class="form-input">
            <input type="class" placeholder="User classes" class="form-input">
            
            <br>
            <button type="submit">Submit</button>
         </form>
            ';

         } else {

         ?>

         <h2>User List</h2>

         <ul>
         <?php

         for($i=0; $i<count($users); $i++) {
            echo "<li>
            <a href='{$_SERVER['PHP_SELF']}?id=$i'>{$users[$i]->name}</a>
            </li>";
         }

         ?>
         </ul>

         <?php } ?>
      </div>
   </div>
   
</body>
</html>