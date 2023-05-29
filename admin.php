<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>Document</title>
</head>

<body>
   <div style="text-align: center;">
      <?php if (!empty($_SESSION["login"])) : ?>

         <?php echo "admin_panel " . $_SESSION['login']; ?>
         <br>
         <a href="/login.php">exit</a>
         <br>
         <a href="/admin/navbar.php">Navbar</a>
         <br>
         <a href="admin/header.php">Header</a>
         <br>
         <a href="">why_lease_in_tw</a>
         <br>
         <a href="admin/video.php">video</a>
         <br>
         <a href="admin/important.php">important</a>
         <br>
         <a href="admin/enduro.php">enduro</a>
         <br>
         <a href="admin/blog.php">blog</a>
         <br>
         <a href="">footer</a>
      <?php else :
         echo '<h2> Сесія закінчилась, авторизуйтесь знову</h2>';
         echo '<a href ="/login.php"> Авторизація </a> ';
      ?>

      <?php endif ?>
   </div>
</body>

</html>