<?php
//---------- Classe Suffrage

class personnage extends Element{

	//Singleton de mémorisation des instances
	private static $o_INSTANCES;
	public static function ajouterObjet($ligne){
		//créer (instancier) la liste si nécessaire
		if (static::$o_INSTANCES ==null){static::$o_INSTANCES = new personnages();}
		//voir si l'objet existe avec la clef
		$tmp = static::$o_INSTANCES->getObject($ligne[static::champID()]);
		if($tmp!=null){return $tmp;}
		//n'existe pas : donc INSTANCIER Suffrage et mémoriser
		$tmp = new personnage($ligne);
		static::$o_INSTANCES->doAddObject($tmp);
		return $tmp;
	}

	//publication liste instances
	public static function getInstances(){
		if (static::$o_INSTANCES ==null){static::$o_INSTANCES = new personnages();}
		return static::$o_INSTANCES;
	}

	// doit impérativement trouver la Suffrage ayant pour id le patamètre
	public static function mustFind($id){
		if (static::$o_INSTANCES == null){static::$o_INSTANCES = new personnages();}
		// regarder si instance existe
		$tmp = static::$o_INSTANCES->getObject($id);
		if($tmp!=null) {return $tmp;}
		//sinon pas trouver; chercher dans la BDD
		$req = static::getSELECT().' where 	Id =?';
		//&echo "<br/>recherche $id";
		$ligne = SI::getSI()->SGBDgetLigne($req, $id);
		return static::ajouterObjet($ligne);
	}

	private $Degat;

	public function getDegat() {
		if ($this->Degat ===null) {
			$this->Degat = 0;
		}
		return $this->Degat;
	}
	public function setDegat($mob) {
			$this->Degat = $mob;

		return $this->Degat;
	}

	public function addDegat() {
		//var_dump($this->Degat);
		$this->Degat = $this->Degat + 1;

		//var_dump($this->Degat);
		return $this->Degat;
	}

	public function removeDegat() {
		//var_dump($this->Degat);
		$this->Degat = $this->Degat - 1;
		//var_dump($this->Degat);
		return $this->Degat;
	}

	private $DegatMagie;

	public function getDegatMagie() {
		if ($this->DegatMagie ===null) {
			$this->DegatMagie = 0;
		}
		return $this->DegatMagie;
	}
	public function setDegatMagie($perso) {
			$this->DegatMagie = $perso;
		return $this->DegatMagie;
	}

	public function addDegatMagie() {
		$this->DegatMagie = $this->DegatMagie + 1;
		return $this->DegatMagie;
	}

	public function removeDegatMagie() {
		$this->DegatMagie = $this->DegatMagie - 1;
		return $this->DegatMagie;
	}




	//---------- constructeur : repose sur le constructeur parent
	protected function __construct($theLigne) {parent::__construct($theLigne);$this->Degat = 0;$this->DegatMagie = 0;}

	//---------- renvoie la valeur du champ spécifié en patamètre
	public function getId(){
		return $this->getField('Id');
	}

	public function getIdUser(){
		return $this->getField('IdUser');
	}

	public function getNom(){
		return $this->getField('Nom');
	}

	public function getPrenom(){
		return $this->getField('Prenom');
	}
  public function getPseudo(){
		return $this->getField('Pseudo');
	}
  public function getRace(){
		return $this->getField('Race');
	}
  public function getClasse(){
		return $this->getField('Classe');
	}
  public function getNiveau(){
		return $this->getField('Niveau');
	}
  public function getPV(){
		return $this->getField('PV');
	}
  public function getPM(){
		return $this->getField('PM');
	}
  public function getPuissance(){
		return $this->getField('Puissance');
	}
  public function getFinnesse(){
		return $this->getField('Finnesse');
	}
	public function getSocial(){
		return $this->getField('Social');
	}
	public function getMental(){
		return $this->getField('Mental');
	}
	public function getArgent(){
		return $this->getField('Argent');
	}
	public function getExperience(){
		return $this->getField('Experience');
	}

	public function getIdInventaire(){
		return $this->getField('IdInventaire');
	}

	public function getInventaire(){
		$inventaire = inventaire::mustFind($this->getField('IdInventaire'));
		return $inventaire;
	}



	public function displayRow(){
		echo '<tr>';
		echo '<td>'.$this->getNom().'</td>';
		echo '<td>'.$this->getPrenom().'</td>';
		echo '<td>'.$this->getPseudo().'</td>';
		echo '<td>'.$this->getRace().'</td>';
		echo '<td>'.$this->getClasse().'</td>';
		echo '<td>'.$this->getNiveau().'</td>';
		echo '<td>'.$this->getExperience().'</td>';
		echo '<td>'.$this->getPV().'</td>';
		echo '<td>'.$this->getPM().'</td>';
		echo '<td>'.$this->getPuissance().'</td>';
		echo '<td>'.$this->getFinnesse().'</td>';
		echo '<td>'.$this->getSocial().'</td>';
		echo '<td>'.$this->getMental().'</td>';
		echo '<td>'.$this->getArgent().'</td>';
		echo '</tr>';

	}
	public function option(){
		$tmp = $this->getId();
		echo '<option value ="'.$tmp.'">';
		echo $this->getPseudo();
		echo '</option>';

	}

	/******************************
	IMSORTANT : 	toute classe dérivée non abstraite doit avoir le code pour

	******************************/
	public static function champID() {return 'Id';}
	public static function getSELECT() {return 'SELECT Id,IdUser,Nom,Prenom,Pseudo,Race,Classe,Niveau,Experience,PV,PM,Puissance,Finnesse,Social,Mental,Argent,IdInventaire FROM personnage';  }

	public static function SQLInsert(array $valeurs){
		$req = 'INSERT INTO personnage (Nom,Prenom,Pseudo,Race,Classe,Niveau,PV,PM,Puissance,Finnesse,Social,Mental,Argent,IdInventaire,IdUser) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
		var_dump($req);
		return SI::getSI()->SGBDexecuteQuery($req,$valeurs);
	}

	public static function SQLUpdate(array $valeurs){
		$req = 'UPDATE personnage SET Id=?,Nom=?,Prenom=?,Pseudo=?,Race=?,Classe=?,Niveau=?,Experience=?,PV=?,PM=?,Puissance=?,Finnesse=?,Social=?,Argent=?,IdInventaire=?,WHERE Id=?';
		return SI::getSI()->SGBDexecuteQuery($req,$valeurs);
	}


	public static function lastId(){
		$req = 'SELECT Id from personnage order by Id desc limit 1;';
		return SI::getSI()->SGBDgetuneLigne($req);
	}
	public static function AddOr(array $valeurs){
		$req = 'UPDATE personnage SET Argent=? WHERE Id=?';
		return SI::getSI()->SGBDexecuteQuery($req,$valeurs);
	}
	public static function AddExperience(array $valeurs){
		$req = 'UPDATE personnage SET Experience=? WHERE Id=?';
		return SI::getSI()->SGBDexecuteQuery($req,$valeurs);
	}

}

class personnages extends Pluriel{

	//constructeur
	public function __construct(){
		parent::__construct();
	}

	public function remplir($condition=null, $ordre=null) {
		$req = personnage::getSELECT();
		//ajouter condition si besoin est
		if ($condition != null) {
			$req.= " WHERE $condition"; // remplace $condition car guillemet et pas simple quote
		}
		if ($ordre != null){
			$req.=" ORDER BY $ordre";
		}


		//remplir à partir de la requete
		$curseur = SI::getSI()->SGBDgetPrepareExecute($req);
		//var_dumS($curseur);
		foreach ($curseur as $uneLigne){
			$this->doAddObject(personnage::ajouterObjet($uneLigne));
		}
	}


	public function displayTable(){
		echo'<center>';
		echo'<table class="table table-condensed">';
		echo'<tr>';
		echo'<td>Nom</td>';
		echo'<td>Prenom</td>';
		echo'<td>Pseudo</td>';
		echo'<td>Race</td>';
		echo'<td>Classe</td>';
		echo'<td>Niveau</td>';
		echo'<td>Experience</td>';
		echo'<td>PV</td>';
		echo'<td>PM</td>';
		echo'<td>Puissance</td>';
		echo'<td>Finnesse</td>';
		echo'<td>Social</td>';
		echo'<td>Mental</td>';
		echo'<td>Argent</td>';
		echo'</tr>';
		foreach ($this->getArray() as $unPerso) {
			$unPerso->displayRow();
		}
		echo '</table>';
		echo'</center>';
	}

	public function SELECT(){
		echo'<select name="idSelected">';
		foreach ($this->getArray() as $unPerso) {
			$unPerso->option();
		}
		echo '</select>';
	}













}
?>
