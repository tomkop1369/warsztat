<?php
require_once('zmienne.php');

$mysqli = new mysqli($host, $username, $password, $database);
//$query = 'SELECT * FROM Użytkownik';

//	if (isset($query)){
//		echo $query;
//		}
//	else {

$table = " CREATE TABLE Użytkownik (
ID INT(6) NOT NULL auto_increment,
Imię VARCHAR(45) NOT NULL,
Nazwisko VARCHAR(45) NOT NULL,
Login VARCHAR(45) NOT NULL,
Hasło VARCHAR(45) NOT NULL,
Nazwa_firmy VARCHAR(45) NOT NULL,
NIP INT(45) NOT NULL,
Rodzaj_użytkownika ENUM('Właściciel', 'Pracownik', 'Użytkownik') NOT NULL,
E_mail VARCHAR(45) NOT NULL,
Fax VARCHAR(45)NOT NULL,
PRIMARY KEY (ID), UNIQUE id (ID), KEY id_2 (ID))";

$result = $mysqli->query($table);
//echo $query;
//}
?>

