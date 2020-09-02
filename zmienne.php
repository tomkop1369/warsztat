<?php
$host = 'localhost';
$port = '22005';
$username = 'Admin';
$password = 'xsw2#EDC';
$database = 'Warsztat';

try{
	$pdo = new PDO('mysql:host=' . $host . ';dbname=' . $database . ';port=' . $port . ";charset=utf8", $username, $password );
	echo('udało sie połaczyć');
}
catch(PDOException $e){
	echo('nie udało się połaczyć');
	die();
}
?>
