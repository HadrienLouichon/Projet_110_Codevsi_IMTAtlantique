<!DOCTYPE html>
<html><body>
<?php
 
$servername = "localhost";
$dbname = "id22109091_codevsi";
$username = "id22109091_admin";
$password = "Codevsi2024@";
 
 
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 
$sql = "SELECT id, value1, reading_time FROM ESPData ORDER BY id DESC";
 
echo '<table cellspacing="5" cellpadding="5">
      <tr> 
        <td>ID</td> 
        <td>Value 1</td> 
        <td>Timestamp</td> 
      </tr>';
 
if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        $row_id = $row["id"];
        $row_value1 = $row["value1"];
        $row_reading_time = $row["reading_time"];
        
      
        echo '<tr> 
                <td>' . $row_id . '</td>
                <td>' . $row_value1 . '</td> 
                <td>' . $row_reading_time . '</td> 
              </tr>';
    }
    $result->free();
}
 
$conn->close();
?> 
</table>
</body>
</html>