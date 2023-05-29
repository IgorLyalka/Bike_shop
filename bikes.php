<?php require_once './functions/conect.php'; ?>
<?php
$sql = $pdo->prepare("SELECT *  FROM enduro_bike");
$sql->execute();
$endurobike = $sql->fetchAll(PDO::FETCH_OBJ);

$sql1 = $pdo->prepare("SELECT *  FROM hardtail_bike");
$sql1->execute();
$hardtailbike = $sql1->fetchAll(PDO::FETCH_OBJ);

$sql2 = $pdo->prepare("SELECT *  FROM road_bike");
$sql2->execute();
$roadbike = $sql2->fetchAll(PDO::FETCH_OBJ);

$sql3 = $pdo->prepare("SELECT *  FROM electro_bike");
$sql3->execute();
$electrobike = $sql3->fetchAll(PDO::FETCH_OBJ);

$sql4 = $pdo->prepare("SELECT *  FROM show_more_bikes");
$sql4->execute();
$show_more_bikes = $sql4->fetch(PDO::FETCH_ASSOC);?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Open+Sans:ital@1&display=swap" rel="stylesheet">
   <title>Two-Wheeled Adventures</title>
   <?php require 'public/favicon.php'?>
</head>

<body>
   <div class="wrapper">
      <header class="header ">
      <?php require 'public/navbar.php'?>
      </header>
      <main class="main">
         <section class="choose">
            <div class="container">
               <h2 class="section-title">
                  Choose your bike
               </h2>
               <div class="tabs">
                  <div class="tabs__btn">
                     <button class="tabs__btn-item tabs__btn-item-active" data-button="content-1">MTB ENDURO</button>
                     <button class="tabs__btn-item" data-button="content-2">MTB HARDTAIL</button>
                     <button class="tabs__btn-item" data-button="content-3">ROAD BIKE</button>
                     <button class="tabs__btn-item" data-button="content-4">Electro BIKE</button>
                  </div>
                  <div class="tabs__content">
                     <div class="tabs__content-item tabs__content-item-active" id="content-1">
                     <?php foreach ($endurobike as $enduro):?>
                        <div class="card">
                        
                           <img class="card__img" src="images/<?php echo $enduro->img ?>"></img>
                           <div class="card__content">
                              <h4 class="card__title"><?php echo $enduro->title ?></h4>
                              <p class="card__text"><?php echo $enduro->pricedays?></p>
                              <p class="card__price"><?php echo $enduro->pricemonths ?></p>
                           </div>
                           <a href="<?php echo $enduro->details ?>" class="card__link"> see details</a>
                        </div>
                        <?php endforeach ?>
                     </div>
                     
                     <div class="tabs__content-item" id="content-2">
                     <?php foreach ($hardtailbike as $hardtail):?>
                        <div class="card">
                           <img class="card__img" src="images/<?php echo $hardtail->img ?>"></img>
                           <div class="card__content">
                              <h4 class="card__title"><?php echo $hardtail->title ?></h4>
                              <p class="card__text"><?php echo $hardtail->prisedays?></p>
                              <p class="card__price"><?php echo $hardtail->prisemonths ?></p>
                           </div>
                           <a href="<?php echo $hardtail->details ?>" class="card__link"> see details</a>
                        </div>
                        <?php endforeach ?>
                     </div>

                     <div class="tabs__content-item" id="content-3">
                     <?php foreach ($roadbike as $road):?>
                        <div class="card">
                           <img class="card__img" src="images/<?php echo $road->img ?>"></img>
                           <div class="card__content">
                              <h4 class="card__title"><?php echo $road->title ?></h4>
                              <p class="card__text"><?php echo $road->prisedays?></p>
                              <p class="card__price"><?php echo $road->prisemonths ?></p>
                           </div>
                           <a href="<?php echo $road->details ?>" class="card__link"> see details</a>
                        </div>
                        <?php endforeach ?>
                     </div>

                     <div class="tabs__content-item" id="content-4">
                     <?php foreach ($electrobike as $electro):?>
                        <div class="card">
                           <img class="card__img" src="images/<?php echo $electro->img ?>"></img>
                           <div class="card__content">
                              <h4 class="card__title"><?php echo $electro->title ?></h4>
                              <p class="card__text"><?php echo $electro->prisedays?></p>
                              <p class="card__price"><?php echo $electro->prisemonths ?></p>
                           </div>
                           <a href="<?php echo $electro->details ?>" class="card__link"> see details</a>
                        </div>
                        <?php endforeach ?>
                     </div>
                  </div>
               </div>

               <a href="<?php echo $show_more_bikes["show_more_bike"] ?>" target="_blank" class="showmore-link">SHOW MORE</a>
            </div>
         </section>
         <?php require 'public/blogs.php'?>
      </main>
      <?php require 'public/footer.php'?>
   </div>

   <script src="js/main.js"></script>
</body>

</html>