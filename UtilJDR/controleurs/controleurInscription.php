<?php
require_once 'Modeles/user.php';

$erreur = "";

if(isset($_POST['login'])){
  $erreur="formulaire vide";
}

if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['mdp'])&& !empty($_POST['Nom'])&& !empty($_POST['Prenom'])){

  $UserTmp = User::Inscription($_POST["login"],$_POST["mdp"],$_POST["Nom"],$_POST["Prenom"]);


  var_dump($UserTmp);
  /*
  if ($UserTmp['error']==0) {
    $user= User::mustFind( User::Authentification($_POST["login"],$_POST["mdp"])->getId());
    $_SESSION['User'] = $user->getId();
    $_SESSION['Page']='Dés';
    header ('Location:index.php');


  }else {
    $erreur="Login ou mot de passe incorrect";
  }
*/


}

require_once 'Vues/Inscription.php';
?>
