<div class="well center-block text-center" id="Partie" >
  <p>Gestion Perso</p>
  <?php
  if (isset($_SESSION['NbPersoAfficher'])) {
    foreach ($_SESSION['NbPersoAfficher'] as $key => $value) {

      echo '<iframe width="300" height="1540px" src="http://laurentlescene.com/UtilJDR?a=3"></iframe>';
      echo '<iframe width="300" height="1540px" src="http://laurentlescene.com/UtilJDR?a=3"></iframe>';
      echo '<iframe width="300" height="1540px" src="http://laurentlescene.com/UtilJDR?a=3"></iframe>';

    }
  }
  ?>
  <form method="post"><button  class="btn btn-success" name="AddPerso">Ajouter une ligne de personnage</button></form>
  <?php
  $tmp = $_SESSION['NbPersoAfficher'];
      if(!((count($tmp))==0)) {
        echo '<form method="post"><button  class="btn btn-danger" name="DelPerso">Supprimer une ligne de personnage</button></form>';
      }
   ?>



</div>


<div class="well center-block text-center" id="Partie" >
  <p>Gestion Mobs</p>
  <?php
  if (isset($_SESSION['NbMobAfficher'])) {
    foreach ($_SESSION['NbMobAfficher'] as $key => $value) {

      echo '<iframe width="300" height="680px" src="http://laurentlescene.com/UtilJDR?a=4"></iframe>';
      echo '<iframe width="300" height="680px" src="http://laurentlescene.com/UtilJDR?a=4"></iframe>';
      echo '<iframe width="300" height="680px" src="http://laurentlescene.com/UtilJDR?a=4"></iframe>';

    }
  }
  ?>
  <form method="post"><button  class="btn btn-success" name="AddMobs">Ajouter une ligne d'ennemie</button></form>
  <?php
    if (!(count($_SESSION['NbMobAfficher'])==0)) {
      echo '<form method="post"><button  class="btn btn-danger" name="DelMobs">Supprimer une ligne de ennemie</button></form>';
    }
  ?>

</div>

<div class="well center-block text-center" id="Partie" >
  <p>Gestion Partie</p>
  <iframe width="300" height="420px" src="http://localhost/laurentlescene.com/UtilJDR?a=1"></iframe>
  <iframe width="300" height="420px" src="http://laurentlescene.com/UtilJDR?a=2"></iframe>
</div>
