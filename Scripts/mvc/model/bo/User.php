<?php
class User{
    private $id;
	private $login;
	private $password;
    private $name;
	
    function getId(){
		return $this->id;
    }
    function setId($id){
		$this->id = $id;
    }
	
	function getLogin(){
		return $this->login;
    }
    function setLogin($login){
		$this->login = $login;
    }
	
	function getPassword(){
		return $this->password;
    }
    function setPassword($password){
		$this->password = $password;
    }

    function getName(){
		return $this->name;
    }
    function setName($name){
		$this->name = $name;
    }
}
?>