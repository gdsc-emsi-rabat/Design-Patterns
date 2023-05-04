<?php
require_once('Person.php');
require_once('PersonDAO.php');

echo "<h3>Test Person</h3>";
//Construction objet person
$person = new Person();
$person->setFirstName("foo");
$person->setLastName("baz");
$person->setAge(24);

//Creation sur la BDD + recuperation de l'ID
$id = PersonDAO::create($person);

//Lire tous les données
$persons = PersonDAO::read();
var_dump($persons);echo "<hr/>";

//Mise a jour
$person->setLastName("someone");
PersonDAO::update($person);
var_dump($persons);echo "<hr/>";

//Retrouver un seul person par ID
$person = PersonDAO::findById($id);
var_dump($person);echo "<hr/>";

//Suppression
//PersonDAO::delete($id);
?>