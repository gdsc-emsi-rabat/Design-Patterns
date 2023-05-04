<?php
require_once('Observable.php');

interface Observer {
	function update(Observable $observable);
}
?>