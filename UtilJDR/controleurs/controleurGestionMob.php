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

if (!isset($_SESSION['Degat'])) {
  $_SESSION['Degat']=0;
}
if (!isset($_SESSION['idSelected'])) {
  $_SESSION['idSelected']=1;
}
if (isset($_POST['idSelected'])) {
  $_SESSION['idSelected']=$_POST['idSelected'];
}
if (isset($_POST['AddVie'])) {
  $_SESSION['Degat']=$_SESSION['Degat']-1;
}
if (isset($_POST['ConsommeVie'])) {
  $_SESSION['Degat']=$_SESSION['Degat']+1;
}

$Mob= Mob::mustFind($_SESSION['idSelected']);
//var_dump($Mob);
require_once 'vues/GestionMobs.php'; ?>
