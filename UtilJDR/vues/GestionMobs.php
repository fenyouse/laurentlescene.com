

<?php



if (isset($_POST['idSelected'])||isset($_POST['Mob'])) {
  require_once 'vues/affichageMobs.php';
}else {
  require_once 'vues/choixMobs.php';
}

?>
