<div class="well center-block text-center" id="inventaire" >


    <h4>Choisir un ennemie :</h4>
    <form id="carform" class="form-inline" method="post" action="http://localhost/laurentlescene.com/UtilJDR/index.php?a=4">
      <?php
      			$lesMobs = new Mobs();
      			$lesMobs->remplir(null,null);
            //var_dump($lesMobs);
      			Mob::getInstances()->SELECT();
      ?>
      <input class="btn btn-primary btn-lg btn-block" type="submit" value="Valider" name="Valider"class="bouton" />
    </form>


</div>
<div class="well center-block text-center" id="inventaire">

  <p>Puissance</p>
  <?php echo($Mob->getPuissance());?>/100
  <p>Finnesse</p>
  <?php  echo($Mob->getFinnesse());?>/100
  <p>Social</p>
  <?php  echo($Mob->getSocial());?>/100
  <p>Mental</p>
  <?php  echo($Mob->getMental());?>/100

</div>
<div class="well center-block text-center" id="inventaire">
  <form method="post">
    <label>Vie max :
    <?php
          echo( $Mob->getPV());
    ?> </label>
    </br>
    <label>Vie actuel :
    <?php
          echo( $Mob->getPV()-$_SESSION['Degat']);
    ?> </label>
    <button  class="btn btn-success" name="AddVie">+</button>
    <button  class="btn btn-danger" name="ConsommeVie">-</button>
  </form>
</div>
