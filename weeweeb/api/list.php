<?php
header("content-type: application/json");
use Simplon\Mysql\Mysql;
use Simplon\Mysql\PDOConnector;
require_once("vendor/autoload.php");

$pdo = new PDOConnector(
	'localhost', // server
	'root',      // user
	'',      // password
	'db_anime'   // database
);

$pdoConn = $pdo->connect('utf8', []); 
$dbConn = new Mysql($pdoConn);

$result = $dbConn->fetchRowMany("SELECT * FROM tb_episode");

echo json_encode($result,JSON_PRETTY_PRINT);
?>