<?php require_once '/program/OpenServer/domains/bikes/functions/conect.php'; ?>
<?php
         $sql = $pdo->prepare("SELECT * FROM enduro_bike");
         $sql->execute();
         $res = $sql->fetch(PDO::FETCH_OBJ);
         ?>
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
$title = $_POST["title"]; 
$pricedays = $_POST["pricedays"];
$pricemonths = $_POST["pricemonths"];
$details = $_POST["details"];
$url = $_SERVER['REQUEST_URI'];
$url = explode('/', $url);
$str = $url[5];

$row = "UPDATE enduro_bike SET  title=:title, pricedays=:pricedays, pricemonths=:pricemonths, details=:details,  img=:img WHERE id=$str";
$query = $pdo->prepare($row);
$query->execute(["title" => $title, "pricedays" => $pricedays, "pricemonths" => $pricemonths, "details" => $details,"img" => $_FILES['im']['name']]);
echo '<meta HTTP-EQUIV="Refresh" Content="0; URL=/admin/enduro.php">';?>

//"title" => $title, "pricedays" => $pricedays, "pricemonths" => $pricemonths, "details" => $details,
//title=:title, pricedays=:pricedays, pricemonths=:pricemonths, details=:details,