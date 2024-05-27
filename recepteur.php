<?php
// Vérifier si une requête POST a été reçue
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Afficher un message indiquant que la requête a été reçue avec succès
    print "La requête a été reçue avec succès.";
} else {
    // Afficher un message d'erreur si la requête n'est pas de type POST
    echo "La page attend une requête de type POST.";
}
?>

