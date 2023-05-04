<!doctype html>
<html>
	<head>
		<title>Users</title>
	</head>
	<body>
		<h3>Users</h3>
			<?php
				require_once(__DIR__.'/../../controller/UserController.php');
				require_once(__DIR__.'/../../model/util/Constants.php');

				$users = UserController::execute(Constants::ACTION_GET_ALL);
				foreach($users as $user){
					echo "Id: " . $user->getId() . "<br/>";
					echo "Login: " . $user->getLogin() . "<br/>";
					echo "Password: " . $user->getPassword() . "<br/>";
					echo "Name: " . $user->getName() . "<br/>";
					echo "<hr/>";
				}
			?>
	</body>
</html>