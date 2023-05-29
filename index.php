<?php require_once './functions/conect.php'; ?>
<?php
$sql = $pdo->prepare("SELECT *  FROM headerimage");
$sql->execute();
$headerimg = $sql->fetchAll(PDO::FETCH_OBJ);


$sql1 = $pdo->prepare("SELECT *  FROM video");
$sql1->execute();
$video = $sql1->fetch(PDO::FETCH_ASSOC);


$sql2 = $pdo->prepare("SELECT *  FROM important");
$sql2->execute();
$important = $sql2->fetchAll(PDO::FETCH_OBJ);


$sql3 = $pdo->prepare("SELECT *  FROM importanttitle");
$sql3->execute();
$importanttitle = $sql3->fetch(PDO::FETCH_ASSOC);


$sql4 = $pdo->prepare("SELECT *  FROM why_lease_in_tw");
$sql4->execute();
$why_lease_in_tw = $sql4->fetchAll(PDO::FETCH_OBJ);

$sql8 = $pdo->prepare("SELECT *  FROM how_does_rw");
$sql8->execute();
$how_does_rw = $sql8->fetch(PDO::FETCH_ASSOC);

$sql9 = $pdo->prepare("SELECT *  FROM meta");
$sql9->execute();
$meta= $sql9->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Open+Sans:ital@1&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
   <link rel="stylesheet" href="css/style.css">
   <title><?php $meta["title"] ?></title>
   <meta name="description" content="<?php $meta["description"] ?>">
   <?php require 'public/favicon.php' ?>
</head>

<body>
   <div class="wrapper">
      <header class="header header-main">
         <?php require 'public/navbar.php' ?>
      </header>
      <main class="main">
         <section class="top">
            <div class="container">
               <h1 class="title">
                  Two-Wheeled Adventures
               </h1>
               <a href="contacts.php" class="top__link">FIND A BIKE</a>
            </div>
         </section>
         <div class="slider">
            <div class="swiper">
               <div class="swiper-wrapper">
                  <?php foreach ($headerimg as $header) : ?>
                     <div class="swiper-slide" style="background-image: url(images/<?php echo $header->image ?>);"></div>
                  <?php endforeach ?>
               </div>
               <div class="swiper-pagination"></div>
            </div>
         </div>
         <section class="why-lease">
            <div class="container">
               <h2 class="section-title"> Why Lease in TWadventure</h2>
               <ul class="why-lease__list">
                  <?php foreach ($why_lease_in_tw as $whylease) : ?>
                     <li class="why-lease__item">
                        <img class="why-lease__item-img" src="/images/<?php echo $whylease->image ?>" alt="">
                        <h3 class="why-lease__item-title">
                           <?php echo $whylease->title ?>
                        </h3>
                        <p class="why-lease__item-text">
                           <?php echo $whylease->text ?>
                        </p>
                     </li>
                  <?php endforeach ?>
               </ul>
            </div>
         </section>
         <section class="how-does">
            <div class="container">
               <div class="how-does__inner">
                  <h1 class="section-title">
                     <?php echo $how_does_rw["title"] ?>
                  </h1>
                  <ol class="how__does-list">
                     <li class="how__does-item">
                        <?php echo $how_does_rw["text1"] ?>
                     </li>
                     <li class="how__does-item">
                     <?php echo $how_does_rw["text2"] ?>
                     </li>
                     <li class="how__does-item">
                     <?php echo $how_does_rw["text3"] ?>
                     </li>
                  </ol>
                  <p class="how-does__text">
                  <?php echo $how_does_rw["textend"] ?>
                  </p>
               </div>
            </div>
         </section>
         <section class="video">
            <div class="container">
               <h2 class="section-title video__title">
                  WELCOME TO TWadventure
               </h2>
               <p class="video__text">
                  Find out how easy it is to lease from TWadventure
               </p>
               <iframe class="video__content" width="800" height="430" src="<?php echo $video["video"] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>



            </div>
         </section>
         <section class="important">
            <div class="container">
               <h2 class="section-title important__title">
                  <?php echo $importanttitle["title"] ?>
               </h2>
               <p class="important__text">
                  <?php echo $importanttitle["text"] ?>.
               </p>

               <ul class="important__list">
                  <?php foreach ($important as $imp) : ?>
                     <li class="important__item">
                        <img class="important__item-img" src="images/<?php echo $imp->image ?>" alt="">
                        <p class="important__item-text">
                           <?php echo $imp->text ?>
                        </p>
                     </li>
                  <?php endforeach ?>

               </ul>
            </div>
         </section>
      </main>
      <?php require 'public/footer.php' ?>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
   <script src="js/main.js"></script>

</body>

</html>