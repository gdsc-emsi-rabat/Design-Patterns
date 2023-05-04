<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once(__DIR__.'/../model/bo/User.php');
require_once(__DIR__.'/../model/bs/UserService.php');
require_once(__DIR__.'/../model/util/Constants.php');

class UserController {
	public static function execute($action = null){
		if(isset($action) && !empty($action)){
			$user = self::buildUser();
			$userService = new UserService();
			
			if($action == Constants::ACTION_SAVE){
				$userService->saveOrUpdate($user);
				Constants::showMessage("User saved!");
			}else if($action == Constants::ACTION_GET){
				$found_user = $userService->get($user->getId());
				return $found_user;
			}else if($action == Constants::ACTION_LOGIN){
				$found_user = $userService->getByLogin($user->getLogin());
				if(isset($found_user) && ($found_user->getPassword() == $user->getPassword())){
					$_SESSION['user_id'] = $found_user->getId();
					Constants::showMessage("User logged in!");
				}else{
					Constants::showMessage("User does not exist or wrong password!");
				}
			}else if($action == Constants::ACTION_LOGOUT){
				session_destroy();
				Constants::showMessage("User logged out!");
			}
		}
	}
	
	private static function buildUser(){
		$user = new User();
		if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
			$user->setId($_SESSION['user_id']);
		}
		if (isset($_POST['login']) && !empty($_POST['login'])){
			$user->setLogin($_POST['login']);
		}
		if (isset($_POST['password']) && !empty($_POST['password'])){
			$user->setPassword($_POST['password']);
		}
		if (isset($_POST['name']) && !empty($_POST['name'])){
			$user->setName($_POST['name']);
		}
		
		return $user;
	}
}
if (isset($_GET['action']) && !empty($_GET['action'])){
	UserController::execute($_GET['action']);
}
?>