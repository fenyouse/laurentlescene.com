

<?php



if (isset($_POST['idSelected'])||isset($_POST['Perso'])) {
  require_once 'vues/affichagePerso.php';
}else {
  require_once 'vues/choixPerso.php';
}

?>
