<?php
include('db_conn.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['fname']);
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}

$date = date('Y-m-d H:i:s');
$num = 20;

$sql = "INSERT INTO Test (id, date, num) VALUES (DEFAULT, '$date',$num)";
if (mysqli_query($conn,$sql)){
    echo 'done';
}
?>