<div class="well center-block text-center" id="inventaire">

  <p>Pseudo</p>
  <?php echo($Perso->getPseudo());?>

  <p>Puissance</p>
  <?php echo($Perso->getPuissance());?>/100
  <p>Finnesse</p>
  <?php  echo($Perso->getFinnesse());?>/100
  <p>Social</p>
  <?php  echo($Perso->getSocial());?>/100
  <p>Mental</p>
  <?php  echo($Perso->getMental());?>/100
  <p>Armure</p>
  <?php  echo($Inventaire->getArmureTotal());?>
  <p>Bouclier</p>
  <?php  echo($Inventaire->getBouclier());?>
</div>

<div class="well center-block text-center" id="inventaire">
  <h4>Inventaire :</h4>
<?php  echo($Inventaire->displayInventaire());?>
</div>

<div class="well center-block text-center" id="inventaire">
  <h4>Annuaire Sorts :</h4>
<?php  echo($Inventaire->displaySorts());?>
</div>

<div class="well center-block text-center" id="inventaire">

    <h4>Equiper un casque :</h4>
    <form class="form-inline" method="post" action="index.php">
      <?php
        $lesArmures->SELECT();
      ?>
      <input class="btn btn-primary btn-lg btn-block" type="submit" value="addCasque" name="addCasque"class="bouton" />
    </form>

    <h4>Equiper une armure :</h4>
    <form class="form-inline" method="post" action="index.php">
      <?php
        $lesArmures->SELECT();
      ?>
      <input class="btn btn-primary btn-lg btn-block" type="submit" value="addArmure" name="addArmure"class="bouton" />
    </form>

    <h4>Equiper une Bouclier :</h4>
    <form class="form-inline" method="post" action="index.php">
      <?php
        $lesArmures->SELECT();
      ?>
      <input class="btn btn-primary btn-lg btn-block" type="submit" value="addBouclier" name="addBouclier"class="bouton" />
    </form>

    <h4>Equiper une arme cac :</h4>
    <form class="form-inline" method="post" action="index.php">
      <?php
      	$lesArmes->SELECT();
      ?>
      <input class="btn btn-primary btn-lg btn-block" type="submit" value="addCac" name="addCac"class="bouton" />
    </form>

    <h4>Equiper une arme dist :</h4>
    <form class="form-inline" method="post" action="index.php">
      <?php
      	$lesArmes->SELECT();
      ?>
      <input class="btn btn-primary btn-lg btn-block" type="submit" value="addDist" name="addDist"class="bouton" />
    </form>

</div>

<div class="well center-block text-center" id="inventaire">


    <h4>Sort 1 :</h4>
    <form class="form-inline" method="post" action="index.php">
      <?php
      	$lesSorts->SELECT();
      ?>
      <input class="btn btn-primary btn-lg btn-block" type="submit" value="addSort1" name="addSort1"class="bouton" />
    </form>

    <h4>Sort 2 :</h4>
    <form class="form-inline" method="post" action="index.php">
      <?php
      	$lesSorts->SELECT();
      ?>
      <input class="btn btn-primary btn-lg btn-block" type="submit" value="addSort2" name="addSort2"class="bouton" />
    </form>


    <h4>Sort 3 :</h4>
    <form class="form-inline" method="post" action="index.php">
      <?php
      	$lesSorts->SELECT();
      ?>
      <input class="btn btn-primary btn-lg btn-block" type="submit" value="addSort3" name="addSort3"class="bouton" />
    </form>


    <h4>Sort 4 :</h4>
    <form class="form-inline" method="post" action="index.php">
      <?php
      	$lesSorts->SELECT();
      ?>
      <input class="btn btn-primary btn-lg btn-block" type="submit" value="addSort4" name="addSort4"class="bouton" />
    </form>



    <h4>Sort 5 :</h4>
    <form class="form-inline" method="post" action="index.php">
      <?php
      	$lesSorts->SELECT();
      ?>
      <input class="btn btn-primary btn-lg btn-block" type="submit" value="addSort5" name="addSort5"class="bouton" />
    </form>


</div>
