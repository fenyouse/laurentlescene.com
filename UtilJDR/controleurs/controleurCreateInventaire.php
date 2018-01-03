<?php
$erreurItem='';
$erreurArme='';
$erreurArmure='';
$erreurSort='';

//add Item
if (isset($_POST['Quantité'])&&isset($_POST['Nom'])) {
  if (($_POST['Quantité']!='')&&($_POST['Nom'])!='') {
    //add Item
  }else {
    $erreurItem='Remplir champs';
  }
}

//add Arme
if (isset($_POST['DegatPrimaire'])&&isset($_POST['Nom'])&&isset($_POST['Description'])&&isset($_POST['DegatDes'])) {
  if (($_POST['DegatPrimaire']!='')&&($_POST['Nom'])!=''&&($_POST['Description'])!=''&&($_POST['DegatDes'])!='') {
    //add Arme
  }else {
    $erreurArme='Remplir champs';
  }
}

//add Armure
if (isset($_POST['Bouclier'])&&isset($_POST['Description'])&&isset($_POST['Nom'])) {
  if (($_POST['Bouclier'])!=''&&($_POST['Description'])!=''&&($_POST['Nom'])!='') {
    //add Armure
  }else {
    $erreurArmure='Remplir champs';
  }
}

//add Sort
if (isset($_POST['PM'])&&isset($_POST['Nom'])&&isset($_POST['Degat'])) {
  if (($_POST['PM']!='')&&($_POST['Nom']!='')&&($_POST['Degat']!='')) {
    //add Sort
  }else {
    $erreurSort='Remplir champs';
  }
}




 require_once 'vues/CreateInventaire.php'; ?>
