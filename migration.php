<?php
require_once('zmienne.php');

$mysqli = new mysqli($host, $username, $password, $database);
$table =" CREATE TABLE User ( Id int(6) not null auto_increment, Imie varchar(45) not null, Nazwisko varchar(45) not null, Login varchar(45) not null, Hasło varchar(45) not null, Nazwa_firmy varchar(45)not null, NIP int(13) not null, Rodzaj_uzytkownika enum('Właściciel', 'Pracownik', 'Użytkownik') not null, E_mail varchar(45) not null, Fax varchar(45) not null, PRIMARY KEY (ID), UNIQUE id (ID))";

$result = $mysqli->query($table);
if($result){ 
echo  'utworzono bazę danych';
	} 
else {
 echo  '    nie utworzono bazy danych';
}

?>

