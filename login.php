<?php
if(isset($_POST['pseudo'])&& isset($_POST['mdp'])){
    $pseudo = $_POST['pseudo'];
    $mdp= $_POST['mdp'];
    if (is_file('utilisateur/'.$pseudo.'txt')){
        $contenu= file_get_contents('utilisateur/'.$pseudo.'.txt');
        if($contenu==$mdp){
echo'vous etes bien connecté.e';
        }
        else{
            echo'l\'utilisateur ou le mdp n\'existe pas';
        }
    }
}
?>