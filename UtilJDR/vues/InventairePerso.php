<?php


if (isset($_POST['idSelected'])||isset($_POST['Perso'])) {
  require_once 'vues/choixInventairePerso.php';
  require_once 'vues/affichageInventairePerso.php';
}else {
  require_once 'vues/choixInventairePerso.php';
}

?>
