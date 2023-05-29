<?php session_start(); ?>
<?php require_once '../functions/conect.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>Document</title>
</head>

<body>
   <div style="text-align: center;">
      <h1>Редактор header</h1>
      <?php if (!empty($_SESSION["login"])) : ?>
         <?php echo "admin_panel " . $_SESSION['login']; ?>
         <a href="/admin.php">exit</a>
         <br>

         <?php
         $sql = $pdo->prepare("SELECT * FROM headerimage");
         $sql->execute();
         $res = $sql->fetch(PDO::FETCH_OBJ);
         ?>
         <form action="/admin/seveadminpanel/header/header.php" method="post" enctype="multipart/form-data">
            <p>
               <input type="file" name="img">
            </p>
            <input type="submit" name="save" value="Save">
         </form>

         <br>
         
         <img style="max-width: 300px; height: 150px;" src="/images/<?php echo $res->image ?>" alt="">

         


      <?php else :
         echo '<h2> Сесія закінчилась, авторизуйтесь знову</h2>';
         echo '<a href ="/login.php"> Авторизація </a> ';
      ?>

      <?php endif ?>
   </div>
</body>

</html>