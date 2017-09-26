<?php
require_once("../modele/get_newmember.php");

//récupérer les variables
if (isset($_POST['pseudo'], $_POST['email'], $_POST['mdp'])){
  var_dump($_POST);
  $pseudo = htmlspecialchars($_POST['pseudo']);
  $mail = htmlspecialchars($_POST['email']);
  $mdpverif = $_POST['mdpverif'];
  $mdp = $_POST['mdp'];

//Hachage mot de passe
  $pass_mdp = sha1($_POST['mdp']);

//vérification des infos et conditions

if (checkPseudo($pseudo)){
    echo "<p>Pseudo already taken!</p>";
  } else {
    if(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $mail)){
      // if($mdp == $mdpverif){
      //   $mdp = $pass_mdp;
      // }
      //
    } else {
      echo "Email adress not valid";
    }
  }
}


include "../vue/newmember.php";
