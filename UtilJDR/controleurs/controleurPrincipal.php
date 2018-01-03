<?php

if(isset($_POST["Dés"])) {
  $_SESSION['Page']='Dés';
  require_once 'controleurs/controleurDes.php';
}
if(isset($_POST["CreatePerso"])) {
  $_SESSION['Page']='CreatePerso';
  require_once 'controleurs/controleurCreatePerso.php';
}
if(isset($_POST["GesPerso"])) {
  $_SESSION['Page']='GesPerso';
  require_once 'controleurs/controleurGesPerso.php';
}
if(isset($_POST["GesMobs"])) {
  $_SESSION['GesMobs']='GesMobs';
  require_once 'controleurs/controleurGesMobs.php';
}
if(isset($_POST["CreateMobs"])) {
  $_SESSION['Page']='CreateMobs';
  require_once 'controleurs/controleurCreateMobs.php';
}
if(isset($_POST["GesMobs"])) {
  $_SESSION['Page']='GesMobs';
  require_once 'controleurs/controleurGesMobs.php';
}
if(isset($_POST["Musique"])) {
  $_SESSION['Page']='Musique';
  require_once 'controleurs/controleurMusique.php';
}
if(isset($_POST["Inventaire"])) {
  $_SESSION['Page']='Inventaire';
  require_once 'controleurs/controleurInventaire.php';
}

if(isset($_POST["CreateInventaire"])) {
  $_SESSION['Page']='CreateInventaire';
  require_once 'controleurs/controleurCreateInventaire.php';
}

if (isset($_SESSION['Page'])) {
  switch ($_SESSION['Page']) {
    case 'Dés':
      require_once 'controleurs/controleurDes.php';
      break;
    case 'CreatePerso':
      require_once 'controleurs/controleurCreatePerso.php';
      break;
    case 'GesPerso':
      require_once 'controleurs/controleurGesPerso.php';
      break;
    case 'CreateMobs':
      require_once 'controleurs/controleurCreateMobs.php';
      break;
    case 'GesMobs':
      require_once 'controleurs/controleurGesMobs.php';
      break;
    case 'Musique':
      require_once 'controleurs/controleurMusique.php';
      break;
    case 'Inventaire':
      require_once 'controleurs/controleurInventaire.php';
      break;
    case 'CreateInventaire':
      require_once 'controleurs/controleurCreateInventaire.php';
      break;
  }
}
?>
