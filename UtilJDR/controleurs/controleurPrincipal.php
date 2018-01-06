<?php
require_once 'modeles/element.php';
require_once 'modeles/pluriel.php';

if(isset($_POST["Dés"])) {
  $_SESSION['Page']='Dés';
  require_once 'controleurs/controleurDes.php';
}
if(isset($_POST["CreatePerso"])) {
  $_SESSION['Page']='CreatePerso';
  require_once 'controleurs/controleurCreatePerso.php';
}
if(isset($_POST["CreateMobs"])) {
  $_SESSION['Page']='CreateMobs';
  require_once 'controleurs/controleurCreateMobs.php';
}
if(isset($_POST["InventaireMobs"])) {
  $_SESSION['Page']='InventaireMobs';
  require_once 'controleurs/controleurInventaireMobs.php';
}
if(isset($_POST["Musique"])) {
  $_SESSION['Page']='Musique';
  require_once 'controleurs/controleurMusique.php';
}
if(isset($_POST["InventairePerso"])) {
  $_SESSION['Page']='InventairePerso';
  require_once 'controleurs/controleurInventairePerso.php';
}

if(isset($_POST["CreateInventaire"])) {
  $_SESSION['Page']='CreateInventaire';
  require_once 'controleurs/controleurCreateInventaire.php';
}
if(isset($_POST["Partie"])) {
  $_SESSION['Page']='Partie';
  require_once 'controleurs/controleurPartie.php';
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
    case 'InventaireMobs':
      require_once 'controleurs/controleurInventaireMobs.php';
      break;
    case 'InventairePerso':
      require_once 'controleurs/controleurInventairePerso.php';
      break;
    case 'CreateInventaire':
      require_once 'controleurs/controleurCreateInventaire.php';
      break;
    case 'Partie':
      require_once 'controleurs/controleurPartie.php';
      break;
  }
}else {
  $_SESSION['Page']='Dés';
  require_once 'controleurs/controleurDes.php';
}
?>
