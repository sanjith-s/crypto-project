<?php
    require ("database.php");
    $name = $_REQUEST["name"];
    $age = $_REQUEST["age"];
	$mobile = $_REQUEST["mobile"];
	$address = $_REQUEST["address"];
    $email = $_REQUEST["email"];
    echo $email;
    $dataBase = dbConnection();
	$sql = "UPDATE user SET username='$name', age='$age', contact='$mobile', address='$address' WHERE email=$email";
    $result = $dataBase->exec("UPDATE user SET username='$name', age='$age', contact='$mobile', address='$address' WHERE email='$email'");
    if ($result > 0) {
        $resultObject = array("accessClear" => 1);
    } else {
        $resultObject = array("accessClear" => 0);
    }

    echo json_encode($resultObject);
?>