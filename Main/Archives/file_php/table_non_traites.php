<?php 
include('db_conn.php');
$sql = 'SELECT * FROM Signalements WHERE traitement = 0 ORDER BY id DESC';
if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        $row_id = $row['id'];
        $row_jour = $row["jour"];
        $row_machine = $row["machine"];
        $row_etat = $row['etat'];
        $row_message = $row['message'];
        ?>
        <tr>
            <td><input type="checkbox" name="id" value="<?php echo $row_id?>"/></td>
            <td><?php echo $row_jour?></td>
            <td><?php echo $row_machine?></td>
            <td><?php echo $row_etat?></td>
            <td><?php echo $row_message?></td>
        </tr>

<?php }
} ?> 