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
      <h1>Редактор video</h1>
      <?php if (!empty($_SESSION["login"])) : ?>
         <?php echo "admin_panel " . $_SESSION['login']; ?>
         <a href="/admin.php">exit</a>
         <br>

         <?php
         $sql = $pdo->prepare("SELECT * FROM video");
         $sql->execute();
         $res = $sql->fetch(PDO::FETCH_OBJ);
         ?>
         <form action="/admin/seveadminpanel/video/video.php" method="post">
            <p>
            <p>
               <input type="text" name="title" value="<?php echo $res->title ?>">
            </p>
            <p>
               <input type="text" name="text" value="<?php echo $res->text ?>">
            </p>
            <p>
               <input type="text" name="video" value="<?php echo $res->video ?>">
            </p>
            </p>
            <iframe class="video__content" width="800" height="430" src="<?php echo $res->video ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <p><input type="submit" name="save" value="Save"></p>
         </form>



      <?php else :
         echo '<h2> Сесія закінчилась, авторизуйтесь знову</h2>';
         echo '<a href ="/login.php"> Авторизація </a> ';
      ?>

      <?php endif ?>
   </div>
</body>

</html>

