<?php
session_start();
include("db_conn.php");
date_default_timezone_set('Europe/Paris');

$_SESSION['date'] = date('Y-m-d H:i:s');
$_SESSION['message'] = '';
$_SESSION['traitee'] = 0;
$_SESSION['date_traitement'] = date('Y-m-d H:i:s');

if ($_SERVER['REQUEST_METHOD'] != "POST"){
    echo "Unrecognized Method";
}

if (isset($_POST['machine']) && isset($_POST['etat'])){
    $_SESSION['machine'] = $_POST['machine'];
    $_SESSION['etat'] = $_POST['etat'];
}

else{
    header("Location: Signalements_index.php?error=Merci de bien sélectionner toutes les options");
    exit();
}

if(isset($_POST['message'])){
    $_SESSION['message'] = $_POST['message'];
}


if ($_SESSION['machine'] === '--' or $_SESSION['etat'] === '--'){
    header("Location: Signalements_index.php?error=Merci de bien sélectionner toutes les options");
}

// echo $_SESSION['date'];
// echo $_SESSION['machine'];
// echo $_SESSION['etat'];
// echo $_SESSION['message'];
// echo $_SESSION['traitee'];

// echo gettype($_SESSION['date']);
// echo gettype($_SESSION['machine']);
// echo gettype($_SESSION['etat']);
// echo gettype($_SESSION['message']);
// echo gettype($_SESSION['traitee']);
else {
    $date = $_SESSION['date'];
    $machine = $_SESSION['machine'];
    $etat = $_SESSION['etat'];
    $message = $_SESSION['message'];
    $traitement = $_SESSION['traitee'];
    $date_traitement = $_SESSION['date_traitement'];
    
    $sql = "INSERT INTO Signalements VALUES (DEFAULT,'$date',$machine,'$etat','$message',$traitement,'$date_traitement')";
    
    if (mysqli_query($conn,$sql)) {
        header("Location: Signalements_index.php?error=Signalement transmis !");
        exit();
    }
    
    else {
        header("Location: Signalements_index.php?error=Problème de signalement, veuillez réessayer.");
        exit();
    }
}
    

mysqli_close($conn);