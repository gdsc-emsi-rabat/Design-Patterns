<?php
require_once('Observable.php');
require_once('Observer.php');

class Login implements Observable {
	private $observers = array();
	private $status;
	
	const LOGIN_ACCESS = 1;
	const LOGIN_WRONG_PASS = 0;
	
	function setStatus($status){
		$this->status = $status;
	}
	function getStatus(){
		return $this->status;
	}
	
	function attach(Observer $observer) {
		$this->observers[] = $observer;
	}
	
	function detach(Observer $observer) {
		$this->observers = array_filter($this->observers, function($a) use ($observer) { 
			return (! ($a === $observer ));
		});
	}
	
	function notify() {
		foreach ( $this->observers as $obs ) {
			$obs->update( $this );
		}
	}
	
	function handleLogin($user, $pass, $ip) {
		if($user == $pass){
			$this->status = self::LOGIN_ACCESS;
		}else{
			$this->status = self::LOGIN_WRONG_PASS;
		}
		$this->notify();//Notify observers of state ($status) update
	}
}
?>