<div class="well center-block text-center" id="Partie" >
  <p>Gestion Perso</p>
  <?php
  if (isset($GestPerso)) {
    foreach ($GestPerso as $key => $value) {

      echo '<iframe width="300" height="1050px" src="http://laurentlescene.com/UtilJDR?a=3"></iframe>';
      echo '<iframe width="300" height="1050px" src="http://laurentlescene.com/UtilJDR?a=3"></iframe>';
      echo '<iframe width="300" height="1050px" src="http://laurentlescene.com/UtilJDR?a=3"></iframe>';

    }
  }
  ?>
  <form method="post"><button  class="btn btn-success" name="AddPerso">Ajouter une ligne de personnage</button></form>

</div>


<div class="well center-block text-center" id="Partie" >
  <p>Gestion Mobs</p>
  <?php
  if (isset($GestMob)) {
    foreach ($GestMob as $key => $value) {

      echo '<iframe width="300" height="610px" src="http://localhost/laurentlescene.com/UtilJDR?a=4"></iframe>';
      echo '<iframe width="300" height="610px" src="http://localhost/laurentlescene.com/UtilJDR?a=4"></iframe>';
      echo '<iframe width="300" height="610px" src="http://localhost/laurentlescene.com/UtilJDR?a=4"></iframe>';

    }
  }
  ?>
  <form method="post"><button  class="btn btn-success" name="AddMobs">Ajouter une ligne d'ennemie</button></form>
</div>

<div class="well center-block text-center" id="Partie" >
  <p>Gestion Partie</p>
  <iframe width="300" height="420px" src="http://laurentlescene.com/UtilJDR?a=1"></iframe>
  <iframe width="300" height="420px" src="http://laurentlescene.com/UtilJDR?a=2"></iframe>
</div>
