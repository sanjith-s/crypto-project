<?php
require("database.php");
$emailID = $_REQUEST["email"];
$noOfCoins = $_REQUEST["coins"];
$pass = $_REQUEST["pass"];
$usrEmail = $_REQUEST["userEmail"];

$dataBase = dbConnection();

$res = $dataBase->query("select coinCount from user where email = '$emailID'");
$resultCoin = $res->fetch(PDO::FETCH_ASSOC);

$res = $dataBase->query("select coinCount from user where email = '$usrEmail' and pass = '$pass'");
$usrVerification = $res->fetch(PDO::FETCH_ASSOC);

$remCoin = $usrVerification["coinCount"] - $noOfCoins;
$finCoin = $resultCoin["coinCount"] + $noOfCoins;

$res = $dataBase->exec("update user set coinCount = $remCoin where email = '$usrEmail'");
$res = $dataBase->exec("update user set coinCount = $finCoin where email = '$emailID'");
?>