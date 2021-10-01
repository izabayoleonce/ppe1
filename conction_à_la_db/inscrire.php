<?php
try {
    $bdd = new PDO('mysql:host=localhost:3306;dbname=ppe1_groupe3;charset=utf8', 'leonce', 'z3nwbHdJy');
}
  catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
if (isset($_POST['valider'])) 
{
    if ((isset($_POST['nom']) AND !empty($_POST['nom']) AND isset($_POST['prénom']) AND !empty($_POST['prénom']) AND isset($_POST['num_ligue']) AND !empty($_POST['num_ligue']) AND isset($_POST['mail']) AND !empty($_POST['mail']) AND isset($_POST['rue']) AND !empty($_POST['rue']) AND isset($_POST['cp']) AND !empty($_POST['cp']) AND isset($_POST['ville']) AND !empty($_POST['ville'])) {
        
        
        $req = $bdd->prepare('INSERT INTO demandeurs (nom, prenom, num_ligue, mail, rue, cp, ville)               
                            VALUES (:nom, :prénom, :num_ligue, :mail, :rue, :cp, :ville)');
        $req->execute([
        ':nom'              => $_POST['nom'],
        ':prenom'           => $_POST['prenom'],
        ':num_ligue'        => $_POST['num_ligue'],
        ':mail'             => $_POST['mail'],
        ':rue'              =>$_POST['rue'], 
        ':cp'               =>$_POST['cp'],
        ':ville'            =>$_POST['ville']
        ]); 
    } else {
        echo "saisissez bien votre vos information";
    }
}