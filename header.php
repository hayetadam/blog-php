<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>header.php</title>
</head>

<body>
<?php
session_start();
if(!isset($_SESSION['utilisateur'])){
   echo' <form action="inscription.php" method="POST">
        <label for="user">pseudo:</label>
        <input id="user" name="pseudo" type="text" />

        <label for="passeword">mot de passe:</label>
        <input id="pass" name="mdp" type="password" />

        <button name="inscription">inscription</button>
        
    </form>
    <!-- le 2 formulaire:-->
      <form action="login.php" method="POST">
        <label for="user">pseudo:</label>
        <input id="user" name="pseudo" type="text" />

        <label for="passeword">mot de passe:</label>
        <input id="pass" name="mdp" type="password" />
        <button name="connexion">connexion</button>
    </form>';
} else{
    echo $_SESSION['utilisateur'];
    echo'<form action="logout.php" method ="POST">
    <button>se déconnecter</button>
    </form>';
}
    ?>

</body>

</html>