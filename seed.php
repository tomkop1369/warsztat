<?php
require_once('zmienne.php');
$mysqli = new mysqli($host, $username, $password, $datebase);

$query = 'INSERT INTO Użytkownik (ID, Imię, Nazwisko, Login, Hasło, Nazwa_firmy, NIP, Rodzaj_użytkownika,
E_mail, Fax) values("'1', 'Jan', 'Kowalski', 'Jan.kow', 'Jankow', 'Janpol', '231424131', 'Właściciel', 'Jan.kow@wp.pl' '2132132131'");
$results = $mysqli->query($query);
?> 
