

<div class="well center-block text-center" id="inventaire" >


    <h4>Choisir un mob :</h4>
    <form class="form-inline" method="post" action="index.php">
      <?php
      		$lesMobs->SELECT();
      ?>
      <input class="btn btn-primary btn-lg btn-block" type="submit" value="Valider" name="Valider"class="bouton" />
    </form>


</div>
<div class="well center-block text-center" id="inventaire">


    <h4>Equiper un casque :</h4>
    <form class="form-inline" method="post" action="index.php">
      <?php
        $lesArmures->SELECT();
      ?>
      <input class="btn btn-primary btn-lg btn-block" type="submit" value="Valider" name="Valider"class="bouton" />
    </form>

    <h4>Equiper une armure :</h4>
    <form class="form-inline" method="post" action="index.php">
      <?php
      	$lesArmures->SELECT();
      ?>
      <input class="btn btn-primary btn-lg btn-block" type="submit" value="Valider" name="Valider"class="bouton" />
    </form>

    <h4>Equiper une Bouclier :</h4>
    <form class="form-inline" method="post" action="index.php">
      <?php
      	$lesArmures->SELECT();
      ?>
      <input class="btn btn-primary btn-lg btn-block" type="submit" value="Valider" name="Valider"class="bouton" />
    </form>

    <h4>Equiper une arme cac :</h4>
    <form class="form-inline" method="post" action="index.php">
      <?php
      	$lesArmes->SELECT();
      ?>
      <input class="btn btn-primary btn-lg btn-block" type="submit" value="Valider" name="Valider"class="bouton" />
    </form>

    <h4>Equiper une arme dist :</h4>
    <form class="form-inline" method="post" action="index.php">
      <?php
      	$lesArmes->SELECT();
      ?>
      <input class="btn btn-primary btn-lg btn-block" type="submit" value="Valider" name="Valider"class="bouton" />
    </form>

</div>

<div class="well center-block text-center" id="inventaire">


    <h4>Sort 1 :</h4>
    <form class="form-inline" method="post" action="index.php">
      <?php
      	$lesSorts->SELECT();
      ?>
      <input class="btn btn-primary btn-lg btn-block" type="submit" value="Valider" name="Valider"class="bouton" />
    </form>

    <h4>Sort 2 :</h4>
    <form class="form-inline" method="post" action="index.php">
      <?php
      	$lesSorts->SELECT();
      ?>
      <input class="btn btn-primary btn-lg btn-block" type="submit" value="Valider" name="Valider"class="bouton" />
    </form>


    <h4>Sort 3 :</h4>
    <form class="form-inline" method="post" action="index.php">
      <?php
      	$lesSorts->SELECT();
      ?>
      <input class="btn btn-primary btn-lg btn-block" type="submit" value="Valider" name="Valider"class="bouton" />
    </form>


    <h4>Sort 4 :</h4>
    <form class="form-inline" method="post" action="index.php">
      <?php
      			Sort::getInstances()->SELECT();
      ?>
      <input class="btn btn-primary btn-lg btn-block" type="submit" value="Valider" name="Valider"class="bouton" />
    </form>



    <h4>Sort 5 :</h4>
    <form class="form-inline" method="post" action="index.php">
      <?php
            Sort::getInstances()->SELECT();
      ?>
      <input class="btn btn-primary btn-lg btn-block" type="submit" value="Valider" name="Valider"class="bouton" />
    </form>


</div>


<div class="well center-block" id="inventaire">
  <h4>Nouvelle item :</h4>
    <form class="form-inline" method="post" action="index.php">
        //select item
      <input class="btn btn-primary btn-lg btn-block" type="submit" value="Valider" name="Valider"class="bouton" />
    </form>
</div>
