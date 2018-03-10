<?php

require_once 'modeles/inventaire.php';
require_once 'modeles/personnage.php';
require_once 'modeles/arme.php';
require_once 'modeles/armure.php';
require_once 'modeles/item.php';
require_once 'modeles/sort.php';
$erreur='';

$lesPerso = new Personnages();
$lesPerso->remplir('IdUser='.$_SESSION['User'],null);


$lesArmures = new Armures();
$lesArmures->remplir('IdUser='.$_SESSION['User'],null);


$lesArmes = new Armes();
$lesArmes->remplir('IdUser='.$_SESSION['User'],null);


$lesSorts = new Sorts();
$lesSorts->remplir('IdUser='.$_SESSION['User'],null);

if (isset($_POST['idSelected'])) {
  $_SESSION['idSelected'] = $_POST['idSelected'];
  $Perso= personnage::mustFind($_POST['idSelected']);
  $Inventaire = $Perso->getInventaire();

}
if (isset($_POST['addSort1'])) {
  $Perso= personnage::mustFind($_SESSION['idSelected']);
  $test = inventaire::addSort1(array($_POST['SortSelected'],$Perso->getIdInventaire()));
  //var_dump($_POST['SortSelected'],$_SESSION['idSelected'],$test);
}
if (isset($_POST['addSort2'])) {
  inventaire::addSort2(array($_POST['SortSelected'],$_SESSION['idSelected']));
}
if (isset($_POST['addSort3'])) {
  inventaire::addSort3(array($_POST['SortSelected'],$_SESSION['idSelected']));
}
if (isset($_POST['addSort4'])) {
  inventaire::addSort4(array($_POST['SortSelected'],$_SESSION['idSelected']));
}
if (isset($_POST['addSort5'])) {
  inventaire::addSort5(array($_POST['SortSelected'],$_SESSION['idSelected']));
}

if (isset($_POST['addCac'])) {
  inventaire::addCac(array($_POST['armeSelected'],$_SESSION['idSelected']));
}
if (isset($_POST['addDist'])) {
  inventaire::addDist(array($_POST['armeSelected'],$_SESSION['idSelected']));
}

if (isset($_POST['addCasque'])) {
  inventaire::addCasque(array($_POST['ArmureSelected'],$_SESSION['idSelected']));
}
if (isset($_POST['addArmure'])) {
  inventaire::addArmure(array($_POST['ArmureSelected'],$_SESSION['idSelected']));
}
if (isset($_POST['addBouclier'])) {
  inventaire::addBouclier(array($_POST['ArmureSelected'],$_SESSION['idSelected']));
}


 require_once 'vues/InventairePerso.php'; ?>
