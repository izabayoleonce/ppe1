<?php
if(isset($_POST['connection']))
{
if (isset($_POST['login']) AND !empty($_POST['login']) AND isset($_POST['password']) AND !empty($_POST['pssword'])) 
{


try{
    $bdd = new PDO('mysql:host=localhost', 'leonce', 'z3nwbHdJy');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$req = $bdd->prepare('SELECT login, 
                             password,
                      FROM adherant ');
$req->execute(array($_GET['adherant']));
$donnees = $req->fetch();
}
else{
    echo "veillez revenir en arriere pour reveriffier les information saisi";

}
}
?>