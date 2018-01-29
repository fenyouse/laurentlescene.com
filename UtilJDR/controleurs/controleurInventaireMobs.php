<?php

require_once 'modeles/arme.php';
require_once 'modeles/armure.php';
require_once 'modeles/item.php';
require_once 'modeles/mob.php';
require_once 'modeles/sort.php';
$erreur='';


$lesMobs = new Mobs();
$lesMobs->remplir('IdUser='.$_SESSION['User'],null);

$lesArmures = new Armures();
$lesArmures->remplir('IdUser='.$_SESSION['User'],null);


$lesArmes = new Armes();
$lesArmes->remplir('IdUser='.$_SESSION['User'],null);


$lesSorts = new Sorts();
$lesSorts->remplir('IdUser='.$_SESSION['User'],null);


 require_once 'vues/InventaireMobs.php'; ?>
