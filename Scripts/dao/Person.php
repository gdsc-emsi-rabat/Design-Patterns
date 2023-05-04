<?php
class Person{
    private $id;
	private $first_name;
	private $last_name;
    private $age;
	
	/* Getters and setters */
    function getId(){
		return $this->id;
    }
    function setId($id){
		$this->id = $id;
    }

    function getFirstName(){
		return $this->first_name;
    }
    function setFirstName($first_name){
		$this->first_name = $first_name;
    }
	
	function getLastName(){
		return $this->last_name;
    }
    function setLastName($last_name){
		$this->last_name = $last_name;
    }
	
	function getAge(){
		return $this->age;
    }
    function setAge($age){
		$this->age = $age;
    }
}
?>