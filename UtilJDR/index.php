<?php

  session_start();
  require_once 'vues/header.php';

	//référencer les classes utiles
	require_once 'modeles/si.php';
	//recupération du SI, le seul le singleton
	$MonSI = SI::getSI();
	//var_dump($MonSI);//montrer l'id de l'objet

  require_once 'controleurs/controleurPrincipal.php';

  require_once 'vues/footer.php';
?>
