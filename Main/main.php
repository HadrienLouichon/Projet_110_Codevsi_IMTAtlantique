<?php

$connexion=0;
$etat_10 = isset($_POST['etat_10']) ? $_POST['etat_10'] : "";
$etat_11 = isset($_POST['etat_11']) ? $_POST['etat_11'] : "";
$etat_12 = isset($_POST['etat_12']) ? $_POST['etat_12'] : "";
$etat_13 = isset($_POST['etat_13']) ? $_POST['etat_13'] : "";
$etat_14 = isset($_POST['etat_14']) ? $_POST['etat_14'] : "";
$etat_15 = isset($_POST['etat_15']) ? $_POST['etat_15'] : "";
$etat_16 = isset($_POST['etat_16']) ? $_POST['etat_16'] : "";
$etat_17 = isset($_POST['etat_17']) ? $_POST['etat_17'] : "";
$etat_18 = isset($_POST['etat_18']) ? $_POST['etat_18'] : "";
$etat_19 = isset($_POST['etat_19']) ? $_POST['etat_19'] : "";
$etat_20 = isset($_POST['etat_20']) ? $_POST['etat_20'] : "";
$etat_21 = isset($_POST['etat_21']) ? $_POST['etat_21'] : "";
$etat_22 = isset($_POST['etat_22']) ? $_POST['etat_22'] : "";
$etat_23 = isset($_POST['etat_23']) ? $_POST['etat_23'] : "";
$etat_24 = isset($_POST['etat_24']) ? $_POST['etat_24'] : "";
$etat_25 = isset($_POST['etat_25']) ? $_POST['etat_25'] : "";
$etat_26 = isset($_POST['etat_26']) ? $_POST['etat_26'] : "";
$etat_27 = isset($_POST['etat_27']) ? $_POST['etat_27'] : "";
$etat_28 = isset($_POST['etat_28']) ? $_POST['etat_28'] : "";
$etat_29 = isset($_POST['etat_29']) ? $_POST['etat_29'] : ""; ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Page Principale - Projet CODEVSI</title>
        <meta name="description" content="Site projet CODEVSI - Laverie IMT Atlantique Brest">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
        <link rel="stylesheet" href="assets/css/Main.css">
    </head>

    <header>
        <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
            <div class="container">
                <form action="Login/Login_index.php" method="POST">
                    <?php if (isset($_GET['log']) && $_GET['log'] === 'yooo') {$connexion = 1;} else {$connexion = 0;}?>
                    <a href="<?php if($connexion == 1){echo 'https://codevsiimtatlantique.000webhostapp.com/Main/main.php';} else{echo'Login/Login_index.php';}?>">
                        <button class="btn btn-primary connexion" id="menu" type="button"><?php if($connexion == 1){echo 'Déconnexion';} else{echo 'Connexion';}?></button>
                    </a>
                </form>
                <a href="<?php if($connexion == 1){echo'https://codevsiimtatlantique.000webhostapp.com/Main/main.php?log=yooo';} else{echo 'https://codevsiimtatlantique.000webhostapp.com/Main/main.php';}?>">
                    <button class="btn btn-primary principal" id="menu" type="button">Page Principale</button>
                </a>
                <a href="<?php if($connexion == 1){echo 'Archives/Archive_index.php';} else{echo'Signalement/Signalements_index.php';}?>">
                    <button class="btn btn-primary" id="menu" type="button"><?php if($connexion == 1){echo 'Archives';} else{echo'Signalement';}?></button>
                </a>
            </div>
        </nav>
    </header>

    <body>
        <main class="main">
            <div class="block-heading">
                        <h2 class="text-info" style="margin-top:-15px"><strong><u>Laverie IMT Atlantique - Campus de Brest</u></strong></h2>
                        <p><mark>Connaître l'état des machines de la laverie</mark></p>
            </div>
            <div class="grand-rectangle">
                <div class="rangee-supérieure">
                    <div class="machine_21" style="display: flex; flex-direction: column;">
                        <button class="bouton-carre">Machine 21</button>
                        <div id="fenetre-cachee">
                            <div class="contenu-fenetre">
                                <h2>Informations Machine 21</h2>
                                <ul>
                                    <li>Machine 21 : <?php if($etat_21 == 0){echo'En marche';} elseif($etat_21 == 1){echo'Arrêt (donc possiblement libre)';} elseif($etat_21 == 2){echo'En panne';} else{echo'Non déclaré';}?></li>
                                    <li>Capteurs : Opérationnels</li>
                                    <li>Timer : 00:00:00</li>
                                </ul>
                            </div>
                        </div>
                        <?php if($etat_21 == 0){echo'<img class="ping_bleu" src="assets/img/ping_bleu2.png">';} elseif($etat_21 == 1){echo'<img class="ping_vert" src="assets/img/ping_vert2.png">';} elseif($etat_21 == 2){echo'<img class="ping_rouge" src="assets/img/ping_rouge2.png">';} else{echo'<img class="ping_noir" src="assets/img/ping_noir2.png">';}?>
                    </div>
                    <div class="machine_22" style="display: flex; flex-direction: column;">
                        <button class="bouton-carre">Machine 22</button>
                        <div id="fenetre-cachee">
                            <div class="contenu-fenetre">
                                <h2>Informations Machine 22</h2>
                                <ul>
                                    <li><?php if ($etat_22 == 0) {
  echo 'Machine 22 : En marche';
} elseif ($etat_22 == 1) {
  echo 'Machine 22 : Arrêt (donc possiblement libre)';
} elseif ($etat_22 == 2) {
  echo 'Machine 22 : En panne';
} else {
  echo 'Machine 22 : Non déclaré';
}?></li>
                                    <li>Capteurs : Opérationnels</li>
                                    <li>Timer : 00:00:00</li>
                                </ul>
                            </div>
                        </div>
                        <?php if ($etat_22 == 0) {
  echo '<img class="ping_bleu" src="assets/img/ping_bleu2.png">';
} elseif ($etat_22 == 1) {
  echo '<img class="ping_vert" src="assets/img/ping_vert2.png">';
} elseif ($etat_22 == 2) {
  echo '<img class="ping_rouge" src="assets/img/ping_rouge2.png">';
} else {
  echo '<img class="ping_noir" src="assets/img/ping_noir2.png">';
}?>
                    </div>
                    <div class="machine_23" style="display: flex; flex-direction: column;">
                        <button class="bouton-carre">Machine 23</button>
                        <div id="fenetre-cachee">
                            <div class="contenu-fenetre">
                                <h2>Informations Machine 23</h2>
                                <ul>
                                    <li><?php if ($etat_23 == 0) {
  echo 'Machine 23 : En marche';
} elseif ($etat_23 == 1) {
  echo 'Machine 23 : Arrêt (donc possiblement libre)';
} elseif ($etat_23 == 2) {
  echo 'Machine 23 : En panne';
} else {
  echo 'Machine 23 : Non déclaré';
}?></li>
                                    <li>Capteurs : Opérationnels</li>
                                    <li>Timer : 00:00:00</li>
                                </ul>
                            </div>
                        </div>
                        <?php if ($etat_23 == 0) {
  echo '<img class="ping_bleu" src="assets/img/ping_bleu2.png">';
} elseif ($etat_23 == 1) {
  echo '<img class="ping_vert" src="assets/img/ping_vert2.png">';
} elseif ($etat_23 == 2) {
  echo '<img class="ping_rouge" src="assets/img/ping_rouge2.png">';
} else {
  echo '<img class="ping_noir" src="assets/img/ping_noir2.png">';
}?>
                    </div>
                    <div class="machine_24" style="display: flex; flex-direction: column;">
                        <button class="bouton-carre">Machine 24</button>
                        <div id="fenetre-cachee">
                            <div class="contenu-fenetre">
                                <h2>Informations Machine 24</h2>
                                <ul>
                                    <li><?php if ($etat_24 == 0) {
  echo 'Machine 24 : En marche';
} elseif ($etat_24 == 1) {
  echo 'Machine 24 : Arrêt (donc possiblement libre)';
} elseif ($etat_24 == 2) {
  echo 'Machine 24 : En panne';
} else {
  echo 'Machine 24 : Non déclaré';
}?></li>
                                    <li>Capteurs : Opérationnels</li>
                                    <li>Timer : 00:00:00</li>
                                </ul>
                            </div>
                        </div>
                        <?php if ($etat_24 == 0) {
  echo '<img class="ping_bleu" src="assets/img/ping_bleu2.png">';
} elseif ($etat_24 == 1) {
  echo '<img class="ping_vert" src="assets/img/ping_vert2.png">';
} elseif ($etat_24 == 2) {
  echo '<img class="ping_rouge" src="assets/img/ping_rouge2.png">';
} else {
  echo '<img class="ping_noir" src="assets/img/ping_noir2.png">';
}?>
                    </div>
                    <div class="machine_25" style="display: flex; flex-direction: column;">
                        <button class="bouton-grand" style="margin-left: 30px;">Machine 25</button>
                        <div id="fenetre-cachee">
                            <div class="contenu-fenetre">
                                <h2>Informations Machine 25</h2>
                                <ul>
                                    <li><?php if ($etat_25 == 0) {
  echo 'Machine 25 : En marche';
} elseif ($etat_25 == 1) {
  echo 'Machine 25 : Arrêt (donc possiblement libre)';
} elseif ($etat_25 == 2) {
  echo 'Machine 25 : En panne';
} else {
  echo 'Machine 25 : Non déclaré';
}?></li>
                                    <li>Capteurs : Opérationnels</li>
                                    <li>Timer : 00:00:00</li>
                                </ul>
                            </div>
                        </div>
                        <?php if ($etat_25 == 0) {
  echo '<img class="ping_bleu b" src="assets/img/ping_bleu2.png">';
} elseif ($etat_25 == 1) {
  echo '<img class="ping_vert b" src="assets/img/ping_vert2.png">';
} elseif ($etat_25 == 2) {
  echo '<img class="ping_rouge b" src="assets/img/ping_rouge2.png">';
} else {
  echo '<img class="ping_noir b" src="assets/img/ping_noir2.png">';
}?>
                    </div>
                    <div class="machine_26" style="display: flex; flex-direction: column;">
                        <button class="bouton-grand" style="margin-left: 50px;">Machine 26</button>
                        <div id="fenetre-cachee">
                            <div class="contenu-fenetre">
                                <h2>Informations Machine 26</h2>
                                <ul>
                                    <li><?php if ($etat_26 == 0) {
  echo 'Machine 26 : En marche';
} elseif ($etat_26 == 1) {
  echo 'Machine 26 : Arrêt (donc possiblement libre)';
} elseif ($etat_26 == 2) {
  echo 'Machine 26 : En panne';
} else {
  echo 'Machine 26 : Non déclaré';
}?></li>
                                    <li>Capteurs : Opérationnels</li>
                                    <li>Timer : 00:00:00</li>
                                </ul>
                            </div>
                        </div>
                        <?php if ($etat_26 == 0) {
  echo '<img class="ping_bleu c" src="assets/img/ping_bleu2.png">';
} elseif ($etat_26 == 1) {
  echo '<img class="ping_vert c" src="assets/img/ping_vert2.png">';
} elseif ($etat_26 == 2) {
  echo '<img class="ping_rouge c" src="assets/img/ping_rouge2.png">';
} else {
  echo '<img class="ping_noir c" src="assets/img/ping_noir2.png">';
}?>
                    </div>
                    <div class="machine_27" style="display: flex; flex-direction: column;">
                        <button class="bouton-carre">Machine 27</button>
                        <div id="fenetre-cachee">
                            <div class="contenu-fenetre">
                                <h2>Informations Machine 27</h2>
                                <ul>
                                    <li><?php if ($etat_27 == 0) {
  echo 'Machine 27 : En marche';
} elseif ($etat_27 == 1) {
  echo 'Machine 27 : Arrêt (donc possiblement libre)';
} elseif ($etat_27 == 2) {
  echo 'Machine 27 : En panne';
} else {
  echo 'Machine 27 : Non déclaré';
}?></li>
                                    <li>Capteurs : Opérationnels</li>
                                    <li>Timer : 00:00:00</li>
                                </ul>
                            </div>
                        </div>
                        <?php if ($etat_27 == 0) {
  echo '<img class="ping_bleu" src="assets/img/ping_bleu2.png">';
} elseif ($etat_27 == 1) {
  echo '<img class="ping_vert" src="assets/img/ping_vert2.png">';
} elseif ($etat_27 == 2) {
  echo '<img class="ping_rouge" src="assets/img/ping_rouge2.png">';
} else {
  echo '<img class="ping_noir" src="assets/img/ping_noir2.png">';
}?>
                    </div>
                    <div class="machine_28" style="display: flex; flex-direction: column;">
                        <button class="bouton-carre">Machine 28</button>
                        <div id="fenetre-cachee">
                            <div class="contenu-fenetre">
                                <h2>Informations Machine 28</h2>
                                <ul>
                                    <li><?php if ($etat_28 == 0) {
  echo 'Machine 28 : En marche';
} elseif ($etat_28 == 1) {
  echo 'Machine 28 : Arrêt (donc possiblement libre)';
} elseif ($etat_28 == 2) {
  echo 'Machine 28 : En panne';
} else {
  echo 'Machine 28 : Non déclaré';
}?></li>
                                    <li>Capteurs : Opérationnels</li>
                                    <li>Timer : 00:00:00</li>
                                </ul>
                            </div>
                        </div>
                        <?php if ($etat_28 == 0) {
  echo '<img class="ping_bleu" src="assets/img/ping_bleu2.png">';
} elseif ($etat_28 == 1) {
  echo '<img class="ping_vert" src="assets/img/ping_vert2.png">';
} elseif ($etat_28 == 2) {
  echo '<img class="ping_rouge" src="assets/img/ping_rouge2.png">';
} else {
  echo '<img class="ping_noir" src="assets/img/ping_noir2.png">';
}?>
                    </div>
                    <div class="machine_29" style="display: flex; flex-direction: column;">
                        <button class="bouton-carre">Machine 29</button>
                        <div id="fenetre-cachee">
                            <div class="contenu-fenetre">
                                <h2>Informations Machine 29</h2>
                                <ul>
                                    <li><?php if ($etat_29 == 0) {
  echo 'Machine 29 : En marche';
} elseif ($etat_29 == 1) {
  echo 'Machine 29 : Arrêt (donc possiblement libre)';
} elseif ($etat_29 == 2) {
  echo 'Machine 29 : En panne';
} else {
  echo 'Machine 29 : Non déclaré';
}?></li>
                                    <li>Capteurs : Opérationnels</li>
                                    <li>Timer : 00:00:00</li>
                                </ul>
                            </div>
                        </div>
                        <?php if ($etat_29 == 0) {
  echo '<img class="ping_bleu" src="assets/img/ping_bleu2.png">';
} elseif ($etat_29 == 1) {
  echo '<img class="ping_vert" src="assets/img/ping_vert2.png">';
} elseif ($etat_29 == 2) {
  echo '<img class="ping_rouge" src="assets/img/ping_rouge2.png">';
} else {
  echo '<img class="ping_noir" src="assets/img/ping_noir2.png">';
}?>
                    </div>
                </div>

                <div style="display: flex; flex-direction: column; margin-top: 140px; margin-left: -50px;">
                    <button class="petit-rectangle" disabled>TPE</button>
                    <div class="machine_10" style="display: flex; flex-direction: column;">
                        <button class="bouton-carre">Machine 10</button>
                        <div id="fenetre-cachee">
                            <div class="contenu-fenetre">
                                <h2>Informations Machine 10</h2>
                                <ul>
                                    <li><?php if ($etat_10 == 0) {
  echo 'Machine 10 : En marche';
} elseif ($etat_10 == 1) {
  echo 'Machine 10 : Arrêt (donc possiblement libre)';
} elseif ($etat_10 == 2) {
  echo 'Machine 10 : En panne';
} else {
  echo 'Machine 10 : Non déclaré';
}?></li>
                                    <li>Capteurs : Opérationnels</li>
                                    <li>Timer : 00:00:00</li>
                                </ul>
                            </div>
                        </div>
                        <?php if ($etat_10 == 0) {
  echo '<img class="ping_bleu_vertical" src="assets/img/ping_bleu2.png">';
} elseif ($etat_10 == 1) {
  echo '<img class="ping_vert_vertical" src="assets/img/ping_vert2.png">';
} elseif ($etat_10 == 2) {
  echo '<img class="ping_rouge_vertical" src="assets/img/ping_rouge2.png">';
} else {
  echo '<img class="ping_noir_vertical" src="assets/img/ping_noir2.png">';
}?>
                    </div>
                    <div class="machine_11" style="display: flex; flex-direction: column;">
                        <button class="bouton-carre">Machine 11</button>
                        <div id="fenetre-cachee">
                            <div class="contenu-fenetre">
                                <h2>Informations Machine 11</h2>
                                <ul>
                                    <li><?php if ($etat_11 == 0) {
  echo 'Machine 11 : En marche';
} elseif ($etat_11 == 1) {
  echo 'Machine 11 : Arrêt (donc possiblement libre)';
} elseif ($etat_11 == 2) {
  echo 'Machine 11 : En panne';
} else {
  echo 'Machine 11 : Non déclaré';
}?></li>
                                    <li>Capteurs : Opérationnels</li>
                                    <li>Timer : 00:00:00</li>
                                </ul>
                            </div>
                        </div>
                        <?php if ($etat_11 == 0) {
  echo '<img class="ping_bleu_vertical" src="assets/img/ping_bleu2.png">';
} elseif ($etat_11 == 1) {
  echo '<img class="ping_vert_vertical" src="assets/img/ping_vert2.png">';
} elseif ($etat_11 == 2) {
  echo '<img class="ping_rouge_vertical" src="assets/img/ping_rouge2.png">';
} else {
  echo '<img class="ping_noir_vertical" src="assets/img/ping_noir2.png">';
}?>
                    </div>
                </div>

                <div style="display: flex;">
                    <div class="machine_20" style="display: flex; flex-direction: column;">
                        <button class="bouton-carre">Machine 20</button>
                        <div id="fenetre-cachee">
                            <div class="contenu-fenetre">
                                <h2>Informations Machine 20</h2>
                                <ul>
                                    <li><?php if ($etat_20 == 0) {
  echo 'Machine 20 : En marche';
} elseif ($etat_20 == 1) {
  echo 'Machine 20 : Arrêt (donc possiblement libre)';
} elseif ($etat_20 == 2) {
  echo 'Machine 20 : En panne';
} else {
  echo 'Machine 20 : Non déclaré';
}?></li>
                                    <li>Capteurs : Opérationnels</li>
                                    <li>Timer : 00:00:00</li>
                                </ul>
                            </div>
                        </div>
                        <?php if ($etat_20 == 0) {
  echo '<img class="ping_bleu" src="assets/img/ping_bleu2.png">';
} elseif ($etat_20 == 1) {
  echo '<img class="ping_vert" src="assets/img/ping_vert2.png">';
} elseif ($etat_20 == 2) {
  echo '<img class="ping_rouge" src="assets/img/ping_rouge2.png">';
} else {
  echo '<img class="ping_noir" src="assets/img/ping_noir2.png">';
}?>
                    </div>
                    <div class="machine_19" style="display: flex; flex-direction: column;">
                        <button class="bouton-carre">Machine 19</button>
                        <div id="fenetre-cachee">
                            <div class="contenu-fenetre">
                                <h2>Informations Machine 19</h2>
                                <ul>
                                    <li><?php if ($etat_19 == 0) {
  echo 'Machine 19 : En marche';
} elseif ($etat_19 == 1) {
  echo 'Machine 19 : Arrêt (donc possiblement libre)';
} elseif ($etat_19 == 2) {
  echo 'Machine 19 : En panne';
} else {
  echo 'Machine 19 : Non déclaré';
}?></li>
                                    <li>Capteurs : Opérationnels</li>
                                    <li>Timer : 00:00:00</li>
                                </ul>
                            </div>
                        </div>
                        <?php if ($etat_19 == 0) {
  echo '<img class="ping_bleu" src="assets/img/ping_bleu2.png">';
} elseif ($etat_19 == 1) {
  echo '<img class="ping_vert" src="assets/img/ping_vert2.png">';
} elseif ($etat_19 == 2) {
  echo '<img class="ping_rouge" src="assets/img/ping_rouge2.png">';
} else {
  echo '<img class="ping_noir" src="assets/img/ping_noir2.png">';
}?>
                    </div>
                    <div class="machine_18" style="display: flex; flex-direction: column;">
                        <button class="bouton-carre">Machine 18</button>
                        <div id="fenetre-cachee">
                            <div class="contenu-fenetre">
                                <h2>Informations Machine 18</h2>
                                <ul>
                                    <li><?php if ($etat_18 == 0) {
  echo 'Machine 18 : En marche';
} elseif ($etat_18 == 1) {
  echo 'Machine 18 : Arrêt (donc possiblement libre)';
} elseif ($etat_18 == 2) {
  echo 'Machine 18 : En panne';
} else {
  echo 'Machine 18 : Non déclaré';
}?></li>
                                    <li>Capteurs : Opérationnels</li>
                                    <li>Timer : 00:00:00</li>
                                </ul>
                            </div>
                        </div>
                        <?php if ($etat_18 == 0) {
  echo '<img class="ping_bleu" src="assets/img/ping_bleu2.png">';
} elseif ($etat_18 == 1) {
  echo '<img class="ping_vert" src="assets/img/ping_vert2.png">';
} elseif ($etat_18 == 2) {
  echo '<img class="ping_rouge" src="assets/img/ping_rouge2.png">';
} else {
  echo '<img class="ping_noir" src="assets/img/ping_noir2.png">';
}?>
                    </div>
                    <div class="machine_17" style="display: flex; flex-direction: column;">
                        <button class="bouton-carre">Machine 17</button>
                        <div id="fenetre-cachee">
                            <div class="contenu-fenetre">
                                <h2>Informations Machine 17</h2>
                                <ul>
                                    <li><?php if ($etat_17 == 0) {
  echo 'Machine 17 : En marche';
} elseif ($etat_17 == 1) {
  echo 'Machine 17 : Arrêt (donc possiblement libre)';
} elseif ($etat_17 == 2) {
  echo 'Machine 17 : En panne';
} else {
  echo 'Machine 17 : Non déclaré';
}?></li>
                                    <li>Capteurs : Opérationnels</li>
                                    <li>Timer : 00:00:00</li>
                                </ul>
                            </div>
                        </div>
                        <?php if ($etat_17 == 0) {
  echo '<img class="ping_bleu" src="assets/img/ping_bleu2.png">';
} elseif ($etat_17 == 1) {
  echo '<img class="ping_vert" src="assets/img/ping_vert2.png">';
} elseif ($etat_17 == 2) {
  echo '<img class="ping_rouge" src="assets/img/ping_rouge2.png">';
} else {
  echo '<img class="ping_noir" src="assets/img/ping_noir2.png">';
}?>
                    </div>
                    <div class="machine_16" style="display: flex; flex-direction: column;">
                        <button class="bouton-carre espace-rangée-inférieure">Machine 16</button>
                        <div id="fenetre-cachee">
                            <div class="contenu-fenetre">
                                <h2>Informations Machine 16</h2>
                                <ul>
                                    <li><?php if ($etat_16 == 0) {
  echo 'Machine 16 : En marche';
} elseif ($etat_16 == 1) {
  echo 'Machine 16 : Arrêt (donc possiblement libre)';
} elseif ($etat_16 == 2) {
  echo 'Machine 16 : En panne';
} else {
  echo 'Machine 16 : Non déclaré';
}?></li>
                                    <li>Capteurs : Opérationnels</li>
                                    <li>Timer : 00:00:00</li>
                                </ul>
                            </div>
                        </div>
                        <?php if ($etat_16 == 0) {
  echo '<img class="ping_bleu" src="assets/img/ping_bleu2.png">';
} elseif ($etat_16 == 1) {
  echo '<img class="ping_vert" src="assets/img/ping_vert2.png">';
} elseif ($etat_16 == 2) {
  echo '<img class="ping_rouge" src="assets/img/ping_rouge2.png">';
} else {
  echo '<img class="ping_noir" src="assets/img/ping_noir2.png">';
}?>
                    </div>

                    <button class="bouton-carre" id ="invisible" disabled><strong>Entrée</strong></button>

                    <div class="machine_15" style="display: flex; flex-direction: column;">
                        <button class="bouton-carre">Machine 15</button>
                        <div id="fenetre-cachee">
                            <div class="contenu-fenetre">
                                <h2>Informations Machine 15</h2>
                                <ul>
                                    <li><?php if ($etat_15 == 0) {
  echo 'Machine 15 : En marche';
} elseif ($etat_15 == 1) {
  echo 'Machine 15 : Arrêt (donc possiblement libre)';
} elseif ($etat_15 == 2) {
  echo 'Machine 15 : En panne';
} else {
  echo 'Machine 15 : Non déclaré';
}?></li>
                                    <li>Capteurs : Opérationnels</li>
                                    <li>Timer : 00:00:00</li>
                                </ul>
                            </div>
                        </div>
                        <?php if ($etat_15 == 0) {
  echo '<img class="ping_bleu" src="assets/img/ping_bleu2.png">';
} elseif ($etat_15 == 1) {
  echo '<img class="ping_vert" src="assets/img/ping_vert2.png">';
} elseif ($etat_15 == 2) {
  echo '<img class="ping_rouge" src="assets/img/ping_rouge2.png">';
} else {
  echo '<img class="ping_noir" src="assets/img/ping_noir2.png">';
}?>
                    </div>
                    <div class="machine_14" style="display: flex; flex-direction: column;">
                        <button class="bouton-carre">Machine 14</button>
                        <div id="fenetre-cachee">
                            <div class="contenu-fenetre">
                                <h2>Informations Machine 14</h2>
                                <ul>
                                    <li><?php if ($etat_14 == 0) {
  echo 'Machine 14 : En marche';
} elseif ($etat_14 == 1) {
  echo 'Machine 14 : Arrêt (donc possiblement libre)';
} elseif ($etat_14 == 2) {
  echo 'Machine 14 : En panne';
} else {
  echo 'Machine 14 : Non déclaré';
}?></li>
                                    <li>Capteurs : Opérationnels</li>
                                    <li>Timer : 00:00:00</li>
                                </ul>
                            </div>
                        </div>
                        <?php if ($etat_14 == 0) {
  echo '<img class="ping_bleu" src="assets/img/ping_bleu2.png">';
} elseif ($etat_14 == 1) {
  echo '<img class="ping_vert" src="assets/img/ping_vert2.png">';
} elseif ($etat_14 == 2) {
  echo '<img class="ping_rouge" src="assets/img/ping_rouge2.png">';
} else {
  echo '<img class="ping_noir" src="assets/img/ping_noir2.png">';
}?>
                    </div>
                    <div class="machine_13" style="display: flex; flex-direction: column;">
                        <button class="bouton-carre">Machine 13</button>
                        <div id="fenetre-cachee">
                            <div class="contenu-fenetre">
                                <h2>Informations Machine 13</h2>
                                <ul>
                                    <li><?php if ($etat_13 == 0) {
  echo 'Machine 13 : En marche';
} elseif ($etat_13 == 1) {
  echo 'Machine 13 : Arrêt (donc possiblement libre)';
} elseif ($etat_13 == 2) {
  echo 'Machine 13 : En panne';
} else {
  echo 'Machine 13 : Non déclaré';
}?></li>
                                    <li>Capteurs : Opérationnels</li>
                                    <li>Timer : 00:00:00</li>
                                </ul>
                            </div>
                        </div>
                        <?php if ($etat_13 == 0) {
  echo '<img class="ping_bleu" src="assets/img/ping_bleu2.png">';
} elseif ($etat_13 == 1) {
  echo '<img class="ping_vert" src="assets/img/ping_vert2.png">';
} elseif ($etat_13 == 2) {
  echo '<img class="ping_rouge" src="assets/img/ping_rouge2.png">';
} else {
  echo '<img class="ping_noir" src="assets/img/ping_noir2.png">';
}?>
                    </div>
                    <div class="machine_12" style="display: flex; flex-direction: column;">
                        <button class="bouton-carre">Machine 12</button>
                        <div id="fenetre-cachee">
                            <div class="contenu-fenetre">
                                <h2>Informations Machine 12</h2>
                                <ul>
                                    <li><?php if ($etat_12 == 0) {
  echo 'Machine 12 : En marche';
} elseif ($etat_12 == 1) {
  echo 'Machine 12 : Arrêt (donc possiblement libre)';
} elseif ($etat_12 == 2) {
  echo 'Machine 12 : En panne';
} else {
  echo 'Machine 12 : Non déclaré';
}?></li>
                                    <li>Capteurs : Opérationnels</li>
                                    <li>Timer : 00:00:00</li>
                                </ul>
                            </div>
                        </div>
                        <?php if ($etat_12 == 0) {
  echo '<img class="ping_bleu" src="assets/img/ping_bleu2.png">';
} elseif ($etat_12 == 1) {
  echo '<img class="ping_vert" src="assets/img/ping_vert2.png">';
} elseif ($etat_12 == 2) {
  echo '<img class="ping_rouge" src="assets/img/ping_rouge2.png">';
} else {
  echo '<img class="ping_noir" src="assets/img/ping_noir2.png">';
}?>
                    </div>
                </div>
            </div>
        </main>
        <section class="clean-block features">
                <div class="container Legende">
                    <div class="block-heading">
                        <h2 class="text-info"><strong><u>Légende :</u></strong></h2>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-5 feature-box"><img src="assets/img/ping_rouge2.png">
                            <h4>En panne</h4>
                        </div>
                        <div class="col-md-5 feature-box"><img src="assets/img/ping_vert2.png">
                            <h4>Libre</h4>
                        </div>
                        <div class="col-md-5 feature-box"><img src="assets/img/ping_bleu2.png">
                            <h4>En cours</h4>
                        </div>
                        <div class="col-md-5 feature-box" style="border-radius: 5px;"><img src="assets/img/ping_noir2.png">
                            <h4>Etat non déclaré</h4>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="clean-block about-us">
                <div class="container Boutons">
                    <div class="row justify-content-center">
                        <div class="col-sm-6 col-lg-4">
                            <div class="card clean-card text-center">
                                <div class="card-body info">
                                    <a href="Signalement/Signalements_index.php">
                                        <button class="boutons_fin">
                                            <h4 class="card-title">Signalement</h4>
                                            <p class="card-text">Signaler des machines en panne ou d'autres disfonctionnements.</p>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="card clean-card text-center">
                                <div class="card-body info">
                                    <a href="<?php if($connexion == 1){echo'https://codevsiimtatlantique.000webhostapp.com/Main/main.php?log=yooo';} else{echo 'https://codevsiimtatlantique.000webhostapp.com/Main/main.php';}?>">
                                        <button class="boutons_fin">
                                            <h4 class="card-title">Actualisation</h4>
                                            <p class="card-text">Actualiser le site pour avoir les dernières données.</p>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="card clean-card text-center">
                                <div class="card-body info">
                                    <a href="def_pings.php">
                                        <button class="boutons_fin">
                                            <h4 class="card-title">Simulation des données</h4>
                                            <p class="card-text">Permet de simuler les données des capteurs, car notre liaison ne fonctionne pas</p>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

    </body>

    <footer class="page-footer" style="margin-top : -100px;">
        <div class="footer-copyright fin_page">
            <p>© 2024 Projet Codevsi Groupe 110</p>
        </div>
    </footer>
</html>