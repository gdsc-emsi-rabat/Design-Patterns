<!doctype html>
<html>
	<head>
		<title>User login</title>
	</head>
	<body>
		<h3>Login</h3>
		<form action="/forum/controller/UserController.php?action=login" method="post" id="login_form" name="login_form">
			Login: <input type="text" id="login" name="login" /><br/>
			Password: <input type="password" id="password" name="password" /><br/>
			<input type="submit" id="login_button" name="login_button" value="Login" />
		</form>
	</body>
</html>