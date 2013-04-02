<?php
include 'config.php';
include 'include/header.html';

try {
	$pdo = new PDO($dsn, $user, $password, 
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION));

	$kategorie = $pdo->query('SELECT * FROM kategorie');
	if($kategorie) {
		foreach($kategorie as $kategoria) {
			echo $kategoria['nazwa'] . '<br />';
		}
	}
	$kategorie->closeCursor();
	
} catch (PDOException $e) {
	echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
}

include 'include/footer.html';
?>