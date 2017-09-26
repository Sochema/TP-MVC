<?php
require "../modele/get_newnember.php";

//validité des informations
if (isset($_POST['pseudo'], $_POST['mail'], $_POST['mdp'])){
  $pseudo = htmlspecialchars($_POST['pseudo']);
  $mail = htmlspecialchars($_POST['mail']);

//hachage du mot de passe
  $pass_hache = sha1($_POST['mdp']);
    if ($pseudo ) {
      //effectue la requête qui insert

    }
}


include "../vue/newmember.php";

 ?>
