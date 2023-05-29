<?php require_once './functions/conect.php'; ?>
<?php
$sql = $pdo->prepare("SELECT *  FROM footerdown");
$sql->execute();
$footerdown = $sql->fetchAll(PDO::FETCH_OBJ);

$sql1 = $pdo->prepare("SELECT *  FROM footerbotom");
$sql1->execute();
$footerbotom = $sql1->fetch(PDO::FETCH_ASSOC);?>


<footer class="footer">
         <div class="container">
            <nav class="footer__menu">
            <?php foreach ($footerdown as $footerd) : ?>
               <ul class="footer__menu-list">
                  <li class="footer__menu-item">
                     <p class="footer__menu-title"><?php echo $footerd->title ?></p>
                  </li>
                  <li class="footer__menu-item">
                     <a href="<?php echo $footerd->link1 ?>" class="fooot__menu-link"><?php echo $footerd->line1 ?></a>
                  </li>
                  <li class="footer__menu-item">
                     <a href="<?php echo $footerd->link2 ?>" class="fooot__menu-link"><?php echo $footerd->line2 ?></a>
                  </li>
                  <li class="footer__menu-item">
                     <a href="<?php echo $footerd->link3 ?>" class="fooot__menu-link"><?php echo $footerd->line3 ?></a>
                  </li>
               </ul>
               <?php endforeach ?>
            </nav>
            <ul class="app">
               <li class="app__links-item">
                  <a href="<?php echo $footerbotom["linkappstore"] ?>" class="app__item-link">
                     <img class="app__item-img" src="images/appstore.svg" alt="">
                  </a>
               </li>
               <li class="app__links-item">
                  <a href="<?php echo $footerbotom["linkgoogleplay"] ?>" class="app__item-link">
                     <img class="app__item-img" src="images/googleplay.svg" alt="">
                  </a>
               </li>
            </ul>
            <div class="footer__copy">
            </div>
            <nav class="copy__nav">
               <ul class="copy__nav-list">
                  <li class="copy__nav-item">
                     <a href="<?php echo $footerbotom["linkTermsofService"] ?>" class="copy__nav-link">Terms of Service</a>
                  </li>
                  <li class="copy__nav-item">
                     <a href="<?php echo $footerbotom["linkPrivacyPolicy"] ?>" class="copy__nav-link">Privacy Policy</a>
                  </li>
                  <li class="copy__nav-item">
                     <a href="<?php echo $footerbotom["linkDoNotSellMyPI"] ?>" class="copy__nav-link">Do Not Sell My Personal Information</a>
                  </li>
               </ul>
            </nav>
         </div>
      </footer>