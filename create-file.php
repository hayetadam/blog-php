<?php
$text = $_POST['textarea']; // récupération de l'adresse envoyée avec le formulaire (ton champ de texte doit s'appeler "email")
$file = fopen("textarea.txt", "w"); // ouvre le fichier en écriture
fwrite($file, $text); // ecrit l'e-mail dans le fichier
fclose($file); // ferme le fichier
?>