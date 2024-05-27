<?php 
include('file_php/db_conn.php'); 
$num = 0;
$update = '';
?>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Page des Archives</title>
        <meta name="description" content="Page des Archives // Projet CODEVSI 2024">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
        <link rel="stylesheet" href="css/archive.css">
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    </head>
    <header>
        <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
            <a href="https://codevsiimtatlantique.000webhostapp.com/Main/index%202.php?log=yooo">
                <button class="btn btn-primary principal" id="menu" type="button">Retour Page Principale</button>
            </a>
            <a href="Archive_index.php">
                <button class="btn btn-primary principal" id="Actualiser" type="button">Actualiser</button>
            </a>
        </nav>
    </header>
    <body>
        <masin class="main">
            <div class="block-heading">
                <h2 class="text-info" style="margin-top:100px"><strong><u>Signalements non traités</u></strong></h2>
                    <div class="col-md-3" style="margin-top:50px"></div>
                    <form method="post" action="">
                        <div class="cadre-table-scroll" style = "width:auto ; height:400px; overflow-y:scroll">
                            <table class="table table-scroll">
                                <div class="sticky">
                                    <thead class="alert-info" >
                                    <tr>
                                        <th>Sélectionner</th>
                                        <th>Date de signalement</th>
                                        <th>Numéro de la machine</th>
                                        <th>Etat de la machine</th>
                                        <th>Commentaire</th>
                                    </tr>
                                </thead>
                                </div>
                                <tbody>
                                    <?php include('file_php/table_non_traites.php') ?>
                                </tbody>
                            </table>
                        </div>
                        <button name="gerer" class="btn btn-secondary">Gérer le signalement</button>
                    </form>
                    <form method="post" action=""> 
                        <div title="gestion" margin-top="10%">
                           <?php include('file_php/gerer.php')?>
                        </div>
                    </form>
        
                    <form method="post" action="">
                        <div title="archiver">
                            <?php include('file_php/archiver.php') ?>
                        </div>
                    </form>
                </div>
                <h2 class="text-info" style="margin-top:50px ; text-align:center;"><strong><u>Signalements archivés</u></strong></h2>
                <form method="post" action=""  style="margin-top:50px; text-align:center;">
                    <div class="cadre-table-scroll" style = "width:auto ; height:400px; overflow-y:scroll">
                        <table class="table table-scroll">
                            <thead class="alert-info" >
                                <tr>
                                    <th>Date de signalement</th>
                                    <th>Numéro de la machine</th>
                                    <th>Etat de la machine</th>
                                    <th>Date de traitement</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php include('file_php/table_traites.php') ?> 
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </main>
    </body>
</html>