<?php
class User extends Element{

	//Singleton de mémorisation des instances
	private static $o_INSTANCES;
	public static function ajouterObjet($ligne){
		//créer (instancier) la liste si nécessaire
		if (static::$o_INSTANCES ==null){static::$o_INSTANCES = new Users();}

		//voir si l'objet existe avec la clef
		$tmp = static::$o_INSTANCES->getObject($ligne[static::champID()]);
		if($tmp!=null){return $tmp;}
		//n'existe pas : donc INSTANCIER electeur et mémoriser
		$tmp = new User($ligne);
		static::$o_INSTANCES->doAddObject($tmp);
		return $tmp;
	}

  //publication liste instances
	public static function getInstances(){
		if (static::$o_INSTANCES ==null){static::$o_INSTANCES = new Users();}
		return static::$o_INSTANCES;
	}

	// doit impérativement trouver l' electeur ayant pour id le paramètre
	public static function mustFind($id){
		if (static::$o_INSTANCES == null){static::$o_INSTANCES = new Users();}
		// regarder si instance existe
		$tmp = static::$o_INSTANCES->getObject($id);
		if($tmp!=null) {return $tmp;}
		//sinon pas trouver; chercher dans la BDD
		$req = static::getSELECT().' where Id = ?';
		//echo "<br/>recherche $id";
		$ligne = SI::getSI()->SGBDgetLigne($req, $id);
		return static::ajouterObjet($ligne);
	}


	//---------- constructeur : repose sur le constructeur parent
	protected function __construct($theLigne) {parent::__construct($theLigne);}

	//---------- renvoie la valeur du champ spécifié en paramètre
	public function getId(){
		return $this->getField('Id');
	}

	public function getNom(){
		return $this->getField('Nom');
	}

	public function getPrenom(){
		return $this->getField('Prenom');
	}

	public function getMdp(){
		return $this->getField('Mdp');
	}

	public function getemail(){
		return $this->getField('Email');
	}



	public static function Authentification($login,$mdp){

		$valeurs = array($login,md5($mdp));
		$requete =static::getSELECT()." where Email = ? and Mdp = ? ";
		$ligne = SI::getSI()->SGBDgetuneLigneValeur($requete,$valeurs);
		if($ligne == null){return null;}

		return $ligne['Id'];

	}


	public static function UpdatePassword($login,$oldMdp,$newMdp){
		$valeurs = array(md5($newMdp),$login,md5($oldMdp));
		$requete = "UPDATE user SET Mdp= ? WHERE Email =? AND Mdp=?";
		$result = SI::getSI()->SGBDexecuteQuery($requete,$valeurs);
		return $result;
	}

  public static function Inscription($login,$mdp,$nom,$prenom){

  	$valeurs = array($nom,$prenom,md5($mdp),$login);
    $req = 'INSERT INTO user (Nom, Prenom, Mdp, Email) VALUES(?,?,?,?)';
		return SI::getSI()->SGBDexecuteQuery($req,$valeurs);

	}
  public static function TestLogin($login){
    $requete =static::getSELECT()." where Email ='".$login."'";
		$ligne = SI::getSI()->SGBDgetuneLigne($requete);
		if($ligne == null){return null;}

		return $ligne;
  }


	/******************************
	IMPORTANT : 	toute classe dérivée non abstraite doit avoir le code pour

	******************************/
	public static function champID() {return 'Id';}
	public static function getSELECT() {return 'SELECT Id, Nom, Prenom,Mdp, Email FROM user';  }


	public static function SQLInsert(array $valeurs){
		$req = 'INSERT INTO user (Id,Nom, Prenom, Mdp, Email) VALUES(?,?,?,?,?)';
		return SI::getSI()->SGBDexecuteQuery($req,$valeurs);
	}

}

class Users extends Pluriel{

	//constructeur
	public function __construct(){
		parent::__construct();
	}

	public function remplir($condition=null, $ordre=null) {
		$req = Electeur::getSELECT();
		//ajouter condition si besoin est
		if ($condition != null) {
			$req.= " WHERE $condition"; // remplace $condition car guillemet et pas simple quote
		}
		if ($ordre != null){
			$req.=" ORDER BY $ordre";
		}

		//echo $req;

		//remplir à partir de la requete
		$curseur = SI::getSI()->SGBDgetPrepareExecute($req);
		//var_dump($curseur);
		foreach ($curseur as $uneLigne){
			$this->doAddObject(Electeur::ajouterObjet($uneLigne));
		}
	}

	//permet de remplir suivant la requête
	public function remplirAVECRequete($req,$condition=null, $ordre=null) {
		//ajouter condition si besoin est
		if ($condition != null) {
			$req.= " WHERE $condition"; // remplace $condition car guillemet et pas simple quote
		}
		if ($ordre != null){
			$req.=" ORDER BY $ordre";
		}
		//echo $req;

		//remplir à partir de la requete
		$curseur = SI::getSI()->SGBDgetPrepareExecute($req);
		//var_dump($curseur);
		foreach ($curseur as $uneLigne){
			$this->doAddObject(Electeur::ajouterObjet($uneLigne));
		}
	}



}
?>
