<?php
$contenu = $_POST["textarea"]; // récupération de l'adresse envoyée avec le formulaire (ton champ de texte doit s'appeler "email")
echo "<p>".$contenu."</p>";
$titre = $_POST["titre"];
echo "<p>".$titre."</p>";
if(!is_dir("posts")){

mkdir("posts");
}
$fichier = fopen("posts/".$titre.".txt", "w");
fwrite($fichier,$contenu);
fclose($fichier);
?>
