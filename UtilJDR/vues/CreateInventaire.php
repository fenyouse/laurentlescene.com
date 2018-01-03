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
  <h4>Nouvelle arme :</h4>
    <form class="form-inline" method="post" action="index.php">

  	   <div class="form-group
        <?php if($erreurArme!=""){
         echo('has-error');
       }
       ?>">
          <label class="sr-only" >Nom</label>
          <input type="text" class="form-control" name="Nom" placeholder="Nom">
        </div>
        <div class="form-group
        <?php if($erreurArme!=""){
           echo('has-error');
         }
         ?>">
            <label  class="sr-only">Description</label>
            <input type="text" class="form-control" name="Description" placeholder="Description">
        </div>
        <div class="form-group
        <?php if($erreurArme!=""){
           echo('has-error');
         }
         ?>">
            <label  class="sr-only">Degat de dés</label>
            <input type="text" class="form-control" name="DegatDes" placeholder="Degat de dés">
        </div>
        <div class="form-group
        <?php if($erreurArme!=""){
           echo('has-error');
         }
         ?>">
            <label  class="sr-only">Degat primaire</label>
            <input type="text" class="form-control" name="DegatPrimaire" placeholder="Degat primaire">
        </div>
        </br></br>
        <input class="btn btn-primary btn-lg btn-block" type="submit" value="Valider" name="Valider"class="bouton" />
    </form>
</div>

<div class="well center-block" id="inventaire">
  <h4>Nouvelle armure :</h4>
    <form class="form-inline" method="post" action="index.php">

  	   <div class="form-group
        <?php if($erreurArmure!=""){
         echo('has-error');
       }
       ?>">
          <label class="sr-only" >Nom</label>
          <input type="text" class="form-control" name="Nom" placeholder="Nom">
        </div>
        <div class="form-group
        <?php if($erreurArmure!=""){
           echo('has-error');
         }
         ?>">
            <label  class="sr-only">Description</label>
            <input type="text" class="form-control" name="Description" placeholder="Description">
        </div>
        <div class="form-group
        <?php if($erreurArmure!=""){
           echo('has-error');
         }
         ?>">
            <label  class="sr-only">Bouclier</label>
            <input type="text" class="form-control" name="Bouclier" placeholder="Bouclier">
        </div>

        </br></br>
        <input class="btn btn-primary btn-lg btn-block" type="submit" value="Valider" name="Valider"class="bouton" />
    </form>
</div>
<div class="well center-block" id="inventaire">
  <h4>Nouveau sort :</h4>
    <form class="form-inline" method="post" action="index.php">

  	   <div class="form-group
        <?php if($erreurSort!=""){
         echo('has-error');
       }
       ?>">
          <label class="sr-only" >Nom</label>
          <input type="text" class="form-control" name="Nom" placeholder="Nom">
        </div>
        <div class="form-group
        <?php if($erreurSort!=""){
           echo('has-error');
         }
         ?>">
            <label  class="sr-only">Points de magie</label>
            <input type="text" class="form-control" name="PM" placeholder="PM">
        </div>
        <div class="form-group
        <?php if($erreurSort!=""){
           echo('has-error');
         }
         ?>">
            <label  class="sr-only">Dégats</label>
            <input type="text" class="form-control" name="Degat" placeholder="Degat">
        </div>

        </br></br>
        <input class="btn btn-primary btn-lg btn-block" type="submit" value="Valider" name="Valider"class="bouton" />
    </form>
</div>
