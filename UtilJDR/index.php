<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>UtilJDR</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="css/MyCSS.css" rel="stylesheet">
  </head>
  <body>

<?php

session_start();
//référencer les classes utiles
require_once 'modeles/si.php';
//recupération du SI, le seul le singleton
$MonSI = SI::getSI();
//var_dump($MonSI);//montrer l'id de l'objet
//var_dump($_SESSION);
//var_dump($_POST);

  if (isset($_GET['a'])) {
    switch ($_GET['a']) {
      case 1:
        require_once 'controleurs/controleurDes.php';
        break;
      case 2:
        require_once 'controleurs/controleurMusique.php';
        break;
      case 3:
        require_once 'controleurs/controleurVie.php';
        break;
      case 4:
        require_once 'controleurs/controleurGestionMob.php';
        break;
    }


  }else {
    require_once 'vues/header.php';
    require_once 'modeles/Mobile_Detect.php';


    require_once 'controleurs/controleurPrincipal.php';
    $detect = new Mobile_Detect;
    if (!$detect->isMobile()) {
      require_once 'vues/footer.php';
    }
  }

















?>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
