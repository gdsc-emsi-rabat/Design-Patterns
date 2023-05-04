<?php
class Constants{
	const ACTION_SAVE = 'save';
	const ACTION_DELETE = 'delete';
	const ACTION_GET = 'get';
	const ACTION_GET_ALL = 'getAll';
	const ACTION_LOGIN = 'login';
	const ACTION_LOGOUT = 'logout';
	
	public static function showMessage($msg){
		header("Location: /mvc/message.php?msg=" . $msg);
	}
}
?>