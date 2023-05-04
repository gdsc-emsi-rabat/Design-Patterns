<?php
class Product{
    private $id;
	private $label;
	private $price;

    function getId(){
		return $this->id;
    }
    function setId($id){
		$this->id = $id;
    }

    function getLabel(){
		return $this->label;
    }
    function setLabel($label){
		$this->label = $label;
    }
	
	function getPrice(){
		return $this->price;
    }
    function setPrice($price){
		$this->price = $price;
    }
}
?>