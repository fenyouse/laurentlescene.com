<center>
  <form method="post">
    <button  class="btn btn-primary" name="Musique">Musique Ambiance</button>
    <button  class="btn btn-primary" name="Dés">Dés</button>

<?php
if (isset($_SESSION['User'])) {
  echo '<button  class="btn btn-primary" name="CreatePerso">Création Personnage</button>
  <button  class="btn btn-primary" name="CreateMobs">Création Mobs</button>
  <button  class="btn btn-primary" name="CreateInventaire">Ajouter Item/Sort</button>
  <button  class="btn btn-primary" name="InventairePerso">Inventaire Personnage</button>
  <button  class="btn btn-primary" name="InventaireMobs">Inventaire Mobs</button>
  <button  class="btn btn-primary" name="Partie">Création Partie</button>
  <button  class="btn btn-primary" name="GestionCompte">Gestion Compte</button>
  <button  class="btn btn-primary" name="Deconnexion">Déconnexion</button>';
}else {
  echo '<button  class="btn btn-primary" name="Connexion">Connexion</button>
  <button  class="btn btn-primary" name="Inscription">Inscription</button>';
}

 ?>







   </form>
 </br>
 </center>
