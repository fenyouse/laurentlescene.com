<?php
require_once 'modeles/user.php';
$erreur = "";

if(isset($_POST['login'])){
  $erreur="formulaire vide";
}

if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['mdp'])){

  $UserTmp = User::Authentification($_POST["login"],$_POST["mdp"]);
  //var_dump($UserTmp);
  if ($UserTmp!=null) {
    //$user= User::mustFind( User::Authentification($_POST["login"],$_POST["mdp"]);
    $_SESSION['User'] = $UserTmp;
    $_SESSION['Page']='Dés';
    header ('Location:index.php');


  }else {
    $erreur="Login ou mot de passe incorrect";
  }



}

require_once 'vues/connexion.php';
?>
