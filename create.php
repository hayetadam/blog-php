<?php
// on met le php avant le html parceque le php s'exicute avant le html
$titre="";
// on déclare des variables vides pour le titre et le cotenu de formulaire
$contenu=""; 
  if (isset($_GET['filename'])){ //si le fichier "filename" existe 
  //on récupere le titre et le contenu 
  $titre = basename($_GET['filename'],".txt");// on met basename pour enlever les txt et prendre les modification
  // on utilise file_get_contents pour le contenu textarea 
  $contenu = file_get_contents('posts/'.$_GET['filename']);
  }

?><!DOCTYPE html> <!-- il faut accrocher la balise fermer de php à la balise html
pour ne pas avoir d'espace dans notre code source-->
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>
</head>

<body>
    <form action="create-file.php" method="POST">
        <label for="titre">TITRE:</label>
        <!-- on affiche le titre pour le modifier-->
       <p> <input id="titre" name="titre" type="text" value="<?php echo $titre;?>" /></p>

<!-- on fait la meme chose pour le contenu avec des echo dans une balise php qui remplace la value-->
        <label for="text"></label>
       <p> <textarea id="text" name="textarea"><?php echo $contenu; ?></textarea></p>

      <p><button name="create">creat</button></p>
    </form>
    <!--
        une autre façon pour afficher le contenu et le titre :
    <?php
        echo "<p>" . $contenu . "</p>";
    ?>
    -->
</body>

</html>