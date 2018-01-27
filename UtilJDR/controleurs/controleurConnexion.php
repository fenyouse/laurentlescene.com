<?php
require_once 'Modeles/user.php';

$erreur = "";

if(isset($_POST['login'])){
  $erreur="formulaire vide";
}

if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['mdp'])){

  $UserTmp = User::Authentification($_POST["login"],$_POST["mdp"]);
  //var_dump($ElecteurTmp);
  if ($UserTmp!=null) {

    $user= User::mustFind( User::Authentification($_POST["login"],$_POST["mdp"])->getId());
    $_SESSION['User'] = $UserTmp->getId();
    $_SESSION['Page']='Dés';
    header ('Location:index.php');


  }else {
    $erreur="Login ou mot de passe incorrect";
  }



}

require_once 'Vues/Connexion.php';
?>
