<?php
class Constants{
	const ACTION_SAVE = 'save';
	const ACTION_GET = 'get';
	const ACTION_LOGIN = 'login';
	const ACTION_LOGOUT = 'logout';
	
	public static function showMessage($msg){
		header("Location: /forum/message.php?msg=" . $msg);
	}
}
?>