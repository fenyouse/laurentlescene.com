<?php
require_once 'Modeles/user.php';

$erreur = "";

if(isset($_POST['login'])){
  $erreur="formulaire vide";
}

if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['mdp'])&& !empty($_POST['Nom'])&& !empty($_POST['Prenom'])){

  if (User::TestLogin($_POST["login"])==null) {
    $UserTmp = User::Inscription($_POST["login"],$_POST["mdp"],$_POST["Nom"],$_POST["Prenom"]);

    if ($UserTmp['error']==0||$UserTmp==null) {
      $auth = User::Authentification($_POST["login"],$_POST["mdp"]);
      //var_dump($auth);
      $user= User::mustFind( $auth->getId());
      $_SESSION['User'] = $user->getId();
      $_SESSION['Page']='Dés';
      header ('Location:index.php');


    }else {
      $erreur="Login ou mot de passe incorrect";
    }

  }else {
    $erreur="Login déja existant";
  }




}

require_once 'Vues/Inscription.php';
?>
