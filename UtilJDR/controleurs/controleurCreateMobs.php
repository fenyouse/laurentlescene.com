<?php
require_once 'modeles/mob.php';
require_once 'modeles/inventaire.php';

$erreur='';


//add Mob
if (isset($_POST['PV'])) {
  if (($_POST['Prenom']!='')&&($_POST['Nom']!='')&&($_POST['Pseudo']!='')&&($_POST['Race']!='')&&($_POST['Classe']!='')&&($_POST['Niveau']!='')&&($_POST['Social']!='')) {
    if ( ($_POST['PV']!='') &&($_POST['PM']!='')&&($_POST['Puissance']!='')&&($_POST['Finnesse']!='')) {
      $lastIdInventaire = Inventaire::lastId()['Id']+1;
      //var_dump($lastIdInventaire);
      $CreteInventaire = Inventaire::SQLInsert(array(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL));
      $CreateMob = Mob::SQLInsert(array($_POST['Nom'],$_POST['Prenom'],$_POST['Pseudo'],$_POST['Race'],$_POST['Classe'],
                                        $_POST['Niveau'],$_POST['PV'],$_POST['PM'],$_POST['Puissance'],$_POST['Finnesse'],
                                        $_POST['Social'],$_POST['Mental'],$lastIdInventaire,$_SESSION['User']));
      //var_dump($CreteInventaire,$CreateMob);
    }
  }else {
    $erreur="Remplir tous les champs";
  }
}



require_once 'vues/CreateMobs.php'; ?>
