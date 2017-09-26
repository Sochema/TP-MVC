<?php
// CONNEXION A LA BASE DE DONNEES VIA PDO
function PDOconnect(){
  try{
    $bdd = new PDO('mysql:host=localhost;dbname=espacemembre;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  }
  catch (Exception $e)
  {
    die('Erreur: '. $e->getMessage());
  }
}

PDOconnect();

$req = $bdd -> prepare('INSERT INTO membre(pseudo, mdp, mail, date_inscription) VALUES (:pseudo, :mdp, :mail, CURDATE())');
$req-> execute(array(
  "pseudo" => $pseudo,
  "mdp" => $pass_mdp,
  "mail"=> $mail
));

$donnees = $req -> fetchAll();



//fichier qui ne comporte que les requêtes
