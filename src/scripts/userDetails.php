<?php
require("database.php");
$emailID = $_REQUEST["email"];
$dataBase = dbConnection();
$res = $dataBase->query("select * from user where email = '$emailID'");
$res->setFetchMode(PDO::FETCH_ASSOC);
$rows = $res->fetchAll(); 
$results = json_encode($rows);
echo $results;
?>