<?php

$conn = "";

try {
	$servername = "remotemysql.com";
	$dbname = "tn54CFl4QH";
	$username = "tn54CFl4QH";
	$password = "GXKkKGu8lw";

	$conn = new PDO(
		"mysql:host=$servername; dbname=tn54CFl4QH",
		$username, $password
	);
	
$conn->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>
