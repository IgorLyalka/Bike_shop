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
      <h1>Редактор navbar</h1>
      <?php if (!empty($_SESSION["login"])) : ?>
         <?php echo "admin_panel " . $_SESSION['login']; ?>
         <a href="/admin.php">exit</a>
         <br>

         <?php
         $sql = $pdo->prepare("SELECT * FROM navbar");
         $sql->execute();
         $res = $sql->fetch(PDO::FETCH_OBJ);
         ?>
         <form action="/admin/seveadminpanel/navbar/navbar.php" method="post" enctype="multipart/form-data">
            <input type="text" name="high_bikes_level" value="<?php echo $res->high_bikes_level ?>">
            <input type="text" name="average_bikes_level" value="<?php echo $res->average_bikes_level ?>">
            <input type="text" name="finance" value="<?php echo $res->finance ?>">
            <input type="text" name="contact_us" value="<?php echo $res->contact_us ?>">
            <input type="text" name="logo" value="<?php echo $res->logo ?>">
            <p><input type="file" name="im"></p>
            <input type="submit" name="save" value="Save" >
            
         </form>
         <p> <img style="background-color:blanchedalmond; widht:200px; height:200px" src="/images/<?php echo $res->logo ?>" alt=""></p>

      <?php else :
         echo '<h2> Сесія закінчилась, авторизуйтесь знову</h2>';
         echo '<a href ="/login.php"> Авторизація </a> ';
      ?>

      <?php endif ?>
   </div>
</body> 

</html>