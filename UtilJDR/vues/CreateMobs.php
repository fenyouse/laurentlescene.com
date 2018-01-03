<div class="well center-block" id="FichePerso">
  <h4>Nouveau mob :</h4>
    <form class="form-inline" method="post" action="index.php">

  	<div class="form-group
      <?php if($erreur!=""){
         echo('has-error');
       }
       ?>">
        <label class="sr-only" >Nom</label>
        <input type="text" class="form-control" name="Nom" placeholder="Nom">
      </div>
    	<div class="form-group
        <?php if($erreur!=""){
           echo('has-error');
         }
         ?>">
          <label  class="sr-only">Prenom</label>
          <input type="text" class="form-control" name="Prenom" placeholder="Prenom">
        </div>
    	<div class="form-group
        <?php if($erreur!=""){
           echo('has-error');
         }
         ?>">
          <label class="sr-only">Pseudo</label>
          <input type="text" class="form-control" name="Pseudo" placeholder="Pseudo">
      </div>
      <div class="form-group
        <?php if($erreur!=""){
           echo('has-error');
         }
         ?>">
        <label class="sr-only">Race</label>
        <input name="Race" type="text" class="form-control" placeholder="Race">
      </div>
      <div class="form-group
        <?php if($erreur!=""){
           echo('has-error');
         }
         ?>">
        <label class="sr-only">Classe</label>
        <input name="Classe" type="text" class="form-control" placeholder="Classe">
      </div>
      <div class="form-group
        <?php if($erreur!=""){
           echo('has-error');
         }
         ?>">
        <label class="sr-only">Niveau</label>
        <input name="Niveau" type="text" class="form-control" placeholder="Niveau">
      </div>
      <div class="form-group
        <?php if($erreur!=""){
           echo('has-error');
         }
         ?>">
        <label class="sr-only">PV</label>
        <input name="PV" type="text" class="form-control" placeholder="PV">
      </div>
      <div class="form-group
        <?php if($erreur!=""){
           echo('has-error');
         }
         ?>">
        <label class="sr-only">PM</label>
        <input name="PM" type="text" class="form-control" placeholder="PM">
      </div>
      <div class="form-group
        <?php if($erreur!=""){
           echo('has-error');
         }
         ?>">
        <label class="sr-only">Puissance</label>
        <input name="Puissance" type="text" class="form-control" placeholder="Puissance">
      </div>
      <div class="form-group
        <?php if($erreur!=""){
           echo('has-error');
         }
         ?>">
        <label class="sr-only">Finnesse</label>
        <input name="Finnesse" type="text" class="form-control" placeholder="Finnesse">
      </div>
      <div class="form-group
        <?php if($erreur!=""){
           echo('has-error');
         }
         ?>">
        <label class="sr-only">Social</label>
        <input name="Social" type="text" class="form-control" placeholder="Social">
      </div>
      <div class="form-group
        <?php if($erreur!=""){
           echo('has-error');
         }
         ?>">
        <label class="sr-only">Mental</label>
        <input name="Mental" type="text" class="form-control" placeholder="Mental">
      </div>
      </br></br>
      <input class="btn btn-primary btn-lg btn-block" type="submit" value="Valider" name="Valider"class="bouton" />
    </form>
</div>
