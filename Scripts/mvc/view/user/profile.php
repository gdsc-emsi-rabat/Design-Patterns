<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
} 
?>
<!doctype html>
<html>
	<head>
		<title>User profile</title>
	</head>
	<body>
		<h3>User profile</h3>
			<?php
				require_once(__DIR__.'/../../controller/UserController.php');
				require_once(__DIR__.'/../../model/util/Constants.php');

				if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
					$user = UserController::execute(Constants::ACTION_GET);
					echo "Id: " . $user->getId() . "<br/>";
					echo "Login: " . $user->getLogin() . "<br/>";
					echo "Password: " . $user->getPassword() . "<br/>";
					echo "Name: " . $user->getName() . "<br/>";
					echo "Message count: " . $user->getMsgCount() . "<br/>";
			?>
					<a href="/mvc/view/user/create.php?user_id=<?php $user->getId(); ?>" id="update_link">Update user</a> | 
					<a href="/mvc/controller/UserController.php?action=logout" id="logout_link">Logout</a>
			<?php
				}else{
					echo "User not logged in";
				}
			?>
	</body>
</html>