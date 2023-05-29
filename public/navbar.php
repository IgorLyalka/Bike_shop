<?php require_once './functions/conect.php';?>
<?php
$sql = $pdo->prepare("SELECT *  FROM navbar");
$sql->execute();
$res = $sql->fetch(PDO::FETCH_ASSOC);?>
<div class="container">
   <div class="header__inner">
      <a href="index.php" class="logo">
         <img src="images/<?php echo $res["logo"] ?>" alt="" class="logo___img">
      </a>
      <nav class="menu">
         <button class="menu__btn">
            <span></span>
            <span></span>
            <span></span>
         </button>
         <ul class="menu__list">
            <li class="menu__list-item">
               <a href="bikes.php" class="menu__list-link"><?php echo $res["high_bikes_level"] ?></a>
            </li>
            <li class="menu__list-item">
               <a href="#" class="menu__list-link"><?php echo $res["average_bikes_level"] ?></a>
            </li>
            <li class="menu__list-item">
               <a href="#" class="menu__list-link"><?php echo $res["finance"] ?></a>
            </li>
            <li class="menu__list-item">
               <a href="contacts.php" class="menu__list-link"><?php echo $res["contact_us"] ?></a>
            </li>
         </ul>
      </nav>
   </div>
</div>