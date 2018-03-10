<?php
require_once 'modeles/arme.php';
require_once 'modeles/armure.php';
require_once 'modeles/sort.php';

class Inventaire extends Element{

	//Singleton de mémorisation des instances
	private static $o_INSTANCES;
	public static function ajouterObjet($ligne){
		//créer (instancier) la liste si nécessaire
		if (static::$o_INSTANCES ==null){static::$o_INSTANCES = new Inventaires();}
		//voir si l'objet existe avec la clef
		$tmp = static::$o_INSTANCES->getObject($ligne[static::champID()]);
		if($tmp!=null){return $tmp;}
		//n'existe pas : donc INSTANCIER Suffrage et mémoriser
		$tmp = new Inventaire($ligne);
		static::$o_INSTANCES->doAddObject($tmp);
		return $tmp;
	}

	//publication liste instances
	public static function getInstances(){
		if (static::$o_INSTANCES ==null){static::$o_INSTANCES = new Inventaires();}
		return static::$o_INSTANCES;
	}

	// doit impérativement trouver la Suffrage ayant pour id le patamètre
	public static function mustFind($id){
		if (static::$o_INSTANCES == null){static::$o_INSTANCES = new Inventaires();}
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
	public function getIdArmeCac(){
		return $this->getField('IdArmeCac');
	}
	public function getIdArmeDist(){
		return $this->getField('IdArmeDist');
	}
	public function getIdCasque(){
		return $this->getField('IdCasque');
	}
	public function getIdArmure(){
		return $this->getField('IdArmure');
	}
	public function getIdBouclier(){
		return $this->getField('IdBouclier');
	}
	public function getIdSort1(){
		return $this->getField('IdSort1');
	}
	public function getIdSort2(){
		return $this->getField('IdSort2');
	}
	public function getIdSort3(){
		return $this->getField('IdSort3');
	}
	public function getIdSort4(){
		return $this->getField('IdSort4');
	}
	public function getIdSort5(){
		return $this->getField('IdSort5');
	}

	public function getArmureTotal(){
		$result = 0;
		$tmp = armure::mustFind($this->getIdArmure());
		$armure = $tmp->getBouclier();
		$casque = armure::mustFind($this->getIdCasque())->getBouclier();
		$result = $result +$armure+$casque;
		return $result;
	}

	public function getBouclier(){
		$result = 0;
		$bouclier = armure::mustFind($this->getIdBouclier())->getBouclier();
		$result = $result + $bouclier;
		return $result;
	}

	public function displayInventaire(){
		echo'<center>';
		echo'<table class="table table-condensed">';
		echo'<tr>';

		echo'<td>Armure</td>';
		echo'<td>Nom</td>';
		echo'<td>Description</td>';
		echo'<td>Bouclier</td>';
		echo'<td>Effet</td>';

		echo'</tr>';
		$casque = armure::mustFind($this->getIdCasque());
		$casque->displayRow();

		$armure = armure::mustFind($this->getIdArmure());
		$armure->displayRow();

		$bouclier = armure::mustFind($this->getIdBouclier());
		$bouclier->displayRow();

		echo '</table>';

		echo'<table class="table table-condensed">';
		echo'<tr>';
		echo'<td>Arme cac</td>';
		echo'<td>Nom</td>';
		echo'<td>Description</td>';
		echo'<td>DegatDes</td>';
		echo'<td>DegatPrimaire</td>';
		echo'</tr>';

		$armecac = arme::mustFind($this->getIdArmeCac());
		$armecac->displayRow();
		echo '</table>';

		echo'<table class="table table-condensed">';
		echo'<tr>';
		echo'<td>Arme distance</td>';
		echo'<td>Nom</td>';
		echo'<td>Description</td>';
		echo'<td>Effet</td>';
		echo'<td>DegatDes</td>';
		echo'<td>DegatPrimaire</td>';
		echo'</tr>';

		$armedist = arme::mustFind($this->getIdArmeDist());
		$armedist->displayRow();


		echo '</table>';
		echo'</center>';
	}


	public function displaySorts(){
		echo'<center>';
		echo'<table class="table table-condensed">';
		echo'<tr>';
		echo'<td>Nom</td>';
		echo'<td>Description</td>';
		echo'<td>PM</td>';
		echo'<td>Degat</td>';
		echo'</tr>';
		$sort1 = sort::mustFind($this->getIdSort1());
		$sort1->displayRow();

		$sort2 = sort::mustFind($this->getIdSort2());
		$sort2->displayRow();

		$sort3 = sort::mustFind($this->getIdSort3());
		$sort3->displayRow();

		$sort4 = sort::mustFind($this->getIdSort4());
		$sort4->displayRow();

		$sort5 = sort::mustFind($this->getIdSort5());
		$sort5->displayRow();



		echo '</table>';
		echo'</center>';
	}

	/******************************
	IMSORTANT : 	toute classe dérivée non abstraite doit avoir le code pour

	******************************/
	public static function champID() {return 'Id';}
	public static function getSELECT() {return 'SELECT Id,IdArmeCac,IdArmeDist,IdCasque,IdArmure,IdBouclier,IdSort1,IdSort2,IdSort3,IdSort4,IdSort5 FROM inventaire';  }

	public static function SQLInsert(array $valeurs){
		$req = 'INSERT INTO inventaire (IdArmeCac,IdArmeDist,IdCasque,IdArmure,IdBouclier,IdSort1,IdSort2,IdSort3,IdSort4,IdSort5) VALUES(?,?,?,?,?,?,?,?,?,?)';
		return SI::getSI()->SGBDexecuteQuery($req,$valeurs);
	}

	public static function lastId(){
		$req = 'SELECT Id from inventaire order by Id desc limit 1;';
		return SI::getSI()->SGBDgetuneLigne($req);
	}

	public static function SQLUpdate(array $valeurs){
		$req = 'UPDATE inventaire SET Id=?,IdArmeCac=?,IdArmeDist=?,IdCasque=?,IdArmure=?,IdBouclier=?,IdSort1=?,IdSort2=?,IdSort3=?,IdSort4=?,IdSort5=? WHERE Id=?';
		return SI::getSI()->SGBDexecuteQuery($req,$valeurs);
	}
	public static function addSort1(array $valeurs){
		var_dump($valeurs);
		$req = 'UPDATE inventaire SET IdSort1=? WHERE Id=?';
		var_dump($req);
		return SI::getSI()->SGBDexecuteQuery($req,$valeurs);
	}
	public static function addSort2(array $valeurs){
		$req = 'UPDATE inventaire SET IdSort2=? WHERE Id=?';
		return SI::getSI()->SGBDexecuteQuery($req,$valeurs);
	}
	public static function addSort3(array $valeurs){
		$req = 'UPDATE inventaire SET IdSort3=? WHERE Id=?';
		return SI::getSI()->SGBDexecuteQuery($req,$valeurs);
	}
	public static function addSort4(array $valeurs){
		$req = 'UPDATE inventaire SET IdSort4=? WHERE Id=?';
		return SI::getSI()->SGBDexecuteQuery($req,$valeurs);
	}
	public static function addSort5(array $valeurs){
		$req = 'UPDATE inventaire SET IdSort5=? WHERE Id=?';
		return SI::getSI()->SGBDexecuteQuery($req,$valeurs);
	}
	public static function addCac(array $valeurs){
		$req = 'UPDATE inventaire SET IdArmeCac=? WHERE Id=?';
		return SI::getSI()->SGBDexecuteQuery($req,$valeurs);
	}
	public static function addDist(array $valeurs){
		$req = 'UPDATE inventaire SET IdArmeDist=? WHERE Id=?';
		return SI::getSI()->SGBDexecuteQuery($req,$valeurs);
	}
	public static function addCasque(array $valeurs){
		$req = 'UPDATE inventaire SET IdCasque=? WHERE Id=?';
		return SI::getSI()->SGBDexecuteQuery($req,$valeurs);
	}
	public static function addArmure(array $valeurs){
		$req = 'UPDATE inventaire SET IdArmure=? WHERE Id=?';
		return SI::getSI()->SGBDexecuteQuery($req,$valeurs);
	}
	public static function addBouclier(array $valeurs){
		$req = 'UPDATE inventaire SET IdBouclier=? WHERE Id=?';
		return SI::getSI()->SGBDexecuteQuery($req,$valeurs);
	}

}

class Inventaires extends Pluriel{

	//constructeur
	public function __construct(){
		parent::__construct();
	}

	public function remplir($condition=null, $ordre=null) {
		$req = Inventaire::getSELECT();
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
			$this->doAddObject(Inventaire::ajouterObjet($uneLigne));
		}
	}

}
?>
