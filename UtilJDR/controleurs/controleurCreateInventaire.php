<?php
require_once 'modeles/inventaire.php';
require_once 'modeles/arme.php';
require_once 'modeles/armure.php';
require_once 'modeles/sort.php';
require_once 'modeles/item.php';

$erreurItem='';
$erreurArme='';
$erreurArmure='';
$erreurSort='';

//add Item
if (isset($_POST['Quantite'])&&isset($_POST['Nom'])) {
  if (($_POST['Quantite']!='')&&($_POST['Nom'])!='') {
    $Create = Item::SQLInsert(array($_POST['Nom'],$_POST['Quantite']),$_SESSION['User']);
    var_dump($Create);
  }else {
    $erreurItem='Remplir champs';
  }
}

//add Arme
if (isset($_POST['DegatPrimaire'])&&isset($_POST['Nom'])&&isset($_POST['Description'])&&isset($_POST['DegatDes'])) {
  if (($_POST['DegatPrimaire']!='')&&($_POST['Nom'])!=''&&($_POST['Description'])!=''&&($_POST['Effet'])!=''&&($_POST['DegatDes'])!='') {
      $Create = Arme::SQLInsert(array($_POST['Nom'],$_POST['Description'],$_POST['DegatDes'],$_POST['DegatPrimaire'],$_POST['Effet'],$_SESSION['User']));
      var_dump($Create);
  }else {
    $erreurArme='Remplir champs';
  }
}

//add Armure
if (isset($_POST['Bouclier'])&&isset($_POST['Description'])&&isset($_POST['Effet'])&&isset($_POST['Nom'])) {
  if (($_POST['Bouclier'])!=''&&($_POST['Description'])!=''&&($_POST['Effet'])!=''&&($_POST['Nom'])!='') {
    $Create = Armure::SQLInsert(array($_POST['Nom'],$_POST['Description'],$_POST['Bouclier'],$_POST['Effet'],$_SESSION['User']));
    var_dump($Create);
  }else {
    $erreurArmure='Remplir champs';
  }
}

//add Sort
if (isset($_POST['PM'])&&isset($_POST['Nom'])&&isset($_POST['Degat'])) {
  if (($_POST['PM']!='')&&($_POST['Nom']!='')&&($_POST['Degat']!='')) {
    $Create = Sort::SQLInsert(array($_POST['Nom'],$_POST['Description'],$_POST['PM'],$_POST['Degat'],$_SESSION['User']));
    var_dump($Create);
  }else {
    $erreurSort='Remplir champs';
  }
}




 require_once 'vues/CreateInventaire.php'; ?>
