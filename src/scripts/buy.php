<?php
require("database.php");
$emailID = $_REQUEST["email"];
$noOfCoins = $_REQUEST["coins"];
$moneyDebited = $_REQUEST["money"];

$dataBase = dbConnection();

$res = $dataBase->query("select balance,coinCount from user where email = '$emailID'");
$res->setFetchMode(PDO::FETCH_ASSOC);
$rows = $res->fetchAll(); 
$balance = $rows[0]->balance;
$remainingBalance = $balance - $moneyDebited;
$currCoinCount = $rows[0]->coinCount;
$finCoinCount = $currCoinCount + $noOfCoins;
$res = $dataBase->exec("update into user (coinCount,balance) values('$finCoinCount','$remainingBalance') where email ='$emailID' ");

?>