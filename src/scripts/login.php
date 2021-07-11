<?php
require("database.php");
$email = $_REQUEST["email"];
$pass = $_REQUEST["pass"];

$dataBase = dbConnection();
$res = $dataBase->query("select username from user where email = '$email' and pass = '$pass' ");
$res->setFetchMode(PDO::FETCH_ASSOC);
$rows = $res->fetchAll(); 
$count = count($rows);
if ($count> 0) {
    $resultObject = array("accessClear" => 1);
} else {
    $resultObject = array("accessClear" => 0);
}

echo json_encode($resultObject);
?>