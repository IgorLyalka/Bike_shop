<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>AdminPanel</title>
</head>
<body>
   <h2 style = "text-align:center; padding-top: 100px" > Вхід в адмін панель</h2>
    
   <form action="admin/admin.php" method="post" style = "text-align:center; padding-top: 10px">
   <div class="form-group" >
   <input type="text" placeholder="Login" name="login" style="margin: 5px;" >
   </div>
   <div class="form-group">
   <input type="text" placeholder="Password" name="password" style="margin: 5px;" >
   </div>
   <button type="submit" class="btn btn-primary" style="margin-top: 20px;" > Open</button>
   </form>
</body>
</html>