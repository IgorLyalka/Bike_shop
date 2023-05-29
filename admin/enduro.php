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
      <h1>Редактор enduro</h1>
      <?php if (!empty($_SESSION["login"])) : ?>
         <?php echo "admin_panel " . $_SESSION['login']; ?>
         <a href="/admin.php">exit</a>
         <br>

         <?php
         $sql = $pdo->prepare("SELECT * FROM enduro_bike");
         $sql->execute();
         while ($res = $sql->fetch(PDO::FETCH_OBJ)) : ?>
            <form action="/admin/seveadminpanel/enduro/enduro.php/<?php echo $res->id?>" method="post" enctype="multipart/form-data">
               <?php echo $res->id?><br>
               <br>
               <input type="text" name="title" value="<?php echo $res->title?>">
               <input type="text" name="pricedays " value="<?php echo $res->pricedays?>">
               <input type="text" name="pricemonths " value="<?php echo $res->pricemonths?>">
               <input type="text" name="details " value="<?php echo $res->details?>">
               <p><input type="file" name="im"></p>
               <input type="submit" name="save" value="Save">
               <br>
               <p> <img style="background-color:blanchedalmond; widht:200px; height:200px" src="/images/<?php echo $res->img ?>" alt=""></p>
            </form>
         <?php endwhile ?>

      <?php else :
         echo '<h2> Сесія закінчилась, авторизуйтесь знову</h2>';
         echo '<a href ="/login.php"> Авторизація </a> ';
      ?>

      <?php endif ?>
   </div>
</body>

</html>