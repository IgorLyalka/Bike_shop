<?php require_once '/program/OpenServer/domains/bikes/functions/conect.php'; ?>
<?php
if (isset($_POST["save"])) {
   $list = ['.php', '.zip', '.rar', '.js'];
   foreach ($list as $item) {
      if (preg_match("/$item$/", $_FILES['im']['name'])) exit("Розширення не підтримується");
   }
   $type = getimagesize($_FILES['im']['tmp_name']);
   if($type && ($type['mime'] != 'image/png' || $type['mime'] != 'image/jpg' || $type['mime'] != 'image/jpeg')){
      if($_FILES['im']['size']<1024*1000){
         $upload='../img/'.$_FILES['im']['name'];

         if(move_uploaded_file($_FILES['im']['tmp_name'], $upload)) echo "Файл завантажено";
         else echo "Помилка при завантаженні файлу";
      }
      else exit("Розмір файлу завеликий");
   }
   else exit("Тип файлу непідтримується");
}
?>
<?php
$text = $_POST["text"]; 
$url = $_SERVER['REQUEST_URI'];
$url = explode('/', $url);
$str = $url[5];
$row = "UPDATE important SET text=:text, image=:image WHERE id=$str";
$query = $pdo->prepare($row);
$query->execute(["text" => $text, "image" => $_FILES['im']['name']]);
echo '<meta HTTP-EQUIV="Refresh" Content="0; URL=/admin/important.php">';