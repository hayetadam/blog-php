<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>inscription.php</title>
</head>
<body>
<?php
if(isset($_POST['pseudo']) &&isset($_POST['mdp'])){
    $pseudo =$_POST['pseudo'];
    $mdp = $_POST['mdp'];
    $cript = md5("$mdp");
    //$cript2 = cha1("$mdp");
    if(!is_dir("utilisateur")){
        mkdir("utilisateur");
    }
    $new_file = fopen("utilisateur/".$pseudo.".txt","w");
    fwrite($new_file,$cript);
    fclose($new_file);
    session_start();
    $_SESSION['utilisateur'] = $pseudo;
    header('location: index.php');
    echo '<p>Vous avez bien été inscrit.e</p>';
} else {
    header('location: error.php?msg='.urlencode('fail to loggin'));
    /*
    header('location: loggin_fail.php') une autre façon pour crier une page d'erreur
    */
}
?>

    
</body>
</html>