<?php
    require ("database.php");
    $user = $_REQUEST["username"];
    $pass = $_REQUEST["pass"];
    $email = $_REQUEST["email"];
    $name = $_REQUEST["name"];
    $age = $_REQUEST["age"];
	$mobile = $_REQUEST["mobile"];
    $dataBase = dbConnection();
    $res = $dataBase->exec("insert into user (username,pass,email,name,age,contact) values('$user','$pass','$email','$name','$age', '$mobile')");

    $resultObject = array("accessClear" => $res);
    echo json_encode($resultObject);
?>