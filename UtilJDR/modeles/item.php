<?php
//---------- Classe Suffrage


class Item extends Element{

	//Singleton de mémorisation des instances
	private static $o_INSTANCES;
	public static function ajouterObjet($ligne){
		//créer (instancier) la liste si nécessaire
		if (static::$o_INSTANCES ==null){static::$o_INSTANCES = new Items();}
		//voir si l'objet existe avec la clef
		$tmp = static::$o_INSTANCES->getObject($ligne[static::champID()]);
		if($tmp!=null){return $tmp;}
		//n'existe pas : donc INSTANCIER Suffrage et mémoriser
		$tmp = new Item($ligne);
		static::$o_INSTANCES->doAddObject($tmp);
		return $tmp;
	}

	//publication liste instances
	public static function getInstances(){
		if (static::$o_INSTANCES ==null){static::$o_INSTANCES = new Items();}
		return static::$o_INSTANCES;
	}

	// doit impérativement trouver la Suffrage ayant pour id le patamètre
	public static function mustFind($id){
		if (static::$o_INSTANCES == null){static::$o_INSTANCES = new Items();}
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

	public function getIdUser(){
		return $this->getField('IdUser');
	}

	public function getNom(){
		return $this->getField('Nom');
	}

	public function getQuantité(){
		return $this->getField('Quantite');
	}



	/******************************
	IMSORTANT : 	toute classe dérivée non abstraite doit avoir le code pour

	******************************/
	public static function champID() {return 'Id';}
	public static function getSELECT() {return 'SELECT Id,Nom,Quantite,IdUser FROM item';  }

	public static function SQLInsert(array $valeurs){
		$req = 'INSERT INTO item (Nom,Quantite) VALUES (?,?)';
		return SI::getSI()->SGBDexecuteQuery($req,$valeurs);
	}

	public function displayRow(){
		echo '<tr>';
		echo '<td>'.$this->getNom().'</td>';
		echo '<td>'.$this->getQuantité().'</td>';
		echo '</tr>';

	}
	public function option(){
		$tmp = $this->getId();
		echo '<option value ="'.$tmp.'">';
		echo ''.$this->getNom()."' '".$this->getQuantité().'';
		echo '</option>';

	}

}

class Items extends Pluriel{

	//constructeur
	public function __construct(){
		parent::__construct();
	}

	public function remplir($condition=null, $ordre=null) {
		$req = Item::getSELECT();
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
			$this->doAddObject(Item::ajouterObjet($uneLigne));
		}
	}


		public function displayTable(){
			echo'<center>';
			echo'<table class="table table-condensed">';
			echo'<tr>';
			echo'<td>Nom</td>';
			echo'<td>Quantite</td>';

			echo'</tr>';
			foreach ($this->getArray() as $unItem) {
				$unItem->displayRow();
			}
			echo '</table>';
			echo'</center>';
		}

		public function SELECT(){
			echo'<select name="idSelected">';
			foreach ($this->getArray() as $unItem) {
				$unItem->option();
			}
			echo '</select>';
		}
}
?>
