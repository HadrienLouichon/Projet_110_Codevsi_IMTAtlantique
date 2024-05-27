<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="description" content="Formulaire de signalement // Projet CODEVSI 2024">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Formulaire d'observations</title>
        <link rel="stylesheet" type="text/css" media="screen" href="css/signalement.css">
    </head>
    <header>
        <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
            <a href="https://codevsiimtatlantique.000webhostapp.com/Main/index%202.php">
                <button class="btn btn-primary principal" id="menu" type="button">Retour Page Principale</button>
            </a>
        </nav>
    </header>
    <body>
        <main class="main">
            <div class="block-heading">
                <div class="grand-rectangle">
                <h2 class="text-info" style="margin-top:15%"><strong><u>Page de Signalement</u></strong></h2>
                <form action="forms.php" method="post">
                    <div class="form-group">
                        <section title="date" style="margin-top: 7%;">
                            <label>Date : </label>
                            <?php date_default_timezone_set('Europe/Paris');
                                echo date("F j, Y, g:i a")?><br>
                        </section>
                    </div>
                    <div class="form-group">
                        <section title="N° de la machine">
                            <label>Numéro de la machine</label>
                                <select id = "machine" name="machine" size="1">
                                    <option value="--">--</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                </select>
                        </section>
                    </div>
                    <div class="form-group">
                        <section title="Type d'observations">
                            <label>Statut à déclarer : </label>
                            <select id="etat" name="etat" size="1">
                                <option value="--">--------------</option>
                                <option value="en panne">Machine en panne</option>
                                <option value="reservée">Machine réservée</option>
                                <option value="SAV">En attente de SAV</option>
                            </select>
                        </section>
                    </div>
                    <div class="form-group">
                        <section title="Observation">
                            <label>Commentaire supplémentaire :</label>
                            <div>
                                <textarea id="message" class="form-control" name="message" placeholder="Entrez votre commentaire (optionnel)"></textarea>
                            </div>
                        </section>
                    </div>
                    <div class="form-group">
                        <?php if(isset($_GET['error'])){ ?><p class="error"><?php    echo $_GET['error'];?></p><?php } ?>
                        <section title="Submit">
                            <div>
                                <button type="submit" class="btn btn-secondary">Envoyer</button>
                            </div>
                        </section>
                    </div>
                </form>
    </body>
</html>