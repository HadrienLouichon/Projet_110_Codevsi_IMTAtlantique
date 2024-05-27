<?php 
$sql = 'SELECT * FROM Signalements WHERE traitement = 1 ORDER BY date_traitement DESC';
if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        $row_id = $row['id'];
        $row_jour = $row["jour"];
        $row_machine = $row["machine"];
        $row_etat = $row['etat'];
        $row_date_traitement = $row['date_traitement'];
        ?>
        <tr>
            <td><?php echo $row_jour?></td>
            <td><?php echo $row_machine?></td>
            <td><?php echo $row_etat?></td>
            <td><?php echo $row_date_traitement?></td>
        </tr>

<?php }
} ?> 