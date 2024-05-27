<?php 
date_default_timezone_set('Europe/Paris');
$date = date('Y-m-d H:i:s');
if(isset($_POST['archiver'])){
    $num = $_POST['archiver'];
    $sql = "UPDATE Signalements SET traitement = 1, date_traitement = '$date' WHERE id = $num ";
    if(mysqli_query($conn, $sql)){
        if($num!=0){
            echo "Archivé, merci d'actualiser";
        }
    }
}
?>