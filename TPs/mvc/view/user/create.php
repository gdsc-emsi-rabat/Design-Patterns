<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
} 
?>
<!doctype html>
<html>
	<head>
		<title>User</title>
	</head>
	<body>
		<h3>Create/update user</h3>
		<form action="/mvc/controller/UserController.php?action=save" method="post" id="user_form" name="user_form">
			<?php
				require_once(__DIR__.'/../../controller/UserController.php');
				require_once(__DIR__.'/../../model/util/Constants.php');

				$login = ""; $password = ""; $name = "";
				if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
					$user = UserController::execute(Constants::ACTION_GET);
					$login = $user->getLogin();
					$password = $user->getPassword();
					$name = $user->getName();
				}
			?>
			Login: <input type="text" id="login" name="login" value="<?php echo $login; ?>" /><br/>
			Password: <input type="password" id="password" name="password" value="<?php echo $password; ?>" /><br/>
			Name: <input type="text" id="name" name="name" value="<?php echo $name; ?>" /><br/>
			<input type="submit" id="save_button" name="save_button" value="Save" />
			<input type="reset" id="reset_button" name="reset_button" value="Clear" />
		</form>
		<a href="/mvc/index.php" id="index_link">Return to menu</a>
	</body>
</html>