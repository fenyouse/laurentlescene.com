<?php

  session_start();
  require_once 'vues/header.php';
  require_once 'modeles/Mobile_Detect.php';

	//référencer les classes utiles
	require_once 'modeles/si.php';
	//recupération du SI, le seul le singleton
	$MonSI = SI::getSI();
	//var_dump($MonSI);//montrer l'id de l'objet

  require_once 'controleurs/controleurPrincipal.php';
  $detect = new Mobile_Detect;
  if (!$detect->isMobile()) {
  require_once 'vues/footer.php';
  }
?>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
