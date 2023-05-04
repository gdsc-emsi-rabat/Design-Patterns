<?php
require_once(__DIR__.'/../util/DBConnection.php');
require_once(__DIR__.'/../bo/User.php');

class UserDAO {
	public static function create(User $user) {
		$query = DBConnection::getInstance()->prepare(
			"INSERT INTO User(login, password, name, msg_count) VALUES(:login, :password, :name)");
		$query->execute(array(
			'login' => $user->getLogin(),
			'password' => $user->getPassword(),
			'name' => $user->getName()
		));
	}
	
	public static function update(User $user) {
		$query = DBConnection::getInstance()->prepare(
			"UPDATE User SET login = :login, password = :password, name = :name WHERE id = :id");
		$query->execute(array(
			'id' => $user->getId(),
			'login' => $user->getLogin(),
			'password' => $user->getPassword(),
			'name' => $user->getName()
		));
	}
	
	public static function findById($id) {
		$query = DBConnection::getInstance()->prepare("SELECT * FROM User WHERE id = :id");
		$query->setFetchMode(PDO::FETCH_CLASS, "User"); 
		$query->execute(array('id' => $id));
		$user = $query->fetch();
		return $user;
	}
	
	public static function findByLogin($login) {
		$query = DBConnection::getInstance()->prepare("SELECT * FROM User WHERE login = :login");
		$query->setFetchMode(PDO::FETCH_CLASS, "User"); 
		$query->execute(array('login' => $login));
		$user = $query->fetch();
		return $user;
	}
}
?>