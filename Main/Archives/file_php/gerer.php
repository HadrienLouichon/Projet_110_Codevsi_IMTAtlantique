<?php
if(isset($_POST['gerer'])){
    if(!empty($_POST['id'])){
        $num = $_POST['id'];
        $sql = "SELECT * FROM Signalements WHERE id = $num";
        $result = mysqli_query($conn, $sql);
        while($fetch = mysqli_fetch_assoc($result)){
            echo 'Ce signalement a été émis le ' .$fetch['jour'];
            echo "<br>";
            echo ' à propos de la machine ' . strval($fetch['machine']) ;
            echo "<br>";
            echo ' pour la raison suivante : ' . $fetch['etat'].'    '; 
        }
        ?>
        <div title="bouton">
            <button name="archiver" class="btn btn-secondary" value="<?php echo $_POST['id'] ?>">Archiver</button>
        </div>

    <?php }
    ?>
<?php }
?>