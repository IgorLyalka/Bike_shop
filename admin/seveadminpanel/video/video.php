<?php require_once '/program/OpenServer/domains/bikes/functions/conect.php'; ?>
<?php
         $sql = $pdo->prepare("SELECT * FROM video");
         $sql->execute();
         $res = $sql->fetch(PDO::FETCH_OBJ);
         ?>

<?php
         $title = $_POST["title"];
         $text = $_POST["text"];
         $video = $_POST["video"];
         $row = "UPDATE video SET title=:title,text=:text, video=:video";
         $query = $pdo->prepare($row);
         $query->execute(["title" => $title, "text"=>$text, "video" => $video]);
         echo '<meta HTTP-EQUIV="Refresh" Content="0; URL=/admin/video.php">';
         ?>
