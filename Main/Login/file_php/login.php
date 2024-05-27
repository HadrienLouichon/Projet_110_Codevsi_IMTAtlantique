<?php
session_start();
include("db_conn.php");

if ($_SERVER['REQUEST_METHOD'] != "POST"){
    echo "Unrecognized Method";
}

if (isset($_POST['login']) && isset($_POST['password'])){
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['password'] = $_POST['password'];
}

else {
    $_SESSION['login'] = "";
    $_SESSION['password'] = "";
}

if (empty($_SESSION["login"])){
     header("Location: https://codevsiimtatlantique.000webhostapp.com/Main/Login/Login_index.php?error=Identifiant non renseigné");
     exit();
}

else if (empty($_SESSION["password"])){
     header("Location: https://codevsiimtatlantique.000webhostapp.com/Main/Login/Login_index.php?error=Mot de passe non identifié");
     exit();
}

$login = $_SESSION['login'];
$pass = $_SESSION['password'];

$sql = "SELECT * FROM Member WHERE login = '$login' and password = '$pass'";

$results = mysqli_query($conn,$sql);

if (mysqli_num_rows($results)===1){
    $row = mysqli_fetch_assoc($results);
    if ($row["login"] == $login && $row["password"] == $pass){
        $_SESSION['isLoggedIn'] = true;
        header("Location: https://codevsiimtatlantique.000webhostapp.com/Main/main.php");
        exit();
    }

    else {
        header("Location: https://codevsiimtatlantique.000webhostapp.com/Main/Login/Login_index.php?error=Erreur de connexion");
        exit();
    }
}
else {
    header("Location: https://codevsiimtatlantique.000webhostapp.com/Main/Login/Login_index.php?error=Erreur de connexion");
    exit();
}



