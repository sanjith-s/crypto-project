<?php
    require ("database.php");
    $user = $_REQUEST["username"];
    $pass = $_REQUEST["pass"];
    $email = $_REQUEST["email"];
    $dataBase = dbConnection();
    $res = $dataBase->exec("insert into user (username,pass,email) values('$user','$pass','$email')");

    $resultObject = array("accessClear" => $res);
    echo json_encode($resultObject);
?>