<?php

require_once 'modeles/arme.php';
require_once 'modeles/armure.php';
require_once 'modeles/item.php';
require_once 'modeles/mob.php';
require_once 'modeles/sort.php';
$erreur='';


$lesMobs = new Mobs();
$lesMobs->remplir(null,null);

$lesArmures = new Armures();
$lesArmures->remplir(null,null);


$lesArmes = new Armes();
$lesArmes->remplir(null,null);



$lesSorts = new Sorts();
$lesSorts->remplir(null,null);


 require_once 'vues/InventaireMobs.php'; ?>
