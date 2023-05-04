<?php
require_once('DBConnection.php');
require_once('Person.php');

class PersonDAO {

	/* 
	Les méthodes de la classe sont static puisque la classe n'a pas un état 
	(propriétés) à sauvegarder, donc autant les mettre comme static 
	pour pouvoir les appeler directement sans instancier la classe

	La classe DAO est une interface d'accès à la BDD, qui se base sur la classe PDO de PHP
	*/

	//Méthode create qui permet d'ajouter une personne à la BDD
	public static function create(Person $person) {
		//On fournit la requete à executer coté BDD, une requete qui est paramétré
		//On fournit pas d'ID puisque c'est la BDD qui s'en occupe d'en fournir avec l'option AUTO_INCREMENT
		$query = DBConnection::getInstance()->prepare(
			"INSERT INTO Person(first_name, last_name, age) VALUES(:first_name, :last_name, :age)");
			
		//Execution de la requete en fournissant les paramètres nécessaires
		//qu'on récupère depuis l'objet Person passé en arguement de la méthode
		$query->execute(array(
			'first_name' => $person->getFirstName(),
			'last_name' => $person->getLastName(),
			'age' => $person->getAge()
		));
		
		//La méthode retour l'ID attribué par MySQL à notre enregistrement pour utilisation ultérieure
		return DBConnection::getInstance()->lastInsertId();
	}
	
	//Méthode read pour la lecture de tous les enregistrement de la table Person de la BDD
	public static function read() {
		$query = DBConnection::getInstance()->prepare("SELECT * FROM Person");
		//On définit le FetchMode à CLASS ce qui permet de mapper entre les colonnes de la table 
		//Person et les propriétés de la classe Person sans avoir à les setter un par un
		$query->setFetchMode(PDO::FETCH_CLASS, "Person");
		$query->execute();
		//On recupère tous les enregistrements, sans avoir à boucler dessus
		$persons = $query->fetchAll();
		//retourne un array d'objets Person
		return $persons;
	}
	
	//Méthode update permet de mettre à jour un enregistrement déja existant
	//meme principe que la méthode read
	public static function update(Person $person) {
		$query = DBConnection::getInstance()->prepare(
			"UPDATE Person SET first_name = :first_name, last_name = :last_name, age = :age WHERE id = :id");
		$query->execute(array(
			'id' => $person->getId(),
			'first_name' => $person->getFirstName(),
			'last_name' => $person->getLastName(),
			'age' => $person->getAge()
		));
	}
	
	//Delete permet de supprimer un enregistrement de la table en forunissant son ID cette fois ci
	public static function delete($id) {
		$query = DBConnection::getInstance()->prepare("DELETE FROM Person WHERE id = :id");
		$query->execute(array('id' => $id));
	}
	
	//FindById permet de lire un seul enregistrement en fournissant son ID
	public static function findById($id) {
		$query = DBConnection::getInstance()->prepare("SELECT * FROM Person WHERE id = :id");
		//Mapping table/classe
		$query->setFetchMode(PDO::FETCH_CLASS, "Person"); 
		$query->execute(array('id' => $id));
		//Fetch retourne un seul enregistrement, contrairement à fetchAll
		$person = $query->fetch();
		return $person;
	}
}
?>