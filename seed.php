<?php
require_once('zmienne.php');
$mysqli = new mysqli($host, $username, $password, $database);

$query =" INSERT INTO Users (Id, Imię, Nazwisko, Login, Hasło, Nazwa_firmy, NIP, Rodzaj_użytkownika, E_mail, Fax) values('1', 'Jan', 'Kowalski', 'Jan.kow', 'Jankow', 'Janpol', '231424131', 'Właściciel', 'Jan.kow@wp.pl' '2132132131')";
$result = $mysqli->query($query);
if($result){ 
echo  'utworzono bazę danych';
        } 
else {
 echo  '    nie utworzono bazy danych';
}

?> 
