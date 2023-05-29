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
         <section class="contacts">
            <div class="container">
               <h2 class="section-title contacts__title" >Contact Us</h2>
               <p class="contacts__text">
                  Feel free to contact us with questions, potencial partnerships or media inquiries
               </p>
               <form action="#" class="form">
                  <input type="text" class="form__input" placeholder="Name">
                  <input type="email" class="form__input" placeholder="E-mail">
                  <textarea class="form__textarea" placeholder="Your text"></textarea>
                  <button class="form__btn" type="submit" >SUBMIT</button>
               </form>
            </div>
         </section>
         <?php require 'public/blogs.php'?>
      </main>
      <?php require 'public/footer.php'?>
   </div>
   <script src="js/main.js"></script>
</body>
</html>