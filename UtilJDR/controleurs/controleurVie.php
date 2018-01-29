<?php
require_once 'modeles/element.php';
require_once 'modeles/pluriel.php';
require_once 'modeles/inventaire.php';
require_once 'modeles/arme.php';
require_once 'modeles/armure.php';
require_once 'modeles/sort.php';
require_once 'modeles/item.php';
require_once 'modeles/personnage.php';
$erreurSupprItem='';
$erreurItem='';

$lesPerso = new Personnages();
$lesPerso->remplir('IdUser='.$_SESSION['User'],null);

if (isset($_POST['idSelected'])) {
  $_SESSION['idSelected'] = $_POST['idSelected'];
  $Perso= personnage::mustFind($_POST['idSelected']);
  //  var_dump($Mob);

}

if (isset($_POST['Perso'])&&isset($_POST['Degat'])&&isset($_POST['DegatMagie'])) {
  $Perso= personnage::mustFind($_POST['Perso']);
  $Perso->setDegat($_POST['Degat']);
  $Perso->setDegatMagie($_POST['DegatMagie']);

  if (isset($_POST['AddMagie'])) {
    $Perso->removeDegatMagie();
  }
  if (isset($_POST['ConsommeMagie'])) {
    $Perso->addDegatMagie();
  }

  if (isset($_POST['AddVie'])) {
    $Perso->removeDegat();
  }

  if (isset($_POST['ConsommeVie'])) {
    $Perso->addDegat();
  }

  if (isset($_POST['AddXp'])&&isset($_POST['xp'])) {
    $tmp = $Perso->getExperience()+$_POST['xp'];
    $id = $Perso->getId();
    $Perso->AddExperience(array($tmp,$id));
    //var_dump($Perso);
    $Perso= personnage::mustFind($_POST['Perso']);
    //var_dump($Perso);

  }

  if (isset($_POST['AddOr'])&&isset($_POST['Or'])) {
    $tmp = $Perso->getArgent()+$_POST['Or'];
    $id = $Perso->getId();
    $Perso->AddOr(array($tmp,$id));

    $Perso= personnage::mustFind($_POST['Perso']);
  }
}


require_once 'vues/GestionVieMagie.php'; ?>
