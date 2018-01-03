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

	//---------- constructeur : repose sur le constructeur parent
	protected function __construct($theLigne) {parent::__construct($theLigne);}

	//---------- renvoie la valeur du champ spécifié en patamètre
	public function getId(){
		return $this->getField('Id');
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


	/******************************
	IMSORTANT : 	toute classe dérivée non abstraite doit avoir le code pour

	******************************/
	public static function champID() {return 'Id';}
	public static function getSELECT() {return 'SELECT Id,Nom,Prenom,Pseudo,Race,Classe,Niveau,PV,PM,Puissance,Finnesse,Social,Argent,IdInventaire FROM personnage';  }

	public static function SQLInsert(array $valeurs){
		$req = 'INSERT INTO personnage (Nom,Prenom,Pseudo,Race,Classe,Niveau,PV,PM,Puissance,Finnesse,Social,Argent,IdInventaire) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)';
		return SI::getSI()->SGBDexecuteQuery($req,$valeurs);
	}
	public static function lastId(){
		$req = 'SELECT Id from personnage order by Id desc limit 1;';
		return SI::getSI()->SGBDgetuneLigne($req);
	}

	public static function SQLUpdate(array $valeurs){
		$req = 'UPDATE personnage SET Id=?,Nom=?,Prenom=?,Pseudo=?,Race=?,Classe=?,Niveau=?,PV=?,PM=?,Puissance=?,Finnesse=?,Social=?,Argent=?,IdInventaire=?,WHERE Id=?';
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

}
?>
