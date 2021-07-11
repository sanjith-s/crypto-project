<?php
require("database.php");
$emailID = $_REQUEST["email"];
$noOfCoins = $_REQUEST["coins"];
$moneyCredited = $_REQUEST["money"];

$dataBase = dbConnection();

$res = $dataBase->query("select balance,coinCount from user where email = '$emailID'");
$result = $res->fetch(PDO::FETCH_ASSOC);
$balance = $result['balance'];
$remainingBalance = $balance + $moneyCredited;
$currCoinCount = $result['coinCount'];
$finCoinCount = $currCoinCount - $noOfCoins;
$insRes = $dataBase->exec("update user set coinCount = '$finCoinCount' , balance = '$remainingBalance' where email ='$emailID' ");
if ($insRes > 0) {
    $resultObject = array("accessClear" => 1);
} else {
    $resultObject = array("accessClear" => 0);
}

echo json_encode($resultObject);
