<?php

if(isset($_POST["CV"])) {
  require_once 'vues/CV.php';
}
if(isset($_POST["CVphotoshop"])) {
  require_once 'vues/CVpsd.php';
}
if(isset($_POST["Real"])) {
  require_once 'vues/realisation.php';
}
if(isset($_POST["Contact"])) {
  require_once 'controleurs/controleurContact.php';
}

?>
