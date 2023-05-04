<!doctype html>
<html>
	<head>
		<title>Message</title>
	</head>
	<body>
		<?php
			if(isset($_GET['msg']) && !empty($_GET['msg'])){
				if($_GET['msg'] != "error"){
					echo $_GET['msg'] . "<br/>";
				}else{
					echo "Error!<br/>";
				}
			}
		?>
		<a href="/forum/index.php" id="menu_link">Return to menu</a>
	</body>
</html>