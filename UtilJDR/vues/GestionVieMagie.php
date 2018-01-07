<div class="well center-block text-center" id="inventaire" >


    <h4>Choisir un personnage :</h4>
    <form class="form-inline" method="post" action="http://laurentlescene.com/UtilJDR/index.php?a=3">
      <?php
      			$lesPerso = new Personnages();
      			$lesPerso->remplir(null,null);
      			Personnage::getInstances()->SELECT();
      ?>
      <input class="btn btn-primary btn-lg btn-block" type="submit" value="Valider" name="Valider"class="bouton" />
    </form>


</div>
<div class="well center-block text-center" id="inventaire">

  <p>Puissance</p>
  <?php echo($Perso->getPuissance());?>/100
  <p>Finnesse</p>
  <?php  echo($Perso->getFinnesse());?>/100
  <p>Social</p>
  <?php  echo($Perso->getSocial());?>/100
  <p>Mental</p>
  <?php  echo($Perso->getMental());?>/100
  <p>Armure</p>
  <p>Bouclier</p>
</div>
<div class="well center-block text-center" id="inventaire">
  <form method="post">
    <label>Vie max :
    <?php
          echo( $Perso->getPV());
    ?> </label>
    </br>
    <label>Vie actuel :
    <?php
          echo( $Perso->getPV()-$_SESSION['Degat']);
    ?> </label>
    <button  class="btn btn-success" name="AddVie">+</button>
    <button  class="btn btn-danger" name="ConsommeVie">-</button>
  </form>
</div>
<div class="well center-block text-center" id="inventaire">
  <form method="post">
    <label>Magie max :
    <?php
          echo( $Perso->getPM());
    ?> </label>
    </br>
    <label>Magie actuel :
    <?php
          echo( $Perso->getPM()-$_SESSION['MagieUtilise']);
    ?> </label>
    <button  class="btn btn-success" name="AddMagie">+</button>
    <button  class="btn btn-danger" name="ConsommeMagie">-</button>
  </form>
</div>
<div class="well center-block text-center" id="inventaire">
  <form method="post">
    <label>Or  :
    <?php
          echo( $Perso->getArgent());
    ?> </label>

    <input type="text" class="form-control" name="Or" placeholder="Or">
    <button  class="btn btn-success" name="AddOr">+</button>
  </form>
</div>
<div class="well center-block text-center" id="inventaire">
  <form method="post">
    <label>Experience :  </label>
        <input type="text" class="form-control" name="xp" placeholder="xp">
    <button  class="btn btn-success" name="AddXp">+</button>
  </form>
</div>
<div class="well center-block" id="inventaire">
  <h4>Nouvelle item :</h4>
    <form class="form-inline" method="post" action="index.php">

  	<div class="form-group
      <?php if($erreurItem!=""){
         echo('has-error');
       }
       ?>">
        <label class="sr-only" >Nom</label>
        <input type="text" class="form-control" name="Nom" placeholder="Nom">
      </div>
    	<div class="form-group
        <?php if($erreurItem!=""){
           echo('has-error');
         }
         ?>">
          <label  class="sr-only">Quantité</label>
          <input type="text" class="form-control" name="Quantité" placeholder="Quantité">
        </div>
      </br></br>
      <input class="btn btn-primary btn-lg btn-block" type="submit" value="Valider" name="Valider"class="bouton" />
    </form>
</div>
<div class="well center-block" id="inventaire">
  <h4>Supprimer item :</h4>
      //select item
      <button  class="btn btn-danger" name="DeleteItem">-</button>
    </form>
</div>
