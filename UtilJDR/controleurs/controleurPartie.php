<?php

if (!isset($_SESSION['NbMobAfficher'])) {
  $_SESSION['NbPersoAfficher']=array();
}


if (isset($_POST['DelPerso'])) {
  $tmp =$_SESSION['NbPersoAfficher'];
  array_pop($tmp);
  $_SESSION['NbPersoAfficher']=$tmp;
}
if (isset($_POST['AddPerso'])) {
  $tmp =$_SESSION['NbPersoAfficher'];
  array_push($tmp, 2);
  $_SESSION['NbPersoAfficher']=$tmp;
}

if (!isset($_SESSION['NbMobAfficher'])) {
  $_SESSION['NbMobAfficher']=array();
}
if (isset($_POST['AddMobs'])) {
  $tmp =$_SESSION['NbMobAfficher'];
  array_push($tmp, 2);
  $_SESSION['NbMobAfficher']=$tmp;
}

if (isset($_POST['DelMobs'])) {
  $tmp =$_SESSION['NbMobAfficher'];
  array_pop($tmp);
  $_SESSION['NbMobAfficher']=$tmp;
}

require_once 'vues/Partie.php'; ?>
