<?php
$erreur='';


//add Mob
if (isset($_POST['PV'])) {
  if (($_POST['Prenom']!='')&&($_POST['Nom']!='')&&($_POST['Pseudo']!='')&&($_POST['Race']!='')&&($_POST['Classe']!='')&&($_POST['Niveau']!='')&&($_POST['Social']!='')) {
    if ( ($_POST['PV']!='') &&($_POST['PM']!='')&&($_POST['Puissance']!='')&&($_POST['Finnesse']!='')&&($_POST['Argent']!='')) {
      //add mob
    }
  }else {
    $erreur="Remplir tous les champs";
  }
}



require_once 'vues/CreateMobs.php'; ?>
