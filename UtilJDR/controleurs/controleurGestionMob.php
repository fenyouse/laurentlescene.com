<?php
require_once 'modeles/element.php';
require_once 'modeles/pluriel.php';
require_once 'modeles/inventaire.php';
require_once 'modeles/arme.php';
require_once 'modeles/armure.php';
require_once 'modeles/sort.php';
require_once 'modeles/item.php';
require_once 'modeles/mob.php';

$erreurSupprItem='';
$erreurItem='';

$lesMobs = new Mobs();
$lesMobs->remplir(null,null);



if (isset($_POST['idSelected'])) {
  $_SESSION['idSelected'] = $_POST['idSelected'];
  $Mob= Mob::mustFind($_POST['idSelected']);
  //  var_dump($Mob);

}
if (isset($_POST['Mob'])&&isset($_POST['Degat'])) {
  $Mob= Mob::mustFind($_POST['Mob']);
  $Mob->setDegat($_POST['Degat']);

  //var_dump($Mob);
  if (isset($_POST['AddVie'])) {

    $Mob->removeDegat();
  }
  if (isset($_POST['ConsommeVie'])) {
    $Mob->addDegat();
  }

}


require_once 'vues/GestionMobs.php'; ?>
