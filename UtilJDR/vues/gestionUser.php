
<div class="well center-block text-center" id="LesPersonnages">
  <h4>Le compte de :
  <?php
    echo $user->getId().' '.$user->getPrenom().' '.$user->getNom().' '.$user->getemail();
  ?>
  </h4>
</div>
<div class="well center-block text-center" id="LesPersonnages">
  <h4>Les personnages :</h4>
<?php
			$lesPerso->displayTable();
?>
</div>

<div class="well center-block text-center" id="LesPersonnages">
  <h4>Les Armures :</h4>
<?php

			$lesArmures->displayTable();
?>
</div>

<div class="well center-block text-center" id="LesPersonnages">
  <h4>Les Armes :</h4>
<?php
			$lesArmes->displayTable();
?>
</div>

<div class="well center-block text-center" id="LesPersonnages">
  <h4>Les sorts :</h4>
<?php
			$lesSorts->displayTable();
?>
</div>
