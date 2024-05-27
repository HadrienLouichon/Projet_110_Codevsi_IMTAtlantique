<!DOCTYPE html>
<html lang="fr">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Test des Pings - Etat des machines</title>
        <meta name="description" content="Site projet CODEVSI - Laverie IMT Atlantique Brest">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
        <link rel="stylesheet" href="assets/css/simul.css">
    </head>
    <header>
            <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
                <a href="main.php">
                    <button class="btn btn-primary principal" id="menu" type="button">Retour Page Principale</button>
                </a>
            </nav>
        </header>
<body>
    <body>
        <main class="main">
            <div class="block-heading">
                <div class="JJK">
                <h2 class="text-info"><strong><u>Simulation de l'état des machines</u></strong></h2>
                    <p><mark>Permet de simuler l'état des machines, car notre liaison capteurs - site n'est pas opérationnelle</mark></p>

                <form action="main.php" method="post"> <table>
            <tr>
                <th >Numéro de la machine</th> <th>Etat de la machine</th>
            </tr>
            <?php
            for ($i = 10; $i <= 29; $i++) {
                echo "<tr>";
                echo "<td>" . $i . "</td>"; // Numéro de la machine
                echo "<td>";
                echo "<select name='etat_" . $i . "'>"; // Menu déroulant pour chaque machine
                echo "<option value='0'>En marche</option>";
                echo "<option value='1'>A l'arrêt</option>";
                echo "<option value='2'>En panne</option>";
                echo "</select>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </table>

        <input type="submit" class="btn btn-secondary value="Valider" style="margin-top:5px">
    </form>
    </div>
    </div>
    </main>
</body>
</html>
