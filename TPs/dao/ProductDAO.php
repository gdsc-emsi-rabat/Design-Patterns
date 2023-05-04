<?php
require_once('DBConnection.php');
require_once('Product.php');

class ProductDAO {
	public static function create(Product $product) {
		$query = DBConnection::getInstance()->prepare(
			"INSERT INTO Product(label, price) VALUES(:label, :price)");
		$query->execute(array(
			'label' => $product->getLabel(),
			'price' => $product->getPrice()
		));
		return DBConnection::getInstance()->lastInsertId();
	}
	
	public static function read() {
		$query = DBConnection::getInstance()->prepare("SELECT * FROM Product");
		$query->setFetchMode(PDO::FETCH_CLASS, "Product");
		$query->execute();
		$products = $query->fetchAll();
		return $products;
	}
	
	public static function update(Product $product) {
		$query = DBConnection::getInstance()->prepare(
			"UPDATE Product SET label = :label, price = :price WHERE id = :id");
		$query->execute(array(
			'id' => $product->getId(),
			'label' => $product->getLabel(),
			'price' => $product->getPrice()
		));
	}
	
	public static function delete($id) {
		$query = DBConnection::getInstance()->prepare("DELETE FROM Product WHERE id = :id");
		$query->execute(array('id' => $id));
	}
	
	public static function findById($id) {
		$query = DBConnection::getInstance()->prepare("SELECT * FROM Product WHERE id = :id");
		$query->setFetchMode(PDO::FETCH_CLASS, "Product"); 
		$query->execute(array('id' => $id));
		$product = $query->fetch();
		return $product;
	}
}
?>