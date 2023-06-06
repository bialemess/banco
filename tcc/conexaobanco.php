<?php
try{
	$db = 'mysql:host=143.106.241.3;dbname=cl201287;charset=utf8';
	$user = 'cl201287';
	$passwd = 'cl*17082005';
	$pdo = new PDO($db, $user,$passwd);

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
	$output = 'Impossivel conectar ao banco'.$e.'<br>';
	echo $output;
}
?>