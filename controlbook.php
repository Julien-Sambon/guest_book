<?php
// Redirection vers la page du formulaire.
header('Location: guest_book.php');

if (!isset($_POST['name']) || !isset($_POST['message'])) {
    echo "Sorry, there appears to be a problem with your form submission.";
} else {
    // Recuperation des infos en variable et verification qu'il n'y ai pas de script dedans.
    $name = trim(stripslashes(htmlEntities($_POST['name'], ENT_QUOTES)));
    $message = trim(stripslashes(htmlEntities($_POST['message'], ENT_QUOTES)));
}
// Recuperation de la date et heure au moment de l'envoie.
date_default_timezone_set('UTC+2');
$today = date("F j, Y, g:i a");
// Variable qui permet d'ouvir le fichier csv qui est la base de donnée.
$fp=fopen('db.csv','a');
// Ecriture des variable récupéré ci dessus, le ~ est ce qui va se mettre entre chaque variable et le '"' c'est que qui va se mettre au
// début et à la fin de chaque variable pour les passer en string.
fputcsv($fp, array($name, $message, $today), '~', '"');
fclose($fp);
// Demande du contenue de readbook
require("readbook.php");
