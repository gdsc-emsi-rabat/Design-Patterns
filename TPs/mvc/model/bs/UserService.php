<?php
require_once(__DIR__.'/../bo/User.php');
require_once(__DIR__.'/../dao/UserDAO.php');

class UserService{
    private $users;

    function __construct(){
		$this->users = UserDAO::read();
	}
	
    function saveOrUpdate(User $user){
		if(empty($user->getId())){
			$insertedId = UserDAO::create($user);
			$user->setId($insertedId);
			$this->users[] = $user;
		}else{
			UserDAO::update($user);
			$index = array_search($user, $this->users);
			if(isset($index)){
				$this->users[$index] = $user;
			}
		}
    }
	
	function getAll(){
		return $this->users;
    }
	
	function remove(User $user){
		UserDAO::remove($user->getId());
		$index = array_search($user, $this->users);
		if(isset($index)){
			unset($this->users[$index]);
			$this->users = array_values($this->users);
		}
    }
	
	function get($id){
		$user = UserDAO::findById($id);
		return $user;
    }
	
	function getByLogin($login){
		$user = UserDAO::findByLogin($login);
		return $user;
    }
}
?>