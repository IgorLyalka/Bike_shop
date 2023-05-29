<?php require_once './functions/conect.php'; ?>
<?php
$sql = $pdo->prepare("SELECT *  FROM blogs");
$sql->execute();
$blogs = $sql->fetchAll(PDO::FETCH_OBJ);

$sql4 = $pdo->prepare("SELECT *  FROM show_more_bikes");
$sql4->execute();
$show_more_bikes = $sql4->fetch(PDO::FETCH_ASSOC);?>
<section class="blog">
   <div class="container">
      <div class="blog__items">
         <?php foreach ($blogs as $blog) : ?>
            <div class="blog__item">
               <img class="blog__item-img" src="images/<?php echo $blog->img ?>" alt="">
               <h4 class="blog__item-title"><?php echo $blog->title ?></h4>
               <a href="<?php echo $blog->link ?>" target="_blank"  class="blog__item-link">more</a>
            </div>
         <?php endforeach ?>
         
      </div>
      <a href="<?php echo $show_more_bikes["show_more_blog"] ?>" target="_blank" class="showmore-link">SHOW MORE</a>
   </div>
</section>