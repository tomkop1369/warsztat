<?php
require_once('zmienne.php');
$mysqli = new mysqli($host, $username, $password, $database);

$query =" INSERT INTO Users (Imie, Nazwisko, Login, Hasło, Nazwa_firmy, NIP, Rodzaj_uzytkownika, E_mail, Fax) VALUES ('Jan', 'Kowalski', 'Janko', 'Janko123', 'Janpol', '213242413', 'Właściciel', 'Jan.kow@wp.pl', 'janfax123')";

$result = $mysqli->query($query);
if($result){ 
echo  'utworzono bazę danych';
        } 
else {
 echo  '    nie utworzono bazy danych';
}
$mysqli->close();
?> 
