<?php
require("database.php");
$emailID = $_REQUEST["email"];
$noOfCoins = $_REQUEST["coins"];
$moneyDebited = $_REQUEST["money"];

$dataBase = dbConnection();

$res = $dataBase->query("select balance,coinCount from user where email = '$emailID'");
$res->setFetchMode(PDO::FETCH_ASSOC);
$rows = $res->fetchAll(); 

$remainingBalance = $balance - $moneyDebited;
$finCoinCount = 
$res = $dataBase->exec("update into user (coinCount,balance) values(') where email ='$emailID' ");
?>