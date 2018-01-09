
<div class="well center-block text-center" id="inventaire">

  <p>Puissance</p>
  <?php echo($Mob->getPuissance());?>/100
  <p>Finnesse</p>
  <?php  echo($Mob->getFinnesse());?>/100
  <p>Social</p>
  <?php  echo($Mob->getSocial());?>/100
  <p>Mental</p>
  <?php  echo($Mob->getMental());?>/100
  <p>Armure</p>
  <p>Bouclier</p>
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
          //var_dump($Mob);
          echo( $Mob->getPV()-$Mob->getDegat());
    ?> </label>
    <input type="hidden" name="Mob" value="<?php echo ($Mob->getId())?>"></input>
    <input type="hidden" name="Degat" value="<?php echo ($Mob->getDegat())?>"></input>
    <button  class="btn btn-success" name="AddVie">+</button>
    <button  class="btn btn-danger" name="ConsommeVie">-</button>
  </form>
</div>
