<?php


$GestPerso=array(1);
if (isset($_POST['AddPerso'])) {
  array_push($GestPerso, 2);
}

$GestMob=array(1);
if (isset($_POST['AddMobs'])) {
  array_push($GestMob, 2);
}

require_once 'vues/Partie.php'; ?>
