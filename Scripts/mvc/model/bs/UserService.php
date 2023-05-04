<?php
require_once(__DIR__.'/../bo/User.php');
require_once(__DIR__.'/../dao/UserDAO.php');

class UserService{
    function saveOrUpdate(User $user){
		if(empty($user->getId())){
			UserDAO::create($user);
		}else{
			UserDAO::update($user);
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